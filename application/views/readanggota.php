<?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `anggota`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
<br>
  <div class="container">
  <h2> <CENTER>Daftar Anggota Perpustakaan</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>Kode Anggota Perpustakaan</th>
        <th>Nama Anggota Perpustakaan </th>
        <th>Alamat </th>
         <th>Tanggal Daftar </th>
          <th>Tanggal Kadaluarsa </th>
    
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['NomorAnggota'];?></td>
        <td><?php echo $rekord['NamaAnggota'];?></td>
        <td><?php echo $rekord['Alamat'];?></td>
        <td><?php echo $rekord['TanggalDaftar'];?></td>
        <td><?php echo $rekord['TanggalKadaluarsa'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
  </table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<td></td>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div> 
