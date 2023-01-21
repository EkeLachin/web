<?php
$avtutar=2010; //alış veriş tutar
$indirim=0.02;
$odt=0; //Ödenecek tutar
if ($avtutar>500 and $avtutar<=2000)
    $indirim=0.05;
if ($avtutar>1000 and $avtutar<2000)
    $indirim=0.08;
if ($avtutar>2000)
    $indirim=0.15;

$odt=$avtutar-($avtutar*$indirim);
$kalan=2500-$odt;


echo "<u>İndirim oranı =</u> ".$indirim."<br><br><u>Ödenecek Tutar =</u>" .$odt.";
echo "<br><br><i>";
echo "Ayşenin elinde kalan parası= 0" .$kalan." ₺";
?>