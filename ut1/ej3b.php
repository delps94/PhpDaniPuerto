<HTML>
<HEAD><TITLE> EJ3B – Conversor Decimal a base 16 </TITLE></HEAD>
<BODY>
  <?php
  $num=222;
  $num2=$num;
  $base=16;
  $bin="";
  $bin3="";

  while ($num>=1){
    if ($num%$base>9){
        if ($num%$base==10)$bin2="A";
        if ($num%$base==11)$bin2="B";
        if ($num%$base==12)$bin2="C";
        if ($num%$base==13)$bin2="D";
        if ($num%$base==14)$bin2="E";
        if ($num%$base==15)$bin2="F";
    } else{
        $bin2=$num%$base;
    }
    $num/=$base;
    $bin=$bin.$bin2;
}
for ($i=strlen($bin);$i>=0;$i--){
    $bin3.=substr ($bin,$i,1);
}
echo ("El numero ".$num2." en base 10 es ".$bin3." en base ".$base);



?>  
</BODY>
</HTML>
