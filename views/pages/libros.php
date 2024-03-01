<?php
require_once("../../controllers/librosController.php");

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}

// 

$controller = new LibroController();
$libros = $controller->mostrarTodos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>

<body>
    <a href="home.php">Home</a>
    <a href="publicar.php">Publicar libro</a>
    <a href="../user/perfil.php">Perfil</a>
    <br>
    <h1><mark>Lista de Libros</mark></h1>
    <ol>
        <?php foreach ($libros as $libro) : ?>
            <li>
                <a href="option.php?id=<?php echo $libro['id']; ?>">
                    <?php echo $libro['titulo']; ?>
                </a>
                <p>Cantidad: <?php echo $libro['cantidad_disponible'] ?> / <?php echo $libro['cantidad_total'] ?></p>
            </li>
            <br>
        <?php endforeach; ?>
    </ol>

    <br>
    <hr>
    <br>
</body>

</html>