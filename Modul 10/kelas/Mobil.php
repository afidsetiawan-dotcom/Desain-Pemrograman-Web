<?php

require_once('Kendaraan.php');

class Mobil implements Kendaraan
{
    public function nyalakanMesin()
    {
        return "Mesin mobil dinyalakan";
    }

    public function jalan()
    {
        return "Mobil sedang berjalan";
    }
}

?>