<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tambah Pelanggan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h3>Tambah Pelanggan</h3>
    <form method="post" action="index.php?action=simpan_pelanggan">
      <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      
      <div class="mb-3">
        <label>Alamat</label>
       <textarea class="form-control" id="alamat" name="alamat" required></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>
</html>