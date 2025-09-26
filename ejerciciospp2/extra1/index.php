<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio extra 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Divisors d'un nombre i verificació de nombre</h1>
    </header>
    <main>
        <?php
            $contador = 0;
            $numeroAleat = rand(1,100);

            echo "<h3>Nombre generat: $numeroAleat</h3> <br>";
            echo "<p class=\"numeroAleatorio\">Divisors de $numeroAleat: <br>";

            echo "<div class=\"numerosJuntos\">";
            for($i = 1; $i <= $numeroAleat; $i++){
                if($numeroAleat % $i == 0){
                    echo "<p class=\"cartaNumero\">$i</p>";
                    $contador ++;
                }
            }
            echo "</div>";

            if ($contador === 2){
                echo "<p class=\"primer\">$numeroAleat és un nombre primer</p>";
            }else{
                echo "<p class=\"noPrimer\">$numeroAleat no és un nombre primer</p>";
            }
        ?>
    </main>
    <footer></footer>
</body>
</html>