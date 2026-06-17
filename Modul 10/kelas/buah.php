<?php

class Buah
{
    public $nama;
    protected $warna;
    private $harga;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga;
    }
}

$apel = new Buah();

$apel->setNama("Apel");
$apel->setWarna("Merah");
$apel->setHarga(5000);

echo $apel->getNama();

echo "<br>";

echo $apel->getWarna();

echo "<br>";

echo $apel->getHarga();

?>