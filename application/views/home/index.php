

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->

                  <?php if($this->session->flashdata('flash')): ?>
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                      <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Success!</strong> Anda berhasil <?php echo $this->session->flashdata('flash') ?>
                      </div>
                    </div>
                  </div>
                <?php endif ?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
