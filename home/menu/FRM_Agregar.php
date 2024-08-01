<!DOCTYPE html>
<html>
<head>
    <title>Selcciona a que Tabla quieres Agregar un Registro</title>
</head>
<body>

<h2>Selecciona una página a la cual deseas Agregar un Registro:</h2>

<form action="Agregar/FRM_A_Alimento.php" method="post">
    <h2>Alimento:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Agregar/FRM_A_Bebida.php" method="post">
    <h2>Bebida:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Agregar/FRM_A_Cliente.php" method="post">
    <h2>Cliente:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Agregar/FRM_A_Empleado.php" method="post">
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