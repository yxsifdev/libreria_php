<?php include("config/connect.php"); ?>
<?php include("templates/header.php"); ?>

<div style="padding: 20px;" class="mb-3">
    <form action="actions/user_save.php" method="post">
        <!--  -->
        <label for="" class="form-label"><strong>Name</strong></label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
        <br>
        <!--  -->
        <label for="" class="form-label"><strong>Apellido</strong></label>
        <input type="text" class="form-control" name="apellido" placeholder="Ingresa tus apellidos">
        <br>
        <!--  -->
        <label for="" class="form-label"><strong>Edad</strong></label>
        <input type="text" class="form-control" name="edad" placeholder="Ingresa tu edad">
        <br>
        <!--  -->
        <button type="submit" name="user_save" class="btn btn-primary">Enviar formulario</button>

    </form>

    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</div>


<?php include("templates/footer.php"); ?>