<?php
    session_start();

    if (!isset($_SESSION['personajes'])) {
        $_SESSION['personajes'] = 
            [
                "id" => 0,
                "nombre" => "Iron Man",
                "imagen" => "https://hips.hearstapps.com/hmg-prod/images/iron-man-2008-1626678790.jpeg?crop=0.704225352112676xw:1xh;center,top&resize=980:*",
                "poder" => "volar",
                "descripcion" => "Toni Starck en modo robot"
            ];
    }

    // Funcion para añadir personaje
    function agregarPersonaje($nombre, $img, $poder, $desc) {
        array_push($_SESSION['personajes'],
            [
                "nombre" => $nombre,
                "imagen" => $img,
                "poder" => $poder,
                "descripcion" => $desc
            ] 
        );
    }

    //Editar un personaje
    function editarPersonaje($id, $nombre, $img, $poder, $desc) {
        //Comprovamos id
        if(isset($_SESSION['personajes'][$id])) {
            $_SESSION['personajes'][$id] = [
                "id" => $id,
                "nombre" => $nombre,
                "imagen" => $img,
                "poder" => $poder,
                "descripcion" => $desc
            ];
        }
    }



