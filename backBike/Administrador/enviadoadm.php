<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Mensajes</li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>mensajesadm.php">Todos</a></li>
          <li class="active"><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>enviadoadm.php"> Enviados</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>recibidoadm.php">Recibidos</a></li>
        </ul>
      </div>
      <!--/.well --> 
    </div>
    <!--/span-->
    
    <table class="table table-striped" style="width:70%; text-align:center;" align="center">
      <tr>
        <td><a class="btn btn-navbar" href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>msjnuevoadm.php"><i class="icon-envelope"></i> Nuevo</a></td>
      </tr>
      <tr>
        <td>Emisor</td>
        <td>Contenido</td>
        <td>Opcion</td>
      </tr>
      <tr>
        <td>RENE</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>RENE</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>RENE</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>RENE</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>RENE</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
    </table>
  </table>
</div>
<!-- temino de columnas--> 
<br>
<br>
<!-- saltos de linea --> 
<!-- logo -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>logo.jpg" >
  </center>
</div>
</td>
