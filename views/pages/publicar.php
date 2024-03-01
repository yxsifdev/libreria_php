<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar libro</title>
</head>

<body>
    <h1>Publicar Libro</h1>
    <form action="../../actions/libros/publicarProcess.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero"><br>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50"></textarea><br>
        <label for="cantidad_total">Cantidad Total:</label>
        <input type="number" id="cantidad_total" name="cantidad_total" required><br>
        <label for="cantidad_disponible">Cantidad Disponible:</label>
        <input type="number" id="cantidad_disponible" name="cantidad_disponible" required><br>
        <button type="submit" name="publicarProcess">Publicar Libro</button>
    </form>

    <br>
    <hr>
    <br>
    <a href="home.php">Home</a>
</body>

</html>