<?php
    session_start();
    require_once "functions.php";

    //Primer paso: Comprovar si venimos para editar o para añadir
    $editMode = false; //Nos dice si estamos editando o añadiendo
    $id = null;
    $nombre = $img = $poder = $desc = "";

    //Si hay un ID en la URL estamos editando

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        if (isset($_SESSION['personajes'][$id])) {
            $editMode = true;
            $personaje = $_SESSION['personajes'][$id];

            $nombre = $personaje['nombre'];
            $img = $personaje['imagen'];
            $poder = $personaje['poder'];
            $desc = $personaje['descripcion'];
        }
    }

    //Segundo paso: Procesar el form (POST)
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $nombre = $_POST['nombre'];
        $img = $_POST['imagen'];
        $poder = $_POST['poder'];
        $desc = $_POST['descripcion'];
    }

    if($editMode) {
        editarPersonaje($id, $nombre, $img, $poder, $desc);
    }else{
        agregarPersonaje($nombre, $img, $poder, $desc);
    }