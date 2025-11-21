<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h3>Edit Produk</h3>
  <form method="POST" action="index.php?action=update_produk">
      <input type="hidden" name="kode_barang" value="<?php echo $data['kode_barang']; ?>">

      <div class="mb-3">
          <label>Nama Barang</label>
          <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
      </div>

      <div class="mb-3">
          <label>Harga</label>
          <input type="number" name="harga" class="form-control" value="<?php echo $data['harga']; ?>">
      </div>

      <div class="mb-3">
          <label>Stok</label>
          <input type="number" name="stok" class="form-control" value="<?php echo $data['stok']; ?>">
      </div>

      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      <a href="index.php?action=produk" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>