<?php 
require_once 'app/models/Produk.php';

class ProdukController //untuk menghubungkan model produk ke controller/mengolah data yang ingin ditampilkan
{
   public function daftarProduk()
    {
        $produk = new Produk();
        $data = $produk->tampilkanSemuaProduk(); 
        require 'app/views/produk_views.php';
    }

    public function tambahProduk()
    {
        // tampilkan form tambah produk
        require 'app/views/produk_tambah.php';
    }

    public function simpanProduk()
    {
        $nama  = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok  = $_POST['stok'];

        $produk = new Produk();
        $produk->insertProduk($nama, $harga, $stok);

        header("Location: index.php?action=produk");
    }

    public function editProduk(){
        $kode_barang = $_GET['kode_barang'];
        $produk = new Produk();
        $data = $produk->getProdukById($kode_barang);
        require 'app/views/produk_edit.php';
    }

    public function updateProduk()
    {
        $kode_barang = $_POST['kode_barang'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $produk = new Produk();
        $produk->updateProduk($kode_barang, $nama, $harga, $stok);

        header("Location: index.php?action=produk");
    }

    public function hapusProduk()
    {
        $kode_barang = $_GET['kode_barang'];
        $produk = new Produk();
        $produk->hapusProduk($kode_barang);

        header("Location: index.php?action=produk");
    }
    
}