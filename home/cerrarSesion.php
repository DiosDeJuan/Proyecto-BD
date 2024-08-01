<?php
// Inicia la sesión para poder cerrarla despues
session_start();

// Destruye la sesión
session_destroy();

// Redirige a la página de inicio
header("Location: ../FRM_Cafeteria.php");
exit();
?>
