<?php 
require_once 'config/Database.php';
require_once 'app/controllers/ProdukController.php';
require_once 'app/controllers/PelangganController.php';
require_once 'app/controllers/TransaksiController.php';

$action = isset($_GET['action'])? $_GET['action']:'index';
$controller = null;

switch (true) {
        case str_contains($action, 'produk'):
        $controller = new ProdukController();
        if($action === 'produk')
            {
                $controller->daftarProduk();
            }elseif ($action === 'tambah_produk') 
            {
                $controller->tambahProduk();
            } elseif ($action === 'simpan_produk') 
            {
                $controller->simpanProduk();
            }
            elseif ($action === 'edit_produk') 
            {
                $controller->editProduk();
            } elseif ($action === 'update_produk') 
            {
                $controller->updateProduk();
            } elseif ($action === 'hapus_produk') 
            {
                $controller->hapusProduk();
            }
            break;

        case str_contains($action, 'pelanggan'):
        $controller = new PelangganController();
        if($action === 'pelanggan')
            {
                $controller->daftarPelanggan();
            }elseif ($action === 'tambah_pelanggan') 
            {
                $controller->tambahPelanggan();
            } elseif ($action === 'simpan_pelanggan') 
            {
                $controller->simpanPelanggan();
            }
            elseif ($action === 'edit_pelanggan') 
            {
                $controller->editPelanggan();
            } elseif ($action === 'update_pelanggan') 
            {
                $controller->updatePelanggan();
            } elseif ($action === 'hapus_pelanggan') 
            {
                $controller->hapusPelanggan();
            }
            break;

        case str_contains($action, 'transaksi'):
        $controller = new TransaksiController();
        if($action === 'transaksi')
            {
                $controller->daftarTransaksi();
            }elseif ($action == 'tambah_transaksi') {
            $controller->tambahTransaksi();


            } elseif ($action === 'simpan_transaksi') 
            {
                $controller->simpanTransaksi();
            }
            elseif ($action === 'edit_transaksi') 
            {
                $controller->editTransaksi();
            } elseif ($action === 'update_transaksi') 
            {
                $controller->updateTransaksi();
            } elseif ($action === 'hapus_transaksi') 
            {
                $controller->hapusTransaksi();
            }
            break;
    
    default:
        require 'app/views/index.php';
        break;
}