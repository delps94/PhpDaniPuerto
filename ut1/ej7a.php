<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej7a.php</title>
</head>
<body>
	<p>Programa ej7a.php crear un array asociativo con los nombres de 5 alumnos y la edad de cada uno de 
		ellos. Se pide:<br>
		a. Mostrar el contenido del array utilizando bucles.<br>
		b. Sitúa el puntero en la segunda posición del array y muestra su valor<br>
		c. Avanza una posición y muestra el valor<br>
		d. Coloca el puntero en la última posición y muestra el valor<br>
		e. Ordena el array por orden de edad (de menor a mayor) y muestra la primera posición del 
	array y la última.</p>
	<?php
	$alumnos=array("Pedro"=>"41","Dani"=>"27","Diana"=>"24","Manuel"=>"25","Marcos"=>"22"); 
//a
	foreach ($alumnos as $key => $value) {
		echo "alumno " . $key.  ", edad = ".$value;
		echo "<br>";
	}
//b
	echo "<br>";	
	$segundo=next($alumnos); 
	var_dump($segundo);


//c
	$tercero=next($alumnos); 
	var_dump($tercero); 

//d 
	$final=end($alumnos); 
	var_dump($final); 

//e 
	asort($alumnos); 
	foreach ($alumnos as $key => $value) {
		echo "alumno " . $key.  ", edad = ".$value;
		echo "<br>";
	}
	?>


</body>
</html>
