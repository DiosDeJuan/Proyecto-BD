<?php
// Inicia la sesión para poder utilizar variables de sesión
session_start();

// Verifica si hay datos en la sesión
if (isset($_SESSION["usuario"]) && isset($_SESSION["contrasena"])) {
    // Recoge los datos de la sesión
    $usuario = $_SESSION["usuario"];
    $contrasena = $_SESSION["contrasena"];
    $hostname = "localhost";
    $base_de_datos = "cafeteria";
    $conexion = new mysqli($hostname, $usuario, $contrasena, $base_de_datos);

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Muestra un mensaje con los datos
    /*echo "Bienvenido, administrador.<br>";
    echo "Usuario: $usuario<br>";
    echo "Contraseña: $contrasena";
    $conexion->close();*/
} else {
    // Si no hay datos en la sesión, muestra un mensaje de error
    echo "Error: No se han recibido datos.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>

    <h1>Bienvenido, <?php echo $usuario; ?></h1>

    <!-- Botones de redirección -->
    <button onclick="location.href='menu/FRM_Agregar.php'">Agregar</button>
    <button onclick="location.href='menu/FRM_Modificar.php'">Modificar</button>
    <button onclick="location.href='menu/FRM_Ver.php'">Ver</button>
    <button onclick="location.href='menu/FRM_Eliminar.php'">Eliminar</button>
    <button onclick="location.href='menu/FRM_Compra.php'">Compra</button>
    
    
    <button onclick="location.href='cerrarSesion.php'">Cerrar Sesión</button>

</body>
</html>

