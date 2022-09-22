/* Convertir la IP a su representación en binario haciendo uso de la función printfo sprintf.
Únicamente se podrán utilizar funciones de cadenas de caracteres */ 
"<br/>
<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>

<?php
		$ip="192.18.16.204";
		
		$punto1=strpos ($ip,".",0);
		$punto2=strpos ($ip,".",($punto1+1));
		$punto3=strpos ($ip,".",($punto2+1));
		
		printf ("La ip $ip en binario es: %08b.%08b.%08b.%08b<br>",(substr($ip,0,$punto1)),
		(substr($ip,($punto1)+1,($punto2-$punto1))),
		(substr($ip,($punto2)+1,($punto3-$punto2))),
		(substr($ip,($punto3)+1,($punto3))));
		
		
	
?>
</BODY>
</HTML>
