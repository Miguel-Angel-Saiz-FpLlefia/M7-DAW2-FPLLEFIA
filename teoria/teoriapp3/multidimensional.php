<?php
    $alumnos = [
        [
            "nombre" => "Miguel Angel",
            "apellido" => "Saiz",
            "edad" => 21,
            "curso" => "DAW2",
            "inteligente" => true
        ],
        [
            "nombre" => "Joel",
            "apellido" => "Vegas",
            "edad" => 20,
            "curso" => "DAW2",
            "inteligente" => true
        ],
        [
            "nombre" => "Genis",
            "apellido" => "Pro",
            "edad" => 21,
            "curso" => "Trabajador",
            "inteligente" => false
        ],
        [
            "nombre" => "Maria",
            "apellido" => "del Mar",
            "edad" => 21,
            "curso" => "NINI",
            "inteligente" => false
        ]
    ];


    foreach($alumnos as $alumno){
        //foreach($alumno as $clave => $a){
        //    echo "<h1>$clave: $a</h1>";
        //}
        echo "<h1>{$alumno['nombre']}</h1>";
        echo "<p>Edad: {$alumno['edad']}</p>";
        echo "<p>Curso: {$alumno['curso']}</p>";
        echo "<p>inteligente: {$alumno['inteligente']}</p>";
        echo "<hr>";
    }

?>