<?php 
require_once 'app/models/Transaksi.php';

class TransaksiController //untuk menghubungkan model produk ke controller/mengolah data yang ingin ditampilkan
{
   public function daftarTransaksi()
    {
        $transaksi = new Transaksi();
        $data = $transaksi->tampilkanSemuaTransaksi(); 
        require 'app/views/transaksi_views.php';
    }

    public function tambahTransaksi() {
    require_once 'app/Models/Barang.php';
    require_once 'app/Models/Pelanggan.php';

    $barangModel = new Produk();
    $daftarBarang = $barangModel->tampilkanSemuaProduk();

    $pelangganModel = new Pelanggan();
    $daftarPelanggan = $pelangganModel->tampilkanSemuaPelanggan();

    require 'app/Views/transaksi_tambah.php';
}


    public function simpanTransaksi()
{
    $transaksi = new Transaksi();

    $kode_barang = $_POST['kode_barang'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total_harga'];
    $tanggal = $_POST['tanggal'];

    $result = $transaksi->insertTransaksi($kode_barang, $id_pelanggan, $jumlah, $total, $tanggal);

    if ($result) {
        echo "
        <script>
            alert('Transaksi berhasil disimpan!');
            window.location.href = 'index.php?action=transaksi';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal menyimpan transaksi!');
            window.location.href = 'index.php?action=tambahTransaksi';
        </script>
        ";
    }
}


    public function editTransaksi(){
        $id_transaksi = $_GET['id_transaksi'];
        $transaksi = new Transaksi();
        $data = $transaksi->getTransaksiById($id_transaksi);
        require 'app/views/transaksi_edit.php';
    }

    public function updateTransaksi()
    {
        $id_transaksi = $_POST['id_transaksi'];
        $kode_barang  = $_POST['kode_barang'];
        $jumlah       = $_POST['jumlah'];
        $total_harga  = $_POST['total_harga'];
        $tanggal      = $_POST['tanggal'];

        $transaksi = new Transaksi();
        $transaksi->updateTransaksi($id_transaksi, $kode_barang, $jumlah, $total_harga, $tanggal);

        header("Location: index.php?action=transaksi");
    }

    public function hapusTransaksi()
    {
        $id_transaksi = $_GET['id_transaksi'];
        $transaksi = new Transaksi();
        $transaksi->hapusTransaksi($id_transaksi);

        header("Location: index.php?action=transaksi");
    }
}