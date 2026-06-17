<?php

$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);
foreach ($angka as $a) {
    if ($a % 2 == 0) {
        echo "Nomor : $a Genap <br>";
    } else {
        echo "Nomor : $a Ganjil <br>";
    }
}

?>