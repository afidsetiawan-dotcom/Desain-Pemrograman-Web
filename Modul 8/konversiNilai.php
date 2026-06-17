<?php

/* Huruf   NIlai
    C    = 0 -> 59
    BC   = 60 -> 69
    B    = 70 -> 79
    AB   = 80 -> 89
    A    = 90 -> 100
*/

$nilai = 70; // coba ganti-ganti nanti

if ($nilai >= 90) {
    echo "Nilai huruf: A";
} elseif ($nilai >= 80) {
    echo "Nilai huruf: AB";
} elseif ($nilai >= 70) {
    echo "Nilai huruf: B";
} elseif ($nilai >= 60) {
    echo "Nilai huruf: BC";
} else {
    echo "Nilai huruf: C";
}

?>