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
    <title>Document</title>
</head>

<body>
    <?php if (!empty($libro)) : ?>
        <h1>Seleccionar fecha de devolución</h1>
        <form action="../../actions/libros/alquilarProcess.php" method="POST">
            <input type="hidden" name="libro_id" value="<?php echo $_GET['id']; ?>">
            <label for="fecha_devolucion">Fecha de devolución:</label>
            <input type="date" id="fecha_devolucion" name="fecha_devolucion" required>
            <button type="submit" name="alquilar">Alquilar</button>
        </form>
    <?php else : ?>
        <p>Libro no encontrado.</p>
    <?php endif; ?>
</body>

</html>