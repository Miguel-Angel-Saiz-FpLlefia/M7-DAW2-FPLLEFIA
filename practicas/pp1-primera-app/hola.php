<?php
    function sayHello($name) {
        echo "Hello $name!";
    }

    function sayGoodBye($name) {
        $fecha = date("Y-d-m");
        echo "$name at fecha: $fecha";
    }
?>

<html>
    <head>
        <title>Miguel Angel Saiz Angullo</title>
		<link rel="stylesheet" href="style.css">
    </head>
    <body>
		<header>
			<h1>Módulo 7 - Práctica 1. Mi primera aplicación en PHP</h1>
			<img src="logo-fpllefia.jfif" alt="">
			<div class="columnes">
				<img src="fotoPersonal.jpg" alt="">
				<p>
					<?php
					sayHello("Miguel Angel");
					?>
				</p>
			</div>
			<p>El comando phinfo() es una función la cual nos muestra toda la información del sobre la configuración de nuestro PHP.</p>
		</header>
		<footer>
			<p>
				<?php
					sayGoodBye("Miguel Angel Saiz Angullo");
				?>
			</p> 
    	</footer>
    </body>
    
</html>