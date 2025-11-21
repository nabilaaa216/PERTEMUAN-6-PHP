<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Pelanggan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h3>Edit Pelanggan</h3>
  <form method="POST" action="index.php?action=update_pelanggan">
      <input type="hidden" name="id_pelanggan" value="<?php echo $data['id_pelanggan']; ?>">

      <div class="mb-3">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
      </div>

      <div class="mb-3">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>">
  </div>

      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      <a href="index.php?action=pelanggan" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>