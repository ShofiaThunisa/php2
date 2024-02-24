<!DOCTYPE html>
<head>
  <title>Nilai Ujian Nasional</title>  
</head>
    <body>
        <center>
    <h2>Nilai Ujian Nasional</h2>
    <!-- form -->
        <form method = "POST" action= "">
        <table>
            <tr> 
                <td>NISN</td>
                <td>:</td>
                <td><input type='text' name='nisn'></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td>:</td>
                <td><input type="date" name= 'kelas'></td>
            </tr>  
        </table> 
        </form>
    </center>          
</body>   
</html>       
<?php
if(isset($_POST["simpan"])) {
    $a = $_POST['nisn'];
    $b = $_POST['nama'];
    $c = $_POST['kelas'];
    
    

    echo "=========Nilai Ujian Nasional==========<br>";
    echo "================================<br>";
    echo "NISN   = $a <br>";
    echo "Nama   = $b <br>";
    echo "Kelas  = $c <br>";
    
}

?>

<body>
        <center>
    <h2>Nilai Ujian</h2>
    <!-- form -->
        <form method = "POST" action= "">
        <table>
            <tr> 
                <td>Bahasa Indonesia</td>
                <td>:</td>
                <td><input type='text' name='bahsa indonesia'></td>
            </tr>
            <tr> 
                <td>Bahasa Inggris</td>
                <td>:</td>
                <td><input type='text' name='bahasa inggris'></td>
            </tr>
            <tr> 
                <td>Matematika</td>
                <td>:</td>
                <td><input type="text" name= 'matematika'></td>
            </tr>  
            <tr> 
                <td>Produktif</td>
                <td>:</td>
                <td><input type='text' name='prokdutif'></td>
            </tr>  
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit"  name ="simpan" value='PROSES'></td>
            </tr>        
        </table> 
        </form>
    </center>          
</body>   
<?php
if(isset($_POST["simpan"])) {
    $a = $_POST['bahasa indonesia'];
    $b = $_POST['bahasa inggris'];
    $c = $_POST['matematika'];
    $d = $_POST['produktif'];
    
    
        
    echo "Bahasa Indonesia   = $a <br>";
    echo "Bahasa Inggris   = $b <br>";
    echo "Matematika  = $c <br>";
    echo "Produktif  = $d <br>";
    
}

?>
