<!DOCTYPE html>
<html lang="es" style="color-scheme: dark;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribirse</title>
</head>

<body>
    <h2>Inscribirse</h2>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<p>{$_SESSION['error']}</p>";
        unset($_SESSION['error']);
    }
    ?>
    <form method="post" action="../../actions/auth/registerProcess.php">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br><br>
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="registerProcess">Registrarse</button>
    </form>
</body>

</html>