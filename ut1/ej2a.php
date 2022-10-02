<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej2a.php</title>
</head>
<body>
	<?php
	$sumaImpares=0;
	$impares=array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 37, 39); 
	$numDatos=count($impares);
	$indice=1;
	$sumaIndicesImpares=0; 
	$contImpares=0;
	$sumaIndicesPares=0;
	$contPares=0;
	$mediaImpa;
	$mediaPares;
	$sumaPares=0;
	
	for ($j=0; $j<$numDatos; $j++) {
		if ($j%2==0||$j==0) { 
			$sumaPares=$sumaPares+$impares[$j]; 
			$contPares++; 
			$mediaPares=$sumaPares/$contPares;

		}
		else {


			$sumaImpares=$sumaImpares+$impares[$j]; 
			$contImpares++; 
			$mediaImpa=$sumaImpares/$contImpares;


		}

	}
	echo "<table border = '1'>"; 
	echo "<tr><td>media pares</td><td> media Impares</td></tr>";
	echo"<tr><td>$mediaPares</td><td>$mediaImpa</td></tr>";

	?>
</body>
</html>
