<?php
    
    $alumnos = [
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 21,
        "curso" => "DAW2",
        "inteligente" => true
    ];

    echo "$alumnos";

    echo "<br>";

    var_dump($alumnos); //Se muestra todo sobre la variable

    echo "<br>";

    print_r($alumnos);

    echo "<br>";

    echo $alumnos["nombre"];
    echo "<br>";

    $alumnos["email"] = "juan.perez@example.com";

    echo var_dump($alumnos);

    echo "<br>";

    echo "<h1>Recorrer con foreach:</h1>";

    foreach ($alumnos as $clave => $alumno){
        echo "<h1>$clave: $alumno</h1>";
    }


?>