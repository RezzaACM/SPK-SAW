
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Guru
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    
    <?php if($this->session->flashdata('flash')): ?>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> Data guru berhasil <?php echo $this->session->flashdata('flash') ?>
          </div>
        </div>
      </div>
    <?php endif ?>
    
    

    <!-- Main content -->

    <div class="tombolTambah row">
      <div class="col-md-9 col-sm-9">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Tambah Data Guru</button>
      </div>
    </div>

  <!-- modalBox tambah data guru-->
  <div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Form Tambah Data Guru</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('master/tambahDataGuru') ?>" method="post">
          <div class="form-group">
            <label for="nuptk">NUPTK</label>
            <input class="form-control" type="text" name="nuptk" id="nuptk" >
          </div>
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required="">
          </div>
          <div class="form-group">
            <label for="tempat">Tempat</label>
            <input class="form-control" type="text" name="tempat" id="tempat" placeholder="Masukkan Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <input class="form-control" type="date" name="tanggal_lahir" id="tanggal">
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
              <option value="">--Pilih Jenis Kelamin--</option>
              <option value="Laki-laki">Laki - laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select class="form-control" name="tugas_jabatan" id="jabatan">
              <option value="">--Pilih Jabatan--</option>
              <?php foreach ($jabatan as $jab) {?>
              <option value="<?php echo $jab ?>"><?php echo $jab ?></option>
             <?php } ?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Box edit data guru -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Form Tambah Data Guru</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('master/tambahDataGuru') ?>" method="post">
          <input class="form-control" type="hidden" name="id" id="id" placeholder="" hidden="true">
          <div class="form-group">
            <label for="nuptk">NUPTK</label>
            <input class="form-control" type="numeric" name="nuptk" id="nuptk" placeholder="" readonly="">
          </div>
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required="">
          </div>
          <div class="form-group">
            <label for="tempat">Tempat</label>
            <input class="form-control" type="text" name="tempat" id="tempat" placeholder="Masukkan Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <input class="form-control" type="date" name="tanggal_lahir" id="tanggal">
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" >
              <option value="">--Pilih Jenis Kelamin--</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select class="form-control" name="tugas_jabatan" id="jabatan">
              <option value="">--Pilih Jabatan--</option>
              <?php foreach ($jabatan as $jab) {?>
              <option value="<?php echo $jab ?>"><?php echo $jab ?></option>
             <?php } ?>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- /.Modal Box edit data guru -->
  

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>NUPTK</th>
                  <th>Nama</th>
                  <th>Tempat</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Tugas Jabatan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                $no = 1;
                foreach ($guru as $row) :
                 ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nuptk ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->tempat ?></td>
                    <td><?php $date = $row->tanggal_lahir; echo $date;?></td>
                    <td><?php echo $row->jenis_kelamin ?></td>
                    <td><?php echo $row->tugas_jabatan ?></td>
                    <td class="text-center"><a onclick="return confirm('Kamu yakin akan menghapus data ini?');" href="<?php echo base_url ('master/hapusDataGuru/'.$row->id) ?>" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a> 
                    &nbsp;<a style="cursor: pointer;" onclick="select_data(
                      '<?php echo $row->id ?>'
                      '<?php echo $row->nuptk ?>'
                      '<?php echo $row->nama ?>'
                    )" 
                    data-toggle="modal" data-target="#myModal" title="Sunting" data-id="<?php echo $row->id; ?>" class="glyphicon glyphicon-pencil"></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
