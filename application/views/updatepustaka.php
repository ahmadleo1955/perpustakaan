<div class="container">
  <br>  <br>
  <h2><center>Cari Daftar Pustaka Tersimpn</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="namadikoreksi">Ketik Nomor ID Transaksi Perpustakaan</label>
      <input type="text" class="form-control" id="namadikoreksi" placeholder="Ketik nomor Id Transaksi" name="namadikoreksi">
    </div>
      <button type="submit" class="btn btn-primary" name="bkoreksi" onclick="return confirm('Apakah rekord dengan kata kunci yang terpilih dikoreksi ?')">Koreksi</button>
  </form>
</div>
</body>
</html>
<?php 
if (isset($_POST['bkoreksi'])) {
  $namadikoreksi=$_POST['namadikoreksi'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="SELECT * FROM pustaka WHERE KodePustaka = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Tersimpan</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="KodePustaka">Kode Pustaka</label>
      <input type="text" class="form-control" id="KodePustaka"  name="KodePustaka" value="<?php echo $rekord['KodePustaka'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="JudulPustaka">Judul Pustaka</label>
      <input type="text" class="form-control" id="JudulPustaka"  name="JudulPustaka" value="<?php echo $rekord['JudulPustaka'];?>">
    </div>
   <div class="form-group">
      <label for="Pengarang">Pengarang</label>
      <input type="text" class="form-control" id="Pengarang" name="Pengarang"
    value="<?php echo $rekord['Pengarang'];?>">
    </div>
    <div class="form-group">
      <label for="Penerbit">Penerbit</label>
      <input type="text" class="form-control" id="Penerbit" name="Penerbit"
    value="<?php echo $rekord['Penerbit'];?>">
    </div>
    <div class="form-group">
      <label for="TahunTerbit">Tahun Terbit</label>
      <input type="text" class="form-control" id="TahunTerbit" name="TahunTerbit"
    value="<?php echo $rekord['TahunTerbit'];?>">
    </div>
  
  <br><br> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $KodePustaka=$_POST['KodePustaka'];
  $JudulPustaka=$_POST['JudulPustaka'];
  $Pengarang=$_POST['Pengarang'];
  $Penerbit=$_POST['Penerbit'];
  $TahunTerbit=$_POST['TahunTerbit'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="UPDATE `pustaka` SET `KodePustaka` = '$KodePustaka', `JudulPustaka` = '$JudulPustaka',  `Pengarang` = '$Pengarang',  `Penerbit` = '$Penerbit' ,  `TahunTerbit` = '$TahunTerbit';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord Pustaka sudah tersimpan !";
  } else {
    echo "Rekord Pustaka gagal tersimpan !";
  } 
}
?>