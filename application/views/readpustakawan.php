<?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `pustakawan`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
<br>
  <div class="container">
  <h2> <CENTER>Daftar Pustakawan</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>Kode Pustakawan</th>
        <th>Nama Pustakawan </th>
        <th>Nomor Telepon</th>
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['KodePustakawan'];?></td>
        <td><?php echo $rekord['NamaPustakawan'];?></td>
        <td><?php echo $rekord['NomorTelepon'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
  </table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<td></td>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div> 
