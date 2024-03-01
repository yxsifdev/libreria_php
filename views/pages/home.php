<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Home(home.php)</h1>
    <hr>
    <h2>ID:</h2>
    <p><?php echo $_SESSION['user_id']; ?></p>
    <hr>
    <h2>Email:</h2>
    <p><?php echo $_SESSION['user_email'] ?></p>
    <hr>
    <h2>Nombre:</h2>
    <p><?php echo $_SESSION['user_name']; ?></p>
    <hr>
    <h2>Apellido:</h2>
    <p><?php echo $_SESSION['user_lastname']; ?></p>
    <hr>

    <a href="../../actions/auth/logout.php">Cerrar sesión</a>
    <br>
    <hr>
    <br>
    <a href="libros.php">Libros</a>
    <a href="publicar.php">Publicar libro</a>
    <a href="../user/perfil.php?id=<?php echo $_SESSION['user_id']; ?>">Perfíl</a>
</body>

</html>