<?php

$x = 5;
$y = 10;

//Arithmetic operators
echo "Penambahan ".$x + $y."<br>";
echo "Pengurangan ".$x - $y."<br>";
echo "Perkalian ".$x * $y."<br>";
echo "Pembagian ".$x / $y."<br>";
echo "Modulus ".$x % $y."<br>";
echo "Exponensial ".$x ** $y."<br>";
echo("<br>");

//Assignment operators
$x +=2; // $x = $x + 2
$y *= 2; // $y = $y * 2
echo "Penambahan x ".$x."<br>";
echo "Perkalian y ".$y."<br>";
echo("<br>");

//Increment/Decrement operators
echo "Isi ++x = ".++$x."<br>";
echo "Isi x++ = ".$x++."<br>";
echo "Isi x = ".$x."<br>";
echo("<br>");
echo "Isi x = ".$x."<br>";
echo("<br>");
echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y = ".$y."<br>";
echo("<br>");

//Conditioanl assignment operators
$user = "Andi darmawan";
// <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kodisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status."<br>";
$color = "";
//variable $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";

echo "<br>Apa perbedaan \$x++ dan ++\$x?? <br> perbedaannya yaitu kalau \$x++ itu langsung nambah 1 angka dan tampil di output,
sedangkan ++\$x itu nambah angka 1 dulu sebelum tampil di output baru ditampilkan atau nyimpan dulu baru tampil"
?>