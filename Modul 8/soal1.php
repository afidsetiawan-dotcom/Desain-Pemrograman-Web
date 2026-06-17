<?php

$gaji_pokok = 3250000;
$tunjangan = 1200000;

// gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan;

// pajak 10%
$pajak = 0.10 * $gaji_kotor;

// gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

echo "Gaji Kotor: Rp " . $gaji_kotor . "<br>";
echo "Pajak: Rp " . $pajak . "<br>";
echo "Gaji Bersih: Rp " . $gaji_bersih;

?>