<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej6am.php</title>
</head>
<body>
	<p>6. Programa ej6am.php definir una matriz de 3x3 con números aleatorios. Generar un array que contenga 
		los valores máximos de cada fila y otro que contenga los promedios de la mismas. Mostrar el contenido 
	de ambos arrays por pantalla.</p>

	<?php 
	$num1=array();
	$num2=array();
	$num3=array();
	
	for($i=0;$i<3;$i++) { 

		$num1[$i]=random_int(0,10);
		$num2[$i]=random_int(0,10);
		$num3[$i]=random_int(0,10);
	}

	$numeros=array($num1,$num2,$num3);

	echo "<table border=1>";
	for ($h=0;$h<=2;$h++){
		echo "<tr>";

		for ($q=0; $q<=2; $q++) { 
			echo"<td>".$numeros[$h][$q];
		}echo"</tr>";
	}
	echo "</table>";
	$max1=0;
	$max2=0;
	$max3=0;
	$suma1=0;
	$suma2=0;
	$suma3=0;
	$cont=0;   
	for ($g=0;$g<3;$g++) {
		$suma1=$suma1+$num1[$g]; 
		$suma2=$suma2+$num2[$g]; 
		$suma3=$suma3+$num3[$g];
		$cont++;
		if($num1[$g]>$max1) {
			$max1=$num1[$g];
		}
		if($num2[$g]>$max2) {
			$max2=$num2[$g]; 
		}
		if ($num3[$g]>$max3) { 
			$max3=$num3[$g]; 
		}
	}
	$maximos=array($max1,$max2,$max3); 
	echo"array de los maximos de cada fila <br> [ ";
	for ($t=0;$t<3;$t++){
		echo $maximos[$t]." ";

	}

	echo " ] <br>";
	echo "la suma de la fila 1 es ".$suma1 ."<br>"; 
	echo "la suma de la fila 2 es ".$suma2."<br>"; 
	echo "la suma de la fila 3 es ".$suma3."<br>"; 
	$media1=round($suma1/$cont, 2); 
	$media2=round($suma2/$cont, 2); 
	$media3=round($suma3/$cont, 2); 
	
	;
	$medias=array($media1,$media2,$media3); 
	echo " array de las medias de cada fila <br> [ "; 
	for ($r=0; $r<3 ; $r++) {
		echo $medias[$r]. " " ;
	}
	echo "]";
	?>
</body>
</html>
