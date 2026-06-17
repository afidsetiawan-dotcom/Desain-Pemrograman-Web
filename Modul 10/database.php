<?php

require_once('kelas/Koneksi_db.php');

$db = new Koneksi_db();

if($db->connect())
    {
        echo "Koneksi berhasil!";
    }
    else
        {
            echo "Koneksi gagal!";

            echo "<pre>";
            print_r($db->hasil);
            echo "</pre>";
        }
?>