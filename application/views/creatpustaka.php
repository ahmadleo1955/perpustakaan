
<h2><center>Masukkan Informasi Buku</h2></center>
<div class="container-fluid">
 <form method="post">
  <div class="form-group">
    <label for="KodePustaka">Kode Pustaka:</label>
    <input type="text" class="form-control" placeholder="Isi..." id="KodePustaka" name="KodePustaka">
  </div>
  <div class="form-group">
    <label for="JudulPustaka">Judul Buku:</label>
    <input type="text" class="form-control" id="JudulPustaka" name="JudulPustaka">
  </div>
  <div class="form-group">
    <label for="text">Pengarang:</label>
      <input type="text" class="form-control" placeholder="Isi..." id="text" name="text">
  </div>
  <div class="form-group">
    <label for="Penerbit">Penerbit:</label>
      <input type="text" class="form-control" placeholder="Isi..." id="Penerbit" name="Penerbit">
  </div>
  <div class="form-group">
    <label for="TahunTerbit">Tahun Terbit:</label>
      <input type="text" class="form-control" placeholder="Isi..." id="TahunTerbit" name="TahunTerbit">
  </div>
  <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
</form> 
</div>
<?php 
if (isset($_POST['bSimpan'])) {
  $KodePustaka=$_POST['KodePustaka'];
  $JudulPustaka=$_POST['JudulPustaka'];
  $Pengarang=$_POST['Pengarang'];
  $Penerbit=$_POST['Penerbit'];
  $TahunTerbit=$_POST['TahunTerbit'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  
  $sql="INSERT INTO `pustaka`(`KodePustaka`, `JudulPustaka`, `Pengarang`, `Penerbit`, `TahunTerbit`) VALUES ('".$KodePustaka."','".$JudulPustaka."','".$Pengarang."','".$Penerbit."','".$TahunTerbit."');";
  
    $q=$koneksi->query($sql);
    if ($q) {
      echo "Rekord buku sudah tersimpan !";
    } else {
      echo "Rekord buku gagal tersimpan !";
    } 
  }