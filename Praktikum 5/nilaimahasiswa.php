<?php require_once 'class_nilaimahasiswa.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Hasil</th>
            </tr>
            <tr>
                <td>1</td>
                <td><?= $mahasiswa1->nim; ?></td>
                <td><?= $mahasiswa1->nama; ?></td>
                <td><?= $mahasiswa1->matakuliah; ?></td>
                <td><?= $mahasiswa1->nilai; ?></td>
                <td><?= $mahasiswa1->nilai_hasil(); ?></td>
            </tr>
            <tr></tr>
        </table>
    </div>
</body>
</html>