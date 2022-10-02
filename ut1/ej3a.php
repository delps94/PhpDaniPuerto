<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej3a.php</title>
</head>
<body>
	<p>Programa ej3a.php definir un array y almacenar los 20 primeros números binarios. Mostrar en la salida 
		una tabla como la de la figura
	</p>
	<?php
	$numBinarios=array(); 
	echo "<table>"; 
	echo "<tr><td>Indice</td><td>binario</td><td>octal</td></tr>";
	
	for($i=0;$i<20;$i++){
		$numBinarios[$i]=decbin($i); 
		$octal=decoct($i);
		echo "<tr><td>$i</td><td>$numBinarios[$i]</td><td>$octal</td></tr>"; 	
	}
	
	
	




	?>
</body>
</html>
