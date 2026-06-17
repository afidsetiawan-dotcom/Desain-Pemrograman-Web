<?php

require_once('Manusia.php');

class Dosen extends Manusia
{
    protected $matkul;

    public function setMatkul($matkul)
    {
        $this->matkul = $matkul;
    }

    public function getMatkul()
    {
        return $this->matkul;
    }
}

?>