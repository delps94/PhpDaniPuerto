<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej5a.php</title>

</head>
<body>
	<p>Programa ej5a.ph pdefinir tres arrays con los siguientes valores relativos a módulos que se imparten en 
		el ciclo DAW:
		“Bases Datos”, “Entornos Desarrollo”, “Programación”
		“Sistemas Informáticos”,”FOL”,”Mecanizado”
		“Desarrollo Web ES”,”Desarrollo Web EC”,”Despliegue”,”Desarrollo Interfaces”, “Inglés”
		Se pide:
		a. Unir los 3 arrays en uno único sin utilizar funciones de arrays
		b. Unir los 3 arrays en uno único usando la función array_merge()
		c. Unir los 3 arrays en uno único usando la función array_push()
	</p>
	<?php 
	$arr1=array("bases de datos", "entornos de desarrollo", "Programación"); 
	$arr2=array("Sistemas informaticos", "fol", "mecanizado"); 
	$arr3=array("desarrollo web es", "desarrollo web ec", "despliegue", "desarrollo interfaces", "ingles"); 

	//a
	$arr4=array(); 

	for ($i=0;$i<count($arr1);$i++) {
		$arr4[$i]=$arr1[$i]; 
	}
	for ($i=0;$i<count($arr2) ; $i++) {
		$arr4[$i+count($arr1)]=$arr2[$i];  
		// code...
	}
	for($i=0;$i<count($arr3);$i++) {
		$arr4[$i+count($arr1)+count($arr2)]=$arr3[$i]; 
	}	var_dump($arr4);
	//b 

	$conArrayMerge=array_merge($arr1,$arr2,$arr3); 
	var_dump($conArrayMerge);

	//c
	foreach ($arr2 as $value) {
		array_push($arr1, $value);
	}
	foreach ($arr3 as $value) {
		array_push($arr1, $value);
	}
	var_dump($arr1);
	?>
</body>
</html>
