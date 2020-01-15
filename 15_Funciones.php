<?php 
	// Función normal de php
	function miFuncion(){
		return "Este es un número";
	}

	echo miFuncion();

	function miFuncion1(){
		echo "Este es otro número";
	}

	echo '<br>';	
	miFuncion1();

	function miFuncion2(){
		$array = array(5,6,3);
		return $array;
	}
	echo '<br>';
	echo '<pre>';
	print_r(miFuncion2());
	echo '</pre>';


	function operaciones($valor1, $valor2, $operador){
		switch ($operador) {
			case 'suma':
				return $valor1 + $valor2;
				break;
			case 'resta':
				return $valor1 - $valor2;
				break;
			case 'multiplicacion':
				return $valor1 * $valor2;
				break;
			case 'division':
				return $valor1 / $valor2;
				break;
			
			default:
				echo 'Error: Eliga una operación correcta';
				break;
		}
	}

	echo "La suma de 4 y 5 es : ".operaciones(4,5,'suma');
	echo '<br>';
	echo "La resta de 6 y 4 es : ".operaciones(6,4,'resta');


	
	


 ?>

