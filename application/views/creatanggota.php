
<h2><center>Silahkan Daftar</h2></center>
  <div class="container-fluid">
 <form method="post">
  <div class="form-group">
    <label for="NomorAnggota">Nomor Anggota Anda:</label>
    <input type="text" class="form-control" placeholder="Isi..." id="NomorAnggota" name="NomorAnggota">
  </div>
  <div class="form-group">
    <label for="NamaAnggota">Masukkan Nama Anda:</label>
    <input type="text" class="form-control" placeholder="Isi..." id="NamaAnggota" name="NamaAnggota">
  </div>
  <div class="form-group">
    <label for="Alamat">Masukkan Alamat Anda:</label>
    <textarea class="form-control" rows="5" id="Alamat" name="Alamat"></textarea>
  </div>
  <div class="form-group">
    <label for="TanggalDaftar">Masukkan Tanggal Hari Ini:</label>
      <input type="date" class="form-control" placeholder="Isi..." id="TanggalDaftar" name="TanggalDaftar">
  </div>
  <div class="form-group">
    <label for="TanggalKadaluarsa">Berlaku Hingga:</label>
      <input type="date" class="form-control" placeholder="Isi..." id="TanggalKadaluarsa" name="TanggalKadaluarsa">
  </div>
  <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
</form> 
</div>
 <br><br><br><br>

<?php 
if (isset($_POST['bSimpan'])) {
  $NomorAnggota=$_POST['NomorAnggota'];
  $NamaAnggota=$_POST['NamaAnggota'];
  $Alamat=$_POST['Alamat'];
  $TanggalDaftar=$_POST['TanggalDaftar'];
  $TanggalKadaluarsa=$_POST['TanggalKadaluarsa'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");

  $sql="INSERT INTO `anggota`(`NomorAnggota`, `NamaAnggota`, `Alamat`, `TanggalDaftar`, `TanggalKadaluarsa`) VALUES ('".$NomorAnggota."','".$NamaAnggota."', '".$Alamat."','".$TanggalDaftar."','".$TanggalKadaluarsa."');";
  
    $q=$koneksi->query($sql);
    if ($q) {
      echo "<h2><center>Selamat Anda Telah Terdaftar !</center></h2>";
    } else {
      echo "<h2><center>Maaf Anda Gagal Mendaftar !</center></h2>";
    } 
  }
  ?>
  <br>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div>
