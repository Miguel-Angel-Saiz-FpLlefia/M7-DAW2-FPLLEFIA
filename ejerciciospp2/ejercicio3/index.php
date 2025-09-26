<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Nombre aleatori parell o senar</h1>
    </header>
    <main>
        <?php
            $random = rand(0,100);
            if($random % 2 === 0){
                echo "<p class=\"par\">$random</p>";
            }else{
                echo "<p class=\"senar\">$random</p>";
            }
        ?>
    </main>
</body>
</html>