<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej1a.php</title>
</head>
<body>
	
	<?php
	$i=1;
	$impares=array();
	while(count($impares)<20) {
		if ($i%2!=0) {
		array_push($impares, $i); 	
		}
		$i++;
	 
 	}
 	$suma=0;
 	$pos=0;
 	echo "<table border=1px>"; 
 	echo "<tr><td>Indice</td><td>valor</td><td>suma</td></tr>";
 	foreach ($impares as $valor) {
 		$suma=$suma+$valor; 
 		echo "<tr><td>$pos</td><td>$valor</td><td>$suma</td></tr>";
 	 	$pos++;
 	 } 
	?>
</body>
</html>
