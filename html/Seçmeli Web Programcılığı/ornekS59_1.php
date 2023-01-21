<?php
$sayi1=15;
$sayi2=90;
$islem= "+";
switch ($islem)
    {
    case "+": $sonuc=$sayi1+$sayi2; break;
    case "-": $sonuc=$sayi1-$sayi2; break;
    case "*": $sonuc=$sayi1*$sayi2; break;
    default: $sonuc=$sayi1/$sayi2;
    }
    echo "$sayi1 $islem $sayi2=$sonuc";
?>