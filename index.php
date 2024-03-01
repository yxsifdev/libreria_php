<?php
include("config/connect.php");

session_start();
if (isset($_SESSION['user_id'])) {
    //Si ya está en sesión
    header("Location: views/pages/home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es" style="color-scheme: dark;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>

    <h1>Inicio(index.php)</h1>
    <a href="views/auth/login.php">Login</a>
    <a href="views/auth/register.php">Register</a>

</body>

</html>