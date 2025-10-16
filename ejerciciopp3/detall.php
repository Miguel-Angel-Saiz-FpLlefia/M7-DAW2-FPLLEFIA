<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detall</title>
    <link rel="stylesheet" href="detall.css">
</head>
<body>
    <?php
        include ('peliculas.php'); 
        $id = $_GET['id'];
        echo "<img src=\"{$peliculas[$id]['imatge']}\" alt=\"Imagen de la pelicula\">";
        echo "<p>{$peliculas[$id]['sinopsi']}</p>";
        echo "<p>Durada: {$peliculas[$id]['durada']}</p>";
        echo "<p>Director: {$peliculas[$id]['director']}</p>";
        echo "<p>Genere: {$peliculas[$id]['genere']}</p>";
        echo "<a href=\"{$peliculas[$id]['url_trailer']}\">Veure trailer</a>";
        echo "<div id=\"horaris\">";
        foreach ($peliculas[$id]['horaris'] as $horari){
            echo "<p class=\"horario\">{$horari}</p>";
        }
        echo "</div>";
    ?>
</body>
</html>