<?php
/*
 * IF (usuario NO esta autentificado)
 * redirigir a login (para que no pueda ver esta pagina)
 * ¿Cómo se si el usuario esta autentificado?
 * Tenemos que meter en index $_Session y lo haremos antes de header
 */
session_start();

$user = "";
if(isset($_SESSION["usuario_autorizado"])){
    $user = $_SESSION["usuario_autorizado"];
}

if ($user=="" || $user != "cris"){    //si el usuario esta vacio o no es cris
    header("Location: http://localhost/");  //entonces le redirigimos a la pagina de login
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>Página Welcome</title>
</head>
<body>
welcome to your secure area
<h1> Bienvenido a tu area privada</h1>
<p>Esta es una página con acceso restringido</p>
<a href="config.php">Enlace redirecciona a la página de config</a>

</body>
</html>