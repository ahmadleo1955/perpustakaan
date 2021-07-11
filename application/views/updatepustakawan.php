<div class="container">
  <br>  <br>
  <h2><center>Cari Pustakawan</h2></center>
  <form method="post">
    <div class="form-group">
      <label for="namadikoreksi">Ketik Kode Pustakawan</label>
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
  $sql="SELECT * FROM pustakawan WHERE KodePustkwan = '".$namadikoreksi."'";
  $q=$koneksi->query($sql);
  $rekord=$q->fetch_array();
  if (empty($rekord)) {
    echo "Rekord tidak ditemukan !";
    exit();
  } else {
    ?>
<div class="container">
  <h2>Daftar Pustakaan</h2><br>
  <form method="post">
    <div class="form-group">
      <label for="KodePustakawan">Kode Pustakawan </label>
      <input type="text" class="form-control" id="KodePustakawan"  name="KodePustakawan" value="<?php echo $rekord['KodePustakawn'];?>" readonly>
    </div>
  <div class="form-group">
      <label for="NamaPustakawan"> Nama Pustakawan </label>
      <input type="text" class="form-control" id="NamaPustakawan"  name="NamaPustakawan" value="<?php echo $rekord['NamaPustakawan'];?>">
    </div>
    <div class="form-group">
      <label for="NomorTelepon">Nomor Telepon</label>
      <input type="text" class="form-control" id="NomorTelepon" name="NomorTelepon"
    value="<?php echo $rekord['NomorTelepon'];?>">
  <br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<td></td>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div> 
   
    <?php
  } //end if empty
}
if (isset($_POST['bSimpan'])) {
  $KodePustakawan=$_POST['KodePustakawan'];
  $NamaPustakawan=$_POST['NamaPustakawan'];
  $NomorTelepon=$_POST['NomorTelepon'];
  $koneksi=new mysqli("localhost","root","","perpustakaan");
  $sql="UPDATE `pustakawan` SET `KodePustakawan` = '$KodePustakawan', `NamaPustakawan` = '$NamaPustakawan',  `NomorTelepon` = '$NomorTelepon' WHERE `pustakawan`.`KodePustakawan` = '$KodePustakawan';";
  $q=$koneksi->query($sql);
  if ($q) {
    echo "Rekord Pustakawan sudah tersimpan !";
  } else {
    echo "Rekord Pustakawan gagal tersimpan !";
  } 
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<td></td>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div> 