<?php 

class Manusia{

    public $nama = "Daffa cakep";

    private function tampilan_nama(){
        echo "Nama saya shofia </br>";
    }
    public function keluarkan(){
        $this->tampilan_nama();
    }
}
$cetak = new Manusia();
//menggila method
echo $cetak->keluarkan();
//manggila property
echo $cetak->nama;

?>