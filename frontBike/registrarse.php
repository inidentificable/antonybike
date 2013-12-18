<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO usuario (NOMBREUSUARIO, CONTRASENAUSUARIO, NOMBRESITIOWEB, PRIMERNOMBREUSUARIO, SEGUNDONOMBREUSUARIO, PRIMERAPELLIDOUSUARIO, SEGUNDOAPELLIDOUSUARIO, RUTUSUARIO, DIRECCIONUSUARIO, COMUNAUSUARIO, CIUDADUSUARIO, MOVILUSUARIO, EMAILUSUARIO) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['NOMBREUSUARIO'], "text"),
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
                       GetSQLValueString($_POST['EMAILUSUARIO'], "text"));

  mysql_select_db($database_antonybike, $antonybike);
  $Result1 = mysql_query($insertSQL, $antonybike) or die(mysql_error());

  $insertGoTo = $_SERVER['PHP_SELF'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  echo '<meta http-equiv="refresh" content="0;url='.$_SERVER['PHP_SELF'].'" />';
}
?>
<div class="container">
<!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero-unit">
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
      <table align="center">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Usuario:</td>
          <td><input type="text" name="NOMBREUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Password:</td>
          <td><input type="text" name="CONTRASENAUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Nombre:</td>
          <td><input type="text" name="PRIMERNOMBREUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Segundo nombre:</td>
          <td><input type="text" name="SEGUNDONOMBREUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Apellido paterno:</td>
          <td><input type="text" name="PRIMERAPELLIDOUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Apellido materno:</td>
          <td><input type="text" name="SEGUNDOAPELLIDOUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">R.U.T.:</td>
          <td><input type="text" name="RUTUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Direccion:</td>
          <td><input type="text" name="DIRECCIONUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Comuna:</td>
          <td><input type="text" name="COMUNAUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Ciudad:</td>
          <td><input type="text" name="CIUDADUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Celular:</td>
          <td><input type="text" name="MOVILUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">E-mail:</td>
          <td><input type="text" name="EMAILUSUARIO" value="" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td><input class="btn btn-primary" type="submit"></tr>
        </tr>
      </table>
      <input type="hidden" name="NOMBRESITIOWEB" value="antonybike" />
      <input type="hidden" name="MM_insert" value="form1" />
    </form>
  </div>
</div>
