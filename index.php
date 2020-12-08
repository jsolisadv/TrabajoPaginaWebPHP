<!-- Trabajo de la Clase Computación en el Servidor Web
Profesor: Octavio Aguirre Lozano
Alumno: Johnny Solís Brenes
Actividad: Desarrollar una página web en PHP de temática libre
Fecha: 07 de diciembre 2020
Universidad: UNIR México. -->

<?php 
// index.php
session_start();

// Si el usuario está conectado, recupera el identity de la sesión
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>
<!---------------------------- Pagina de inicio en HTML5 ----------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera página web en PHP</title>
    <link rel=StyleSheet href="estilosphp.css" type="text/css" media=screen>
    <style type="text/css"> 
    p {
        color:<?=$color?>; 
    }    
</style>
</head>
<body>

<!-- SWITCH -->
<?php
switch ($_GET['color']) { 
    case "rojo": 
        $color="red"; 
        break; 
    case "verde": 
        $color="green"; 
        break; 
    case "azul": 
        $color="blue"; 
        break; 
    case "negro": 
        $color="black"; 
        break; 
    default: 
        $color="black"; 
} 
?>

<style type="text/css"> 
p {  
    color:<?=$color?>; 
}    
</style>

</head>
<body> 

    <form action="index.php" method="get"> 
    <!--Cambia el color de los parrafos -->
    <select name="color"> 
    <option value="rojo">Rojo</option> 
    <option value="verde">Verde</option> 
    <option value="azul">Azul</option> 
    <option value="negro">Negro</option> 
    </select> 
    <input type="submit" value="Cambiar color"> 
    </form> 

        <h1>Bienvenidos a Ammishadai</h1>
        <?php if ($identity==null): ?>
        <a href="login.php">Salir del Sitio </a>
        <?php else: ?>
        <strong>Que gusto tenerte:, <?= $identity ?> con nosotros</strong>
        <a href="logout.php">Salir de la pagina</a>
        <?php endif; ?>
        
        <p>
            Esta página web esta enfocada a la programación, en ella iremos agregando
            información relacionada con los diferentes lenguajes de programación.
        </p>

      <?php
      echo "<p>La primera etapa, aprenderemos sobre PHP, a continuación presentamos la lista de lo iremos aprendiendo.</p>" ;
     ?>

<!-- ARRAYS
Usamos un arrays y para mostrar los resultados usamos un for y un foreach. -->
<?php
$array = array('Variables y tipos','Constantes','Operadores lógicos', 'Funciones', 'Ciclos', 'Arreglos');

for ($i=0; $i < count($array); $i++) {
    //echo $array[$i]."<br>";
}
 
foreach ( $array as $key => $value) {
    echo "Nivel: ".$key." - ".$value."<br>";
}
?>
<!-- Fin del Arrays. -->

<br>
<!-- FORMULARIO DE SOLICITUD -->
<h3>Para llevar el curso, favor de llenar el siguiente formulario.</h3>
<!-- Nota: los datos escritos en este formulario se muestran en otra página comprobar.php-->
<form action="comprobar.php" method="post"/>

<p>Nombre: <input type="text" name="nombre"/>   
   Apellidos: <input type="text" name="apellidos" size="40"/>   
   Correo: <input type="text" name="correo" size="35"/>
   contraseña: <input type="password" name="contras"/><br/>
   </p>

<table>
   <tr>
        <td>
            sexo<br/>
            <input type="radio" name="sexo" value="H"/> Hombre<br/>
            <input type="radio" name="sexo" value="M"/> Mujer
        </td>

        <td>
            Nivel de estudios<br/>
            <input type="radio" name="estudios" value="secundaria" checked="checked">
                Secundaria<br/>
            <input type="radio" name="estudios" value="tecnico"/> 
                Tecnico<br/>
            <input type="radio" name="estudios" value="bachiller"/> 
                Bachiller Universitario <br/>
            <input type="radio" name="estudios" value="Diplomado"/> 
                Diplomado<br/>
            <input type="radio" name="estudios" value="licenciado"/> 
                PostGrado<br/>
        </td>

        <td>
            Interesado en los siguientes temas: <br/>
            <input type="checkbox" name="php"/> PHP<br/>
            <input type="checkbox" name="css"/> CSS<br/>
            <input type="checkbox" name="ajax"/> Ajax<br/>
            <input type="checkbox" name="html"/> Html5<br/>
            <input type="checkbox" name="javascript"/> Javascript</p>
        </td>
    </tr>
</table>
<p>Día de la semana que le interesa recibir el curso:</p>
<select name="dia">
    <option>día de la semana:</option> 
    <option value="">lunes</option> 
    <option value="Martes">martes</option> 
    <option value="Miércoles">miercoles</option> 
    <option value="Jueves">jueves</option> 
    <option value="Viernes">viernes</option> 
    <option value="Sábado">sábado</option> 
    <option value="Domingo">domingo</option> 
</select>
</p>
<p>Su opinión: <br/>
<textarea name="comentario" rows="5" cols="50">Comentario: </textarea>
<p><input type="submit" value="Comprobar el formulario"> 
   <input type="reset" value="borrar todo"></p>
</form>
<hr>
<!-- FUNCION -->
<h2>Desea recibir mas información sobre nosotros</h2>

  <form action="recolecciondatos.php" method="get">
    <table>
      <tbody>
        <tr>
          <td>Escriba su nombre:</td>
          <td><input type="text" name="nombre" size="20" maxlength="20"> </td>
        </tr>
        <tr>
          <td>Escriba su edad:</td>
          <td><input type="number" name="edad" min="1" max="120"> años</td>
        </tr>
      </tbody>
    </table>

    <p>
      Es mayor de edad y acepta las condiciones:
      <input type="radio" name="acepto" value="Sí"> Sí
      <input type="radio" name="acepto" value="No"> No
    </p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>


<!-- PIE DE PAGINA -->
<footer>
    <p>
      Última modificación de esta página:
      <time datetime="2020-12-07">07 de diciembre 2020.</time>  
     Clase de Computación de Servidor Web, Alumno Johnny Solís Brenes.
  </footer>

</body>
</html>


