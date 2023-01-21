<!DOCTYPE html>
<head>
    <title>Table Etiketi</title>
</head>
<body>
<?php
echo "<table border = '1px' >";//table açılıyor
 //arasına for döngü kodları yazılacak
echo "</table>";//table kapatılıyor
for($satir=1; $satir <4; $satir++)
 {
echo "<tr>";//satır açılıyor
 //arasına sütunları eklemek için gerekli for döngü kodları yazılacak
echo "</tr>";//satır kapatılıyor
 }
 for($sutun = 1; $sutun<4; $sutun++)
 {
 echo " <td>$satir satır $sütun sütun</td> ";
//hücreler oluşturup ekrana 1 satır 2 sütun gibi değişen değerler yazar
 }
 ?>
</body>
</html>