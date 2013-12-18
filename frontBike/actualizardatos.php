<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE usuario SET CONTRASENAUSUARIO=%s, NOMBRESITIOWEB=%s, PRIMERNOMBREUSUARIO=%s, SEGUNDONOMBREUSUARIO=%s, PRIMERAPELLIDOUSUARIO=%s, SEGUNDOAPELLIDOUSUARIO=%s, RUTUSUARIO=%s, DIRECCIONUSUARIO=%s, COMUNAUSUARIO=%s, CIUDADUSUARIO=%s, MOVILUSUARIO=%s, EMAILUSUARIO=%s WHERE NOMBREUSUARIO=%s",
                       GetSQLValueString($_POST['CONTRASENAUSUARIO'], "text"),
                       GetSQLValueString($_POST['NOMBRESITIOWEB'], "text"),
                       GetSQLValueString($_POST['PRIMERNOMBREUSUARIO'], "text"),
                       GetSQLValueString($_POST['SEGUNDONOMBREUSUARIO'], "text"),
                       GetSQLValueString($_POST['PRIMERAPELLIDOUSUARIO'], "text"),
                       GetSQLValueString($_POST['SEGUNDOAPELLIDOUSUARIO'], "text"),
                       GetSQLValueString($_POST['RUTUSUARIO'], "text"),
                       GetSQLValueString($_POST['DIRECCIONUSUARIO'], "text"),
                       GetSQLValueString($_POST['COMUNAUSUARIO'], "text"),
                       GetSQLValueString($_POST['CIUDADUSUARIO'], "text"),
                       GetSQLValueString($_POST['MOVILUSUARIO'], "text"),
                       GetSQLValueString($_POST['EMAILUSUARIO'], "text"),
                       GetSQLValueString($_POST['NOMBREUSUARIO'], "text"));

  mysql_select_db($database_antonybike, $antonybike);
  $Result1 = mysql_query($updateSQL, $antonybike) or die(mysql_error());

  $updateGoTo = $_SERVER['PHP_SELF'].DELANTE."menuusuario.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  //header(sprintf("Location: %s", $updateGoTo));
  echo '<meta http-equiv="refresh" content="0;url='.$_SERVER['PHP_SELF'].'?a='.DELANTE.'menuusuario.php" />';
}

$colname_Usuario = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Usuario = $_SESSION['MM_Username'];
}
mysql_select_db($database_antonybike, $antonybike);
$query_Usuario = sprintf("SELECT * FROM usuario WHERE NOMBREUSUARIO = %s", GetSQLValueString($colname_Usuario, "text"));
$Usuario = mysql_query($query_Usuario, $antonybike) or die(mysql_error());
$row_Usuario = mysql_fetch_assoc($Usuario);
$totalRows_Usuario = mysql_num_rows($Usuario);

mysql_free_result($Usuario);
?>

<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">CONTRASEÑA USUARIO:</td>
      <td><input type="text" name="CONTRASENAUSUARIO" value="<?php echo htmlentities($row_Usuario['CONTRASENAUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PRIMER NOMBRE:</td>
      <td><input type="text" name="PRIMERNOMBREUSUARIO" value="<?php echo htmlentities($row_Usuario['PRIMERNOMBREUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">SEGUNDO NOMBRE:</td>
      <td><input type="text" name="SEGUNDONOMBREUSUARIO" value="<?php echo htmlentities($row_Usuario['SEGUNDONOMBREUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PRIMER APELLIDO:</td>
      <td><input type="text" name="PRIMERAPELLIDOUSUARIO" value="<?php echo htmlentities($row_Usuario['PRIMERAPELLIDOUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">SEGUNDO APELLIDO:</td>
      <td><input type="text" name="SEGUNDOAPELLIDOUSUARIO" value="<?php echo htmlentities($row_Usuario['SEGUNDOAPELLIDOUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">RUT:</td>
      <td><input type="text" name="RUTUSUARIO" value="<?php echo htmlentities($row_Usuario['RUTUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">DIRECCION:</td>
      <td><input type="text" name="DIRECCIONUSUARIO" value="<?php echo htmlentities($row_Usuario['DIRECCIONUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">COMUNA:</td>
      <td><input type="text" name="COMUNAUSUARIO" value="<?php echo htmlentities($row_Usuario['COMUNAUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">CIUDAD:</td>
      <td><input type="text" name="CIUDADUSUARIO" value="<?php echo htmlentities($row_Usuario['CIUDADUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">MOVIL:</td>
      <td><input type="text" name="MOVILUSUARIO" value="<?php echo htmlentities($row_Usuario['MOVILUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">E-MAIL:</td>
      <td><input type="text" name="EMAILUSUARIO" value="<?php echo htmlentities($row_Usuario['EMAILUSUARIO'], ENT_COMPAT, ''); ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" value="Actualizar datos"></td>
    </tr>
  </table>
  <input type="hidden" name="NOMBRESITIOWEB" value="<?php echo $row_Usuario['NOMBRESITIOWEB']; ?>">
  <input type="hidden" name="NOMBREUSUARIO" value="<?php echo $row_Usuario['NOMBREUSUARIO']; ?>">
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="NOMBREUSUARIO" value="<?php echo $row_Usuario['NOMBREUSUARIO']; ?>">
</form>
<p>&nbsp;</p>
