<div class="container">
	<h2><center>Hapus Daftar Buku</center></h2><br><br>
	<form method="post">
		<div class="form-grup">
			<label for ="hapus">Ketik Nomor Kode Pustaka</label>
			<input type="text" class="form-control" name="hapus" id="hapus" placeholder="Ketik Nomor Kode Pustaka ">
		</div><br>
		<button type="submit" class="btn btn-primary" name="bhapus"onclick="return confirm('Apakah pustaka yang dipilih akan di hapus?')">Hapus</button>
		
	</form>
</div>

<?php if (isset($_POST['bhapus'])) {
	$userhapus=$_POST['hapus'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$sql="DELETE FROM `Pustaka` WHERE `Pustaka`.`KodePustaka` = '".$userhapus."'";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "<center><h2>Pustaka sudah dihapus !</center></h2>";
	} else {
		echo "<center><h2>Pustaka gagal dihapus !</center></h2>";
	}
}
?>
<br>
<br>
<br> <br><br><br><br><br><br><br><br><br><br><br>
<td></td>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div>    