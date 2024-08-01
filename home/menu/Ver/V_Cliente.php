<?php

session_start();

// Verifica si hay datos en la sesión
if (isset($_SESSION["usuario"]) && isset($_SESSION["contrasena"])) {
    // Recoge los datos de la sesión
    $usuario = $_SESSION["usuario"];
    $contrasena = $_SESSION["contrasena"];

    $conexion = new mysqli("localhost", $usuario, $contrasena, "cafeteria");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }
} else {
    // Si no hay datos en la sesión, muestra un mensaje de error
    echo "Error: No se han recibido datos.";
}

$sql_select = "SELECT * FROM Cliente";

$resultado_select = $conexion->query($sql_select);

if ($resultado_select) {
    if ($resultado_select->num_rows > 0) {
        // Procesar los resultados
        while ($fila = $resultado_select->fetch_assoc()) {
            // Acceder a los datos de cada fila
            echo "PK: " . $fila['PK_Cliente'] . "<br>" . "Nombre: " . $fila['Nombre'] . "<br>" . "Celular: " . $fila['Celular'] . "<br>" . "Direccion: " . $fila['Direccion'] . "<br>" . "Correo: " . $fila['Correo'] . "<br><br><br>";
        }
    } else {
        echo "La consulta SELECT no devolvió filas.";
    }
} else {
    echo "Error en la consulta SELECT: " . $conexion->error;
}

// Formulario para regresar al menú del administrador
echo "<form action='../../../Administrador.php' method='get'>";
echo "<button type='submit' name='administrador'>Regresar al Menú</button>";
echo "</form>";


// Cerrar la conexión a la base de datos
$conexion->close();
?>