
<h2><center>Silahkan Daftar</h2></center>
  <div class="container-fluid">
 <form method="post">
  <div class="form-group">
    <label for="KodePustakawan">Kode Pustakawan:</label>
    <input type="text" class="form-control" placeholder="Isi..." id="KodePustakawan" name="KodePustakawan">
  </div>
  <div class="form-group">
    <label for="NamaPustakawan">Nama Pustakawan:</label>
    <input type="text" class="form-control" placeholder="Isi..." id="NamaPustakawan" name="NamaPustakawan">
  </div>
 <div class="form-group">
    <label for="Pasword">Masukkan Password:</label>
      <input type="Password" class="form-control" placeholder="Isi..." id="Pasword" name="Pasword">
  </div>
  </div>
  <div class="form-group">
    <label for="NomorTelepon">Masukkan Nomor Telepon:</label>
      <input type="text" class="form-control" placeholder="Isi..." id="NomorTelepon" name="NomorTelepon">
  </div>
  <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
</form> 
</div>
 <br><br><br><br>
<td></td>

<?php 
if (isset($_POST['bSimpan'])) {
  $KodePustakawan=$_POST['KodePustakawan'];
  $NamaPustakawan=$_POST['NamaPustakawan'];
  $Pasword=$_POST['Pasword'];
  $NomorTelepon=$_POST['NomorTelepon'];
  
  $koneksi=new mysqli("localhost","root","","perpustakaan");

  $sql="INSERT INTO `pustakawan`(`KodePustakawan`, `NamaPustakawan`, `Pasword`, `NomorTelepon`) VALUES ('".$KodePustakawan."','".$NamaPustakawan."', '".$Pasword."','".$NomorTelepon."');";
  
    $q=$koneksi->query($sql);
    if ($q) {
      echo "<h2><center>Selamat Anda Telah Terdaftar !</center></h2>";
    } else {
      echo "<h2><center>Maff Anda Gagal Mendaftar !</center></h2>";
    } 
  }
  ?>
  <br>
  <br>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div>