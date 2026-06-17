<?php

require_once('kelas/PlayerVIP.php');

$vip1 = new PlayerVIP("MidaraVIP", 50, 5000, "VIP GOLD");

echo "<h2>Player VIP</h2>";

echo "Username : " . $vip1->getUsername();

echo "<br>";

echo "Level : " . $vip1->getLevel();

echo "<br>";

echo "Diamond : " . $vip1->getDiamond();

echo "<br>";

echo "VIP : " . $vip1->getVipLevel();

echo "<hr>";

// bonus diamond VIP
$vip1->bonusDiamond();

echo "Diamond Setelah Bonus : " . $vip1->getDiamond();

echo "<br>";

echo "Status : " . $vip1->statusAkun();

echo "<hr>";

echo $vip1->tampilInfo();

?>