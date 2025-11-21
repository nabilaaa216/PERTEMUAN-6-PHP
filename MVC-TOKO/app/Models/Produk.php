<?php 
require_once 'config/Database.php';

class Produk
{
     private $conn;

     public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();  
    }

    public function tampilkanSemuaProduk(){
        $sql = "SELECT * FROM barang ORDER BY kode_barang ASC";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

     public function getProdukById($kode_barang)
    {
        $sql = "SELECT * FROM barang WHERE kode_barang = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $kode_barang);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function insertProduk($nama, $harga, $stok)
    {
        $sql = "INSERT INTO barang (nama, harga, stok) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdi", $nama, $harga, $stok);
        $stmt->execute();
    }

    public function updateProduk($kode_barang, $nama, $harga, $stok)
    {
        $sql = "UPDATE barang SET nama=?, harga=?, stok=? WHERE kode_barang=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdii", $nama, $harga, $stok, $kode_barang);
        $stmt->execute();
    }

    public function hapusProduk($kode_barang)
    {
        $sql = "DELETE FROM barang WHERE kode_barang=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $kode_barang);
        $stmt->execute();
    }

    

}
?>