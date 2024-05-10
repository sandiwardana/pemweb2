<!DOCTYPE html>
<html lang="en">
<?php
require_once('../koneksi.php');

// Ambil data kelurahan yang akan diedit dari database
$id_kelurahan = $_GET['id'];
$sql = "SELECT * FROM kelurahan WHERE id = ?";
$stmt = $dbh->prepare($sql);
$stmt->execute([$id_kelurahan]);
$kelurahan = $stmt->fetch();

// Proses update kelurahan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kec_id = $_POST['kec_id'];

    $sql = "UPDATE kelurahan SET nama = ?, kec_id = ? WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$nama, $kec_id, $id]);

    // Redirect ke halaman index kelurahan setelah update
    header("Location: index.php");
    exit();
}
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('../include/header.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('../include/sidebar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Kelurahan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="card col-md-6">
                            <div class="card-body">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $kelurahan['id']; ?>">
                                    <div class="form-group">
                                        <label for="nama">Nama Kelurahan</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $kelurahan['nama']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kec_id">ID Kecamatan</label>
                                        <input type="number" class="form-control" id="kec_id" name="kec_id" value="<?php echo $kelurahan['kec_id']; ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once('../include/footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
