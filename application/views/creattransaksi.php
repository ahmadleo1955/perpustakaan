<h2><center>Pelayanan Peminjaman Buku</h2></center>
<div class="container-fluid">
 <form method="post">
  <div class="form-group">
    <label for="IdTransaksi">Masukkan Id Transaksi Anda:</label>
    <input type="text" class="form-control" placeholder="Isi..." id="IdTransaksi" name="IdTransaksi">
  </div>
  <div class="form-group">
    <label for="KodePustaka">Masukkan Nomor Kode Pustaka:</label>
    <input type="text" class="form-control" placeholder="Isi..." id="KodePustaka" name="KodePustaka">
  </div>
  <div class="form-group">
    <label for="KodePustakawanPinjam">Kode Pustakawan Pinjam:</label>
      <input type="text" class="form-control" placeholder="Isi..." id="KodePustakawanPinjam" name="KodePustakawanPinjam">
  </div>
  <div class="form-group">
    <label for="TanggalPinjam">Tanggal Pinjam Buku:</label>
      <input type="date" class="form-control" placeholder="Isi..." id="TanggalPinjam" name="TanggalPinjam">
  </div>
  <div class="form-group">
    <label for="KodePustakawanKembali">Kode Pustakawan Kembali:</label>
      <input type="text" class="form-control" placeholder="Isi..." id="KodePustakawanKembali" name="KodePustakawanKembali">
  </div>
  <div class="form-group">
    <label for="TanggalKembali">Tanggal Pengembalian Buku:</label>
      <input type="date" class="form-control" placeholder="Isi..." id="TanggalKembali" name="TanggalKembali">
  </div>
  <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
</form> 
</div>
<?php 
if (isset($_POST['bSimpan'])) {
  $IdTransaksi=$_POST['IdTransaksi'];
  $KodePustaka=$_POST['KodePustaka'];
  $KodePustakawanPinjam=$_POST['KodePustakawanPinjam'];
  $KodePustakawanKembali=$_POST['KodePustakawanKembali'];
  $TanggalPinjam=$_POST['TanggalPinjam'];
  $TanggalKembali=$_POST['TanggalKembali'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");

  $sql="INSERT INTO `transaksi`(`IdTransaksi`, `KodePustaka`, `KodePustakawanPinjam`, `KodePustakawanKembali`, `TanggalPinjam`, `TanggalKembali`) VALUES ('".$IdTransaksi."','".$KodePustaka."', '".$KodePustakawanPinjam."','".$KodePustakawanKembali."','".$TanggalPinjam."','".$TanggalKembali."');";
  
    $q=$koneksi->query($sql);
    if ($q) {
      echo "<h2><center>Selamat Transaksi Telah Terdaftar !</center></h2>";
    } else {
      echo "<h2><center>Maaf Transaksi Gagal Mendaftar !</center></h2>";
    } 
  }
  ?>