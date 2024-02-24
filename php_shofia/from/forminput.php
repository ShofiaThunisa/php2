<!DOCTYPE html>
<head>
  <title>Form Biodata Diri</title>  
</head>
    <body>
        <center>
    <h2>Form Biodata Diri</h2>
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
                <td>Jenis_kelamin</td>
                <td>:</td>
                <td><input type='radio' name='jk' value = "Laki-Laki">Laki-Laki 
                    <input type='radio' name='jk' value = "Perempuan">Perempuan
                </td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td>:</td>
                <td>
                <select name="agm">
                    <option value="Pilih"></option>
                    <option value="Islam">Islam</option>
                    <option value="Katholik">Ktholik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                    <option value="Hindu">Hindu</option>
                </select>
                </td>
            </tr>
            <tr> 
                <td>Pendidikan_Terakhir</td>
                <td>:</td>
                <td>
                <select name="pt">
                    <option value="Pilih"></option>
                    <option value="SD">SD</option>
                    <option value="">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="Kuliah">Kuliah</option>
                    <option value="S1">S1</option>
                </select>
                </td>
            </tr>
            <tr> 
                <td>Status</td>
                <td>:</td>
                <td><input type='text' name='status'></td>
            </tr>
            <tr> 
                <td>Hobi</td>
                <td>:</td>
                <td><input type='text' name='hobi'></td>
            </tr>
            <tr> 
                <td>Cita_cita</td>
                <td>:</td>
                <td><input type='text' name='cita_cita'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit"  name ="simpan" value='KIRIM'></td>
            </tr> 
        </table> 
        </form>
    </center>          
</body>   
</html>       
<?php
if(isset($_POST["simpan"])) {
    $a = $_POST['nama'];
    $b = $_POST['tanggal_lahir'];
    $c = $_POST['jk'];
    $d = $_POST['alamat'];
    $q = $_POST['agm'];
    $e = $_POST['pt'];
    $f = $_POST['status'];
    $g = $_POST['hobi'];
    $h = $_POST['cita_cita'];

    echo "=========Biodata Diri ==========<br>";
    echo "================================<br>";
    echo "Nama   = $a <br>";
    echo "Tanggal_lahir   = $b <br>";
    echo "Jenis_Kelamin   = $c <br>";
    echo "Alamat   = $d <br>";
    echo "Agama   = $q <br>";
    echo "Pendidikan_terakhir   = $e <br>";
    echo "Status   = $f <br>";
    echo "Hobi   = $g <br>";
    echo "Cita-cita   = $h <br>";

}

?>