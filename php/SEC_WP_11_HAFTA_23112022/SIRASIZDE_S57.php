<?php
$aracT="hy";
$sure=10;
$parkUcret=0;
if($aracT=="personel")
{
    if($sure>1)
    {
        $parkUcret=1+(($sure-1)*1.05);
        echo "Otoparkta Kaldığınız süre $sure saattir. <br>
        <em><strong>Park Ücretiniz = <u>$parkUcret</u> ₺ </strong>";
    }
    else
    {
        $parkUcret=1;
        echo "Park Ücretiniz = $parkUcret";
    }
}
else
{
    if($sure>1)
    {
        $parkUcret=2+(($sure-1)*1.07);
        echo "Otoparkta Kaldığınız süre $sure saattir. <br>
        <em><strong>Park Ücretiniz = <u>$parkUcret</u> ₺ </strong>";
    }
    else
    {
        $parkUcret=2;
        echo "Park Ücretiniz = $parkUcret";
    }
}
?>