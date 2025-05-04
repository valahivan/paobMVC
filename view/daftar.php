<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Daftar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/paob_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="public/paob_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/paob_assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="public/paob_assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="public/paob_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="public/css/main.css">
</head>
<body class="body-register-page">
<div class="container">
<div class="box-register col-lg-5 col-11">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1">PAOB Mobile</a>
    </div>
    <div class="card-body">
      <h6 class="login-box-msg text-secondary text-uppercase">Form Pendaftaran Anggota OSIS Baru</h6>
      <form action="index.php?route=store" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="tanggal_lahir" class="form-control" placeholder="TANGGAL LAHIR (Contoh : 06112007)" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <select name="gender" class="form-control select2bs4">
                <option selected="selected" value="">JENIS KELAMIN</option>
                <option value="Laki-Laki">LAKI-LAKI</option>
                <option value="Perempuan">PEREMPUAN</option>
            </select>
            <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-user"></span>
            </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <select name="kelas" class="form-control select2bs4">
                <option selected="selected" value="">KELAS</option>
                <option value="X AK">X AK</option>
                <option value="XI AK">XI AK</option>
                <option value="X TKJ 1">X TKJ 1</option>
                <option value="X TKJ 2">X TKJ 2</option>
                <option value="X TKJ 3">X TKJ 3</option>
                <option value="XI TKJ 1">XI TKJ 1</option>
                <option value="XI TKJ 2">XI TKJ 2</option>
                <option value="XI TKJ 3">XI TKJ 3</option>
                <option value="X TKR 1">X TKR 1</option>
                <option value="X TKR 2">X TKR 2</option>
                <option value="X TKR 3">X TKR 3</option>
                <option value="XI TKR 1">XI TKR 1</option>
                <option value="XI TKR 2">XI TKR 2</option>
                <option value="XI TKR 3">XI TKR 3</option>
            </select>
            <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-school"></span>
            </div>
            </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="no_hp" class="form-control" placeholder="NO HANDPHONE / WA" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="alasan" class="form-control" placeholder="ALASAN INGIN MASUK OSIS" autocomplete="off" required></textarea>
          <div class="input-group-append">
            <div class="input-group-text bg-white">
              <span class="fas fa-envelope"></span>
            </div>
            </div>
        </div>
        <div class="buttons">
            <button type="submit" name="daftar" class="btn btn-primary btn-block mb-2"><i class="fas fa-user"></i> DAFTAR SEKARANG</button>
            <a href="index.php?route=cek" class="btn btn-success btn-block"><i class="fas fa-envelope"></i> CEK NAMA ANDA ?</a>
        </div>  
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="public/paob_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/paob_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/paob_assets/dist/js/adminlte.min.js"></script>
<script src="public/paob_assets/plugins/select2/js/select2.full.min.js"></script>
<script>
     $('.select2').select2()
     $('.select2bs4').select2({
     theme: 'bootstrap4'
     })
</script>
<script src="public/paob_assets/plugins/sweetalert/sweetalert.min.js"></script>
</body>
</html>

<?php 
if (isset($_SESSION['success'])) {
  echo "<script>
          Swal.fire({
            title: 'Berhasil',
            text: 'Data kamu sudah terdaftar! Silahkan cek nama kamu jika anda sudah terbukti mendaftar.',
            icon: 'success'
          });
        </script>";
}

unset($_SESSION['success'])

?>
