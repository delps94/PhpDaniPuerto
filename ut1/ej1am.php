	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ej1am.php</title>
	</head>
	<body>
		<p>Programa ej1am.phpcrear una matriz de 3x3 con los sucesivos múltiplos de 2. Mostrar el contenido de la 
		matriz por filas</p>
		<?php 
		$inc=2; 
		$arr1=array(); 
		$arr2=array(); 
		$arr3=array(); 
		$incarr2=6; 
		$incarr3=12; 

		for ($i=0;$i<3;$i++) {
			$arr1[$i]=$inc; 
			$arr2[$i]=$inc+$incarr2; 
			$arr3[$i]=$inc+$incarr3; 
			$inc=$inc+2; 

		}
		echo "<table border=1;>";
		$pares=array($arr1,$arr2,$arr3); 
		for ($i=0;$i<=2;$i++){
			echo "<tr>";

			for ($j=0; $j<=2 ; $j++) { 
				echo"<td>".$pares[$i][$j];
			}echo"</tr>";
		}


		?>
	</body>
	</html> 
