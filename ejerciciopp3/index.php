<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocine</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header">
            <h1>Cartelera</h1>
            <p>OCINE</p>
        </div>
    </header>
    <main>
        <hr>
        <?php
        include ('peliculas.php');
        $contador = 0;
        echo "<div class=\"juntos\">";
            foreach ($peliculas as $pelicula){
                if ($contador === 4){
                    echo "</div>";
                    $contador = 0;
                    echo "<div class=\"juntos\">";
                }
                echo "<div class=\"cardPelicula\">";
                echo "<img src='{$pelicula['imatge']}' alt='Imagen de la pelicula {$pelicula['nom']}'/>";
                echo "<div class=\"oculto\">";
                echo "<p>{$pelicula['nom']}</p>";
                foreach ($pelicula['horaris'] as $horari){
                    echo "<p class=\"horario\">{$horari}</p>";
                }
                echo "<a href=\"https://supreme-doodle-r4p4qxwqwwwrh6q6-8000.app.github.dev/detall.php\?&id={$contador}\"><button>Veure mes</button></a>";
                echo "<a href=\"{$pelicula['url_trailer']}\">Veure trailer</a>";
                echo "";
                echo "</div>";
                echo "</div>";
                $contador++;
            }
        ?>
    </main>
    <footer></footer>
</body>
</html>