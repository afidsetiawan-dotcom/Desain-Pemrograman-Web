<?php

require_once('Hewan.php');

class Kucing extends Hewan
{
    protected $warna;

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getWarna()
    {
        return $this->warna;
    }
}

?>