<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej2am.php</title>
</head>
<body>
	<p>Programa ej2am.php modificar el ejercicio anterior para mostrar la suma de los elementos por filas y por 
	columnas. Los valores se almacenarán en dos arrays.</p>
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
	$sumarr1=array_sum($arr1);
	$sumarr2=array_sum($arr2); 
	$sumarr3=array_sum($arr3); 

	$sumaFilas=array($sumarr1,$sumarr2,$sumarr3); 
	echo "SUMA FILAS:";
	echo "<table border=1>"; 
	for ($i=0;$i<=2;$i++) {
		echo "<tr>";
		echo "<td>" .$sumaFilas[$i]; 
		echo "</tr>";
	}
	echo "</table>";
	echo "<br>";
	echo "SUMA DE COLUMNAS";
	
	for($j=0;$j<1;$j++) {
		$SumaPrimeraCol=$arr1[$j]+$arr2[$j]+$arr3[$j]; 

	}
	for($h=1;$h<2;$h++) {
		$SumaSegundaCol=$arr1[$h]+$arr2[$h]+$arr3[$h]; 

	}
	for($k=2;$k<3;$k++) {
		$SumaTerceraCol=$arr1[$k]+$arr2[$k]+$arr3[$k];


	}
	$arrCol=array($SumaPrimeraCol,$SumaSegundaCol,$SumaTerceraCol);
	echo "<table border=1>"; 
	for ($b=0;$b<3;$b++) { 
		echo "<td>".$arrCol[$b];
	} 

	?>
</body>
</html>
