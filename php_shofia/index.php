<?php 
$nama = "Ujang Rohmat"; // string
$umur = 23; // integer
$nilai = 87.5; // floot
$status = false; // bolleon

echo "Nama : $nama<br>";
echo "Umur :" . $umur . '<br>';
printf ("Nilai : %.3f <br>", $nilai);
if ($status) {
    echo "Status siswa aktif";
} else {
    echo "Status siswa tidak aktif";
}
?>