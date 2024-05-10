<?php
require_once 'koneksi.php';
$query = "SELECT periksa.*, pasien.nama as nama_pasien, paramedik.nama as nama_paramedik FROM periksa
            LEFT JOIN pasien ON periksa.pasien_id = pasien.id
            LEFT JOIN paramedik ON periksa.dokter_id = paramedik.id";
$periksas = $dbh->query($query)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Periksa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Data Periksa Puskesmas Plusone</h2>
        <a href="create_periksa.php" class='btn btn-primary mt-4'>Tambah Data Periksa</a>
        <table class="table table-bordered mt-2">
            <tr class="table-warning">
                <th>No</th>
                <th>Tanggal</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Tensi</th>
                <th>Keterangan</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 1;
            foreach($periksas as $periksa){?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $periksa['tanggal']; ?>
                </td>
                <td>
                    <?= $periksa['berat']; ?>
                </td>
                <td>
                    <?= $periksa['tinggi']; ?>
                </td>
                <td>
                    <?= $periksa['tensi']; ?>
                </td>
                <td>
                    <?= $periksa['keterangan']; ?>
                </td>
                <td>
                    <?= $periksa['nama_pasien']; ?>
                </td>
                <td>
                    <?= $periksa['nama_paramedik']; ?>
                </td>
                <td>
                    <a href="edit_periksa.php?id=<?=$periksa['id'];?>" class="btn btn-primary">Edit</a>
                    <a href="proses_periksa.php?id=<?=$periksa['id'];?>" class="btn btn-danger">Hapus</a>
                </td>

            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>