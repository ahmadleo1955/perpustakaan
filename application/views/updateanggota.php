<div class="container">
  <br>  <br>
  <h2><center>Cari Daftar Anggota Perpustakaan</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="namadikoreksi">Ketik Nomor Anggota Perpustakaan</label>
      <input type="text" class="form-control" id="namadikoreksi" placeholder="Ketik nomor anggota" name="namadikoreksi">
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
  $sql="SELECT * FROM anggota WHERE NomorAnggota = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Anggota Perpustakaan</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="nomoranggota">Nomor Anggota </label>
      <input type="text" class="form-control" id="NomorAnggota"  name="NomorAnggota" value="<?php echo $rekord['NomorAnggota'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="NamaAnggota"> Nama Anggota </label>
      <input type="text" class="form-control" id="NamaAnggota"  name="NamaAnggota" value="<?php echo $rekord['NamaAnggota'];?>">
    </div>
   <div class="form-group">
      <label for="Alamat">Alamat</label>
      <input type="text" class="form-control" id="Alamat" name="Alamat"
    value="<?php echo $rekord['Alamat'];?>">
    </div>
    <div class="form-group">
      <label for="TanggalDaftar">Tanggal daftar</label>
      <input type="text" class="form-control" id="TanggalDaftar" name="TanggalDaftar"
    value="<?php echo $rekord['TanggalDaftar'];?>">
    </div>
    <div class="form-group">
      <label for="TanggalKadaluarsa">Tanggal Kadaluarsa</label>
      <input type="text" class="form-control" id="TanggalKadaluarsa" name="TanggalKadaluarsa"
    value="<?php echo $rekord['TanggalKadaluarsa'];?>">
    </div>
  <br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<td></td>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $nomoranggota=$_POST['NomorAnggota'];
  $nomoranggota=$_POST['NomorAnggota'];
  $alamat=$_POST['Alamat'];
  $tanggaldaftar=$_POST['TanggalDaftar'];
  $tanggalkadaluarsa=$_POST['TanggalKadaluarsa'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="UPDATE `pustakawan` SET `NomorAnggota` = '$NomorAnggota', `NomorAnggota` = '$NomorAnggota',  `Alamat` = '$Alamat',  `TanggalDaftar` = '$TanggalDaftar',  `TanggalKadaluarsa` = '$TanggalKadaluarsa' WHERE `anggota`.`NomorAnggota` = '$NomorAnggota';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord anggota sudah tersimpan !";
  } else {
    echo "Rekord anggota gagal tersimpan !";
  } 
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<td></td>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div> 