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
    $PK = $_POST["Nomina"];
    $NB = $_POST["Nombre"];
    $ApeP = $_POST["ApeP"];
    $ApeM = $_POST["ApeM"];
    $Cargo = $_POST["Cargo"];
    $Nac = $_POST["Nacimiento"];
    $Cel = $_POST["Celular"];
    $Dire = $_POST["Direccion"];
    $AT = $_POST["ATrabajo"];
    $Sexo = $_POST["Sexo"];
    

// Crear una consulta SQL para Agregar los datos en la tabla Empleado
$sql = "INSERT INTO Empleado (Nomina, Nombre, ApeP, ApeM, Cargo, Nacimiento, Celular, Direccion, Anios_trab, Sexo) 
        VALUES ('$PK', '$NB', '$ApeP', '$ApeM', '$Cargo', '$Nac', '$Cel', '$Dire', '$AT', '$Sexo')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "<h2>Datos del Empleado han sido guardados exitosamente:</h2>";
    echo "<p>La Nomina del Empleado es: " . $PK . "</p>";
    echo "<p>El Nombre del Empleado es: " . $NB . "</p>";
    echo "<p>El Apellido Paterno del Empleado es: " . $ApeP . "</p>";
    echo "<p>El Apellido Materno del Empleado es: " . $ApeM . "</p>";
    echo "<p>El Cargo del Empleado es: " . $Cargo . "</p>";
    echo "<p>El Nacimiento del Empleado es: " . $Nac . "</p>";
    echo "<p>El Celular del Empleado es: " . $Cel . "</p>";
    echo "<p>La Direccion del Empleado es: " . $Dire . "</p>";
    echo "<p>los años de Trabajo con nosotros del Empleado son: " . $AT . "</p>";
    echo "<p>El Sexo del Empleado es: " . $Sexo . "</p>";
} else {
    echo "Error al guardar los datos del Empleado: " . $conexion->error;
}

$sql_select = "SELECT * FROM Empleado";

$resultado_select = $conexion->query($sql_select);

if ($resultado_select) {
    if ($resultado_select->num_rows > 0) {
        // Procesar los resultados
        while ($fila = $resultado_select->fetch_assoc()) {
            // Acceder a los datos de cada fila
            echo "PK: " . $fila['Nomina'] . "<br>" . "Nombre: " . $fila['Nombre'] . "<br>" . "Apellido Paterno: " . $fila['ApeP'] . "<br>" . "Apellido MAterno: " . $fila['ApeM'] . "<br>" . "Cargo: " . $fila['Cargo'] . "<br>" . "Nacimiento: " . $fila['Nacimiento'] . "<br>" . "Celular: " . $fila['Celular'] . "<br>" . "Direccion: " . $fila['Direccion'] . "<br>" . "Años Trabajando con Nosotros: " . $fila['Anios_trab'] . "<br>" . "Sexo: " . $fila['Sexo'] . "<br><br><br>";
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

// Cerrar la conexión a la base de datos
$conexion->close();
}
?>
