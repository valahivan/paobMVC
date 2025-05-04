<?php 
require_once '../app/model/Osis.php';
session_start();
$data = new Osis();
$osis = $data->orderBy('nama', "ASC")->get();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PAOB Mobile</title>
  <link rel="stylesheet" href="../public/paob_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/paob_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/paob_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/paob_assets/dist/css/manage_css/style.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/paob_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/paob_assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <?php include('partial/navbar.php') ?>

  <!-- Main Sidebar Container -->
  <?php include('partial/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>HALAMAN CEK DATA ANGGOTA OSIS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
              <li class="breadcrumb-item active">HALAMAN CEK DATA ANGGOTA OSIS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <table id="dataOSIS2" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class=" text-center">
                        <th class="align-middle">NO</th>
                        <th class="align-middle">NAMA LENGKAP</th>
                        <th class="align-middle">GENDER</th>
                        <th class="align-middle">KELAS</th>
                        <th class="align-middle">KONTAK</th>
                        <th class="align-middle">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $nomor = 1 ?>
                    <?php foreach($osis as $row) :?>
                    <tr>
                        <td class="align-middle text-center"><?= $nomor; ?></td>
                        <td class="align-middle"><?= strtoupper($row->nama); ?></td>
                        <td class="align-middle"><?= strtoupper($row->gender); ?></td>
                        <td class="align-middle"><?= strtoupper($row->kelas); ?></td>
                        <td class="align-middle"><?= strtoupper($row->alasan); ?></td>
                        <td class="align-middle text-center">
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete<?=$row->id?>">
                              <i class="fas fa-trash-can"></i> DELETE
                              </button>
                              <a href="../index.php?route=download&&id=<?= $row->id?>" class="btn btn-primary font-weight-bold" target="_blank"><i class="fas fa-download"></i> DOWNLOAD BUKTI DAFTAR</a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                    <div class="modal fade" id="modal-delete<?=$row->id?>">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Konfirmasi Hapus</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <p>Apakah yakin mau menghapus data <?=$row->nama?></p>
                            </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="../index.php?route=delete&&id=<?=$row->id?>" class="btn btn-primary font-weight-bold"> Ok</a>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2025 <a href="">OSIS SMK Samudra</a>.</strong> All rights reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../public/paob_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/paob_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/paob_assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../public/paob_assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../public/paob_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../public/paob_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../public/paob_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../public/paob_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../public/paob_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../public/paob_assets/plugins/sweetalert/sweetalert.min.js"></script>

<script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#dataOSIS2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
  });
</script>
</body>
</html>

<?php 
if (isset($_SESSION['success'])) {
    echo "<script>
                Swal.fire({
                  title: 'Berhasil!',
                  text: 'Data OSIS berhasil dihapus',
                  icon: 'success'
                });
          </script>";
}
unset($_SESSION['success']);
?>
