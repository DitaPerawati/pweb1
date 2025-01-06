<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="proses/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tracer Alumni</h2>
        
        <div class="card mb-4">
            <div class="card-body">
                <h4>Tambah Data Alumni</h4>
                <form id="alumniForm">
                    <div class="form-group mb-2">
                        <label for="nim">NIM:</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="major">Jurusan:</label>
                        <input type="text" class="form-control" id="major" name="major" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="year">Angkatan:</label>
                        <input type="number" class="form-control" id="year" name="year" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id="addBtn">Tambah Data</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4>Daftar Alumni</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Angkatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="alumniTableBody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="proses/js/script.js"></script>
</body>
</html>