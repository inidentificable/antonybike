<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Productos</li>
          <li class="active"><a href="listadoproducto.php">Todos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>listadobicicleta.php">Bicicletas</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>listadocasco.php">Cascos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>listadotricota.php">Tricota</a></li>
        </ul>
      </div>
      <!--/.well --> 
    </div>
    <!--/span-->
    <table class="table table-striped" style="width:70%; text-align:center;" align="center">
      <tr>
        <td><a class="btn btn-navbar" href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>nuevoproducto.php"><i class="icon-plus"></i> Nuevo</a></td>
      </tr>
      <tr>
        <td>Tipo de patin</td>
        <td>Precio</td>
        <td>Opcion</td>
      </tr>
      <tr>
        <td>Bicicleta Negra</td>
        <td>$500.000</td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
      <tr>
        <td>Bicleta Blanca</td>
        <td>$650.000</td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
      <tr>
        <td>Casco Aerodinámico</td>
        <td>$ 50.000</td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
      <tr>
        <td>Casco Aironman</td>
        <td>$ 60.000</td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
      <tr>
        <td>Casco normal</td>
        <td>$ 12.000</td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
      <tr>
        <td>Tricota 2013 modelo uno </td>
        <td>$50.000</td>
        <td><a class="icon-trash"></a><a>&nbsp;<i class="icon-edit"></i></a></td>
      </tr>
      <tr>
        <td>Tricota 2013 modelo dos</td>
        <td>$50.000</td>
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
<!-- logo -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>logo.jpg" >
  </center>
</div>
</td>
