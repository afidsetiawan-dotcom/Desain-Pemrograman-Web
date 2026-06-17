<?php

require_once('kelas/ManusiaConstruct.php');

// langsung isi data saat object dibuat
$orang1 = new ManusiaConstruct("Andi", 21);

echo "<h2>Belajar Constructor</h2>";

echo "Nama : " . $orang1->getNama();

echo "<br>";

echo "Umur : " . $orang1->getUmur();

?>