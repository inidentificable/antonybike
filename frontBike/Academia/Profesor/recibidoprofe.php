<div class="container">
  <div class="hero-unit" style="background-color:#000">
    <h1>Mensajes</h1>
  </div>
  <div class="modal-header">
    <h2><small>Intranet del Profesor</small></h2>
  </div>
</div>
<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Mensajes</li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".PROFESOR;?>enviadoprofe.php">Todos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".PROFESOR;?>enviadoprofe.php">Enviados</a></li>
          <li class="active"><a href="<?php echo $_SERVER['PHP_SELF']."?a=".PROFESOR;?>recibidoprofe.php">Recibidos</a></li>
        </ul>
      </div>
      <!--/.well --> 
    </div>
    <!--/span-->
    
    <table class="table table-striped" style="width:70%; text-align:center;" align="center">
      <tr>
        <td><a class="btn btn-navbar" href="<?php echo $_SERVER['PHP_SELF']."?a=".PROFESOR;?>msjnuevoprofe.php"><i class="icon-envelope"></i> Nuevo</a></td>
      </tr>
      <tr>
        <td>Emisor</td>
        <td>Contenido</td>
        <td>Opcion</td>
      </tr>
      <tr>
        <td>ANTONY VENTURA</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>JUAN PABLO SANDOVAL</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
      <tr>
        <td>JUAN PABLO CABRERA</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
      <tr>
        <td>JAVIERA PEREIRA</td>
        <td><textarea class="largotabla"></textarea></td>
        <td><a class="icon-trash"></a></td>
      </tr>
    </table>
  </table>
  
  <!-- Example row of columns --> 
</div>
<br>
<br>
<!-- salto de linea--> 
<!-- logo -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>logo.jpg" >
  </center>
</div>
</td>