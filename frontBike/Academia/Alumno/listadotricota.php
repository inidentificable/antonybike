<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Productos</li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ESTUDIANTE;?>listadoproducto.php">Todos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ESTUDIANTE;?>listadobicicleta.php">Bicicletas</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ESTUDIANTE;?>listadocasco.php">Cascos</a></li>
          <li class="active"><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ESTUDIANTE;?>listadotricota.php">Tricota</a></li>
        </ul>
      </div>
      <!--/.well --> 
    </div>
    <!--/span-->
    <table class="table table-striped" style="width:70%; text-align:center;" align="center">
      <tr>
        <td>Tipo de producto</td>
        <td>Precio</td>
      </tr>
      <tr>
        <td>Tricota 2013 modelo uno </td>
        <td>$50.000</td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
      <tr>
        <td>Tricota 2013 modelo dos</td>
        <td>$50.000 </td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
      <tr>
        <td>Tricota 2014 modelo uno</td>
        <td>$50.000</td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
    </table>
  </table>
  
  <!-- Example row of columns --> 
</div>
<br>
<br>
<!-- imagen producto -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>tricota.jpg" >
  </center>
</div>
</td>
<div>
  <center>
    <img src="<?php echo IMAGES;?>tricota2.jpg" >
  </center>
</div>
</td>
<div>
  <center>
    <img src="<?php echo IMAGES;?>tricota2014.jpg" >
  </center>
</div>
</td>
