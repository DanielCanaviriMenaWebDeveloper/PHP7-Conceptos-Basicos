<?php 

	/*
		****** ESTRUCTURA DE CONTROL IF ******
		La sentencia if o estructura de control sirve para la validación
    	de sentencias.
	*/

	$numero1 = 5;
	$numero2 = 10;


	/*
		****** OPERADORES DE COMPARACIÓN ****** 

		- Podemos utilizar el signo mayor ( > ) o menor ( < ) para
		  la comparación de números.
		- Asi tambien podemos utilizar mayor o igual que ( >= ) o
		  menor o igual que ( <= ).
	*/
    
    // Estructura de un if 
    /* 
    	if ( condition ) {
    		# code...
    	}
    */

    if ( $numero2 > $numero1 ) {
    	echo "Si es mayor";
    }

    // Declaración de variables tipo boolean

	$bandera = true;

	echo "<br>";

	// Si $bandera es igual a true se realiza el proceso caso contrario no pasa nada.
	if ( $bandera ) 
		echo "Verdadero";
	
	/* 
		Interpretación del if donde la condición solo es una variable
		
		if( $bandera == true )
			Proceso;

		otra forma en que se interpreta es :

		if( $bandera == 1 )
			Proceso;
	*/ 
	echo "<br>";

	$numero3 = 3;
	$numero4 = 3;

	if ( $numero3 == $numero4)
		echo "El número ".$numero3." es igual al número ".$numero4;
	
	// Nota: Cuando usamos un solo igual lo tomara como asignación y la asignación es verdadera en php.
	echo "<br>";

	$numero5 = 3;
	$numero6 = 5;

	if ( $numero5 != $numero6 )
		echo "El número ".$numero5." es distinto del número ".$numero6;

	
 ?>