<?php

class AkunGame
{
    protected $username;
    protected $level;
    protected $diamond;

    // constructor
    public function __construct($username, $level, $diamond)
    {
        $this->username = $username;
        $this->level = $level;
        $this->diamond = $diamond;
    }

    // getter username
    public function getUsername()
    {
        return $this->username;
    }

    // setter username
    public function setUsername($username)
    {
        $this->username = $username;
    }

    // getter level
    public function getLevel()
    {
        return $this->level;
    }

    // setter level
    public function setLevel($level)
    {
        $this->level = $level;
    }

    // getter diamond
    public function getDiamond()
    {
        return $this->diamond;
    }

    // tambah diamond
    public function tambahDiamond($jumlah)
    {
        if($jumlah > 0)
            {
                $this->diamond += $jumlah;
            }
        else
            {
                echo "Diamond harus lebih dari 0";
            }
    }

    // kurangi diamond
    public function kurangiDiamond($jumlah)
    {
        if($jumlah <= $this->diamond)
            {
                $this->diamond -= $jumlah;
            }
        else
            {
                echo "Diamond tidak cukup!";
            }
    }

    // status akun biasa
    public function statusAkun()
    {
        return "Player Biasa";
    }

    public function tampilInfo()
    {
        return "Username : " . $this->username .
        " | Level : " . $this->level;
    }
}

?>