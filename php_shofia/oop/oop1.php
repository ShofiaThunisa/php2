<?php
//buat class
class Manusia{

    //buat property/atribut
    public $nama1 = "Shofia";
    public $nama2 = "Daffa";

    //buat method / function
    public function makan(){
        echo " $this->nama1 Suka Makan Nasi Goreng";
    }
    public function minum(){
        echo " $this->nama2 suka minum jus";
    }
}

//buat objeck
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
?>