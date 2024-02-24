<?php
// 1.Membuat Variabel di PHP
$nama_barang = "Kopi C++";
$harga = 4000;
$stock = 40;
?>

<?php
// 2.Mengambil Nilai dari Variabel
$nama_barang = "Minayak Goreng";
$harga = 15000;

echo "Ibu memebeli $nama_barang seharga Rp $harga<br>";
?>

<?php
// 3.Mengenal Tipe Data di PHP

// tipe data char (karakter)
$jenis_kelamin = "L";

// tipe data string (teks)
$nama_lengkap = "Petani Kode";

// tipe data integer
$umur = 20;

// tipe data float
$berat = 48.3;

// tipe data boolean
$menikah = false;

echo "Nama : $nama_lengkap<br>";
echo "Jenis Kelamin : $jenis_kelamin<br>";
echo "Umur : $umur<br>";
echo "Berat : $berat<br>";
echo "Menikah : $menikah<br>";
?>

<?php
// 4. Konverasi Tipe Data
$foo = "1" // mula - mula $foo dalam bentuk string (ASCII 49)
$foo = 2; // $foo sekarang adalah integer (2)
$foo = $foo * 1.3; // $food sekarang adalah float (2.6)
$foo = 5 * "10 Little piggies"; // $food sekarang adalah integer (50)
%foo = 5 * "10 Small Pigs"; // $foo sekarang adalah integer (50)
?>

<?php
// 5.Menghapus Variabel dari Memori

// membuat Variabel dari Memori
$tmp = 2901;

// menghapus Variabel %tmp
unset($tmp);

// mencoba mengakses variabel $tmp
echo $ tmpfile
?>