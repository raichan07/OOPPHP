<?php

class kendaraan{

    public $nama;
    private $warna;
    protected $harga;

    public function __construct( $nama = "civic", $warna = "putih", $harga = 100000){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function infokendaraan(){
        return $this->warna;
    }
}

class transportasi extends kendaraan{
    public function tampilkendaraan(){
        return $this->harga;
    }
}

$mobil = new kendaraan();
echo "Public: ". $mobil->nama. "<br>";

$mobil1 = new transportasi();
echo "Protected: ". $mobil1->tampilkendaraan(). "<br>";

echo "Private: ". $mobil->infokendaraan(). "<br>";