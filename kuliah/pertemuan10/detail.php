<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasar id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>

  <h3> Detail Mahasiswa</h3>

  <ul>
    <li>
      <img src="img/<?= $m['gambar']; ?>"></li>
    <li><?= $m['nim']; ?></li>
    <li><?= $m['nama']; ?></li>
    <li><?= $m['email']; ?></li>
    <li><?= $m['jurusan']; ?></li>
    <li><a href="">Ubah | <a href="">Hapus</a> </a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </li>
  </ul>

</body>

</html>