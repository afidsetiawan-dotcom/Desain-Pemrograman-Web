<?php

require_once('kelas/Mahasiswa.php');
require_once('kelas/Dosen.php');

$mahasiswa1 = new Mahasiswa();

$mahasiswa1->setNama("Andi Pratama");
$mahasiswa1->setUmur(21);
$mahasiswa1->setNim("22334455");
$mahasiswa1->setJurusan("Teknologi Informasi");

echo "Nama : " . $mahasiswa1->getNama();

echo "<br>";

echo "Umur : " . $mahasiswa1->getUmur();

echo "<br>";

echo "NIM : " . $mahasiswa1->getNim();

echo "<br>";

echo "Jurusan : " . $mahasiswa1->getJurusan();

echo "<br>";

echo $mahasiswa1->getNIK();

echo "<hr>";

echo "<h2>Data Dosen</h2>";

$dosen1 = new Dosen();

$dosen1->setNama("Pak Ang");
$dosen1->setUmur(45);
$dosen1->setMatkul("Pemrograman Web");

echo "Nama Dosen : " . $dosen1->getNama();

echo "<br>";

echo "Umur : " . $dosen1->getUmur();

echo "<br>";

echo "Matkul : " . $dosen1->getMatkul();

echo "<br>";

echo $dosen1->getNIK();


?>