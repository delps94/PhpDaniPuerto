<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
$num="123";

$bin="";
if ($num==0) {
	echo "el $num en binario es $num"; 
}
else {
		echo "$num en binario es ";
while ($num>=1){
$bin2=$num%2;
$num/=2;
$bin=$bin.$bin2;
}

echo(strrev($bin)."<br>");
	}	

		
;
; 	 
?>
</BODY>
</HTML> 
