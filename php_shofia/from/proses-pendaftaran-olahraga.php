<pre>
<?php

    $nama= @$_REQUEST['nama'];
    $jenis_kelamin= @$_REQUEST['jenis_kelamin'];
    $tanggal_lahir= @$_REQUEST['tanggal_lahir'];
    $kategori_olahraga= @$_REQUEST['kategori_olahraga'];
    $pilihan_kelas= @$_REQUEST['pilihan_kelas'];
    $kemampuan_fisik= @$_REQUEST['kemampuan_fisik'];
    $pembayaran = @$_REQUEST['pembayaran'];
    $metode_harga = @$_REQUEST['metode_harga'];
    $diskon = 0;


    if ($kategori_olahraga == "Sepak Bola") {
        $harga = 0;
            if ($pilihan_kelas == "Pemula") {
                $harga += 200000;
            } elseif ($pilihan_kelas == "Menengah") {
                $harga += 250000;
            } elseif ($pilihan_kelas == "Lanjutan") {
                $harga += 300000;
            }
    } else if ($kategori_olahraga == "Bulu Tangkis") {
        $harga = 0;
            if ($pilihan_kelas == "Pemula") {
                $harga += 150000;
                if ($jenis_kelamin == "Perempuan") {
                    $diskon += $harga * 0.1;
                }
            } elseif ($pilihan_kelas == "Menengah") {
                $harga += 200000;
                if ($jenis_kelamin == "Perempuan") {
                    $diskon += $harga * 0.1;
                }
            } elseif ($pilihan_kelas == "Lanjutan") {
                $harga += 250000;
                if ($jenis_kelamin == "Perempuan") {
                    $diskon += $harga * 0.1;
                }
            }
        } else if ($kategori_olahraga == "Renang" ) {
            $harga = 0;
                if ($pilihan_kelas == "Pemula") {
                    $harga = 180000;
                } elseif ($pilihan_kelas == "Menengah") {
                    $harga = 220000;  
                } else if ($pilihan_kelas == "Lanjutan") {
                    $harga = 270000;
                }
        }
    
        $total = $harga - $diskon;

        if ($total > 500000) {
            $keputusan = "Selamat Anda Mendapatkan Merchandise Gratiss!!!";
        } else {
            $keputusan = "Total Harga Anda kurang dari Rp 500.000, Anda tidak mendapatkan hadiah";
        }

    echo "<center>";
    echo "<h1>Form Pendaftaran</h2>";    
    echo "Nama = $nama <br>";
    echo "Jenis Kelamin = $jenis_kelamin <br>";
    echo "Tanggal Lahir = $tanggal_lahir <br>";
    echo "Kategori Olahraga = $kategori_olahraga <br>";
    echo "Pilihan Kelas = $pilihan_kelas <br>";
    echo "Kemampuan Fisik = $kemampuan_fisik <br>";
    echo "Pembayaran = $pembayaran <br>";
    echo "Harga : Rp. $harga<br>";
    echo "Diskon : Rp. $diskon<br>";
    echo "Total Harga : Rp. $total <br>";
    echo $keputusan;
    echo "</center>";

?>
</pre> 