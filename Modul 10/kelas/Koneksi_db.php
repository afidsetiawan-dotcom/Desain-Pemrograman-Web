<?php

class Koneksi_db
{
    // data database
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "belajar_php";

    // status koneksi
    public $con = false;

    // tempat simpan error
    public $hasil = array();

    // koneksi mysql
    public $conn;

    // function connect
    public function connect()
    {
        // cek apakah belum connect
        if(!$this->con)
            {
                // coba connect mysql
                $this->conn = @mysqli_connect(
                    $this->db_host,
                    $this->db_user,
                    $this->db_pass,
                    $this->db_name
                );
                
                // cek hasil koneksi
                if($this->conn)
                    {
                        @mysqli_set_charset($this->conn, "utf8");

                        $this->con = true;

                        return true;
                    }
                    else
                        {
                            array_push(
                                $this->hasil,
                                mysqli_connect_error()
                            );

                            return false;
                        }
                    }
                    else
                        {
                            return true;
                        }
    }
}

?>