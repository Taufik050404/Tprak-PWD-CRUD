<?php
require_once 'koneksi.php';

class Databse extends Koneksi {

    public function getAllData() {
        $query = "SELECT * FROM mahasiswa";
        return $this->conn->query($query);
    }

    public function getDataById($npm) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE NPM = ?");
        $stmt->bind_param("s", $npm);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function insertData($npm, $nama, $kelas, $jurusan) {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (NPM, NAMA, Kelas, jurusan) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $npm, $nama, $kelas, $jurusan);
        return $stmt->execute();
    }

    public function updateData($npm, $nama, $kelas, $jurusan) {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET NAMA = ?, Kelas = ?, jurusan = ? WHERE NPM = ?");
        $stmt->bind_param("ssss", $nama, $kelas, $jurusan, $npm);
        return $stmt->execute();
    }

    public function deleteData($npm) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE NPM = ?");
        $stmt->bind_param("s", $npm);
        return $stmt->execute();
    }
}
?>
