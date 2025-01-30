<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $nama_kontak = $_POST['nama_kontak'];
    $hubungan = $_POST['hubungan'];
    $nomor_telepon = $_POST['nomor_telepon'];

    $sql = "INSERT INTO kontak_darurat (nama_mahasiswa, nama_kontak, hubungan, nomor_telepon) 
            VALUES ('$nama_mahasiswa', '$nama_kontak', '$hubungan', '$nomor_telepon')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='Form_InputKontak.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>