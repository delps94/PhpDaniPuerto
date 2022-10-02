<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ej8a.php</title>
</head>
<body>
	<p>Programa ej8a.php crear un array asociativo con los nombres de 5 alumnos y la nota de cada uno de 
		ellos en Bases Datos. Se pide:<br>
		a. Mostrar el alumno con mayor nota.<br>
		b. Mostrar el alumno con menor nota.<br>
	c. Media notas obtenidas por los alumno</p>
	<?php 
	$bbdd=array("Pedro"=>"10","Dani"=>"9","Diana"=>"6","Manuel"=>"7","Marcos"=>"3");
	$sumanotas=0;
	$contAlumnos=0;
	asort($bbdd);


	foreach ($bbdd as $alumno  => $nota) {
		
		echo "alumno " . $alumno.  ", nota en BBDD = ".$nota;
		echo "<br>";
		$sumanotas=$sumanotas+$nota; 
		$contAlumnos++;
	}
	echo ("<br>");
	echo( "la suma de las notas de los $contAlumnos alumnos  es $sumanotas puntos<br>" );
	$media=$sumanotas/$contAlumnos;

	echo ("la media de notas = $media"); 
	echo "<br>";
	echo "la nota mas alta es ";
	echo end($bbdd) ;
	echo "<br>";
	echo "la nota mas baja es "; 
	echo reset($bbdd);
	echo "<br>";
	echo "el alumno con la nota mas alta es "; 
	end($bbdd); 
	echo key($bbdd);
	echo "<br>";
	echo "el alumno con la nota mas baja es "; 
	reset($bbdd);
	echo key($bbdd);
	

	?>
</body>
</html>
