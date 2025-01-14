<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penelusuran Alumni</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container my-5">
      <h2 class="text-center mb-4">Penelusuran Alumni</h2>
      <?php
        include 'Latihan_09_config.php';
        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $perusahaan = $_POST['perusahaan'];
            // SQL query to search alumni by name or company
            $sql = "SELECT * FROM penelusuran_alumni WHERE
                    (nama LIKE '%$nama%' OR '$nama' = '') AND
                    (perusahaan LIKE '%$perusahaan%' OR '$perusahaan' = '')";
            $result = $conn->query($sql); } 
      ?>
      <div class="card">
        <div class="card-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Alumni:</label>
              <input
                type="text"
                class="form-control"
                id="nama"
                name="nama"
                placeholder="Masukkan nama alumni"
              />
            </div>
            <div class="mb-3">
              <label for="perusahaan" class="form-label">Perusahaan:</label>
              <input
                type="text"
                class="form-control"
                id="perusahaan"
                name="perusahaan"
                placeholder="Masukkan nama perusahaan"
              />
            </div>
            <button type="submit" class="btn btn-primary">Cari Alumni</button>
          </form>
        </div>
      </div>
      <div id="hasilPencarian" class="mt-4">
        <?php
            if (isset($result)) {
                if ($result->num_rows > 0) { 
                  echo "<h4>Hasil Pencarian:</h4>";
                  echo "<table class='table table-bordered'>";
                  echo "<thead><tr><th>Nama</th><th>Jurusan</th><th>Tahun Lulus</th><th>Posisi</th><th>Perusahaan</th><th>Lokasi</th><th>Tanggal Update</th></tr></thead>";
                  echo "<tbody>";
                  while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["nama"] . "</td>";
                  echo "<td>" . $row["jurusan"] . "</td>";
                  echo "<td>" . $row["tahun_lulus"] . "</td>";
                  echo "<td>" . $row["posisi"] . "</td>";
                  echo "<td>" . $row["perusahaan"] . "</td>";
                  echo "<td>" . $row["lokasi"] . "</td>";
                  echo "<td>" . $row["tanggal_update"] ."</td>";
                  echo "</tr>";
                }
                  echo "</tbody>";
                  echo "</table>";
                } else {
                  echo "<div class='alert alert-warning'>Tidak ditemukan data alumni yang sesuai dengan kriteria pencarian.</div>";
                }
            }
                ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>