<?php include 'config.php'; ?>
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM keterlambatan WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">
        <h3 class="mb-4">Edit Data Keterlambatan</h3>

        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Nama Siswa</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama_siswa']; ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal']; ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Jam Masuk</label>
            <input type="time" name="jam" class="form-control" value="<?= $data['jam_masuk']; ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Alasan</label>
            <textarea name="alasan" class="form-control" rows="3" required><?= $data['alasan']; ?></textarea>
          </div>

          <button type="submit" name="update" class="btn btn-success">Update</button>
          <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>

        <?php
        if (isset($_POST['update'])) {
          $nama = $_POST['nama'];
          $tanggal = $_POST['tanggal'];
          $jam = $_POST['jam'];
          $alasan = $_POST['alasan'];

          mysqli_query($conn, "UPDATE keterlambatan SET 
            nama_siswa='$nama',
            tanggal='$tanggal',
            jam_masuk='$jam',
            alasan='$alasan'
            WHERE id=$id");

          echo "<div class='alert alert-success mt-3'>Data berhasil diupdate!</div>";
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>

