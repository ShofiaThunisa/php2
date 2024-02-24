<?php 

function luasPersegi(){
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Rumus = sisi x sisi <br>";
    $sisi = 5; 
    $luas = $sisi * $sisi;
    echo "Sisi = $sisi <br>";
    echo "Luasnya = $luas <br>";
}
function persegiPanjang(){
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Rumus = Panjang x Lebar <br>";
    $panjang = 5;
    $lebar = 10;
    $luas = $panjang * $lebar;
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Hasilnya :  $luas <br>";
} 

function segitiga(){
    echo "<h3>Menghitung Luas Segitiga</h3>";
    echo "Rumus : Alas x Tinggi x 1/2(setengah) <br>";
    $alas = 5;
    $tinggi = 10;
    $hasil = $alas * $tinggi * 0.5;
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Hasilnya :  $hasil <br>";
}

function lingkaran(){
    echo "<h3>Menghitung Lingkaran</h3>";
    echo "Rumus : r x r <br>";
    $r = 5;
    $hasil = $r * $r * 3.14;
    echo "Jari-Jari : $r <br>";
    echo "Hasilnya :  $hasil <br>";
}

luasPersegi();
echo"<hr>";
persegiPanjang();
echo"<hr>";
segitiga();
echo"<hr>";
lingkaran();
?>