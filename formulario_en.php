
<?php

$usuario_correcto = "admin";
$contraseña_correcta = "#elChup4c4br4S";

$usuario = $_POST["usuario"] ?? "";
$contraseña = $_POST["contraseña"] ?? "":

if($usuario_correcto == $usuario && $contraseña_correcta == $contraseña){
    header("Location: index_en.php");
}

?>


<html>
    <h1>Log in</h1>

    <form method="POST">
    <p>User</p>
    <input type="text" name="nombre">
    <p>Password</p>
    <input type="password" name="contraseña">
    <br>
    <input type="submit" value="Log In" name="enviar">
    </form>

</html>