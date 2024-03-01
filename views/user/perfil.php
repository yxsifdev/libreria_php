<?php
// index.php
require_once("../../controllers/userController.php");

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit();
}

$controller = new UserController();
$id_usuario = $_SESSION['user_id'];
$compras = $controller->mostrarTablaCompra($id_usuario);
$alquileres = $controller->mostrarTablaAlquiler($id_usuario);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario <?php echo $_SESSION['user_id']; ?></title>
</head>

<body>
    <h1><mark>Perfíl de <?php echo $_SESSION['user_name'] . " " . $_SESSION['user_lastname'] . " (" . $_SESSION['user_id'] . ")"; ?></mark></h1>
    <a href="../pages/home.php">Home</a>
    <a href="../pages/libros.php">Libros</a>
    <a href="../pages/home.php">Publicar</a>
    <br>
    <h1>Tabla de compras</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Usuario</th>
                <th>ID Libro</th>
                <th>Fecha de compra</th>
                <!-- Agregar más columnas según la estructura de tu tabla -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compras as $fila) : ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['id_usuario']; ?></td>
                    <td><?php echo $fila['id_libro']; ?></td>
                    <td><?php echo $fila['fecha_compra']; ?></td>
                    <!-- Mostrar más columnas según la estructura de tu tabla -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <h1>Tabla de alquileres</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Usuario</th>
                <th>ID Libro</th>
                <th>Fecha de alquiler</th>
                <th>Fecha de devolución</th>
                <!-- Agregar más columnas según la estructura de tu tabla -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alquileres as $fila) : ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['id_usuario']; ?></td>
                    <td><?php echo $fila['id_libro']; ?></td>
                    <td><?php echo $fila['fecha_alquiler']; ?></td>
                    <td><?php echo $fila['fecha_devolucion']; ?></td>
                    <!-- Mostrar más columnas según la estructura de tu tabla -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <br>
    <form action="../../actions/libros/devolver.php" method="post">
        <label for="id_alquiler">ID del Alquiler:</label>
        <input type="text" id="id_alquiler" name="id_alquiler" required>
        <label for="id_libro">ID del Libro:</label>
        <input type="text" id="id_libro" name="id_libro" required>
        <button type="submit" name="devolver">Devolver Libro</button>
    </form>
</body>

</html>