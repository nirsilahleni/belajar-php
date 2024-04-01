<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('admin/dist/img/photo1.png'); background-size: cover; background-position: center;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Form Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login</p>

      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div> 
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Belum Punya Akun</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tetapkan username dan password yang valid
    $valid_username = "leni";
    $valid_password = "345";

    // Periksa apakah input username dan password telah diset
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        // Ambil nilai input username dan password dari form
        $input_username = $_POST["username"];
        $input_password = $_POST["password"];

        // Lakukan validasi username dan password
        if ($input_username === $valid_username && $input_password === $valid_password) {
            // Jika login berhasil, redirect ke halaman lain atau lakukan tindakan lainnya
            header("Location: dataproduct.php");
            exit;
        } else {
            // Jika login gagal, tampilkan pesan kesalahan
            echo "<script>alert('Username atau password salah.');</script>";
        }
    } else {
        // Jika username atau password tidak diisi
        echo "<script>alert('Mohon isi username dan password.');</script>";
    }
}
?>

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>
