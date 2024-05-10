<?php
require_once 'navbar.html';
require_once 'sidebar.html';    

?>

<div class="px-4">

    <?php
require_once("koneksi.php");
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
        <title>Data Pemeriksaan Pasien</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <h2>Data Pemeriksaan Pasien </h2>
            <a href="create_periksa.php" class='btn btn-primary mt-4'>Tambah Pemeriksaan Pasien</a>
            <table class="table table-boardered">
                <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Berat (kg)</th>
                    <th>Tinggi (cm)</th>
                    <th>Tensi</th>
                    <th>Keterangan</th>
                    <th>Dokter </th>
                    <th>Pasien </th>
                    <th>Aksi</th>
                </tr>
                    <?php
                                                $no = 1;
                                                $sql = "SELECT periksa.*, pasien.nama as nama_pasien, paramedik.nama as nama_paramedik 
                                                FROM periksa 
                                                INNER JOIN pasien ON periksa.pasien_id = pasien.id
                                                INNER JOIN paramedik ON periksa.dokter_id = paramedik.id";
                                        $stmt = $dbh->prepare($sql);
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();
                                                foreach ($periksas as $periksa) { ?>
                    <tr>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= date('d F Y', strtotime($periksa['tanggal'])) ?>
                        </td>
                        <td>
                            <?= $periksa['berat'] ?>
                        </td>
                        <td>
                            <?= $periksa['tinggi'] ?>
                        </td>
                        <td>
                            <?= $periksa['tensi'] ?>
                        </td>
                        <td>
                            <?= $periksa['keterangan'] ?>
                        </td>
                        <td>
                            <?= $periksa['nama_paramedik'] ?>
                        </td>
                        <td>
                            <?= $periksa['nama_pasien'] ?>
                        </td>
                        <td>
                        <a href="edit_periksa.php?id=<?php echo $periksa['id']; ?>" class="btn btn-primary"> Edit</a>
                        <a href="proses_periksa.php?id=<?php echo $periksa['id']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php }?>
            </table>
        </div>
    </body>

    </html>
</div>

<?php require_once 'footer.html'; ?>