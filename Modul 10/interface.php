<?php

require_once('kelas/Mobil.php');

$mobil1 = new Mobil();

echo $mobil1->nyalakanMesin();

echo "<br>";

echo $mobil1->jalan();

?>