<div class="container">
  <div class="hero-unit" style="background-color:#000">
    <h1>Mensajes</h1>
  </div>
  <div class="modal-header">
    <h2><small>Intranet Alumno</small></h2>
  </div>
</div>
<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Mensajes</li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ESTUDIANTE;?>mensajescliente.php">Todos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ESTUDIANTE;?>enviadocliente.php">Enviados</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ESTUDIANTE;?>recibidocliente.php">Recibidos</a></li>
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
              <option>Profesor</option>
              <option>Vendedor</option>
              <option>Alumno</option>
              <option>Administrador</option>
            </select></td>
        </tr>
        <tr>
          <td>Destino</td>
          <td><select>
              <option>Seleccione</option>
              <option>Antony Ventura</option>
              <option>Juan Pablo Sandoval</option>
              <option>Juan Pablo Cabrera</option>
              <option>René Ventura</option>
              <option>Javiera Pereira</option>
              <option>Compañero</option>
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
<!-- logo -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>logo.jpg" >
  </center>
</div>
</td>
