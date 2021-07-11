<?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `Pustaka`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
<br>
  <div class="container">
  <h2> <CENTER>Daftar Pustaka Tersimpan</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>Kode Pustaka</th>
        <th>Judul Pustaka</th>
        <th>Pengarang</th>
         <th>Penerbit</th>
          <th>Tahun Terbit</th>
    
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['KodePustaka'];?></td>
        <td><?php echo $rekord['JudulPustaka'];?></td>
        <td><?php echo $rekord['Pengarang'];?></td>
        <td><?php echo $rekord['Penerbit'];?></td>
        <td><?php echo $rekord['TahunTerbit'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
  </table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<td></td>
<div class="footer">
    Copyright by Ahmad Leo (1955201099)
  </div> 
