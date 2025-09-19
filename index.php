<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>p1 php</title>
</head>
<body>
	<h1>Hola pp1 teoria</h1>

	<?php
		echo "<h2>Hola subtitulo</h2>";
		echo 'Hola mundo con comillas simples';
		echo "<br>"; //Para realizar el salto de linea

		$nom = "Miguel Angel";
		$apellido = 'Saiz';
		$edad = 21;
		$frase = "Hola soy $nom $apellido y tengo $edad años"; //Bien

		//$frase = 'Hola soy $nom $apellido y tengo $edad años'; Mal
		
		// Con comilla '' no se puede concanternar las variables en una frase,
		// ya que se copian literalmente;

		echo "Hola me llamo " . $nom ." " . $apellido . " y tengo " . $edad . " años";

		echo "<br>"; //Para realizar el salto de linea

		echo "$frase";

		//CONDICIONALES
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<h1>Condicionales</h1>";
		echo "<br>";

		if($edad < 22) {
			echo "eres mayor de edad";
		}else{
			"eres menor de edad";
		}
		// ==
		//%
		//!=
		// <= >= < >

		//BUCLES
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<h1> Bucles</h1>";
	?>

	<section class="div_padre">
		<h1>Numeros 0-10:</h1>
		
		<?php
			for($i = 0; $i <= 10; $i ++){
				echo "<div class=\"num_box\">Numero: $i <br></div>";
				//echo '<div class="num_box">Numero: ' . $i . '<br></div>';
				//echo "<div class='num_box'>Numero $i <br></div>";
			}
		?>
	</section>

	<style>
		.num_box{
			background-color: red;
			padding: 2rem;
		}
		.div_padre{
			background-color: green;
			gap: 1rem;
			display: flex;
			flex-wrap: wrap;
		}
	</style>
</body>
</html>