<div class="container">
  <div class="hero-unit" style="background-color:#000">
    <h1>Mensajes</h1>
  </div>
  <div class="modal-header">
    <h2><small>Intranet Administrador</small></h2>
  </div>
</div>
<div class="container">
  <table align="center" style="text-align:center;">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">Usuarios</li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadousuario.php">Todos</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadoadm.php">Administrador</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadovendedor.php">Profesor</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadovendedor.php">Vendedor</a></li>
          <li><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadocliente.php">Alumnos</a></li>
        </ul>
      </div>
      <!--/.well --> 
    </div>
    <!--/span-->
    <form>
      <table class="table table-striped" style="width:70%; text-align:center;" align="center">
        <tr>
          <td>Tipo</td>
          <td><select>
              <option>Seleccione</option>
              <option>Administrador</option>
              <option>Profesor</option>
              <option>Vendedor</option>
              <option>Alumnos</option>
            </select></td>
        </tr>
        <tr>
          <td>Nombre de Usuario:</td>
          <td><input type="text" name="usuario" placeholder="Nick"/></td>
        </tr>
        <tr>
          <td>Nombre:</td>
          <td><input type="text" name="nombre" placeholder="Nombre"/></td>
        </tr>
        <tr>
          <td>Apellidos:</td>
          <td><input type="text" name="apellido" placeholder="Apellidos"/></td>
        </tr>
        <tr>
          <td>Rut:</td>
          <td><input type="text" name="rut" placeholder="Rut"/></td>
        </tr>
        <tr>
          <td>Género:</td>
          <td><select name="sexo">
              <option>Hombre</option>
              <option>Mujer</option>
            </select></td>
        </tr>
        <tr>
          <td>Fecha de Nacimiento</td>
          <td><input type="date"/></td>
        </tr>
        <tr>
          <td>Dirección:</td>
          <td><input type="text" name="direccion" placeholder="Direccion Residencia"/></td>
        </tr>
        <tr>
          <td>Comuna:</td>
          <td><input type="text" name="comuna" placeholder="Comuna"/></td>
        </tr>
        <tr>
          <td>País:</td>
          <td><input type="text" name="pais" placeholder="Pais"/></td>
        </tr>
        <tr>
          <td>Teléfono Fijo:</td>
          <td><input type="text" name="fijo" placeholder="Telefono Fijo"/></td>
        </tr>
        <tr>
          <td>Teléfono Móvil:</td>
          <td><input type="text" name="movil" placeholder="Telefono Movil"/></td>
        </tr>
        <tr>
          <td>Clave:</td>
          <td><input type="text" name="clave1" placeholder="Password"/></td>
        </tr>
        <tr>
          <td>Confirme Clave:</td>
          <td><input type="text" name="clave2" placeholder="Repita Password"/></td>
        </tr>
        <tr>
          <td>Descripción</td>
          <td><textarea placeholder="Mi descripcion" cols="10" rows="9"></textarea></td>
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
