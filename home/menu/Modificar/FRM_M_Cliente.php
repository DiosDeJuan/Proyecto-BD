<HTML>
<BODY>
<h2>CLientes MODIFICAR</h2></BR></BR>
<body>
	<h1>Formulario de Cliente - MODIFICAR</h1>
    <form action="M/M_Cliente.php" method="POST">
		<label>La PK del Cliente es:</label>
		<input type="text" name="PK_Cliente"><br><br>
        <label>El Nombre del Cliente es:</label>
		<input type="text" name="Nombre"><br><br>
        <label>El Celular del Cliente es:</label>
        <input type="text" name="Celular"><br><br>
        <label>La Direccion del Cliente es:</label>
        <input type="text" name="Direccion"><br><br>
        <label>El Correo del Cliente es:</label>
        <input type="text" name="Correo"><br><br>
        
        <input type="submit" value="Guardar">
    </FORM>
</BODY>
</HTML>
<?php
// Datos de conexión a la base de datos
$hostname = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "cafeteria";

// Crear una conexión a la base de datos
$conexion = new mysqli($hostname, $usuario, $contrasena, $base_de_datos);

// Verificar si la conexión tuvo éxito
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
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


// Cerrar la conexión a la base de datos
$conexion->close();
?>