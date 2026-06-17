<?php

require_once('kelas/AkunGame.php');

// membuat akun game
$player1 = new AkunGame("Midara", 10, 200);

echo "<h2>Profil Player</h2>";

echo "Username : " . $player1->getUsername();

echo "<br>";

echo "Level : " . $player1->getLevel();

echo "<br>";

echo "Diamond : " . $player1->getDiamond();

echo "<hr>";

// ganti nickname
$player1->setUsername("MidaraGaming");

// tambah diamond
$player1->tambahDiamond(500);

echo "<h2>Setelah Update</h2>";

echo "Username Baru : " . $player1->getUsername();

echo "<br>";

echo "Diamond Sekarang : " . $player1->getDiamond();

echo "<hr>";

// kurangi diamond
$player1->kurangiDiamond(300);

echo "<h2>Setelah Beli Item</h2>";

echo "Diamond Sekarang : " . $player1->getDiamond();

?>