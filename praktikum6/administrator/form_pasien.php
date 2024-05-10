<?php
require_once 'koneksi.php';

$_idx = $_GET['id'];

if ($_idx) {
    $sql = "SELECT * FROM pasien WHERE id_pasien=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idx]);
    $row = $st->fetch();
}

require_once 'navbar.html';
require_once 'sidebar.html';

$query = "SELECT * FROM kelurahan";
$kelurahaa = $dbh->query($query);
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Pasien</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Pasien</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="proses_pasien.php" id="register-form">
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="kode">Kode :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="kode" value='<?= $row['kode']; ?>' id="kode" placeholder="Enter Code ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Pasien :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nama" value="<?= $row['nama'] ?>" id="nama" placeholder="Enter Name ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tmp_lahir">Tempat Lahir :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-hospital-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" value="<?= $row['tmp_lahir'] ?>" placeholder="Enter City ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                                        </div>
                                        <input type="date" class="form-control" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>" id="tgl_lahir" placeholder="Enter Date ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin :</label>
                                    <div class="input-group mb-3">
                                        <div class=" form-check pe-3">
                                            <input class="form-check-input" type="radio" name="gender" value="L" <?= $row['gender'] == 'L' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Laki-Laki</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="gender" value="P" <?= $row['gender'] == 'P' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan :</label>
                                    <select class="form-control" name="kelurahan" value="<?= $row['kelurahan'] ?>" id="kelurahan">
                                        <?php foreach ($kelurahan as $kelurahan) { ?>
                                            <option value="<?= $kelurahan['kecamatan']; ?>" <?= $kelurahan['kecamatan'] == $row['kecamatan'] ? 'selected' : ''; ?>><?= $kelurahan['nama']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" id="email" value="<?= $row['email'] ?>" placeholder="Enter Email ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-location-dot"></i></span>
                                        </div>
                                        <textarea class="form-control" name="alamat" id="alamat" value="<?= $row['alamat'] ?>" rows="3" placeholder="Enter Address..."></textarea>
                                    </div>
                                </div>
                                <?php if ($_idx) { ?>
                                    <input type="hidden" name="idx" value="<?= $_idx; ?>">
                                <?php } ?>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="proses" value="Edit">
                                <input type="reset" class="btn btn-danger" name="proses" value="Batal">
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.html';
?>