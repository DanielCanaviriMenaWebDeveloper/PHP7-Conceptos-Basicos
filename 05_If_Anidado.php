<?php 
	/*
		****** IF ANIDADO ******
		Un if anidado es una estructura de control que te permite validar
		multiples casos a la vez.
	*/

	$edad = 50;

	if ( $edad == 5 ){
		print "La edad es igual a 5";
	}elseif ( $edad == 10 ) {
		print "La edad es igual a 10";
	}elseif ( $edad == 15 ) {
		print "La edad es igual a 15";
	}else{
		print "La edad no es igual que 5 o 10 o 15";
	}

 ?>