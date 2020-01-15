<?php 

	$var = 'Daniel Alberto Canaviri Mena';
	$fecha = '27-07-2019';

	/*
		xplode es una función que convierte un String a un arreglo
		dependiendo de la construcción pedida.
	*/

	$datos = explode(' ', $var);
	var_dump($datos);
	echo '<br>';
	echo $datos[0];
	echo '<br>';
	echo $datos[1];
	echo '<br>';
	echo $datos[2];
	echo '<br>';
	echo $datos[3];
	echo '<br>';

	for($i=0; $i<count($datos); $i++){
		echo $datos[$i];
		echo '<br>';
	}

	$arrayFecha = explode('-', $fecha);
	echo 'Dia: '.$arrayFecha[0];
	echo '<br>';
	echo 'Mes: '.$arrayFecha[1];
	echo '<br>';
	echo 'Año: '.$arrayFecha[2];
	echo '<br>';
	echo $año = $arrayFecha[2];
	echo '<br>';

	// Otro Ejemplo 

	$colores = 'Rojo/Amarillo/Verde';

	$arrayColores = explode('/', $colores);

	print_r($arrayColores);
	echo '<br>';

	echo '<pre>';
	print_r($arrayColores);
	echo '</pre>';

?>