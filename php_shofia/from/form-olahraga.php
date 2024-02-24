<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Formulir Pendaftaran</title>
</head>
<body>
    <center>
        <h2>Formulir Pendaftaran</h2>
        <!-- form -->
        <form method="POST" action="proses-pendaftaran-olahraga.php">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><select name='jenis_kelamin' >
                        <option value="">Pilih</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="laki-laki">Laki-Laki</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name='tanggal_lahir'></td>
                </tr>
                <tr>
                    <td>Kategori Olahraga</td>
                    <td>:</td>
                    <td>
                        <input type='radio' name='kategori_olahraga' value='Sepak Bola'>Sepak Bola <br> 
                        <input type='radio' name='kategori_olahraga' value='Bulu Tangkis'>Bulu Tangkis <br> 
                        <input type='radio' name='kategori_olahraga' value='Renang'>Renang <br>
                    </td>
                </tr>
                <tr>
                    <td>Pilihan Kelas</td>
                    <td> : </td>
                    <td>
                        <input type="checkbox" name='pilihan_kelas' value='Pemula'> Pemula <br>
                        <input type="checkbox" name='pilihan_kelas' value='Menengah'> Menengah <br>
                        <input type="checkbox" name='pilihan_kelas' value='Lanjutan'> Lanjutan <br>
                    </td>
                </tr>
                <tr>
                    <td>Kemampuan Fisik</td>
                    <td>:</td>
                    <td><textarea name="kf"  cols="25" rows="7"></textarea></td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td> <select name="pembayaran">
                        <option value="">Pilih</option>
                        <option value="transfer bank">Transfer Bank</option>
                        <option value="kartu kredit">Kartu Kredit</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td><input type='submit' name='simpan' value='KIRIM'></td>
             </tr>
            </table>
        </form>
    </center>
</body>
</html>