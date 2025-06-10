<?php
// Fungsi untuk memastikan nomor telepon diawali dengan +62
function formatNomorTelepon($nomor) {
    $nomor = trim($nomor);
    if (strpos($nomor, '+62') !== 0) {
        return '+62' . ltrim($nomor, '0');
    }
    return $nomor;
}

// Menangani metode GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
    echo "<h3>Data Diterima via GET:</h3>";
    $nama = $_GET['nama'] ?? '';
    $alamat = $_GET['alamat'] ?? '';
    $telepon = $_GET['telepon'] ?? '';
    $gender = $_GET['gender'] ?? '';
    $telepon = formatNomorTelepon($telepon);

    echo "Nama: $nama<br>";
    echo "Alamat: $alamat<br>";
    echo "Nomor Telepon: $telepon<br>";
    echo "Jenis Kelamin: $gender<br><br>";
}

// Menangani metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    echo "<h3>Data Diterima via POST:</h3>";
    $nama = $_POST['nama'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $telepon = $_POST['telepon'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $telepon = formatNomorTelepon($telepon);

    echo "Nama: $nama<br>";
    echo "Alamat: $alamat<br>";
    echo "Nomor Telepon: $telepon<br>";
    echo "Jenis Kelamin: $gender<br><br>";
}
?>

<!-- Form untuk metode GET -->
<h2>Form Metode GET</h2>
<form method="GET" action="">
    Nama: <input type="text" name="nama" required><br>
    Alamat: <input type="text" name="alamat" required><br>
    Nomor Telepon: <input type="text" name="telepon" required><br>
    Jenis Kelamin:
    <select name="gender" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <input type="submit" value="Kirim via GET">
</form>

<hr>

<!-- Form untuk metode POST -->
<h2>Form Metode POST</h2>
<form method="POST" action="">
    Nama: <input type="text" name="nama" required><br>
    Alamat: <input type="text" name="alamat" required><br>
    Nomor Telepon: <input type="text" name="telepon" required><br>
    Jenis Kelamin:
    <select name="gender" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <input type="submit" value="Kirim via POST">
</form>
