
<?php
$yazili1=50;
$yazili2=10;
$performans1=60;
$performans2=60;

if($yazili1== "" ||$yazili2==""||$performans1==""||$performans2=="")
{
    echo "<em><strong>Puanlardan biri eksik girilmiş </em></strong>";
}
else
{
if($yazili1 < 0 || $yazili2> 100|| $yazili2 < 0 || $yazili2>100 || $performans1 < 0 || $performans1> 100 || $performans2 < 0 || $performans2> 100)
{
    echo "<em><strong>Hatalı Puan Girilmiş</em></strong>";
}
else
{ 
    $ortalama=($yazili1+$yazili2+$performans1+$performans2)/4;
    if($ortalama>=50) 
        echo "<em><strong>Geçti</em></strong>";
    else 
        echo "<em><strong>Kaldı</em></strong>";
}
}
?>