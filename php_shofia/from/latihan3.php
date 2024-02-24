<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h2>Daftar SMK</h2>
    <!-- form -->
        <form method = "POST" action= "">
        <table>
            <tr> 
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr> 
                <td>tanggal_lahir</td>
                <td>:</td>
                <td><input type='date' name='tanggal_lahir'></td>
            </tr>
            <tr> 
                <td>jenis_kelamin</td>
                <td>:</td>
                <td><input type='radio' name='jenis_kelamin' value = "Laki-Laki">Laki-Laki 
                    <input type='radio' name='jenis_kelamin' value = "Perempuan">Perempuan
                </td>
            </tr>
            <tr> 
                <td>biaya_register</td>
                <td>:</td>
                <td><input type='number' name='biaya_register'></td>
            </tr>
            <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option value="">.....</option>
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select>
                    </td>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit"  name ="kirim" value='DAFTAR'></td>
            </tr> 
        </table> 
        </form>
    </center>          
</body>
</html>

<?php
if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $biaya_register = $_POST['biaya_register'];
    $jurusan = $_POST['jurusan'];

    if ($jurusan == "RPL") {
        $bj = 2500000;
    } elseif ($jurusan == "TKRO") { 
        $bj = 3000000;
    } elseif ($jurusan == "TBSM") {
        $bj = 35000000;
    } else {
        echo "Pilih Jurusan Terlebihan Dahulu";
    }

    $total = $bj + $biaya_register;

    echo "Struk Register <br>";
    echo "Nama : $nama <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Biaya Register : $biaya_register <br>";
    echo "Total Pembelian : $total <br>";
}

?>