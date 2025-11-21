<?php
require_once 'app/Models/Barang.php';
require_once 'app/Models/Pelanggan.php';

// Ambil daftar barang dan pelanggan
$barangModel = new Produk();
$daftarBarang = $barangModel->tampilkanSemuaProduk();

$pelangganModel = new Pelanggan();
$daftarPelanggan = $pelangganModel->tampilkanSemuaPelanggan();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tambah Transaksi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h3>Tambah Transaksi</h3>
    <form method="post" action="index.php?action=simpan_transaksi">

      <div class="mb-3">
        <label>Kode Barang</label>
        <select name="kode_barang" class="form-control" required>
          <option value="">-- Pilih Barang --</option>
          <?php foreach($daftarBarang as $b): ?>
            <option value="<?= $b['kode_barang'] ?>"><?= $b['kode_barang'] ?> - <?= $b['nama_barang'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="mb-3">
        <label>ID Pelanggan</label>
        <select name="id_pelanggan" class="form-control" required>
          <option value="">-- Pilih Pelanggan --</option>
          <?php foreach($daftarPelanggan as $p): ?>
            <option value="<?= $p['id_pelanggan'] ?>"><?= $p['id_pelanggan'] ?> - <?= $p['nama_pelanggan'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Total Harga</label>
        <input type="number" name="total_harga" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>
</html>
