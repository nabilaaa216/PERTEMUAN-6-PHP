<?php 
require_once 'config/Database.php';

class Pelanggan
{
    private $conn;
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function tampilkanSemuaPelanggan()
    {
        $sql = "SELECT * FROM pelanggan";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
        //query edit hapus disini
        
    public function getPelangganById($id_pelanggan)
    {
        $sql = "SELECT * FROM pelanggan WHERE id_pelanggan = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_pelanggan);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function insertPelanggan($nama, $alamat)
    {
        $sql = "INSERT INTO pelanggan (nama, alamat) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $nama, $alamat);
        $stmt->execute();
    }

    public function updatePelanggan($id_pelanggan, $nama, $alamat)
    {
        $sql = "UPDATE pelanggan SET nama=?, alamat=? WHERE id_pelanggan=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $nama, $alamat, $id_pelanggan);
        $stmt->execute();
    }

    public function hapusPelanggan($id_pelanggan)
    {
        $sql = "DELETE FROM pelanggan WHERE id_pelanggan=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_pelanggan);
        $stmt->execute();
    }
    
}