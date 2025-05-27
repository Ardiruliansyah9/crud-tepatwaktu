<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Keterlambatan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">
        <h3 class="mb-4">Tambah Keterlambatan</h3>

        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Nama Siswa</label>
            <input type="text" name="nama" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Jam Masuk</label>
            <input type="time" name="jam" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Alasan</label>
            <textarea name="alasan" class="form-control" rows="3" required></textarea>
          </div>

          <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>

        <?php
        if (isset($_POST['simpan'])) {
          $nama = $_POST['nama'];
          $tanggal = $_POST['tanggal'];
          $jam = $_POST['jam'];
          $alasan = $_POST['alasan'];

          mysqli_query($conn, "INSERT INTO keterlambatan (nama_siswa, tanggal, jam_masuk, alasan) 
            VALUES ('$nama', '$tanggal', '$jam', '$alasan')");
          echo "<div class='alert alert-success mt-3'>Data berhasil ditambahkan!</div>";
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>

