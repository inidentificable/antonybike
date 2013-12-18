<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Mensajes</li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>mensajesvendedor.php">Todos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>enviadovendedor.html">Enviados</a></li>
          <li class="active"><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>recibidovendedor.html">Recibidos</a></li>
        </ul>
      </div>
      <!--/.well --> 
    </div>
    <!--/span-->
    
    <table class="table table-striped" style="width:70%; text-align:center;" align="center">
      <tr>
        <td><a class="btn btn-navbar" href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>msjnuevovendedor.html"><i class="icon-envelope"></i> Nuevo</a></td>
      </tr>
      <tr>
        <td>Emisor</td>
        <td>Tipo</td>
        <td>Contenido</td>
        <td>Opcion</td>
      </tr>
      <tr>
        <td>René Ventura</td>
        <td>Administrador</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>Antony Ventura Sandoval</td>
        <td>Profesor</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>Juan Pablo Cabrera</td>
        <td>Profesor</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>Juan Pablo</td>
        <td>Profesor</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
    </table>
  </table>
  <!-- Example row of columns --> 
</div>
<br>
<br>
<!-- logo -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>logo.jpg" >
  </center>
</div>
</td>
