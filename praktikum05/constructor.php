<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    public function __construct($nama, $warna, $tempatOperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }
}

$kendaraan = new Kendaraan("Mobil", "Merah", "Darat");

echo $kendaraan->nama . "<br>";
echo $kendaraan->warna . "<br>";
echo $kendaraan->tempatOperasi . "<br>";
