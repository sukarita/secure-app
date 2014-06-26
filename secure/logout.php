
<?php
session_start();

unset($_SESSION["usuario_autorizado"]); ///quitamos el acceso
header ("Location: http://localhost/");

?>