<?php
/*
 * IF (usuario NO esta autentificado)
 * redirigir a login (para que no pueda ver esta pagina)
 * ¿Cómo se si el usuario esta autentificado?
 * Tenemos que meter en index $_Session y lo haremos antes de header
 */
session_start();

$user = "";
/**if(isset($_SESSION["usuario_autorizado"])){
    $user = $_SESSION["usuario_autorizado"];
}
**/
//if ($user=="" || $user != "cris"){    //si el usuario esta vacio o no es cris
if (!isset($_SESSION["usuario_autorizado"])){ //5. esto se hace para que varios usuarios previamente registrados puedan entrar
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
<h1> Bienvenido a tu area privada</h1>
<a href="../index.php">Welcome</a>
<a href="config.php">Secure</a>
<a href="account.php">Account</a>
<a href="logout.php">Logout</a>
<p>Esta es una página con acceso restringido</p>

</body>
</html>