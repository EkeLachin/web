<?php
$kullanici_adi="ekem ya";
$sifre="31";
$kullanici_adi1="gazimtal";
$sifre1="123456";

if ($kullanici_adi==$kullanici_adi1 and  $sifre==$sifre1)
 echo "<strong><em> Programa Hoş Geldiniz </strong></em>";
 elseif($kullanici_adi==$kullanici_adi1 and $sifre!=$sifre1)
 echo "<strong><em> Hatalı Şifre Girdiniz </strong></em>";
elseif($kullanici_adi!=$kullanici_adi1 and $sifre==$sifre1)
 echo "<strong><em> Hatalı Kullanıcı Adı Girdiniz </strong></em>";
else
 echo "<strong><em> Kullanıcı Adı ve Şifre Hatalı </strong></em>";
?>