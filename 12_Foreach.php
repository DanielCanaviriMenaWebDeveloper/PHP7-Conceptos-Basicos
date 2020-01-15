<?php 
	/*
		****** ESTRUCTURA DE CONTROL FOREACH ******
		Una estructura de control iterativa, que usa
		llaves o asociaciones de datos con indice.
	*/

	$arreglo = array(
		'Color1' => 'Rojo',
		'Color2' => 'Amarillo',
		'Color3' => 'Verde'
	);

	foreach ($arreglo as $color) {
		echo $color;
		echo "<br>";
	}

	// Con arreglos normales
	$array = array(1,2,3,4,5,6,7,8,9,0);

	foreach ($array as $key) {
		echo $key;
		echo "<br>";
	}
 ?>