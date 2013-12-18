<?php
$colname_Vendedor = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Vendedor = $_SESSION['MM_Username'];
}
mysql_select_db($database_antonybike, $antonybike);
$query_Vendedor = sprintf("SELECT * FROM vendedor WHERE NOMBREUSUARIO = %s", GetSQLValueString($colname_Vendedor, "text"));
$Vendedor = mysql_query($query_Vendedor, $antonybike) or die(mysql_error());
$row_Vendedor = mysql_fetch_assoc($Vendedor);
$totalRows_Vendedor = mysql_num_rows($Vendedor);

$colname_Alumno = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Alumno = $_SESSION['MM_Username'];
}
mysql_select_db($database_antonybike, $antonybike);
$query_Alumno = sprintf("SELECT * FROM alumno WHERE NOMBREUSUARIO = %s", GetSQLValueString($colname_Alumno, "text"));
$Alumno = mysql_query($query_Alumno, $antonybike) or die(mysql_error());
$row_Alumno = mysql_fetch_assoc($Alumno);
$totalRows_Alumno = mysql_num_rows($Alumno);

$colname_Profesor = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Profesor = $_SESSION['MM_Username'];
}
mysql_select_db($database_antonybike, $antonybike);
$query_Profesor = sprintf("SELECT * FROM instructorencargado WHERE NOMBREUSUARIO = %s", GetSQLValueString($colname_Profesor, "text"));
$Profesor = mysql_query($query_Profesor, $antonybike) or die(mysql_error());
$row_Profesor = mysql_fetch_assoc($Profesor);
$totalRows_Profesor = mysql_num_rows($Profesor);

$colname_Cliente = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Cliente = $_SESSION['MM_Username'];
}
mysql_select_db($database_antonybike, $antonybike);
$query_Cliente = sprintf("SELECT * FROM cliente WHERE NOMBREUSUARIO = %s", GetSQLValueString($colname_Cliente, "text"));
$Cliente = mysql_query($query_Cliente, $antonybike) or die(mysql_error());
$row_Cliente = mysql_fetch_assoc($Cliente);
$totalRows_Cliente = mysql_num_rows($Cliente);

mysql_free_result($Vendedor);

mysql_free_result($Alumno);

mysql_free_result($Profesor);

mysql_free_result($Cliente);




?>

<div class="container">
  <div class="hero-unit" style="background-size:100%;">
    <h2>Hola <?php echo $_SESSION['MM_Username'] ?>,</h2>
    <h4>bienvenid@ a tu página de usuario</h4>
    
    <?php if ($totalRows_Vendedor > 0) {
		$_SESSION['Vendedor']=true; // Show if recordset not empty ?>
      <h5>Eres Vendedor y puedes ir a tu pagina de <a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>iniciovendedor.php">vendedor</a></h5>
      <?php } 
	  if ($totalRows_Alumno > 0) {
		$_SESSION['Alumno']=true; // Show if recordset not empty ?>
      <h5>Eres Alumno y puedes ir a tu pagina de <a href="<?php echo $_SERVER['PHP_SELF']."?a=".ALUMNO;?>index.php">Alumno</a></h5>
      <?php } // Show if recordset not empty 
  else
  {?>
    <h5>Aun no eres nuestro Alumno, consulta aquí los precios para nuestra <a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENTAS;?>escuela.php">academia</a></h5>
    <?php } ?>
    <?php if ($totalRows_Profesor > 0) {
		$_SESSION['Profesor']=true; ?>
      <h5>Eres Profesor y puedes ir a tu pagina de <a href="<?php echo $_SERVER['PHP_SELF']."?a=".PROFESOR;?>index.php">Clases</a></h5>
      <?php }
	   if ($totalRows_Cliente > 0) {
		$_SESSION['Cliente']=true; ?>
      <h5>Puedes ingrsar a la seccion de <a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENTAS;?>productos.php">compras</a></h5>
      <?php } // Show if recordset not empty 
  else
  {?>
    <h5>Completa tus datos de cliente y podras efectuar compras en nuestra web, <a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENTAS;?>inscripcioncliente.php" class="btn btn-primary" role="button">Ingresa al formulario</a></h5>
    <?php } ?>
    <h5>Actualiza tus datos de usuario y mantente al día de nuestras ofertas <a href="<?php echo $_SERVER['PHP_SELF']."?a=".DELANTE;?>actualizardatos.php">modificar datos de usuario</a></h5>
  </div>
</div>
