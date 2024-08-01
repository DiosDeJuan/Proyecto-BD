<HTML>
<BODY>
<h2>Registrar Venta</h2></BR></BR>
<body>
	<h1>Formulario de Venta - Compra</h1>
    <form action="C/C_Agregar.php" method="POST">
		<label>La PK de la Compra es:</label>
		<input type="text" name="PK_Codigo"><br><br>
        <label>La cantitad de productos son:</label>
		<input type="number" name="Cantidad"><br><br>
        <label>Metodo </label>
                <label>de Pago:</label>
		<select name="Metodo">
			<option value="Credito">Credito</option>
			<option value="Efectivo">Efectivo</option>
        </select><br><br>
        <label>El dia en que se realizo la Compra es:  (2004-11-11)</label>
        <input type="text" name="Fecha"><br><br>
        <label>La PK del Alimento es:</label>
        <input type="number" name="Alimento"><br><br>
        <label>La PK de la Bebida es:</label>
        <input type="number" name="Bebida"><br><br>
        <label>La PK del Cliente es:</label>
        <input type="text" name="Cliente"><br><br>
        <label>Ingresa tu Nomina de Empleado:</label>
        <input type="text" name="Nomina"><br><br>
        
        <input type="submit" value="Guardar">
    </FORM>
</BODY>
</HTML>