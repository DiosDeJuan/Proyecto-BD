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
    $PK = $_POST['PK_Codigo'];
    $Cant = $_POST['Cantidad'];
    $Meto = $_POST['Metodo'];
    $Fecha = $_POST['Fecha'];
    $A = $_POST['Alimento'];
    $B = $_POST['Bebida'];
    $C = $_POST['Cliente'];
    $N = $_POST['Nomina'];

    // Crear una consulta SQL para insertar los datos en la tabla "alumno"
$sql = "INSERT INTO compra (PK_Codigo, Cantidad, Metodo, Fecha, Alimento, Bebida, Cliente, Empleado) 
        VALUES ('$PK', '$Cant', '$Meto', '$Fecha', '$A', '$B', '$C', '$N')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "<h2>Datos de la Compra han sido guardados exitosamente:</h2>";
    echo "<p>La PK de la Compra es: " . $PK . "</p>";
    echo "<p>La cantitad de productos son: " . $Cant . "</p>";
    echo "<p>Metodo de Pago: " . $Meto . "</p>";
    echo "<p>El dia en que se realizo la Compra es: " . $Fecha . "</p>";
    echo "<p>La PK del Alimento es: " . $A . "</p>";
    echo "<p>La PK de la Bebida es: " . $B . "</p>";
    echo "<p>La PK del Cliente es: " . $C . "</p>";
    echo "<p>Ingresa tu Nomina de Empleado: " . $N . "</p>";
} else {
    echo "Error al guardar los datos del Alimento: " . $conexion->error;
}

$sql_select = "SELECT * FROM Compra";

$resultado_select = $conexion->query($sql_select);

if ($resultado_select) {
    if ($resultado_select->num_rows > 0) {
        // Procesar los resultados
        while ($fila = $resultado_select->fetch_assoc()) {
            // Acceder a los datos de cada fila
            echo "PK: " . $fila['PK_Codigo'] . "<br>" . "Cantidad: " . $fila['Cantidad'] . "<br>" . "Metodo de Pago: " . $fila['Metodo'] . "<br>" . "Fecha de la Compra: " . $fila['Fecha'] . "<br>" . "Numero del Alimento: " . $fila['Alimento'] . "<br>" . "Numero de la Bebida: " . $fila['Bebida'] . "<br>" . "Clave Primaria del Cliente: " . $fila['Cliente'] . "Empleado que hizo esta Venta (Nomina): " . $fila['Empleado'] ."<br><br><br>";
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
}
?>