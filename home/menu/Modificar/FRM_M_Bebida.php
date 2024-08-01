<HTML>
<BODY>
<h2>Bebidas MODIFICAR</h2></BR></BR>
<body>
	<h1>Formulario de Bebida - MODIFICAR</h1>
    <form action="M/M_Bebida.php" method="POST">
		<label>La PK de la Bebida es:</label>
		<input type="text" name="PK_Bebida"><br><br>
        <label>El Nombre de la Bebida es:</label>
		<input type="text" name="Nombre"><br><br>
        <label>Categoria </label>
                <label>de la Bebida:</label>
		<select name="Categoria">
			<option value="Bebida fria">Bebida fria</option>
			<option value="Bebida caliente">Bebida caliente</option>
        </select><br><br>
        <label>El precio de la Bebida es:</label>
        <input type="text" name="Precio"><br><br>
        <label>La Descripcion de la Bebida es:</label>
        <input type="text" name="Descripcion"><br><br>
        <label>La Disponibilidad de la Bebida es:</label>
        <input type="text" name="Disponibilidad"><br><br>
        
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


// Cerrar la conexión a la base de datos
$conexion->close();
?>