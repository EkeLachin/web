<!--örnek 2-->
<?php
$a = (true and false); // 0 (false)
echo $a. " (false) <br>";
// Parantez kaldırılıp denenebilir.
$a = true and false; // 1 (true)
echo $a. " (true)";
?>
<br>
<!--sıra sizde sayfa 39-->
<?php
$a = 15;
$b = 15;
$c = 16;
echo ($a == $b) && ($c > $b); //true and true
?>
