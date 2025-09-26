<?php
    //Simples
    $dies = ["Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres"];

    echo "$dies[0] <br>"; //Dilluns
    echo "$dies[2] <br>"; //Dimecres
    echo "$dies[4] <br>"; //Divendres

    //Afegir un element al final
    $dies[] = "Dissabte";
    array_push($dies, "Diumenge");
    //Eliminar l'ultim element
    array_pop($dies);

    echo "<h1>Recorrer array con foreach</h1>";
    //Recorrer con foreach
    foreach($dies as $dia){
        echo "$dia <br>";
    }
?>