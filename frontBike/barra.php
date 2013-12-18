<?php
if(isset($_SESSION['MM_Username'])&&$_SESSION['MM_Username']!="")
{
?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="brand" href="<?php echo $_SERVER['PHP_SELF'];?>">ProBikeSupport</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".NOTICIAS;?>inicio.php">Inicio</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".NOTICIAS;?>noticias.php">Noticias</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENTAS;?>productos.php">Productos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".DELANTE;?>contacto.php">Contacto</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".DELANTE;?>menuusuario.php">Menu usuario</a></li>
          <li></li>
        </ul>
        <form ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="POST" class="navbar-form pull-right">
          <input type="hidden" name="logout" value="true">
          <input class="btn input-mini" type="submit" value="Cerrar sesion">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
</div>

<?php
}
else
{
	?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="brand" href="<?php echo $_SERVER['PHP_SELF'];?>">ProBikeSupport</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".NOTICIAS;?>inicio.php">Inicio</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".NOTICIAS;?>noticias.php">Noticias</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENTAS;?>productos.php">Productos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".DELANTE;?>contacto.php">Contacto</a></li>
          <li></li>
        </ul>
        <form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" class="navbar-form pull-right" onSubmit='return formularioSesion(this)'>
          <input class="span2" type="text" name="nombre" placeholder="Nombre Usuario">
          <input class="span2" type="password" name="pass" placeholder="Password">
          <input class="btn input-mini" type="submit" value="Entrar">
          <a class="btn btn-success" href="<?php echo $_SERVER['PHP_SELF']."?a=".DELANTE;?>registrarse.php">Registrarse</a>
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
</div>
<?php
}
?>
