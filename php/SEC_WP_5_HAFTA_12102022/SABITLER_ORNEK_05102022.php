<?php
define("SABIT", "Hello world.");
echo SABIT; // çıktısı: "Hello world."
echo sabit; // çıktısı: "sabit" Ayrıca bir uyarı çıktılanır.

define("SELAMLAMA", "Hello you.", true);
echo SELAMLAMA; // çıktısı: "Hello you."
echo selamlama; // çıktısı: "Hello you."

// PHP 7 ve sonrasında çalışır
define('HAYVANLAR',array(
    'köpek',
    'kedi',
    'kuş'
));
echo HAYVANLAR[1]; // çıktısı: "kedi"

?>