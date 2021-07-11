<!DOCTYPE html>
<html lang="en">
<head>
  <title>PustakaKu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url();?>welcome/Anggota">Anggota
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url();?>welcome/Pustaka">Pustaka
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>welcome/pustakawan">Pustakawan</a>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url();?>welcome/Transaksi">Transaksi
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
  </ul>
</nav>
<br>