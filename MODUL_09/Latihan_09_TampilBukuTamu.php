<?php
$conn = new mysqli("localhost", "root", "", "db_buku tamu");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM buku_tamu ORDER BY tanggal DESC");
?>

<h2>Daftar Buku Tamu</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama']}</td>
                <td>{$row['email']}</td>
                <td>{$row['pesan']}</td>
                <td>{$row['tanggal']}</td>
            </tr>";
            $no++;
        }
        ?>
    </tbody>
</table>
<?php
$conn->close();
?>