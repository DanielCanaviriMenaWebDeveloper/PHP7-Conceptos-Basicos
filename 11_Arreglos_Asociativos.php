<?php 
	/*
		****** ARREGLOS ASOCIATIVOS *****
		Es un tipo de dato que puede almacenar n datos, 
		pero en lugar de guardar por indice se le proporciona
		una llave o nombre a dicho dato.
	*/

	$arreglo = array("Coche" => "verde", "Moto" => "roja", "Avion" => "gris");
	var_dump($arreglo);
	echo "<br>";

	// Como acceder a los elementos del arreglo
	echo $arreglo["Coche"];
	echo "<br>";
	echo $arreglo["Avion"];
	echo "<br>";

 ?>