<?php
require_once 'navbar.html';
require_once 'sidebar.html';

?>

<?php
require_once("koneksi.php");
$query = "SELECT pasien. *, kelurahan.nama as nama_kelurahan
            FROM pasien
            LEFT JOIN kelurahan ON pasien.kelurahan_id = kelurahan.kec_id";

$paramediks = $dbh->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Paramedik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data paramedik </h2>
        <a href="create_paramedik.php" class ='btn btn-primary mt-4'>Tambah Data paramedik</a>
        <table class="table table-boardered">
            <tr class="table-warning">
                <th>No</th>
                <th>Nama Dokter</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>kategori</th>
                <th>Telpon</th>
                <th>Alamat</th>
                <th>unit_kerja</th>
                <th>Aksi</th>
            </tr>
            <?php
                                            $no = 1;
                                            $sql = "SELECT paramedik.*, unit_kerja.nama as nama_unit_kerja 
                                                    FROM paramedik 
                                                    INNER JOIN unit_kerja ON paramedik.unit_kerja_id = unit_kerja.id";
                                            $stmt = $dbh->prepare($sql);
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            foreach ($result as $row) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $row['nama'] ?></td>
                                                    <td><?= $row['gender'] ?></td>
                                                    <td><?= $row['tmp_lahir'] ?></td>
                                                    <td><?= $row['tgl_lahir'] ?></td>
                                                    <td><?= $row['kategori'] ?></td>
                                                    <td><?= $row['telpon'] ?></td>
                                                    <td><?= $row['alamat'] ?></td>
                                                    <td><?= $row['nama_unit_kerja'] ?></td>
                                                    <td>
                <a href="edit_paramedik.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"> Edit</a>
                <a href="proses_paramedik.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>


<?php
require_once 'footer.html';

?>