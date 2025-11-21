<?php
require_once 'config/Database.php';

class Transaksi {
    private $conn;
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function tampilkanSemuaTransaksi() {
        $sql = "SELECT * FROM transaksi";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getTransaksiById($id_transaksi) {
        $sql = "SELECT * FROM transaksi WHERE id_transaksi = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_transaksi);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

   public function insertTransaksi($id_pelanggan, $kode_barang, $jumlah, $total_harga, $tanggal)
{
    $sql = "INSERT INTO transaksi (id_pelanggan, kode_barang, jumlah, total_harga, tanggal)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("iiiis", $id_pelanggan, $kode_barang, $jumlah, $total_harga, $tanggal);
    $stmt->execute();
}


    public function updateTransaksi($id_transaksi, $kode_barang, $jumlah, $total_harga, $tanggal) 
    {
        $sql = "UPDATE transaksi SET kode_barang=?, jumlah=?, total_harga=?, tanggal=? WHERE id_transaksi=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("iiisi", $kode_barang, $jumlah, $total_harga, $tanggal, $id_transaksi);
        $stmt->execute();
    }

    public function hapusTransaksi($id_transaksi) {
        $sql = "DELETE FROM transaksi WHERE id_transaksi=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_transaksi);
        $stmt->execute();
    }
}