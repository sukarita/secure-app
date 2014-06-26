<?php

//Me interesa por ahora imprimir los valores que mete el usuario para compronbar que estamos recibiendo datos. Una vez revisado borrar

echo $_POST["user"];
print_r($_POST); //nos saca todo el array

if(isset($_POST["user"]) && ($_POST["password"])){
    $user = $_POST["user"];
    $password = $_POST["password"];

    if ($user =="cris" && $password=="123" ){
    echo "Muy Bien";    //comprobamos que funciona y que imprime
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
    <form action="" method="post">
        <input type="text" name="user" placeholder="Usuario"><br>
        <input type="password" name="password" placeholder="Contraseña"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>