<HTML>
<BODY>
<h2>Bebidas AGREGAR</h2></BR></BR>
<body>
	<h1>Formulario de Bebida - Agregar</h1>
    <form action="A/A_Bebida.php" method="POST">
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