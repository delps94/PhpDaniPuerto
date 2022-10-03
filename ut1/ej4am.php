<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej4am.php</title>
</head>
<body>
	<p>. Programa ej4am.phpa partir de la matriz del ejercicio anterior mostrar la fila y columna del elemento 
	mayor</p>
	<?php 
	$arr1=array(1,2,3,4,5); 
	$arr2=array(6,7,8,9,10); 
	$arr3=array(11,12,13,14,15); 
	$numeros=array($arr1,$arr2,$arr3); 
	$max=0;
	echo "<table border=1;>";

	for ($i=0;$i<=2;$i++){
		echo "<tr>";

		for ($j=0; $j<=4 ; $j++) { 
			echo"<td>".$numeros[$i][$j];
		}echo"</tr>";
	}
	echo "</table>";

	for ($i=0;$i<=2;$i++) { 
		for($j=0;$j<=4;$j++) {
			if ($numeros[$i][$j]>$max){
				$max=$numeros[$i][$j];
				$posI=$i;
				$posJ=$j; 
			}	
			

		}
	}
	$posI=$posI+1;
	$posJ=$posJ+1;
	echo "$max tiene la posicion $posI , $posJ";
	?>
</body>
</html>
