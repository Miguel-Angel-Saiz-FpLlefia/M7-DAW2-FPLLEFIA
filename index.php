<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>p1 php</title>
	</head>
	<body>
		<h1>Top Peliculas favoritas</h1>
		<h2>de Miguel</h2>

		<?php
			$pelicula1 = "Cars";
			$imagen1 = "<img src=\"img/Cars.jpg\" alt=\"Pelicula de cars\"";
			$valoracion1 = 4;
			if($valoracion1 < 5){
				$tdvaloracion1 = "<td class=\"bgRed\">$valoracion1</td>";
			}else{
				$tdvaloracion1 = "<td class=\"bgGreen\">$valoracion1</td>";
			}
			$pelicula2 = "Torrente";
			$imagen2 = "<img src=\"img/torrente.jpg\" alt=\"Pelicula de Torrente\"";
			$valoracion2 = 8;
			if($valoracion2 < 5){
				$tdvaloracion2 = "<td class=\"bgRed\">$valoracion2</td>";
			}else{
				$tdvaloracion2 = "<td class=\"bgGreen\">$valoracion2</td>";
			}
			$pelicula3 = "Lo imposible";
			$imagen3 = "<img src=\"img/loImposible.jpg\" alt=\"Pelicula de lo imposible\"";
			$valoracion3 = 7.4;
			if($valoracion3 < 5){
				$tdvaloracion3 = "<td class=\"bgRed\">$valoracion3</td>";
			}else{
				$tdvaloracion3 = "<td class=\"bgGreen\">$valoracion3</td>";
			}
			$pelicula4 = "Spiderman";
			$imagen4 = "<img src=\"img/spiderman.webp\" alt=\"Pelicula de spiderman\"";
			$valoracion4 = 2;
			if($valoracion4 < 5){
				$tdvaloracion4 = "<td class=\"bgRed\">$valoracion4</td>";
			}else{
				$tdvaloracion4 = "<td class=\"bgGreen\">$valoracion4</td>";
			}
			$pelicula5 = "La vida es bella";
			$imagen5 = "<img src=\"img/vidaBella.jpg\" alt=\"Pelicula de la vida es bella\"";
			$valoracion5 = 9.5;
			if($valoracion5 < 5){
				$tdvaloracion5 = "<td class=\"bgRed\">$valoracion5</td>";
			}else{
				$tdvaloracion5 = "<td class=\"bgGreen\">$valoracion5</td>";
			}
		?>
		<table>
			<thead>
				<td>Nombre</td>
				<td>Imagen</td>
				<td>Valoracion</td>
			</thead>
			<tbody>
				<?php
					for($i = 0; $i<5; $i++) {
						echo "<tr>
							<td>$pelicula$i</td>
							<td>$imagen$i</td>
							$tdvaloracion$i
						<tr>
					";
				?>
			</tbody>
		</table>

		<style>
			table{
				width: 100%; 
				border-collapse: collapse; 
				margin: 20px 0; 
				border: 1px solid black;
			}
				img{
				width: 50px;
				height: 50px;
			}
			.bgRed{
				background-color: red;
			}

			.bgGreen{
				background-color: green;
			}
			thead{
				background-color: yellow;
			}
		</style>
	</body>