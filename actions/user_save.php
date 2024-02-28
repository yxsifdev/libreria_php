<?php
require_once("../controllers/userController.php");
$obj = new userController();
$obj->guardar($_POST['nombre'], $_POST['apellido'], $_POST['edad']);
