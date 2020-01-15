<?php 
	/*
		****** ESTRUCTURA DE CONTROL IF-ELSE
		Es una estructura de control para validar de una forma u otra
	*/

	$miValor = true;

	if ( $miValor ){
		echo "Es Verdadero";
		// break;
	}else{
		echo "Es Falso";
	}

	echo "<br>";

	$valor1 = 4;
	$valor2 = 10;

	if ( $valor1 > $valor2 )
		echo "Valor 1 es mayor a Valor 2";
	else
		echo "Valor 1 es menor a Valor 2";

	/* 
		Nota : En php versión 5 se usaba el break para salir de la sentencia de control,
		       en php versión 7 ya no es posible saldria error.
	*/
 ?>