<?php

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

// tampilkan Mangga
echo "saya suka " . $namaBuah[1]."<br>";
// tampilkan Jeruk
echo "saya suka " . $namaBuah[2]."<br>";
// tampilkan Apel
echo "saya suka " . $namaBuah[3]."<br>";
// tampilkan Melon
echo "saya suka " . $namaBuah[4]."<br>";

// array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Beni"=>"37 Tahun", "Joe"=>"40 Tahun");
$umur['ahmad']="50 Tahun";
echo "Umur andi adalah " . $umur['Andi'] . "<br>";
foreach ($umur as $nama => $u) {
    echo "$nama : $u <br>";
}

?>