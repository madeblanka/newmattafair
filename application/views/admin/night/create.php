<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/_partials/head.php") ?>
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
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo site_url('night/save/') ?>" method="post"  enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">                        
                    <label for="exampleInputEmail1">Package</label>
                        <select name="id_package" id="id_package" class="form-control select2" style="width: 100%;">
                            <option selected value="0">-</option>
                            <?php foreach ($package as $p): ?>
                            <option value="<?php echo $p->id_package?>" required><?php echo $p->name; echo " - ".$p->kategori?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">3 D 2 N 2 - 4 Pax</label>
                    <input type="number" name="threeday2pax" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">3 D 2 N 5 - 8 Pax</label>
                    <input type="number" name="threeday5pax" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">3 D 2 N 9 - 12 Pax</label>
                    <input type="number" name="threeday9pax" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">4 D 3 N 2 - 4 Pax</label>
                    <input type="number" name="fourday2pax" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">4 D 3 N 5 - 8 Pax</label>
                    <input type="number" name="fourday5pax" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">4 D 3 N 9 - 12 Pax</label>
                    <input type="number" name="fourday9pax" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Extended Night Single</label>
                    <input type="number" name="extendedt1" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Extended Night Twin</label>
                    <input type="number" name="extendedt2" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Extended Night Triple</label>
                    <input type="number" name="extendedt3" class="form-control" id="exampleInputEmail1" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
<?php $this->load->view("admin/_partials/footer.php") ?>
</body>
</html>