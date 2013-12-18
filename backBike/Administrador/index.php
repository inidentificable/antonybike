<?php
session_start();
if(isset($_SESSION['MM_Username'])&&$_SESSION['MM_Username']=="Rene")
{
	?>
<div class="container">
  <div class="hero-unit" style="background-color:#000">
    <h1>Bienvenido</h1>
  </div>
  <div class="modal-header">
    <h2><small>Intranet Administrador</small></h2>
  </div>
</div>
<div class="container hero-unit "> <b>Horario de la escuela de Ciclismo ProBikeSupport</b>
  <table class="table">
    <tr class="success">
      <td>...</td>
      <td>Lunes</td>
      <td>Martes</td>
      <td>Miercoles</td>
      <td>Jueves</td>
      <td>Viernes</td>
      <td>Sábado</td>
      <td>Domingo</td>
    </tr>
    <tr class="error">
      <td>Actividad</td>
      <td>Preparación Física y mecánica básica</td>
      <td>Ciclismo de ruta</td>
      <td>Ciclismo técnico</td>
      <td>Ciclismo de ruta</td>
      <td>Planificación y base de Datos</td>
      <td>Ciclismo de ruta</td>
      <td>Competición - entrenamiento específico - entrenamiento alternativo</td>
    </tr>
    <tr class="info">
      <td>Lugar</td>
      <td>Velodromo Estadio Nacional</td>
      <td>Parque Bicentenario</td>
      <td>Velodromo Estadio Nacional</td>
      <td>Parque Bicentenario</td>
      <td>On Line</td>
      <td>Terreno de competición</td>
      <td>A Confirmar</td>
    </tr>
    <tr class="warning">
      <td>Objetivos</td>
      <td>Desarrollar condiciones fisicas  basicas para el ciclismo y asistencia mecanica</td>
      <td>Trabajo técnico Entrenamientos especificos</td>
      <td>Trabajo técnico - táctico</td>
      <td>Trabajo técnico Entrenamientos especifico</td>
      <td>Organización general deportiva</td>
      <td>Reconocimiento de terreno de carrera</td>
      <td>Desarrollar condiciones tacticas de ciclismo</td>
    </tr>
    <tr class="error">
      <td>Contenidos</td>
      <td>Fuerza, RML, Reactividad, estabilidad, propioceptividad, evaluación revisión técnica básica</td>
      <td>Interavlos de fuerza resistencia Repeticiones de distancia especifica</td>
      <td>Dominio individual choque de ruedas actitud deportiva en el ciclismo e intervalos de potencia anaerobica</td>
      <td>Interavlos de fuerza resistencia,Repeticiones de distancia especifica e intensificación del entrenamiento</td>
      <td>Lista, planes de entrenamiento de gimnasio y ciclismo, programación de competencias</td>
      <td>Verificación de variables de terreno y climatología</td>
      <td>Relevo tactico formaciones, ataques, sprints y trabajo en equipo</td>
    </tr>
    <tr class="info">
      <td>Requerimientos</td>
      <td>Planilla de evaluacion, Arnes de suspensión y herramientas basicas</td>
      <td>Controles, repuestos y abastecimiento</td>
      <td>Controles, repuestos y abastecimiento Estadio Nacional</td>
      <td>Controles, repuestos y abastecimiento Bicentenario</td>
      <td>Internet, notebook</td>
      <td>...</td>
      <td>Abatecimiento y repuestos</td>
    </tr>
    <tr class="warning">
      <td>Encargado</td>
      <td>Antony Ventura Araya, Juan Pablo Cabrera</td>
      <td>Juan Pablo Sandoval</td>
      <td>Antony Ventura Araya</td>
      <td>Juan Pablo Sandoval</td>
      <td>Antony Ventura Araya </td>
      <td>Juan Pablo Sandoval</td>
      <td>Antony Ventura Araya</td>
    </tr>
    <tr class="error">
      <td>Horario</td>
      <td>18:30-19:50</td>
      <td>19:00-20:30</td>
      <td>19:00-20:30</td>
      <td>19:00-20:30</td>
      <td>8:00 - 9:30</td>
      <td>A confirmar</td>
      <td>A confirmar</td>
    </tr>
  </table>
  <p></p>
  <b>Tabla de Usuarios</b>
  <table class="table">
    <tr class="success">
      <td width="34%">Tipo</td>
      <td width="44%">Cantidad actual</td>
      <td width="22%">Opcion</td>
    </tr>
    <tr class="error">
      <td>Administradores</td>
      <td>1</td>
      <td><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadoadm.php"  class="label">Ver</a></td>
    </tr>
    <tr class="info">
      <td>Profesores</td>
      <td>3</td>
      <td><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadoprofesor.php"  class="label">Ver</a></td>
    </tr>
    <tr class="info">
      <td>Vendedores</td>
      <td>1</td>
      <td><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadovendedor.php"  class="label">Ver</a></td>
    </tr>
    <tr class="warning">
      <td>Alumnos</td>
      <td>17</td>
      <td><a href="<?php echo $_SERVER['PHP_SELF']."?a=".ADMINISTRADOR;?>listadocliente.php"  class="label">Ver</a></td>
    </tr>
  </table>
</div>
<div class="container">
<p></p>
<div class="alert alert-success">
  <h3>Recuerda Administrador que toda la información emitida por esta página es confidencial</br>
    y que esta protegida por la ley 19.223</h3>
</div>
<br>
<br>
<!-- logo -->
<div>
  <center>
    <img src="<?php echo IMAGES;?>logo.jpg" >
  </center>
</div>
<?php
}
else
{
	?>
    <a href="http://192.185.114.199/~twabike/">SACAME DE AQUÍ</a>
    <?php
}
?>
