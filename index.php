<?php

session_start();

$user = "";
$message = "";


if(isset($_POST["user"]) && ($_POST["password"])){
    $user = $_POST["user"];
    $password = $_POST["password"];

    if ($user =="cris" && $password=="123" ){
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
<a href="secure/welcome.php">Enlace a Welcome</a>
<a href="secure/config.php">Enlace a Secure</a>
<a href="secure/account.php.php">Enlace a Account</a>


    <form action="" method="post">
        <input type="text" name="user" value="<?= $user ?>" placeholder="Usuario"><br>
        <input type="password" name="password" placeholder="Contraseña"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>