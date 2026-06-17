<?php

$siswa = [
    ["nama" => "Diaz", "poin" => 75],
    ["nama" => "Bayu", "poin" => 80],
    ["nama" => "Galih", "poin" => 65],
    ["nama" => "Wada", "poin" => 70],
    ["nama" => "Rudi", "poin" => 85],
    ["nama" => "Hanif", "poin" => 90],
    ["nama" => "Afid", "poin" => 95],
    ["nama" => "Opik", "poin" => 65],
];

// A
echo "Poin nomor urut 5: " . $siswa[4] ["poin"] . "<br><br>";

//B
echo "Siswa dengan poin 90:<br>";
foreach ($siswa as $s) {
    if ($s["poin"] == 90) {
        echo $s["nama"] . "<br>";
    }
}

// C
echo "<br>Siswa dengan poin 100:<br>";
$ada = false;

foreach ($siswa as $s) {
    if ($s["poin"] == 100) {
        echo $s["nama"] . "<br>";
        $ada = true;
    }
}

if (!$ada) {
    echo "Tidak ada";
}

?>