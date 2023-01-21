<?php
$a=5;
$b=3;
echo ($a>$b and $b>2);
?>
<br>
<?php
$a=6;
$b=6;
echo ($a==$b and $a<10);
?>
<br>
<?php
$a=2;
$b=4;
echo ($a==$b or $a>$b);
?>
<br>
<?php
$a=2;
$b=4;
echo ($a!=$b or $a>8);
?>
<br>
<?php
$a=9;
$b=7;
echo (!($a>$b));
?>
<br>
<?php
$a=5;
$b=5;
echo (!($a>=$b and $a<1));
?>
<br>
<?php
$a=10;
$b=15;
echo(!(($a>=$b xor $a>1) and ($a>=10)) ||(!($a>$b)));
?>
<br>
<?php
$anahtar=3>4;
echo $anahtar;
?>