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
    $Disp = $_POST['Disponibilidad'];
    $Precio = $_POST['Precio'];
    $NB = $_POST['Nombre'];
    $Des = $_POST['Descripcion'];
    $Cat = $_POST['Categoria'];
    

// Crear una consulta SQL para  los datos en la tabla Bebida
$sql = "UPDATE Bebidas SET Nombre = '$NB' , Categoria = '$Cat' , Precio = '$Precio' , Descripcion = '$Des' , Disponibilidad = '$Disp' WHERE PK_Bebida = '$PK'";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "<h2>Datos de la Bebida han sido Modificados exitosamente:</h2>";
    echo "<p>El Codigo de esta Bebida es: " . $PK . "</p>";
    echo "<p>El Nombre de la Bebida es: " . $NB . "</p>";
    echo "<p>La Categoria de la Bebida es: " . $Cat . "</p>";
    echo "<p>El Precio de la Bebida es: " . $Precio . "</p>";
    echo "<p>La Descripcion sobre este producto es: " . $Des . "</p>";
    echo "<p>La Disponibilidad en esta Bebida es De: " . $Disp . "</p>";
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
}

// Formulario para regresar al menú del administrador
echo "<form action='../../../administrador.php' method='get'>";
echo "<button type='submit' name='administrador'>Regresar al Menú</button>";
echo "</form>";

// Cerrar la conexión a la base de datos
$conexion->close();
?>