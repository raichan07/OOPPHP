<?php

class kendaraan{

    public $nama,
           $warna,
           $harga;

    public function __construct( $nama, $warna, $harga){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
    }


    public function infokendaraan(){
        return "Nama Kendaraan: {$this->nama} <br>
                Warna: {$this->warna} <br> 
                Harga: {$this->harga} <br>";
    }
}

$mobil = new kendaraan("civic", "putih", 1000);
// $mobil-> nama ="Civic";
// $mobil-> warna ="putih";
// $mobil-> harga ="1M";

$motor = new kendaraan("H2R", "hitam", 900);
// $motor-> nama ="H2R";
// $motor-> warna ="hitam";
// $motor-> harga ="900JT";

echo $mobil->infokendaraan();
echo "<br>";
echo "<br>";
echo $motor->infokendaraan();