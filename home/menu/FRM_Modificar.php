<!DOCTYPE html>
<html>
<head>
    <title>Selcciona a que Tabla quieres Modificarle un Registro</title>
</head>
<body>

<h2>Selecciona una página a la cual deseas Modificar un Registro:</h2>

<form action="Modificar/FRM_M_Alimento.php" method="post">
    <h2>Alimento:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Modificar/FRM_M_Bebida.php" method="post">
    <h2>Bebida:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Modificar/FRM_M_Cliente.php" method="post">
    <h2>Cliente:</h2>
    <input type="submit" value="Ir a la página">
</form>
<form action="Modificar/FRM_M_Empleado.php" method="post">
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