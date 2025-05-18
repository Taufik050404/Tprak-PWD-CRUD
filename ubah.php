<?php
require_once 'includes/Databse.php';
$db = new Databse();

if (!isset($_GET['npm'])) {
    header("Location: index.php");
    exit;
}

$npm = $_GET['npm'];
$data = $db->getDataById($npm);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $db->updateData($npm, $nama, $kelas, $jurusan);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form method="POST" onsubmit="return validasiForm();">
        <label>NPM:</label><br>
        <input type="text" name="npm" value="<?= htmlspecialchars($data['NPM']) ?>" readonly><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" id="nama" value="<?= htmlspecialchars($data['NAMA']) ?>" required><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" id="kelas" value="<?= htmlspecialchars($data['Kelas']) ?>" required><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" id="jurusan" value="<?= htmlspecialchars($data['jurusan']) ?>" required><br>

        <button type="submit">Update</button>
    </form>

<script src="js/script.js"></script>
</body>
</html>
