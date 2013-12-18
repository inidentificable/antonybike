<div class="container">
<table align="center" style="text-align:center;">
  <div class="span3">
    <div class="well sidebar-nav">
      <ul class="nav nav-list">
        <li class="nav-header">Usuarios</li>
        <li class="active"><a href="listadousuario.php">Todos</a></li>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadoadm.php">Administrador</a></li>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadoprofesor.php">Profesores</a></li>
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
      <td>RENE VENTURA</td>
      <td>ADMINISTRADOR</td>
      <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
    </tr>
    <tr>
      <td>ANTONY VENTURA</td>
      <td>PROFESOR</td>
      <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
    </tr>
    <tr>
      <td>JUAN PABLO SANDOVAL</td>
      <td>PROFESOR</td>
      <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
    </tr>
    <tr>
      <td>JUAN PABLO CABRERA </td>
      <td>PROFESOR</td>
      <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
    </tr>
    <tr>
      <td>JAVIERA PEREIRA </td>
      <td>VENDEDORA</td>
      <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
    </tr>
  </table>
</table>
<br>
<br>
<!-- logo -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>logo.jpg" >
  </center>
</div>
</td>
