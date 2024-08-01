<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cafeteria</title>
</head>
<body>
<h2>Ingreso de Usuario</h2>
    <form action="Procesar.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
        <input type="submit" value="Ingresar">
</body>
</html>
