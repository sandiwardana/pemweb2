
<?php
require_once 'koneksi.php';
$query = "SELECT paramedik.*, unit_kerja.nama as nama_unit_kerja  FROM paramedik  LEFT JOIN unit_kerja ON paramedik.unit_kerja_id = unit_kerja.id";
$paramediks = $dbh->query($query)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Data Paramedik puskesmas Plusone</h2>
        <a href="create_paramedik.php" class='btn btn-primary mt-4'>Tambah Data Paramedik</a>
        <table class="table table-bordered mt-2">
            <tr class="table-warning">
                <th>No</th>
                <th>Nama Paramedik</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kategori</th>
                <th>Telopon</th>
                <th>Alamat</th>
                <th>Unit Kerja</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 1;
            foreach($paramediks as $paramedik){?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $paramedik['nama']; ?>
                </td>
                <td>
                    <?= $paramedik['gender']; ?>
                </td>
                <td>
                    <?= $paramedik['tmp_lahir']; ?>
                </td>
                <td>
                    <?= $paramedik['tgl_lahir']; ?>
                </td>
                <td>
                    <?= $paramedik['kategori']; ?>
                </td>
                <td>
                    <?= $paramedik['telpon']; ?>
                </td>
                <td>
                    <?= $paramedik['alamat']; ?>
                </td>
                <td>
                    <?= $paramedik['nama_unit_kerja']; ?>
                </td>
                <td>
                    <a href="edit_paramedik.php?id=<?=$paramedik['id'];?>" class="btn btn-primary">Edit</a>
                    <a href="proses_paramedik.php?id=<?=$paramedik['id'];?>" class="btn btn-danger">Hapus</a>
                </td>

            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>