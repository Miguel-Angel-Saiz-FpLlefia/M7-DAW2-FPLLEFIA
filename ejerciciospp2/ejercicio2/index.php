<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Taules de multiplicar del 1 al 11</h1>
    </header>
    <main>
        <?php
            for($i=1; $i <= 11; $i++){
                echo "<div>";
                echo "<h1>Tabla del $i </h1>";
                for($j=1; $j<=10; $j++){
                    $p = $i * $j;
                    echo "<p>$i * $j = $p</p>";
                }
                echo "</div>";
            }
        ?>
    </main>
    <footer></footer>
</body>
</html>