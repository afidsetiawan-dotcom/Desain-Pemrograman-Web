<?php

$uang = 1387500;

$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

foreach ($pecahan as $p) {
    $jumlah = floor($uang / $p);
    $uang = $uang % $p;

    echo "Rp $p : $jumlah lembar<br>";
}

?>