<?php
include 'koneksi.php'; // File koneksi database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak Darurat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Tambah Kontak Darurat</h2>
    
    <form action="proses_simpan.php" method="POST">
        <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
        </div>

        <div class="mb-3">
            <label for="nama_kontak" class="form-label">Nama Kontak</label>
            <input type="text" class="form-control" id="nama_kontak" name="nama_kontak" required>
        </div>

        <div class="mb-3">
            <label for="hubungan" class="form-label">Hubungan</label>
            <input type="text" class="form-control" id="hubungan" name="hubungan" required>
        </div>

        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</body>
</html>
