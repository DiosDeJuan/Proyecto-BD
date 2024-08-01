<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Selecciona que deseas Hacer:</h2>

<form action="Compra/FRM_C_Agregar.php" method="post">
    <h2>Registrar Compra:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Compra/FRM_C_Ver.php" method="post">
    <h2>Ver Compras:</h2>
    <input type="submit" value="Ir a la página">
</form>

<h1>Volver</h1>

    <!-- Formulario para redireccionar a administrador.php -->
    <form action="../administrador.php" method="get">
        <button type="submit" name="administrador">Menu</button>
    </form>

</body>
</html>