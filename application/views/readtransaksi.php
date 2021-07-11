
  <?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `transaksi`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
<br>
  <div class="container">
  <h2> <CENTER>Daftar Peminjaman Buku</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>Id Transaksi</th>
        <th>Kode Pustaka Buku </th>
        <th>Nomor Anggota</th>
        <th>Kode Pinjam</th>
        <th>Tanggal Peminjaman</th>
        <th>Kode Pengembalian</th>
        <th>Tanggal Pengembalian</th>
    
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['IdTransaksi'];?></td>
        <td><?php echo $rekord['KodePustaka'];?></td>
        <td><?php echo $rekord['NomorAnggota'];?></td>
        <td><?php echo $rekord['KodePustakawanPinjam'];?></td>
        <td><?php echo $rekord['TanggalPinjam'];?></td>
        <td><?php echo $rekord['KodePustakawanKembali'];?></td>
        <td><?php echo $rekord['TanggalKembali'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
  </table>
</div>
<br>
<br>
  <br>  
  <br>  
  <br>  
  <br>
   <br>  
  <br>  
  <br>  
  <br> 
  <br>  
  <br>  
  <br>   