<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Productos</li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>listadoproducto.php">Todos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>listadobicicleta.php">Bicicletas</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>listadocasco.php">Cascos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".VENDEDOR;?>listadotricota.php">Tricota</a></li>
        </ul>
      </div>
      <!--/.well --> 
    </div>
    <!--/span-->
    <form>
      <table class="table table-striped" style="width:70%; text-align:center;" align="center">
        <tr>
          <td>Tipo de Artículo</td>
          <td><select>
              <option>Seleccione</option>
              <option>Cascos</option>
              <option>Bicicletas</option>
              <option>Tricotas</option>
            </select></td>
        </tr>
        <tr>
          <td>Precio</td>
          <td><input type="text" name="asunto" placeholder="Valor del artículo"></td>
        </tr>
        <tr>
          <td>Stock</td>
          <td><textarea class="largotabla" placeholder="Cantidad"></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td><input class="btn btn-primary" type="submit" value="Agregar">
            <input class="btn btn-success" type="reset" value="Reestablecer"></td>
        </tr>
      </table>
    </form>
  </table>
  
  <!-- Example row of columns --> 
</div>
<br>
<br>
<!-- logo -->
<div>
  <center>
    <img src="<?php IMAGES;?>logo.jpg" >
  </center>
</div>
</td>
