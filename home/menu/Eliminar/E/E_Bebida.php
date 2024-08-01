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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $PK = $_POST['PK_Bebida'];

// Crear una consulta SQL para Eliminar los datos en la tabla Bebida
$sql = "DELETE FROM Bebidas WHERE PK_Bebida = '$PK'";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "<h2>La Bebida a sido Eliminada Exitosamente </h2>";
} else {
    echo "Error al guardar los datos de la Bebida: " . $conexion->error;
}

$sql_select = "SELECT * FROM Bebidas";

$resultado_select = $conexion->query($sql_select);

if ($resultado_select) {
    if ($resultado_select->num_rows > 0) {
        // Procesar los resultados
        while ($fila = $resultado_select->fetch_assoc()) {
            // Acceder a los datos de cada fila
            echo "PK: " . $fila['PK_Bebida'] . "<br>" . "Nombre: " . $fila['Nombre'] . "<br>" . "Categoria: " . $fila['Categoria'] . "<br>" . "Precio: " . $fila['Precio'] . "<br>" . "Descripcion: " . $fila['Descripcion'] . "<br>" . "Disponibilidad: " . $fila['Disponibilidad'] . "<br><br><br>";
        }
    } else {
        echo "La consulta SELECT no devolvió filas.";
    }
} else {
    echo "Error en la consulta SELECT: " . $conexion->error;
}

// Formulario para regresar al menú del administrador
echo "<form action='../../../administrador.php' method='get'>";
echo "<button type='submit' name='administrador'>Regresar al Menú</button>";
echo "</form>";

}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
