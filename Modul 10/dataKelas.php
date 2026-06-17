<?php

require_once('kelas/Mahasiswa.php');

$mhs1 = new Mahasiswa();

$mhs1->setNama("Afid Setiawan");
$mhs1->setUmur(20);
$mhs1->setNim("253307056");
$mhs1->setJurusan("Teknologi Informasi");

echo "<h2>Data Mahasiswa</h2>";

echo "Nama : " . $mhs1->getNama();

echo "<br>";

echo "Umur : " . $mhs1->getUmur();

echo "<br>";

echo "NIM : " . $mhs1->getNim();

echo "<br>";

echo "Jurusan : " . $mhs1->getJurusan();

echo "<br>";

echo $mhs1->getNIK();

?>