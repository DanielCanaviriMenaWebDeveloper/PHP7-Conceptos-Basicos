<?php 
	
	$arreglo = array();
	$arreglo[0] = "Daniel";
	$arreglo[1] = 10;
	$arreglo[2] = "Facultad";
	$arreglo[3] = true;
	$arreglo[4] = 10.5;
	

	// Permite ver la información que contiene una expresión
	var_dump($arreglo); 

	echo "<br>";

	// Mostrar información de un un arreglo 
	echo $arreglo[2];
	echo "<br>";
	echo $arreglo[1] + 5;
	echo "<br> **** DATOS DEL ARREGLO ****<br>";

	// Recorriendo el arreglo
	for($i=0;$i<count($arreglo);$i++){
		echo $arreglo[$i];
		echo "<br>";

		// Haciendo validaciones
		if($arreglo[$i]=="Facultad"){
			echo "Felicidades encontraste el dato <br>";
		}
		// Si true es igual a "Facultad" dara true 
		// Tambien el momento de mostrar el valor true sera igual a 1.

	}

	/*
		La función count cuya sintaxis es: 
			count(var);
		Obtiene la cantidad de elementos de un arreglo
	*/
	echo "El arreglo tiene : ".count($arreglo)." elementos<br>";

	/*
		LLenando el arreglo desde el inicio o por posición
	*/
	$array = array("Carlos", "Daniel", "Kin", 12, 23.5, 45);
	var_dump($array);
	echo "<br>";
 ?>	