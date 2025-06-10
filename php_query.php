<?php
// Koneksi ke SQLite
$db = new PDO('sqlite:brighton.db');

// Jalankan query
$query = "
    SELECT p.nama AS project_nama, COUNT(pc.category_id) AS total_kategori
    FROM Project p
    LEFT JOIN ProjectCategory pc ON p.id = pc.project_id
    GROUP BY p.id, p.nama
";

$result = $db->query($query);

// Tampilkan hasil
echo "<h2>Daftar Project dan Total Kategorinya</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nama Project</th><th>Total Kategori</th></tr>";

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['project_nama']) . "</td>";
    echo "<td>" . $row['total_kategori'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
