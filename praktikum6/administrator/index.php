<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>
<?php require_once "proses_registrasi.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Puskesmas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
        <br></br>
        <div class="container-fluid">
        <h2 style="text-align:center;"><u>Welcome to Admin!!</u></h2>
        <div class="row">
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<!-- Main content -->
  <section class="content">
      <div>
      <h1>Form Registrasi Pasien</h1>
      </div>
      

<form method="POST">
<div class="form-group row">
    <label for="nomor-telepon" class="col-4 col-form-label">Nomor Telepon</label> 
    <div class="col-8">
    <input id="nomor_telepon" name="nomor _telepon" type="text" required="required" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
    <input id="name" name="name" type="text" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
    <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
        <label for="gender_0" class="custom-control-label">Pria</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
        <label for="gender_1" class="custom-control-label">Wanita</label>
    </div>
    </div>
</div>
<div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
    <select id="domisili" name="domisili" class="custom-select" required="required">
        <?php foreach($domisili as $dom){?>
            <option value="<?= $dom; ?>"><?= $dom; ?></option>
        <?php } ?>
    </select>
    </div>
</div>
<div class="form-group row">
    <label for="kelurahan" class="col-4 col-form-label">Kelurahan</label> 
    <div class="col-8">
    <select id="kelurahan" name="kelurahan" class="custom-select" required="required">
        <?php foreach($program_studi as $key => $value){ ?>
            <option value="<?= $key; ?>"><?= $value; ?></option>
        <?php } ?>
    </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-4">Konsultasi Dokter</label> 
    <div class="col-8">
    <div class="custom-control custom-checkbox custom-control-inline">
        <input name="dokter" id="dokter_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="dokter_0" class="custom-control-label">Dokter Umum</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline">
        <input name="dokter" id="dokter_1" type="checkbox" class="custom-control-input" value="CSS"> 
        <label for="dokter_1" class="custom-control-label">Dokter Spesialis</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline">
        <input name="dokter" id="dokter_2" type="checkbox" class="custom-control-input" value="Javascript"> 
        <label for="dokter_2" class="custom-control-label">Dokter Anak</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline">
        <input name="dokter" id="dokter_3" type="checkbox" class="custom-control-input" value="PHP"> 
        <label for="dokter_3" class="custom-control-label">Dokter Hewan</label>
    </div>
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
    <input id="email" name="email" type="text" class="form-control" required="required">
    </div>
</div> 
<div class="form-group row">
    <div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

<?php if(isset($_POST['submit'])) {
            $nomor_telepon = $_POST['nomor_telepon'];
            $name= $_POST['name'];
            $gender = $_POST['gender'];
            $domisili = $_POST['domisili'];
            $kelurahan = $_POST['kelurahan'];
            $dokter = $_POST['dokter'];
            $email = $_POST['email'];
        ?>
        <table class="table table-bordered">
            <tr class="table-primary">
                <th>Nomor Telepon</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Domisili</th>
                <th>Kelurahan</th>
                <th>Konsultasi Dokter</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><?=  $nomor-telepon; ?></td>
                <td><?=  $name; ?></td>
                <td><?=  $gender; ?></td>
                <td><?=  $domisili; ?></td>
                <td><?=  $kelurahan; ?></td>
                <td><?=  $dokter; ?></td>
                <td><?=  $email; ?></td>
            </tr>
        </table>
        <?php } ?>
      </div>
      </div>
      <!-- /.row -->

      
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->





      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
              <a href="login.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Log out
                </p>
              </a>
            </li>
          </ul>
        </nav>

</body>
</html>
<?php
require_once 'footer.html';
?>