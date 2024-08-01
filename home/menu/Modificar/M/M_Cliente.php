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
    $PK = $_POST['PK_Cliente'];
    $Cel = $_POST['Celular'];
    $Dire = $_POST['Direccion'];
    $NB = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    

// Crear una consulta SQL para Modificar los datos en la tabla Cliente
$sql = "UPDATE Cliente SET Nombre = '$NB' , Celular = '$Cel' , Direccion = '$Dire' , Correo = '$Correo' WHERE PK_Cliente = '$PK'";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "<h2>Datos del Cliente han sido Modificados exitosamente:</h2>";
    echo "<p>El Codigo del Cliente es: " . $PK . "</p>";
    echo "<p>El Nombre del Cliente es: " . $NB . "</p>";
    echo "<p>El Celular del Cliente es: " . $Cel . "</p>";
    echo "<p>La Direccion del Cliente es: " . $Dire . "</p>";
    echo "<p>El Correo del Cliente es: " . $Correo . "</p>";
} else {
    echo "Error al guardar los datos del Cliente: " . $conexion->error;
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
}

// Formulario para regresar al menú del administrador
echo "<form action='../../../administrador.php' method='get'>";
echo "<button type='submit' name='administrador'>Regresar al Menú</button>";
echo "</form>";

// Cerrar la conexión a la base de datos
$conexion->close();
?>