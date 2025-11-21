<?php 
require_once 'app/models/Pelanggan.php';

class PelangganController //untuk menghubungkan model produk ke controller/mengolah data yang ingin ditampilkan
{
   public function daftarPelanggan()
    {
        $pelanggan = new Pelanggan();
        $data = $pelanggan->tampilkanSemuaPelanggan(); 
        require 'app/views/pelanggan_views.php';
    }

    public function tambahPelanggan()
    {
        // tampilkan form tambah pelanggan
        require 'app/views/pelanggan_tambah.php';
    }

    public function simpanPelanggan()
    {
        $nama  = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $pelanggan = new Pelanggan();
        $pelanggan->insertPelanggan($nama, $alamat);

        header("Location: index.php?action=pelanggan");
    }

    public function editPelanggan(){
        $id_pelanggan = $_GET['id_pelanggan'];
        $pelanggan = new Pelanggan();
        $data = $pelanggan->getPelangganById($id_pelanggan);
        require 'app/views/pelanggan_edit.php';
    }

    public function updatePelanggan()
    {
        $id_pelanggan = $_POST['id_pelanggan'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $pelanggan = new Pelanggan();
        $pelanggan->updatePelanggan($id_pelanggan, $nama, $alamat);

        header("Location: index.php?action=pelanggan");
    }

    public function hapusPelanggan()
    {
        $id_pelanggan = $_GET['id_pelanggan'];
        $pelanggan = new Pelanggan();
        $pelanggan->hapusPelanggan($id_pelanggan);

        header("Location: index.php?action=pelanggan");
    }

}