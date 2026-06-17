<?php

require_once('Manusia.php');

class Mahasiswa extends Manusia
{
    protected $nim;
    protected $jurusan;

    // Setter NIM
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    // Getter NIM
    public function getNim()
    {
        return $this->nim;
    }

    // Setter Jurusan
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    // Getter Jurusan
    public function getJurusan()
    {
        return $this->jurusan;
    }
}

?>