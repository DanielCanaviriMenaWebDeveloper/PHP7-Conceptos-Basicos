<?php 
	/*
		****** ESTRUCTURA DE CONTROL WHILE ******
		- Es una estructura de control iterativa o repetitiva
		  que funciona siempre y cuando se cumpla una condición dada.
	*/
	// Realizar la tabla de multiplicar del número 6
	// con la estructura repetitiva while.
	$contador = 1;
	$numero = 6;
	while($contador <= 10){
		echo $numero." x ".$contador." = ".$numero*$contador;
		echo ("<br>");
		$contador = $contador + 1; 
	}


	// Realizar el proceso mientras se cumpla la condición 

	$condicion = 0;
	while ($condicion < 10){
		echo "Se cumple la condición";
		echo "<br>";
		echo $condicion; 
		$condicion++;
		echo "<br>";
	}

	/*
		La sentencia 24 y 25 es lo mismo que hacer 
		echo $condicion++; considerando que primero se imprimira el 
		valor de $condicion y luego se realizara el incremento en 1
	*/

	// Como hacer un while infinito 

	while (true){
		echo "While infinito";
		echo "<br>";
	}

 ?>