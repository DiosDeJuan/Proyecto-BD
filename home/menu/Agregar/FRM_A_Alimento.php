<HTML>
<BODY>
<h2>Alimento AGREGAR</h2></BR></BR>
<body>
	<h1>Formulario de Alimento - Agregar</h1>
    <form action="A/A_Alimento.php" method="POST">
		<label>La PK del Alimento es:</label>
		<input type="text" name="PK_Alimento"><br><br>
        <label>El Nombre del Alimento es:</label>
		<input type="text" name="Nombre"><br><br>
        <label>Categoria </label>
                <label>del Alimento:</label>
		<select name="Categoria">
			<option value="Comida">Comida</option>
			<option value="Desayuno">Desayuno</option>
            <option value="Postre">Postre</option>
        </select><br><br>
        <label>El precio del Alimento es:</label>
        <input type="text" name="Precio"><br><br>
        <label>La Descripcion del Alimento es:</label>
        <input type="text" name="Descripcion"><br><br>
        <label>La Disponibilidad del Alimento es:</label>
        <input type="text" name="Disponibilidad"><br><br>
        
        <input type="submit" value="Guardar">
    </FORM>
</BODY>
</HTML>