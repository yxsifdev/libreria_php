<?php
require_once("../../controllers/librosController.php");

$controller = new LibroController();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $libro = $controller->mostrarLibro($id);
} else {
    $libro = null;
}
// 
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del libro</title>
</head>

<body>
    <h1>Información del Libro</h1>
    <?php if (!empty($libro)) : ?>
        <p>Título: <?php echo $libro['titulo']; ?></p>
        <p>Autor: <?php echo $libro['autor']; ?></p>
        <p>Descripción: <?php echo $libro['descripcion']; ?></p>
        <!-- Agrega más detalles del libro según sea necesario -->
    <?php else : ?>
        <p>Libro no encontrado.</p>
    <?php endif; ?>
    <form action="../../actions/libros/comprarProcess.php" method="post">
        <input type="hidden" name="libro_id" value="<?php echo $libro['id']; ?>">
        <input type="submit" name="comprar" value="Comprar">
    </form>
    <a href="alquilar.php?id=<?php echo $libro['id']; ?>">Alquilar</a>

</body>

</html>