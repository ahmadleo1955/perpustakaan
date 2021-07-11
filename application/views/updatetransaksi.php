<div class="container">
  <br>  <br>
  <h2><center>Cari Daftar Transaksi Perpustakaan</h2></center>
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
  $sql="SELECT * FROM transaksi WHERE IdTransaksi = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Transaksi Perpustakaan</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="IdTransaksi">Nomor ID Transaksi </label>
      <input type="text" class="form-control" id="IdTransaksi"  name="IdTransaksi" value="<?php echo $rekord['IdTransaksi'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="KodePustaka"> Kode Pustaka </label>
      <input type="text" class="form-control" id="KodePustaka"  name="KodePustaka" value="<?php echo $rekord['KodePustaka'];?>">
    </div>
   <div class="form-group">
      <label for="NomorAnggota">Nomor Anggota</label>
      <input type="text" class="form-control" id="NomorAnggota" name="NomorAnggota"
    value="<?php echo $rekord['NomorAnggota'];?>">
    </div>
    <div class="form-group">
      <label for="KodePustakawanPinjam">Kode Pustakawan Yang meminjam</label>
      <input type="text" class="form-control" id="KodePustakawanPinjam" name="KodePustakawanPinjam"
    value="<?php echo $rekord['KodePustakawanPinjam'];?>">
    </div>
    <div class="form-group">
      <label for="TanggalPinjam">Tanggal Pinjam</label>
      <input type="text" class="form-control" id="TanggalPinjam" name="TanggalPinjam"
    value="<?php echo $rekord['TanggalPinjam'];?>">
    </div>
     <div class="form-group">
      <label for="TanggalKembali">Tanggal Kembali</label>
      <input type="text" class="form-control" id="TanggalKembali" name="TanggalKembali"
    value="<?php echo $rekord['TanggalKembali'];?>">
    </div>
  <br><br> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $IdTransaksi=$_POST['IdTransaksi'];
  $KodePustaka=$_POST['KodePustaka'];
  $NomorAnggota=$_POST['NomorAnggota'];
  $KodePustakawanPinjam=$_POST['KodePustakawanPinjam'];
  $TanggalPinjam=$_POST['TanggalPinjam'];
  $TanggalKembali=$_POST['TanggalKembali'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="UPDATE `pustakawan` SET `IdTransaksi` = '$IdTransaksi', `IdTransaksi` = '$IdTransaksi',  `KodePustaka` = '$KodePustaka',  `KodePustakawanPinjam` = '$KodePustakawanPinjam' ,  `TanggalPinjam` = '$TanggalPinjam',  `TanggalKembali` = '$TanggalKembali' WHERE `transaksi`.`IdTransaksi` = '$IdTransaksi';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord Transaksi sudah tersimpan !";
  } else {
    echo "Rekord Transaksi gagal tersimpan !";
  } 
}
?>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>