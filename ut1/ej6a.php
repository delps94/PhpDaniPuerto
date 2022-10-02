<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej6a.php</title>
</head>
<body>
	<p>6. Programa ej6a.php mostrar el array resultante del ejercicio anterior en orden inverso. Previamente, se 
	deberá borrar el módulo mecanizado que no se imparte en el ciclo DAW.</p>
	<?php 

	$arr1=array("bases de datos", "entornos de desarrollo", "Programación"); 
	$arr2=array("Sistemas informaticos", "fol", "mecanizado"); 
	$arr3=array("desarrollo web es", "desarrollo web ec", "despliegue", "desarrollo interfaces", "ingles"); 

	array_pop($arr2); 

	$arr4=array_merge($arr1,$arr2,$arr3); 
	var_dump($arr4); 

	?>
</body>
</html>
