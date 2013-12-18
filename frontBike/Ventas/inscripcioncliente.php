<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO cliente (NOMBREUSUARIO, DIRECCIONWEB, PRIMERNOMBREUSUARIO, SEGUNDONOMBREUSUARIO, PRIMERAPELLIDOUSUARIO, SEGUNDOAPELLIDOUSUARIO, RUTUSUARIO, TELEFONOUSUARIO, COMUNAUSUARIO, CIUDADUSUARIO, EMAILUSUARIO, CONVENIOCLIENTE, DESCUENTOESPECIALCLIENTE, DIRECCIONDESPACHOCLIENTE, CIUDADDESPACHOCLIENTE, PREFERENCIAVOUCHERCLIENTE) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['NOMBREUSUARIO'], "text"),
                       GetSQLValueString($_POST['DIRECCIONWEB'], "text"),
                       GetSQLValueString($_POST['PRIMERNOMBREUSUARIO'], "text"),
                       GetSQLValueString($_POST['SEGUNDONOMBREUSUARIO'], "text"),
                       GetSQLValueString($_POST['PRIMERAPELLIDOUSUARIO'], "text"),
                       GetSQLValueString($_POST['SEGUNDOAPELLIDOUSUARIO'], "text"),
                       GetSQLValueString($_POST['RUTUSUARIO'], "text"),
                       GetSQLValueString($_POST['TELEFONOUSUARIO'], "text"),
                       GetSQLValueString($_POST['COMUNAUSUARIO'], "text"),
                       GetSQLValueString($_POST['CIUDADUSUARIO'], "text"),
                       GetSQLValueString($_POST['EMAILUSUARIO'], "text"),
                       GetSQLValueString($_POST['CONVENIOCLIENTE'], "text"),
                       GetSQLValueString($_POST['DESCUENTOESPECIALCLIENTE'], "double"),
                       GetSQLValueString($_POST['DIRECCIONDESPACHOCLIENTE'], "text"),
                       GetSQLValueString($_POST['CIUDADDESPACHOCLIENTE'], "text"),
                       GetSQLValueString($_POST['PREFERENCIAVOUCHERCLIENTE'], "text"));

  mysql_select_db($database_antonybike, $antonybike);
  $Result1 = mysql_query($insertSQL, $antonybike) or die(mysql_error());

  $insertGoTo = $_SERVER['PHP_SELF']."?a=".DELANTE."menuusuario.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  //header(sprintf("Location: %s", $insertGoTo));
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

<div class="container">
  <div class="hero-unit" style="background-size:100%;">
    <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
      <table align="center">
        <tr valign="baseline">
          <td nowrap align="right">NOMBRE USUARIO:</td>
          <td><input type="hidden" name="NOMBREUSUARIO" value="<?php echo $row_Usuario['NOMBREUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['NOMBREUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">SITIO:</td>
          <td><input type="hidden" name="DIRECCIONWEB" value="<?php echo $row_Usuario['NOMBRESITIOWEB']; ?>" size="32">
            <?php echo $row_Usuario['NOMBRESITIOWEB']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">PRIMER NOMBRE:</td>
          <td><input type="hidden" name="PRIMERNOMBREUSUARIO" value="<?php echo $row_Usuario['PRIMERNOMBREUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['PRIMERNOMBREUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">SEGUNDO NOMBRE:</td>
          <td><input type="hidden" name="SEGUNDONOMBREUSUARIO" value="<?php echo $row_Usuario['SEGUNDONOMBREUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['SEGUNDONOMBREUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">PRIMER APELLIDO:</td>
          <td><input type="hidden" name="PRIMERAPELLIDOUSUARIO" value="<?php echo $row_Usuario['PRIMERAPELLIDOUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['PRIMERAPELLIDOUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">SEGUNDO APELLIDO:</td>
          <td><input type="hidden" name="SEGUNDOAPELLIDOUSUARIO" value="<?php echo $row_Usuario['SEGUNDOAPELLIDOUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['SEGUNDOAPELLIDOUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">RUT:</td>
          <td><input type="hidden" name="RUTUSUARIO" value="<?php echo $row_Usuario['RUTUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['RUTUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">TELEFONO:</td>
          <td><input type="hidden" name="TELEFONOUSUARIO" value="<?php echo $row_Usuario['MOVILUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['MOVILUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">COMUNA:</td>
          <td><input type="hidden" name="COMUNAUSUARIO" value="<?php echo $row_Usuario['COMUNAUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['COMUNAUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">CIUDAD:</td>
          <td><input type="hidden" name="CIUDADUSUARIO" value="<?php echo $row_Usuario['CIUDADUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['CIUDADUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">E-MAIL:</td>
          <td><input type="hidden" name="EMAILUSUARIO" value="<?php echo $row_Usuario['EMAILUSUARIO']; ?>" size="32">
            <?php echo $row_Usuario['EMAILUSUARIO']; ?></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">DIRECCION DE DESPACHO:</td>
          <td><input type="text" name="DIRECCIONDESPACHOCLIENTE" value="<?php echo $row_Usuario['DIRECCIONUSUARIO']; ?>" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">CIUDAD DE DESPACHO:</td>
          <td><input type="text" name="CIUDADDESPACHOCLIENTE" value="<?php echo $row_Usuario['CIUDADUSUARIO']; ?>" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">PREFERENCIA VOUCHER:</td>
          <td><input type="text" name="PREFERENCIAVOUCHERCLIENTE" value="Boleta" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">&nbsp;</td>
          <td><input class="btn input-mini" type="submit" value="Enviar formulario"></td>
        </tr>
      </table>
      <input type="hidden" name="CONVENIOCLIENTE" value="0">
      <input type="hidden" name="DESCUENTOESPECIALCLIENTE" value="0">
      <input type="hidden" name="MM_insert" value="form1">
    </form>
  </div>
</div>
