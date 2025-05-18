<?php
require_once 'includes/Databse.php';
$db = new Databse();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $db->insertData($npm, $nama, $kelas, $jurusan);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form method="POST" onsubmit="return validasiForm();">
        <label>NPM:</label><br>
        <input type="text" name="npm" id="npm" required><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" id="kelas" required><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" id="jurusan" required><br>

        <button type="submit">Simpan</button>
    </form>

<script src="js/script.js"></script>
</body>
</html>
