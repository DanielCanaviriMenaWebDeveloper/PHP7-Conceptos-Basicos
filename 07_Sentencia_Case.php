<?php 

	$valorMaestro = 2;
	switch ($valorMaestro) {
		case 1:
			echo "Este es el caso 1";
			break;
		case 2:
			echo "Este es el caso 2";
			break;
		case 'variable':
			echo "Este es el caso 3";
			break;
		default:
			echo "No existe ese caso";
			break;
	}
 ?>