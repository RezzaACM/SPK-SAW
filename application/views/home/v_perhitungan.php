  <div class="content-wrapper">

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Perankingan</h1>
					 <div class="tombolTambah row">
				      <div class="col-md-9 col-sm-9">
				        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Penilaian Guru</button>
				      </div>
				    </div>
				</div>
			</div>
		</div>

 		<div class="row">
			<div class="col-md-12">
				<div class="box">
		            <div class="box-header">
		              <h3 class="box-title">Data Penilaian Guru</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              	<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  <th>No.</th>
				                  <th>Nama Guru</th>
				         		  <?php $i=1;foreach ($kriteria as $k): ?>
				         		  	<th><?php echo $k['nama_kriteria']; echo (' (C'.$i++.')')?></th>
				         		  <?php endforeach ?>
				                </tr>
                      </thead>
                      <?php var_dump($dataJoin[0]['id']) ?>
                      <tr>
                        <td><?php echo $dataJoin[0]['penilaian'] ?></td>
                      </tr>
		            	</table>
		       		</div>
		    	</div>
			</div>
		</div>

	</div>



	<!--  -->
	<div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Form Penilaian</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('master/tambahDataGuru') ?>" method="post">
          <div class="form-group">
            <label for="nama">Nama Guru</label>
            <select name="nama" id="nama" class="form-control">
            	<?php foreach ($dataGuru as $data): ?>
            		<option value=""><?php echo $data['nama'] ?></option>
            	<?php endforeach ?>
            	
            </select>
          </div>
          <div class="form-group">
            <label for="nama">Absensi</label>
            <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required="">
          </div>
          <div class="form-group">
            <label for="tempat">Kompetensi Keahlian</label>
            <input class="form-control" type="text" name="tempat" id="tempat" placeholder="Masukkan Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="tanggal">Kompetensi Pedadogik</label>
            <input class="form-control" type="date" name="tanggal_lahir" id="tanggal">
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Kompetensi Sosial</label>
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


  </div>