<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Mensajes</li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>mensajesadm.php">Todos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>enviadoadm.php">Enviados</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>recibidoadm.php">Recibidos</a></li>
        </ul>
      </div>
      <!--/.well --> 
    </div>
    <!--/span-->
    <form>
      <table class="table table-striped" style="width:70%; text-align:center;" align="center">
        <tr>
          <td>Enviar a:</td>
          <td><select>
              <option>Seleccione</option>
              <option>Administrador</option>
              <option>Profesor</option>
              <option>Alumno</option>
              <option>Vendedor</option>
            </select></td>
        </tr>
        <tr>
          <td>Destino</td>
          <td><select>
              <option>Seleccione</option>
              <option>RENE VENTURA</option>
              <option>ANTONY VENTURA</option>
              <option>JUAN PABLO SANDOVAL</option>
              <option>JUAN PABLO CABRERA</option>
              <option>JAVIERA PEREIRA</option>
              <option></option>
            </select></td>
        </tr>
        <tr>
          <td>Asunto</td>
          <td><input type="text" name="asunto" placeholder="Motivo mensaje"></td>
        </tr>
        <tr>
          <td>Texto</td>
          <td><textarea class="largotabla" placeholder="Contenido"></textarea></td>
        </tr>
        <tr>
          <td></td>
          <td><input class="btn btn-primary" type="submit" value="Enviar">
            <input class="btn btn-success" type="reset" value="Reestablecer"></td>
        </tr>
      </table>
    </form>
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
