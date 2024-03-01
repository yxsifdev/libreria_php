<!DOCTYPE html>
<html lang="es" style="color-scheme: dark;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
</head>

<body>
<h2>Acceso</h2>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<p>{$_SESSION['error']}</p>";
        unset($_SESSION['error']);
    }
    ?>
    <form method="post" action="../../actions/auth/loginProcess.php">
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="loginProcess">Continuar</button>
    </form>
</body>

</html>