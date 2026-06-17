<?php

require_once('kelas/buah2.php');

$apel1 = new Apel();

$apel1->setNama("Apel Fuji");
$apel1->setWarna("Merah");
$apel1->setRasa("Manis");

echo "<h2>Data Buah</h2>";

echo "Nama Buah : " . $apel1->getNama();

echo "<br>";

echo "Warna : " . $apel1->getWarna();

echo "<br>";

echo "Rasa : " . $apel1->getRasa();

?>