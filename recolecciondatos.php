<!-- Trabajo de la Clase Computación en el Servidor Web
Profesor: Octavio Aguirre Lozano
Alumno: Johnny Solís Brenes
Actividad: Desarrollar una página web en PHP de temática libre
Fecha: 07 de diciembre 2020
Universidad: UNIR México.   -->

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Recolección de Datos </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilosphp.css" title="Color">
</head>

<body>
  <h1>Gracias por Suscribirse en Ammishadai</h1>

<?php
print "  <p class=\"aviso\">Sus datos han sido recibidos con éxito</p>\n";
?>
<!-- FUNCION -->
<?php
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

$nombre = recoge("nombre");
$edad   = recoge("edad");
$acepto = recoge("acepto");

$nombreOk = false;
$edadOk   = false;
$aceptoOk = false;

if ($nombre == "") {
    print "  <p class=\"aviso\">No ha escrito su nombre.</p>\n";
    print "\n";
} else {
    $nombreOk = true;
}

if ($edad == "") {
    print "  <p class=\"aviso\">No ha escrito su edad.</p>\n";
    print "\n";
} elseif (!is_numeric($edad)) {
    print "  <p class=\"aviso\">No ha escrito la edad como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($edad)) {
    print "  <p class=\"aviso\">No ha escrito la edad como número entero positivo.</p>\n";
    print "\n";
} elseif ($edad < 1 || $edad > 120) {
    print "  <p class=\"aviso\">La edad no está entre 1 y 120 años.</p>\n";
    print "\n";
} else {
    $edadOk = true;
}

if ($acepto == "") {
    print "  <p class=\"aviso\">No ha indicado si acepta las condiciones.</p>\n";
    print "\n";
} elseif ($acepto != "Sí" && $acepto != "No") {
    print "  <p class=\"aviso\">Por favor, indique si acepta o no las condiciones.</p>\n";
    print "\n";
} else {
    $aceptoOk = true;
}

if ($nombreOk && $edadOk && $aceptoOk) {
    print "  <p>Su nombre es <strong>$nombre</strong>.</p>\n";
    print "\n";
    print "  <p>Su edad es <strong>$edad</strong> años.</p>\n";
    print "\n";
    print "  <p>$acepto acepta las condiciones.</p>\n";
    print "\n";
}
?>

<hr>
  <p><a href="index.php">Volver a la página principal.</a></p>

</body>
</html>
