<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC-TOKO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?action=index">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=pelanggan">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=transaksi">Transaksi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
        <h3>Transaksi Penjualan</h3>
        <hr>
        <!-- tambah tombol tambah data -->
         <a href="index.php?action=tambah_transaksi" class="btn btn-success mb-3">Tambah Transaksi</a>
         <hr>
         
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">ID Pelanggan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach ($data as $dataTransaksi) : 
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor++;?></th>
                    <td><?php echo $dataTransaksi['kode_barang'];?></td>
                    <td><?php echo $dataTransaksi['id_pelanggan'];?></td>
                    <td><?php echo $dataTransaksi['jumlah'];?></td>
                    <td><?php echo $dataTransaksi['total_harga'];?></td>
                    <td>
                        <a href="index.php?action=edit_transaksi&id_transaksi=<?php echo $dataTransaksi['id_transaksi'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=hapus_transaksi&id_transaksi=<?php echo $dataTransaksi['id_transaksi'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>