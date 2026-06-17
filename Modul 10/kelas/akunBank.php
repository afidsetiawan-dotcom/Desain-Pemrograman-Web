<?php

class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    // Constructor
    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    // Setter nama
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Getter nama
    public function getNama()
    {
        return $this->nama;
    }

    // Menambah uang
    public function tambahUang($jumlah)
    {
        $this->jmlUang += $jumlah;
    }

    // Mengurangi uang
    public function kurangiUang($jumlah)
    {
        $this->jmlUang -= $jumlah;
    }

    // Menampilkan saldo
    public function tampilUang()
    {
        return $this->jmlUang;
    }

    // Menghitung pajak 11%
    public function hitungPajak()
    {
        return $this->jmlUang * 0.11;
    }
}

?>