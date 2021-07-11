<div class="container">
	<h2><center>Hapus Daftar Peminjaman</center></h2><br><br>
	<form method="post">
		<div class="form-grup">
			<label for ="hapus">Ketik  ID Transaksi</label>
			<input type="text" class="form-control" name="hapus" id="hapus" placeholder="Ketik Nomor ID Transaksi ">
		</div><br>
		<button type="submit" class="btn btn-primary" name="bhapus"onclick="return confirm('Apakah transaksi yang dipilih akan di hapus?')">Hapus</button>
		
	</form>
</div>

<?php if (isset($_POST['bhapus'])) {
	$userhapus=$_POST['hapus'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$sql="DELETE FROM `transaksi` WHERE `transaksi`.`IdTransaksi` = '".$userhapus."'";
	$q=$koneksi->query($sql);
	if ($q) {
		echo "<center><h2>Transaksi sudah dihapus !</center></h2>";
	} else {
		echo "<center><h2>Transaksi gagal dihapus !</center></h2>";
	}
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>  <br>
<br>
<br>
<br>
<br>    