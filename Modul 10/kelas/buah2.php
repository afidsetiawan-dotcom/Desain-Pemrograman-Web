<?php

class Buah
{
    protected $nama;
    protected $warna;

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
}

// class turunan
class Apel extends Buah
{
    private $rasa;

    public function setRasa($rasa)
    {
        $this->rasa = $rasa;
    }

    public function getRasa()
    {
        return $this->rasa;
    }
}

?>