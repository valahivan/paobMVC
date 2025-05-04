<?php 
session_start();

if (isset($_SESSION['username'])) {
    header('Location: admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/paob_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/paob_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/paob_assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body class="hold-transition login-page">
    <h1 class="title text-secondary">PAOB Mobile</h1>
    <div class="login-box">
    <div class="card-login bg-white shadow rounded">
        <div class="card-header bg-purple">
        <h4 class="ml-1">Sign in to start your session</h4>
        </div>
        <div class="card-body">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>
        <?php unset($_SESSION['message']) ?>
        <form action="proses_login.php" method="post">
            <label for="name" class="form-label text-secondary">Username :</label>
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <label for="password" class="form-label text-secondary">Password :</label>
            <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <button type="submit" class="btn btn-block bg-purple"><i class="fas fa-user"></i> Sign-In</button>
            <a href="../index.php" class="btn btn-block bg-purple"><i class="fas fa-home"></i> Home</a>
        </form>
        </div>
        <footer class="bg-light p-3 text-center rounded-bottom">
            <strong>Copy Right &copy; 2025 | OSIS SMK SAMUDRA</strong>
        </footer>
    </div><!-- /.card -->
    </div>

<!-- jQuery -->
<script src="../public/paob_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/paob_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/paob_assets/dist/js/adminlte.min.js"></script>
</body>
</html>

