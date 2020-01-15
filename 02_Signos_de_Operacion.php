<?php

	/*
		****** CONCATENACION ******
		- La concatenación es una operación que consiste en la unión 
		  de dos o más caracteres para desarrollar una cadena de 
		  caracteres, conocida en ingles como string.
		- Para concatenar caracteres o string, 
		  utilizamos el simbolo punto ( . )
	*/

	// Ejemplo de concatenación 

	$nombre1 = "Daniel";
	$nombre2 = "Alberto";
	echo $nombre1." ".$nombre2;
	echo '<br>';


	/*
		****** OPERADORES ARITMÉTICOS ******
	*/
	// Declarar variables e inicializar
	$variable1 = 2;
	$variable2 = 4;

	// Para sumar valores usamos el simbolo ( + )
	$resultado = $variable1 + $variable2;
	echo $resultado;
	echo '<br>';

	// Para restar valores usamos el simbolo ( - )
	$resultado = $variable1 - $variable2;
	echo $resultado;
	echo '<br>';

	// Para multiplicar valores usamos el simbolo ( * )
	$resultado = $variable1 * $variable2;
	echo $resultado;
	echo '<br>';

	// Para dividir valores usamos el simbolo ( / )
	$resultado = $variable1 / $variable2;
	echo $resultado;
	echo '<br>';

	/*
		Nota: Si los valores de las variables son númericos y encerrados entre comillas
		simples o dobles, las operaciones se realizaran de igual forma asumiendo que
		dichos valores son numericos y no lo que se esperaria de que salga error al ser
		esos valores un conjunto de caracteres (String).
	*/

?>