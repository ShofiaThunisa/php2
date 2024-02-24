<?php

class contoh{

    public function __construct(){
        echo "Assalamualaikum<br>";
    }

    public function perkenalan(){
        echo "Nama saya shofia <br>";
    }

    public  function __destruct(){
        echo "Hallo om";
    }
}
$cetak = new contoh();

echo $cetak->perkenalan();

?>