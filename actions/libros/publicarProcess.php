<?php
require_once("../../controllers/librosController.php");
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$descripcion = $_POST['descripcion'];
$cantidad_total = $_POST['cantidad_total'];
$cantidad_disponible = $_POST['cantidad_disponible'];

if ($cantidad_total > 100) {
    $cantidad_total = 100;
}

if ($cantidad_disponible > 100) {
    $cantidad_disponible = 100;
}

$obj = new LibroController();
$obj->publicarLibro($titulo, $autor, $genero, $descripcion, $cantidad_total, $cantidad_disponible);

header("Location: ../../views/pages/libros.php");
exit();
