

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

    <!-- Main content -->

    <div class="tombolTambah row">
      <div class="col-md-9 col-sm-9">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Data Guru</button>

      </div>
    </div>
  <!-- modalBox -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
              <option value="Guru">Guru</option>
              <option value="Kepala Sekolah">Kepala Sekolah</option>
              <option value="Wakil Bidang Kesiswaan">Wakil Bidang Kesiswaan</option>
              <option value="Wakil Bidang Kurikulum">Wakil Bidang Kurikulum</option>
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
                    <td><a href=""></a></td>
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
