<?php

abstract class HewanAbstract
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    // abstract method
    abstract public function bersuara();
}

?>