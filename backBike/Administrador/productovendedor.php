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
        <td>Disciplina</td>
        <td>Marca</td>
        <td>Modelo</td>
        <td>Stock</td>
        <td>Opcion</td>
      </tr>
      <tr>
        <td>Slalom</td>
        <td>SEBA</td>
        <td>FR1</td>
        <td>10</td>
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
  
  <!-- Example row of columns --> 
</div>
