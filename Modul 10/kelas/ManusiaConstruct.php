<?php

class ManusiaConstruct
{
    protected $nama;
    protected $umur;

    // Constructor
    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Getter nama
    public function getNama()
    {
        return $this->nama;
    }

    // Getter umur
    public function getUmur()
    {
        return $this->umur;
    }
}

?>