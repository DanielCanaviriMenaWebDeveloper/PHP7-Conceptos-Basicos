<?php 
	
	$edad = 31;

	// Validar que la edad se encuentre en un rango de 20 a 30 años.

	if ( $edad >= 20 && $edad <= 30 ){
		echo "La edad se encuentra dentro el rango solicitado";
	}else{
		echo "La edad no se encuentra dentro el rango solicitado";
	}
	/*
		Nota 1: 
		      El resultado de la condición sera Verdadera en el caso
		      que ambas condiciones seas Verdaderas, caso contrario
		      la condición resultante sera Falso. 
	*/
	echo "<br>";

	// Validar que el sexo de una persona sea "Masculino" o "Femenino".
	
	$sexo = "Masculino";

	if ( $sexo == "Masculino" || $sexo == "Femenino" ){
		echo "El sexo de la persona es valido";
	}else{
		echo "El sexo de la persona no es valido ingrese un dato correcto.";
	}

	/*
		Nota 2: 
			  Si una de las condiciones es Verdadera el resultado
		      es Verdadero, si ambas son Falsas el resultado sera
		      Falso. 
	*/


	/* 
		Nota 3:
			  El operador logico && es equivalente a usar and
			  El operador logico || es equivalente a usar or
	*/

    echo "<br>";

	// Operador de Negación ( ! ) 

	$expresion = true;

	if (!$expresion) { 
		echo "La expresión no es Verdadera";
	}else{
		echo "La expresión es Verdadera";
	}

	/*
		!expresión => Significa "Si el valor de expresión no es true"
		              o "Si el valor de expresión no es igual a 1"
	*/

 ?>