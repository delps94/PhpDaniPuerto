<HTML>
<HEAD><TITLE> EJ5B – Tabla Multiplicar con TD</TITLE></HEAD>
<BODY>
	<?php
	$num="5";

	echo "<table border=2>"; 
	for ($i=1;$i<=10;$i++){
		echo "<tr>";
		echo "<td>$num x $i</td>";
		$res=$num*$i;
		echo "<td>$res</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>

</table>
</BODY>
</HTML>
