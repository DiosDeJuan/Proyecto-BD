<HTML>
<BODY>
<h2>Empleado AGREGAR</h2></BR></BR>
<body>
	<h1>Formulario de Empleado - Agregar</h1>
    <form action="A/A_Empleado.php" method="POST">
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