<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
$num="192";
$n="0";
while ($n<$num) {
$n=decbin($n); 
$n=str_pad($n,8,"0",STR_PAD_LEFT);
$n=bindec($n);
$n++;

}
$numbinario=decbin($n);
$numbinariocompleto=str_pad($numbinario,8,"0",STR_PAD_LEFT);
echo "$num en binario es $numbinariocompleto";
; 	 
?>
</BODY>
</HTML>
