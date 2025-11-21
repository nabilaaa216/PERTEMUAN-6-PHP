<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Edit Transaksi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h3>Edit Transaksi</h3>
    <form method="post" action="index.php?action=update_transaksi">
      
    <div class="mb-3">
        <label>ID transaksi</label>
        <input type="hidden" name="id_transaksi" class="form-control" value="<?php echo $data['id_transaksi']; ?>">
      </div>
    
    <div class="mb-3">
        <label>Kode Barang</label>
        <input type="number" name="kode_barang" class="form-control" value="<?php echo $data['kode_barang']; ?>">
      </div>

      <div class="mb-3">
        <label>ID Pelanggan</label>
        <input type="number" name="id_pelanggan" class="form-control" value="<?php echo $data['id_pelanggan']; ?>">
      </div>

      <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" value="<?php echo $data['jumlah']; ?>">
      </div>

      <div class="mb-3">
        <label>Total Harga</label>
        <input type="number" name="total_harga" class="form-control" value="<?php echo $data['total_harga']; ?>">
      </div>

      <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>">
     </div>



      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>
</html>