<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <title>Latihan</title>
    
  </head>
  <body>
      <center>
        <img src="yayasan.png" alt="" style="max-width: 300px; margin-top: 1cm;">
    <h3 class="mt-5">PENGAJIHAN GURU/KARYAWAN YAYASAN ASSALAAM</h3>
    <!--CONTENT-->
    <div class="card text-left bg-success mt-5" style="max-width: 40rem;">
    <div class="card-header">
      Data Panggilan
    </div>
    <div class="card-body">
    <form method="POST" action="">
    <div class="form-group">
    <div>
          <label>No</label> <br>
          <input type="text" name="no" class="form-control">
      </div>
      <div>
          <label>Nama</label> <br>
          <input type="text" name="nama" class="form-control">
      </div>
      <div style="margin-bottom: 1rem;">
          <label>Unit Pendidikan</label> <br>
          <select name="unit_pendidikan" class="form-control">
              <option value="Pilih Pendidikan">Pilih Pendidikan</option>  
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="SMK">SMK</option>
              <option value="S1">S1</option>
          </select>
      </div>
      <div>
          <label>Tanggal Gaji</label> <br>
          <input type="date" name="tanggal_gaji" class="form-control">
      </div>
      <div class="row">
      <div class="col">
      <h3>Gaji</h3>
      <div style="margin-bottom: 1rem;">
          <label>Jabatan</label> <br>
          <select name="jabatan" class="form-control">
              <option value="Pilihan Jabatan">Pilih Jabatan</option>
              <option value="Kepala Sekolah">Kepala Sekolah</option>
              <option value="Wakasek">Wakasek</option>
              <option value="Guru">Guru</option>
              <option value="Karyawan">Karyawan</option>
          </select>
      </div>
      <div>
          <label>Lama Kerja</label> <br>
          <input type="text" name="lama_kerja" class="form-control">
      </div>
      <div style="margin-bottom: 1rem;">
          <label>Status Kerja</label> <br>
          <select name="status_kerja" class="form-control">
              <option value="Pilih Status Kerja">Pilih Status Kerja</option>
              <option value="Tetap">Tetap</option>
              <option value="Kontrak">Kontrak</option>
          </select>
      </div>
      </div>
      <div class="col">
      <h3>Potongan</h3>
      <div>
          <label>Pinjaman</label> <br>
          <input type="text" name="pinjaman" class="form-control">
          <div>
          <label>Bpjs</label> <br>
          <input type="text" name="bpjs" class="form-control">
      </div>
      <div>
          <label>Tabungan</label> <br>
          <input type="text" name="tabungan" class="form-control">
      </div>
      <div>
          <label>Lainnya</label> <br>
          <input type="text" name="lainnya" class="form-control">
      </div>
      </div>
      </div>
      </div>
      <center>
    <button type="submit" class="btn btn-primary mt-3" name="daftar">Daftar</button>
    </center>
    </form>
    </div>
  </div>
  </center>
  

  <!--CONTENT-->
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php 
if(isset($_POST['daftar'])){

$no = $_POST['no'];
$nama = $_POST['nama'];
$unit_pendidikan = $_POST['unit_pendidikan'];
$tanggal_gaji = $_POST['tanggal_gaji'];
$jabatan = $_POST['jabatan'];
$lama_kerja = $_POST['lama_kerja'];
$status_kerja = $_POST['status_kerja'];
$bpjs = $_POST['bpjs'];
$pinjaman = $_POST['pinjaman'];
$tabungan = $_POST['tabungan'];
$lainnya = $_POST['lainnya'];





class hasil{

    public function pendaftaran($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$lama_kerja2,$status_kerja2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2){

      if ($jabatan2 == "Kepala Sekolah") {
        $gaji = 5000000;
      } elseif ($jabatan2 == "Wakasesk") {
        $gaji = 4000000;
      } elseif ($jabatan2 == "Guru") {
        $gaji = 3000000;
      } elseif ($jabatan2 == "Karyawan") {
        $gaji = 2000000;
      } else {
        $gaji = 0;
      }
      
      if ($status_kerja2 == "Tetap") {
        $bonus = 1000000;
      } else  {
        $bonus = 0;
      }

      $gaji_bersih = ($gaji + $bonus) - ($bpjs2 + $pinjaman2 + $tabungan2 + $lainnya2);

      
?>
<center>
<div class="card border-success mt-5" style="max-width: 25rem;">
  <div class="card-header"><h3>PP</h3></div>
  <div class="card-body text-success">
    <h5 class="card-title">Struck Gaji</h5>
    <table>
      <tr>
        <td>No</td>
        <td>:</td>
        <td><?php echo $no2 ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama2 ?></td>
      </tr>
      <tr>
        <td>Unit Pendidikan</td>
        <td>:</td>
        <td><?php echo $unit_pendidikan2 ?></td>
      </tr>
      <tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><?php echo $tanggal_gaji2 ?></td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?php echo $jabatan2 ?></td>
      </tr>
      <tr>
        <td>Gaji</td>
        <td>:</td>
        <td><?php echo $gaji ?></td>
      </tr>
      <tr>
        <td>Lama Kerja</td>
        <td>:</td>
        <td><?php echo $lama_kerja2 ?></td>
      </tr>
      <tr>
        <td>Bonus</td>
        <td>:</td>
        <td><?php echo $bonus ?></td>
      </tr>
      <tr>
        <td>Status Kerja</td>
        <td>:</td>
        <td><?php echo $status_kerja2 ?></td>
      </tr>
      <tr>
        <td>Bpjs2</td>
      2  <td>:</td>2
        <t2d><?php echo $bpjs2 ?></td>
      </tr>
      <tr>
        <td>Tabungan</td>
        <td>:</td>
        <td><?php echo $tabungan2 ?></td>
      </tr>
      <tr>
        <td>Pinjaman</td>
        <td>:</td>
        <td><?php echo $pinjaman2 ?></td>
      </tr>
      <tr>
        <td>Lainnya</td>
        <td>:</td>
        <td><?php echo $lainnya2 ?></td>
      </tr>
      <tr>
        <td>Gaji Bersih</td>
        <td>:</td>
        <td><?php echo $gaji_bersih ?></td>
      </tr>
    </table>
  </div>
</center>

<?php
    }
  }
$cetak  = new hasil();

echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$lama_kerja,$status_kerja,$bpjs,$pinjaman,$tabungan,$lainnya);
}
?>
