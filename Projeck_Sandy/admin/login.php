<?php
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Puskesmas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/admin/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/admin/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/admin/css/adminlte.min.css">

  <style>
    body {
      margin: 0;
      overflow: hidden;
    }

    #background-video {
      position: fixed;
      right: auto;
      bottom: auto;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -1;
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.8);
      /* Warna latar belakang dengan opacity */
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      /* Bayangan untuk memberikan kedalaman */
      backdrop-filter: blur(0px);
      /* Efek blur menggunakan backdrop-filter */
      text-align: center;
    }

    .login-box input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
    }

    .login-box button {
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      outline: none;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <video id="background-video" playsinline="" autoplay="autoplay" muted="muted" loop="">
    <source src="HOSPITAL MEDICAL.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
      <div class="login-box">
        <div class="login-logo">
          <b>Puskesmas Isekai</b>
        </div>
        <!-- /.login-logo -->
        <div class="card" align="center">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan Login</p>

            <form action="proses.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                <!-- <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div> -->
              </div>
              <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
                <!-- <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div> -->
              </div>
              <div class="row">

                <!-- /.col -->
                <div class="col-12">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
                </div>
                <!-- /.col -->
              </div>
              <br>
            </form>


            <!-- /.social-auth-links -->

            <p class="mb-1">
              <a href="recover-password.php">Lupa sandi?</a>
            </p>
            <p class="mb-0">
              <a href="register.php" class="text-center">Registrasi member</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
      <!-- /.login-box -->

      <!-- jQuery -->
      <script src="assets/admin/js/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="assets/admin/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="assets/admin/js/adminlte.min.js"></script>

</body>

</html>