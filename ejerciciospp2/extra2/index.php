<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio extra 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>L’home del temps</h1>
    </header>
    <main>
        <?php
            $temperaturaTotal = 0;
            $contador = 0;
            for ($i = 0; $i < 10; $i++){
                if ($contador === 0){
                    if ($i === 9){
                        echo "<div class=\"solo\">";
                    }else{
                        echo "<div class=\"juntos\">";
                    }
                }
                $contador ++;
                
                $temperatura = rand(-10,40);
                if ($temperatura < 10){
                    echo "
                    <div class=\"fred\">
                        <p>$temperatura ºC</p>
                        <p>Fred</p>
                    </div>";
                }else if ($temperatura <= 25){
                    echo "
                    <div class=\"suau\">
                        <p>$temperatura ºC</p>
                        <p>Temperatura Suau</p>
                    </div>";
                }else{
                    echo "
                    <div class=\"calor\">
                        <p>$temperatura ºC</p>
                        <p>Calor</p>
                    </div>";
                }
                $temperaturaTotal += $temperatura;

                if($contador === 3){
                    $contador = 0;
                    echo "</div>";
                }
            }
            echo "</div>";
            $temperaturaMedia = $temperatura / 10;
            echo "<p class=\"tempMedia\">Mitjana de les temperatures: $temperaturaMedia ºC</p>";
        ?>
    </main>
    <footer></footer>
</body>
</html>