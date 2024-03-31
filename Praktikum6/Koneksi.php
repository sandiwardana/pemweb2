<?php
require_once 'koneksi.php';
$query = "SELECT * FROM pasien";
$pasiens = $dbh->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien Puskesmas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Data Pasien Puskesmas Sukahati</h2>
        <table class="table table-bordered">
            <tr class="table-warning">
                <th>NO</th>
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kelurahan</th>
                <th>Aksi</th>
            </tr>
            <?php
        $no =1;
        foreach($pasiens as $pasien){ ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pasien['kode']; ?></td>
                <td><?= $pasien['nama']; ?></td>
                <td><?= $pasien['gender']; ?></td>
                <td><?= $pasien['tmp_lahir']; ?></td>
                <td><?= $pasien['tgl_lahir']; ?></td>
                <td><?= $pasien['kelurahan_id']; ?></td>
                <td></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>