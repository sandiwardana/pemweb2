<?php
require_once 'navbar.html';
require_once 'sidebar.html';
require_once 'koneksi.php';
?>

<?php

$stmt1 = $dbh->prepare("SELECT COUNT(*) as count FROM pasien");
$stmt1->execute();
$count1 = $stmt1->fetch(PDO::FETCH_ASSOC)['count'];

$stmt2 = $dbh->prepare("SELECT COUNT(*) as count FROM paramedik");
$stmt2->execute();
$count2 = $stmt2->fetch(PDO::FETCH_ASSOC)['count'];

$stmt3 = $dbh->prepare("SELECT COUNT(*) as count FROM periksa");
$stmt3->execute();
$count3 = $stmt3->fetch(PDO::FETCH_ASSOC)['count'];

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 mb-4">Dashboard E-Puskesmas</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content ms-4">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
                <?= $count1; ?>
              </h3>

              <p>Data Pasien</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-user"></i>
            </div>
            <a href="data_pasien.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>
                <?= $count2; ?>
              </h3>

              <p>Dokter</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-user-doctor"></i>
            </div>
            <a href="data_paramedik.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>
                <?= $count3; ?>
              </h3>

              <p>Pemeriksaan</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-bed-pulse"></i>
            </div>
            <a href="data_periksa.php" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.html';
?>