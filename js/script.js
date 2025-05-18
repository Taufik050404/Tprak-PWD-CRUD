// Konfirmasi sebelum menghapus data
function konfirmasiHapus(npm) {
    if (confirm(`Apakah Anda yakin ingin menghapus data dengan NPM ${npm}?`)) {
        window.location.href = `hapus.php?npm=${encodeURIComponent(npm)}`;
    }
}

// Validasi form tambah/edit
function validasiForm() {
    const nama = document.getElementById('nama').value.trim();
    const kelas = document.getElementById('kelas').value.trim();
    const jurusan = document.getElementById('jurusan').value.trim();
    const npmInput = document.getElementById('npm');

    if (npmInput && npmInput.value.trim() === "") {
        alert("NPM tidak boleh kosong!");
        return false;
    }

    if (nama === "" || kelas === "" || jurusan === "") {
        alert("Semua field wajib diisi!");
        return false;
    }

    return true;
}
