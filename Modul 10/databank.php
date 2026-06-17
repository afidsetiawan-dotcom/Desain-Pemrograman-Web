<?php

require_once('kelas/akunBank.php');

$data1 = new akunBank("001", 10000);

$data1->setNama("Arjuna");

echo "<h2>Data Bank</h2>";

echo "Nama : " . $data1->getNama();

echo "<br>";

echo "Saldo Awal : Rp " . $data1->tampilUang();

echo "<br><br>";

// tambah uang
$data1->tambahUang(5000);

echo "Saldo Setelah Tambah : Rp " . $data1->tampilUang();

echo "<br><br>";

// kurangi uang
$data1->kurangiUang(2000);

echo "Saldo Setelah Kurang : Rp " . $data1->tampilUang();

echo "<br><br>";

echo "Pajak 11% : Rp " . $data1->hitungPajak();

?>