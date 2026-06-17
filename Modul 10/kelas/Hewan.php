<?php

class Hewan
{
    protected $nama;
    protected $umur;

    // constructor
    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // getter nama
    public function getNama()
    {
        return $this->nama;
    }

    // getter umur
    public function getUmur()
    {
        return $this->umur;
    }

    // setter umur
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
}

?>