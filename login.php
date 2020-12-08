<!-- Trabajo de la Clase Computación en el Servidor Web
Profesor: Octavio Aguirre Lozano
Alumno: Johnny Solís Brenes
Actividad: Desarrollar una página web en PHP de temática libre
Fecha: 07 de diciembre 2020
Universidad: UNIR México. -->

<?php
// login.php
session_start();

//  Si el usuario es logueado correctamente, es redireccionado a la página index.php
if (isset($_SESSION['identity'])) {
    header('Location: login.php');
    exit;
}

// Comprueba si el formulario es enviado por el metodo POST.
$submitted = false;
if ($_SERVER['REQUEST_METHOD']=='POST') {

    $submitted = true;

    // Extrae los datos del formulario de inicio de sesión.
    $email = $_POST['email'];
    $password = $_POST['password'];

     // Usuario Autenticado.
     $authenticated = false;
     if ($email=='tareaphp@yahoo.com' && $password=='PhpTarea') {
         $authenticated = true;
 
         // Guarda el identity de la sesión.
         $_SESSION['identity'] = $email;
 
         // Redirecciona al usuario a la página index.php.
         header('Location:index.php');
         exit;
     }
 }
 ?>
<!--/////////////// PAGINA EN HTML -->
<!DOCTYPE html>
<html>
<head>
        <title>Página de Inicio</title>
    </head>
    <body>
        <h1>Bienvenidos al Sitio Web Ammishadai</h1>
        <h2>Por favor ingrese sus datos</h2>
        <?php if ($submitted && !$authenticated): ?>
            <div class="alert">
                Correo y/o Contraseña es incorrecta. Verifique de nuevo.
            </div>
        <br>
        <?php endif; ?>
        <!-- Formulario de inicio de sesión -->
        <form name="login-form" action="login.php" method="POST">
            <label for="email">Correo</label>
            <input type="text" name="email">
            <br>
            <br>
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <br>
            <br>
            <input type="submit" name="submit" value="Ingresar">
        </form>
    </body>
</html>