<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Keterlambatan Siswa - TepatWaktu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Data Keterlambatan Siswa</h2>
  <a href="tambah.php" class="button">+ Tambah Data</a>

  <table>
    <tr>
      <th>Nama Siswa</th>
      <th>Tanggal</th>
      <th>Jam Masuk</th>
      <th>Alasan</th>
      <th>Aksi</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM keterlambatan ORDER BY tanggal DESC");
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
        <td>{$row['nama_siswa']}</td>
        <td>{$row['tanggal']}</td>
        <td>{$row['jam_masuk']}</td>
        <td>{$row['alasan']}</td>
        <td>
          <a href='edit.php?id={$row['id']}'>Edit</a> | 
          <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Hapus</a>
        </td>
      </tr>";
    }
    ?>
  </table>
</div>
</body>
</html>

