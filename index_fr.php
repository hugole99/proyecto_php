
<?php

$usuario_correcto = "admin";
$contraseña_correcta = "#elChup4c4br4S";

$usuario = $_POST["usuario"] ?? "";
$contraseña = $_POST["contraseña"] ?? "":

if($usuario_correcto == $usuario && $contraseña_correcta == $contraseña){
    header("Location: index_es.php");
} else {
    echo="La contraseña o el usuario introducidos son incorrectos"
}

// 2. INICIALIZAR EL CONTADOR DE FALLOS EN SESIÓN
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

$usuario = $_POST["usuario"] ?? "";
$contraseña = $_POST["contraseña"] ?? "";
$error_mensaje = "";

// 3. VERIFICAR SI HA EXCEDIDO EL LÍMITE
if ($_SESSION['intentos'] >= 3) {
    // Redirige a la página de error si los intentos son >= 3
    header("Location: error_es.php");
    exit;
}

// 4. PROCESAR EL FORMULARIO (solo si se ha enviado)
if (isset($_POST['enviar'])) {
    
    // VERIFICACIÓN CORRECTA
    if ($usuario_correcto == $usuario && $contraseña_correcta == $contraseña) {
        // Reiniciar el contador de fallos y redirigir a la página de inicio
        $_SESSION['intentos'] = 0;
        header("Location: index_es.php"); // <-- Redirección correcta
        exit;
        
    // VERIFICACIÓN INCORRECTA
    } else {
        // Aumentar el contador de fallos
        $_SESSION['intentos']++;
        
        // Comprobar si excedió el límite después de este fallo
        if ($_SESSION['intentos'] >= 3) {
            header("Location: error_es.php"); // <-- Redirige si el fallo alcanzó el límite
            exit;
        }
        
        // Mostrar mensaje de error condicional
        $intentos_restantes = 3 - $_SESSION['intentos'];
        $error_mensaje = "*Usuario y/o contraseña incorrectos. Quedan $intentos_restantes intentos.";
    }
}
?>


<html>
    <DOCTYPE html5>
    <h1>Se connecter</h1>

    <form method="POST">
    <p>Utilisateur</p>
    <input type="text" name="utilisateur">
    <p>Mot de passe</p>
    <input type="password" name="mot de passe">
    <br>
    <label>Sexo:</label>
        <select>
            <option value="" disabled selected>Oui s'il vous plait</option>
            <option value="hombre">Homme</option>
            <option value="mujer">Femmes</option>
            <option value="hac">Hélicoptère de combat Apache</option>
        </select>
    <input type="submit" value="Envoyer" name="envoyer">
    </form>
    <br>
    <a href="index.php" name="es">
    <img src="bandera españa.jpg" alt="bandera españa">
    </a>
    <br>
    <a href="index_en.php" name="en">
    <img src="bandera inglaterra.png" alt="bandera inglaterra">
    </a>
    <a href="index_fr.php" name="fr">
    <img src="francia.png" alt="bandera francia">
    </a>
    <br>
    <?php if ($error_mensaje): ?>
        <p style="color: red;"><?= $error_mensaje ?></p>
    <?php endif; ?>
</html>