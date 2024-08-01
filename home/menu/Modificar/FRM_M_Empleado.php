<HTML>
<BODY>
<h2>Empleado MODIFICAR</h2></BR></BR>
<body>
	<h1>Formulario de Empleado - MODIFICAR</h1>
    <form action="M/M_Empleado.php" method="POST">
		<label>La Nomina del Empleado es:</label>
		<input type="text" name="Nomina"><br><br>
        <label>El Nombre del Empleado es:</label>
		<input type="text" name="Nombre"><br><br>
        <label>El Apellido Paterno del Empleado es:</label>
		<input type="text" name="ApeP"><br><br>
        <label>El Apellido Materno del Empleado es:</label>
		<input type="text" name="ApeM"><br><br>
        <label>Cargo </label>
                <label>del Empleado:</label>
		<select name="Cargo">
			<option value="Cocinero">Cocinero</option>
			<option value="Repartidor de calle">Repartidor de calle</option>
            <option value="Mesero">Mesero</option>
            <option value="Cajero">Cajero</option>
            <option value="Barista">Barista</option>
            <option value="Gerente">Gerente</option>
        </select><br><br>
        <label>El Nacimiento del Empleado es:       (2004-11-11)</label>
        <input type="text" name="Nacimiento"><br><br>
        <label>El Celular del Empleado es:</label>
        <input type="text" name="Celular"><br><br>
        <label>La Direccion del Empleado es:</label>
        <input type="text" name="Direccion"><br><br>
        <label>los años de Trabajo con nosotros del Empleado son:</label>
        <input type="text" name="ATrabajo"><br><br>
        <label>Sexo </label>
                <label>del Empleado:</label>
        <select name="Sexo">
			<option value="M">Mujer</option>
			<option value="H">Hombre</option>
        </select><br><br>
        
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


// Cerrar la conexión a la base de datos
$conexion->close();
?>