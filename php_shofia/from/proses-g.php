<?php

$nama = @$_REQUEST['nama'];
$tahun = @$_REQUEST['tahun'];

if ($tahun >= 1944 && $tahun <= 1964) {
    $gen = "Anda Generasi Baby Boomer";
} elseif ($tahun >= 1965 && $tahun <= 1979) {
    $gen = "Anda Generasi X";
} elseif ($tahun >= 1980 && $tahun <= 1994) {
    $gen = "Anda Generasi Y";
} elseif ($tahun >= 1995 && $tahun <= 2015) {
    $gen = "Anda adalah generasi Z";
}

echo "Nama anda : $nama, dan $gen";

?>