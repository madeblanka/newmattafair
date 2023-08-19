<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url('admin/plugins/fontawesome-free/css/all.min.css')?>">
<link rel="stylesheet" href="<?= base_url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?= base_url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?= base_url('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?= base_url('admin/dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <?php $this->load->view("admin/_partials/sidebar.php") ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3><br>
                <a href="<?php echo site_url('room/adminaddroom/') ?>"><button type="button" class="btn btn-block btn-outline-primary" style="width: 20%;">Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>3 D 2 N 2 - 4 Pax</th>
                    <th>3 D 2 N 5 - 8 Pax</th>
                    <th>3 D 2 N 9 - 12 Pax</th>
                    <th>4 D 3 N 2 - 4 Pax</th>
                    <th>4 D 3 N 5 - 8 Pax</th>
                    <th>4 D 3 N 9 - 12 Pax</th>
                    <th>Extended Night Single</th>
                    <th>Extended Night Twin</th>
                    <th>Extended Night Triple</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($night as $n): ?>
                    <tr>
                      <td><?php echo $n->id_package?></td>
                      <td><?php echo $n->image?></td>
                      <td><?php echo $n->threeday2pax?></td>
                      <td><?php echo $n->threeday5pax?></td>
                      <td><?php echo $n->threeday9pax?></td>
                      <td><?php echo $n->fourday2pax?></td>
                      <td><?php echo $n->fourday5pax?></td>
                      <td><?php echo $n->fourday9pax?></td>
                      <td><?php echo $n->extendedt1?></td>
                      <td><?php echo $n->extendedt2?></td>
                      <td><?php echo $n->extendedt3?></td>
                      <td> 
                      <a href="<?php echo site_url('night/formedit/'.$n->id_night) ?>" href="#!" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('night/delete/'.$n->id_night) ?>"
                      onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                      </tr>
                  <?php endforeach?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 <!-- jQuery -->
<script src="<?= base_url('admin/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('admin/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('admin/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('admin/dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('admin/dist/js/demo.js')?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>