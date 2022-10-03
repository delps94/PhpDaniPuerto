<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej8am.php</title>
</head>
<body>
	<p>8. Programa ej8am.php definir dos matrices de 3x3 y obtener:
		a. La suma de ambas matrices
	b. El producto de las mismas</p>

	<?php
		$num1=array();
		$num2=array();
		$num3=array();
		$num4=array();
		$num5=array();
		$num6=array();
		for($i=0;$i<3;$i++) { 

			$num1[$i]=random_int(0,10);
			$num2[$i]=random_int(0,10);
			$num3[$i]=random_int(0,10);
			$num4[$i]=random_int(0,10);
			$num5[$i]=random_int(0,10);
			$num6[$i]=random_int(0,10);
		}

		$numeros=array($num1,$num2,$num3);
		$numeros2=array($num4,$num5,$num6);
		echo "matriz 1 <br>";
			echo "<table border=1>";
	for ($h=0;$h<=2;$h++){
		echo "<tr>";

		for ($q=0; $q<=2; $q++) { 
			echo"<td>".$numeros[$h][$q];
		}echo"</tr>";
	}
	echo "</table>";
	echo "matriz 2 <br>";
		echo "<table border=1>";
	for ($h=0;$h<=2;$h++){
		echo "<tr>";
echo "<br>";
		for ($q=0; $q<=2; $q++) { 
			echo"<td>".$numeros2[$h][$q];
		}echo"</tr>";
	}
	echo "</table>";
echo "suma de las dos matrices";
		echo "<table border=1>";
	for ($h=0;$h<=2;$h++){
		echo "<tr>";
echo "<br>";
		for ($q=0; $q<=2; $q++) { 
			echo"<td>".($numeros2[$h][$q]+$numeros[$h][$q]);
		}echo"</tr>";
	}
	echo "</table>";
	echo "multiplicacion de las dos matrices <br>";
		echo "<table border=1>";
	for ($h=0;$h<=2;$h++){
		echo "<tr>";
echo "<br>";
		for ($q=0; $q<=2; $q++) { 
			echo"<td>".($numeros2[$h][$q]*$numeros[$h][$q]);
		}echo"</tr>";
	}
	echo "</table>";


	?>
</body>
</html>
