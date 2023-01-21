<!-- sıra sizde sayfa 44-->
<?php
$a=5;
$b=3;
echo ($a>$b and $b>2);
echo "<br><br>";

$a=6;
$b=6;
echo ($a==$b and $a<10);
echo "<br><br>";

$a=2;
$b=4;
echo ($a==$b or $a>$b);
echo "<br><br>";

$a=2;
$b=4;
echo ($a!=$b or $a>8);
echo "<br><br>";

$a=9;
$b=7;
echo (!($a>$b));
echo "<br><br>";

$a=5;
$b=5;
echo (!($a>=$b and $a<1));
echo "<br><br>";

$a=10;
$b=15;
echo(!(($a>=$b xor $a>1) and ($a>=10)) ||(!($a>$b)));
echo "<br><br>";

$anahtar=3>4;
echo $anahtar;
?>

