<!DOCTYPE html>
<html>
<head>
    <title>Selcciona a que Tabla que quieres VER</title>
</head>
<body>

<h2>Selecciona una página la cual deseas VER:</h2>

<form action="Ver/V_Alimento.php" method="post">
    <h2>Alimento:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Ver/V_Bebida.php" method="post">
    <h2>Bebida:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Ver/V_Cliente.php" method="post">
    <h2>Cliente:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Ver/V_Empleado.php" method="post">
    <h2>Empleado:</h2>
    <input type="submit" value="Ir a la página">
</form>

<h1>Volver</h1>

    <!-- Formulario para redireccionar a administrador.php -->
    <form action="../administrador.php" method="get">
        <button type="submit" name="administrador">Menu</button>
    </form>

</body>
</html>