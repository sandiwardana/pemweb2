<?php
require_once 'koneksi.php';
$id_periksa = $_GET['id'];
if($id_periksa){
    $query = 'SELECT * FROM periksa WHERE id=?';
    $stmt = $dbh->prepare($query);
    $stmt->execute([$id_periksa]);
    $periksa = $stmt->fetch();
}
$query_paramedik= 'SELECT * FROM paramedik';
$paramediks = $dbh->query($query_paramedik)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Periksa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Edit Periksa</h2>
        <form method="POST" class='ms-4 me-4' action="proses_periksa.php">
            <div class="form-group row mt-2">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" type="date" required="required" value='<?= $periksa['tanggal'];
                        ?>' class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="berat" class="col-4 col-form-label">Berat</label>
                <div class="col-8">
                    <input id="berat" name="berat" type="number" required="required" value='<?= $periksa['berat']; ?>'
                    class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="tinggi" class="col-4 col-form-label">Tinggi</label>
                <div class="col-8">
                    <input id="tinggi" name="tinggi" type="number" required="required" value='<?= $periksa['tinggi'];
                        ?>'
                    class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="tensi" class="col-4 col-form-label">Tensi</label>
                <div class="col-8">
                    <input id="tensi" name="tensi" type="number" required="required" value='<?= $periksa['tensi']; ?>'
                    class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                <div class="col-8">
                    <input id="keterangan" name="keterangan" type="text" required="required" value='<?= $periksa['keterangan']; ?>'
                    class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="pasien_id" class="col-4 col-form-label">ID Pasien</label>
                <div class="col-8">
                    <input id="pasien_id" name="pasien_id" type="number" required="required" value='<?= $periksa['pasien_id']; ?>'
                    class="form-control">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="dokter" class="col-4 col-form-label">Dokter</label>
                <div class="col-8">
                    <select id="dokter" name="dokter" class="form-select" required="required">
                        <?php foreach($paramediks as $paramedik){
                            $selected = ($paramedik['id']== $periksa['dokter_id']) ? 'selected' : '';
                        ?>
                        <option value="<?= $paramedik['id'];?>" <?=$selected; ?>>
                            <?= $paramedik['nama']; ?>
                        </option>

                        <?php } ?>
                    </select>
                </div>
            </div>
            <?php if($id_periksa){ ?>
            <input type="hidden" name="id" value="<?= $id_periksa; ?>">
            <?php } ?>
            <div class="form-group row mt-2">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" value='edit' class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script
</body>

</html>