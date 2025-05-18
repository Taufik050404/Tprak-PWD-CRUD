<?php
require_once 'includes/Databse.php';
$db = new Databse();
$data = $db->getAllData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <h1>Data Mahasiswa</h1>
    <a href="tambah.php" class="btn">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>No</th><th>NPM</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; while($row = $data->fetch_assoc()): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['NPM']) ?></td>
                <td><?= htmlspecialchars($row['NAMA']) ?></td>
                <td><?= htmlspecialchars($row['Kelas']) ?></td>
                <td><?= htmlspecialchars($row['jurusan']) ?></td>
                <td>
                    <a href="ubah.php?npm=<?= urlencode($row['NPM']) ?>">Ubah</a> |
                    <a href="#" onclick="konfirmasiHapus('<?= htmlspecialchars($row['NPM']) ?>')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

<script src="js/script.js"></script>
</body>
</html>
