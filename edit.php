<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM kontak_darurat WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $nama_kontak = $_POST['nama_kontak'];
    $hubungan = $_POST['hubungan'];
    $nomor_telepon = $_POST['nomor_telepon'];

    $sql = "UPDATE kontak_darurat SET 
            nama_mahasiswa='$nama_mahasiswa', 
            nama_kontak='$nama_kontak', 
            hubungan='$hubungan', 
            nomor_telepon='$nomor_telepon'
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak Darurat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Edit Kontak Darurat</h2>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mahasiswa" value="<?= $row['nama_mahasiswa'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Kontak</label>
            <input type="text" class="form-control" name="nama_kontak" value="<?= $row['nama_kontak'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hubungan</label>
            <input type="text" class="form-control" name="hubungan" value="<?= $row['hubungan'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="nomor_telepon" value="<?= $row['nomor_telepon'] ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>

</body>
</html>
