<?php

require_once('kelas/Kucing.php');

$kucing1 = new Kucing("Milo", 2);

$kucing1->setWarna("Putih");

echo "<h2>Data Kucing</h2>";

echo "Nama : " . $kucing1->getNama();

echo "<br>";

echo "Umur : " . $kucing1->getUmur();

echo "<br>";

echo "Warna : " . $kucing1->getWarna();

echo "<br><br>";

// setter mengubah umur
$kucing1->setUmur(3);

echo "Umur setelah diubah : " . $kucing1->getUmur();

?>