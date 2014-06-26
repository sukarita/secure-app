<?php
/**  4.1 hacemos la función que tiene que devolver true o false n este ejercicio vamos a pensar que ya hay registrados
* estos 2 usuarios
*/
function isUserValid($u, $p){
    $valid = false;

    if($u =="cris" && $p=="123" || $u =="ivan" && $p =="1234"){
        $valid = true;
    }
    return $valid;

}

session_start();

$user = "";
$message = "";


if(isset($_POST["user"]) && ($_POST["password"])){
    $user = $_POST["user"];
    $password = $_POST["password"];

    //if ($user =="cris" && $password=="123" )
    if(isUserValid($user, $password)){  //4.cambiamos el If user Cris para ahora varios usuarios
        $_SESSION["usuario_autorizado"] = $user;  //autentificamos siempre antes de header
        header("location: http://localhost/secure/welcome.php");

    }

    else{
        $message = "Usuario/contraseña no coinciden";
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>INSERT TITLE HERE</title>
</head>
<body>

<?= $message?><br>
<a href="secure/welcome.php">Welcome</a>
<a href="secure/config.php">Secure</a>
<a href="secure/account.php">Account</a>
<a href="secure/logout.php">Logout</a>


    <form action="" method="post">
        <input type="text" name="user" value="<?= $user ?>" placeholder="Usuario"><br>
        <input type="password" name="password" placeholder="Contraseña"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>