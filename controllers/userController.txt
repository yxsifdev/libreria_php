<?php
class userController
{
    private $model;

    public function __construct()
    {
        require_once("../../models/userModel.php");
        $this->model = new userModel();
    }

    public function guardar($nombre, $apellido, $edad)
    {
        $id = $this->model->insertar($nombre, $apellido, $edad);
        return ($id != false) ? header("Location: ../index.php") : header("Location: ../index.php");
    }

    // public function show($id)
    // {
    //     return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location: index.php");
    // }

    // public function index()
    // {
    //     return ($this->model->index()) ? $this->model->index() : false;
    // }

    // public function update($id, $nombre, $apellido, $fechaNa, $edad, $telefono, $email)
    // {
    //     return ($this->model->update($id, $nombre, $apellido, $fechaNa, $edad, $telefono, $email) != false) ? header("Location: show.php?id=" . $id) : header("Location: index.php");
    // }

    // public function delete($id)
    // {
    //     return ($this->model->delete($id)) ? header("Location: index.php") : header("Location: show.php?id=" . $id);
    // }
}
