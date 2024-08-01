<?php
session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge el nombre de usuario y contraseña desde el formulario
    $usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
    $contrasena = isset($_POST["contrasena"]) ? $_POST["contrasena"] : "";

    // Verifica el tipo de usuario y redirige
    if ($usuario == "Laura") {
        // Guarda los datos en la sesión
        $_SESSION["usuario"] = $usuario;
        $_SESSION["contrasena"] = $contrasena;

        // Redirige a la página de usuario
        header("Location: home/empleado.php");
        exit();
    } elseif ($usuario == "Carlos") {
        // Guarda los datos en la sesión
        $_SESSION["usuario"] = $usuario;
        $_SESSION["contrasena"] = $contrasena;

        // Redirige a la página de administrador
        header("Location: home/administrador.php");
        exit();
    } else {
        // Si el nombre de usuario no coincide con ninguno, puedes redirigir a una página de error o mostrar un mensaje
        echo "Nombre de usuario o contraseña incorrectos";
    }

    // Cierra la conexión a la base de datos
} else {
    // Si no se ha enviado el formulario, redirige a la página de inicio
    header("Location: FRM_proyecto.php");
    exit();
}
?>
