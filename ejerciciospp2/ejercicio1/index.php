<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Numeros pares del 50 al 500</h1>
    </header>
    <main>
        <?php
            for ($i = 50; $i <= 500; $i++){
                if($i%2 === 0){
                    echo "<div>$i</div>";
                }
            }
        ?>
    </main>
    <footer></footer>
</body>
</html>