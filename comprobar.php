<!-- Trabajo de la Clase Computación en el Servidor Web
Profesor: Octavio Aguirre Lozano
Alumno: Johnny Solís Brenes
Actividad: Desarrollar una página web en PHP de temática libre
Fecha: 07 de diciembre 2020
Universidad: UNIR México. -->

<!DOCTYPE html >
<html>
<head>
<title>Comprobar datos</title> 

</head>
<body>
<h1>Tus Datos de suscripción: </h1>
<p>Estos son los datos que nos has enviado:</p>
<?php  
echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
echo "apellidos: "; echo $_POST['apellidos']; echo "<br/>";
echo "E-mail: "; echo $_POST['correo']; echo "<br/>";
echo "contraseña: "; echo $_POST['contras']; echo "<br/>";
echo "Sexo: "; echo $_POST['sexo']; echo "<br/>";
echo "Estudios: "; echo $_POST['estudios']; echo "<br/>";
echo "Temas: \"on\" seleccionado, sin marcar, no seleccionado <br/>";
echo "PHP: "; echo $_POST['php']; echo "<br/>";
echo "CSS: "; echo $_POST['css']; echo "<br/>";
echo "Ajax: "; echo $_POST['ajax']; echo "<br/>";
echo "Html5: "; echo $_POST['html']; echo "<br/>";
echo "Javascript: "; echo $_POST['javascript']; echo "<br/><br/>";
echo "Día de la semana: "; echo $_POST['dia']; echo "<br/>";
echo "Tu comentario: "; echo $_POST['comentario']; echo "<br/>";
?>
<p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
<p>Los datos son correctos: <a href="enviar.html">Enviar</a>
<p>Los datos no son correctos: <a href="index.php">Volver a escribirlos</a>

</body>
</html>