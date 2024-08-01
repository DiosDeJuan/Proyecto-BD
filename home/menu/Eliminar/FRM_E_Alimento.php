<HTML>
<BODY>
<h2>Alimento ELIMINAR</h2></BR></BR>
<body>
	<h1>Formulario de Alimento - ELIMINAR</h1>
    <form action="E/E_Alimento.php" method="POST">
		<label>La PK del Alimento es:</label>
		<input type="text" name="PK_Alimento"><br><br>
       
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

$sql_select = "SELECT * FROM Alimento";

$resultado_select = $conexion->query($sql_select);

if ($resultado_select) {
    if ($resultado_select->num_rows > 0) {
        // Procesar los resultados
        while ($fila = $resultado_select->fetch_assoc()) {
            // Acceder a los datos de cada fila
            echo "PK: " . $fila['PK_Alimento'] . "<br>" . "Nombre: " . $fila['Nombre'] . "<br>" . "Categoria: " . $fila['Categoria'] . "<br>" . "Precio: " . $fila['Precio'] . "<br>" . "Descripcion: " . $fila['Descripcion'] . "<br>" . "Disponibilidad: " . $fila['Disponibilidad'] . "<br><br><br>";
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