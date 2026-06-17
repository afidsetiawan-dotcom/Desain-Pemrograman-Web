<?php

class Manusia
{
    protected $name;
    protected $umur;
    protected $nik = "123212131243243";

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function getNIK()
    {
        return "NIK : {$this->nik}";
    }
}

?>