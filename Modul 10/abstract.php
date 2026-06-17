<?php

require_once('kelas/KucingAbstract.php');

$kucing1 = new KucingAbstract("Milo");

echo "Nama Hewan : " . $kucing1->getNama();

echo "<br>";

echo "Suara : " . $kucing1->bersuara();

?>