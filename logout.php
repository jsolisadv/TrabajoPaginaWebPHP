<!-- Trabajo de la Clase Computación en el Servidor Web
Profesor: Octavio Aguirre Lozano
Alumno: Johnny Solís Brenes
Actividad: Desarrollar una página web en PHP de temática libre
Fecha: 07 de diciembre 2020
Universidad: UNIR México. -->  

<?php 
// logout.php
session_start();

unset($_SESSION['identity']);
header('Location: login.php');
exit;