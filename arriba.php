<?php require_once('Connections/antonybike.php');
if(isset($_POST['logout'])&&$_POST['logout']="true")
{
	session_start();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0;url='.$_SERVER['PHP_SELF'].'" />';
}
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['nombre'])) {
  $loginUsername=$_POST['nombre'];
  $password=$_POST['pass'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = $_SERVER['PHP_SELF']."?a=".DELANTE."menuusuario.php";
  $MM_redirectLoginFailed = $_SERVER['PHP_SELF']."?a=".DELANTE."errorsesion.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_antonybike, $antonybike);
  
  $LoginRS__query=sprintf("SELECT NOMBREUSUARIO, CONTRASENAUSUARIO FROM usuario WHERE NOMBREUSUARIO=%s AND CONTRASENAUSUARIO=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $antonybike) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html>
<html lang="es_ES">
    <head>
    <meta charset="utf-8">
    <title>ProBikeSupport</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo STYLES;?>bootstrap.css" rel="stylesheet">
    <style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
</style>
    <link href="<?php echo STYLES;?>bootstrap-responsive.css" rel="stylesheet">
    <script src="<?php echo SCRIPTS;?>libreriaJavaScript.js"></script>
    </head>
    <body>
    <?php require_once(DELANTE.'barra.php'); ?>
