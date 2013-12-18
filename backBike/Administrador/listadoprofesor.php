<div class="container">
  <div class="hero-unit" style="background-color:#000">
    <h1>Profesores</h1>
  </div>
  <div class="modal-header">
    <h2><small>Intranet Administrador</small></h2>
  </div>
</div>
<div class="container">
<table align="center" style="text-align:center;">
  <div class="span3">
    <div class="well sidebar-nav">
      <ul class="nav nav-list">
        <li class="nav-header">Usuarios</li>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadousuario.php">Todos</a></li>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadoadm.php">Administrador</a></li>
        <li class="active"><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadoprofesor.php">Profesores</a></li>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadovendedor.php">Vendedor</a></li>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadocliente.php">Alumnos</a></li>
      </ul>
    </div>
    <!--/.well --> 
  </div>
  <!--/span-->
  <table class="table table-striped" style="width:70%; text-align:center;" align="center">
    <tr>
      <td><a class="btn btn-navbar" href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>nuevousuario.php"><i class="icon-user"></i> Nuevo</a></td>
    </tr>
    <tr>
      <td>Usuario</td>
      <td>Tipo de Usuario</td>
      <td>Opcion</td>
    </tr>
    <tr>
      <td>Juan Pablo Cabrera</td>
      <td>Profesor</td>
      <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
    </tr>
    <tr>
      <td>Antony Ventura</td>
      <td>Profesor</td>
      <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
    </tr>
    <tr>
      <td>Juan Pablo Sandoval</td>
      <td>Profesor</td>
      <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
    </tr>
  </table>
</table>
<br>
<br>
<!-- logo -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>imagenes/logo.jpg" >
  </center>
</div>
</td>
