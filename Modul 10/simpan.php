<?php

require_once('kelas/Koneksi_db.php');

$db = new Koneksi_db();

$db->connect();

// data yang mau disimpan
$nama = "Andi Pratama";
$umur = 21;

// query SQL
$sql = "INSERT INTO mahasiswa (nama, umur)
VALUES ('$nama', '$umur')";

// jalankan query
if(mysqli_query($db->conn, $sql))
    {
        echo "Data berhasil disimpan!";
    }
    else
        {
            echo "Error : " . mysqli_error($db->conn);
        }

?>