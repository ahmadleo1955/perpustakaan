<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="img/book.png"><title>PustakaKu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">


body{
      background-color: rgb(234, 231, 239);

    }
.gambar {
  
}
.footer {
  width: 100%;
  height: 50px;
  padding-left: 10px;
  line-height: 50px;
  background:#333;
  color: #fff;
  position: relative;
  bottom: 0px;
}


  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark">
   <!-- Brand/logo -->
  <a class="navbar-brand" href="<?= base_url();?>">
    <img src="<?= base_url();?>img/book.png" alt="logo" style="width:40px;">
  PustakaKu</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>welcome">Home</a>
    </li>
  </ul>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url();?>welcome">
        <span class="caret">Anggota</span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url();?>welcome/DaftarJadiAnggota">Daftar Jadi Anggota</a></li>
          <li><a href="<?= base_url();?>welcome/AnggotaTerdaftar">Anggota Terdaftar</a></li>
          <li><a href="<?= base_url();?>welcome/CariAnggota">Cari Anggota </a></li>
          <li><a href="<?= base_url();?>welcome/HapusAnggota">Hapus Anggota </a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url();?>welcome">
        <span class="caret">Pustaka</span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url();?>welcome/DaftarPustaka">Daftar Pustaka</a></li>
          <li><a href="<?= base_url();?>welcome/PustakaTerdaftar">Pustaka Terdaftar</a></li>
          <li><a href="<?= base_url();?>welcome/CariPustaka">Cari Pustaka</a></li>
          <li><a href="<?= base_url();?>welcome/HapusPustaka">Hapus Pustaka</a></li>
        </ul>
     <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url();?>welcome">
        <span class="caret">Pustakawan</span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url();?>welcome/DaftarPustakawan">Daftar Pustakawan</a></li>
          <li><a href="<?= base_url();?>welcome/PustakawanTerdaftar">Pustakawan Terdaftar</a></li>
          <li><a href="<?= base_url();?>welcome/CariPustakawan">Cari Pustakawan</a></li>
          <li><a href="<?= base_url();?>welcome/HapusDaftarPustakawan">Hapus Daftar Pustakawan</a></li>
        </ul>

    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url();?>welcome/">
        <span class="caret">Transaksi</span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url();?>welcome/LayananPeminjamanBuku">Layanan Peminjaman Buku</a></li>
          <li><a href="<?= base_url();?>welcome/DaftarBukuYangTelahDipinjam">Daftar Buku Yang Telah Dipinjam</a></li>
          <li><a href="<?= base_url();?>welcome/UbahInformasiPinjam">Ubah Informasi</a></li>
          <li><a href="<?= base_url();?>welcome/HapusDaftarPeminjaman">Hapus Daftar Peminjaman</a></li>
        </ul>

    </li>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>welcome/about">About</a></li>

  </ul>
</nav>
</body>
</html>
