<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej5am.php</title>
</head>
<body>
	<p>5. Programa ej5am.php definir una matriz de 5x3 tal que en cada posición contenga el número 
		que resulta de sumar el número que identifica la columna con el número que identifica la fila del mismo, 
	imprimir los elementos de la matriz por columnas</p>
	<?php

	$arr=array(); 
	for ($i=0; $i<5; $i++) {
		for ($j=0; $j<3; $j++) {

			$arr[$i][$j]=$i+$j;
		} 

	}
	echo "<table border=1>";
	for ($i=0;$i<5;$i++){
		echo "<tr>";

		for ($j=0; $j<3; $j++) { 
			echo"<td>".$arr[$i][$j];
		}echo"</tr>";
	}
	echo "</table>";
	for($i=0;$i<3;$i++) {
		echo "columna ".($i+1)."-";
		for ($j=0;$j<5;$j++) {
			echo "<br>";
			echo $arr[$j][$i]. " ";
			
		}echo "<br>" ;
	}

	

	
	?>
</body>
</html>
