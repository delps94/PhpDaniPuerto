<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej4a.php</title>
</head>
<body>
	<p>Programa ej4a.phpa partir del array definido en el ejercicio anterior crear un nuevo array que almacene 
		los números binarios en orden inverso.
	</p>
	<?php
	$numReves= array();
	$numBinarios=array();
	for($i=0;$i<20;$i++){
		$numBinarios[$i]=decbin($i);
	}

	$numReves=array_reverse($numBinarios); 

var_dump($numReves);
	?>
</body>
</html>
