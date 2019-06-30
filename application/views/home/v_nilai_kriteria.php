<div class="content-wrapper">
	
	      <div class="row">
        <div class="col-md-12">
          <div class="box" style="margin-top: 200px;">
            <div class="box-header with-border">
              
              <div class="tombolTambaha row">
			      <div class="col-md-9 col-sm-9">
			        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Tambah Nilai Kriteria</button>
			      </div>
			    </div>
			        <?php if($this->session->flashdata('flash')): ?>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> Subkriteria berhasil <?php echo $this->session->flashdata('flash') ?>
          </div>
        </div>
      </div>
    <?php endif ?>
            </div>
            <!-- /.box-header -->
           	<div class="box-body">
				<table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No.</th>
                  <th>Nama Kriteria</th>
                  <th style="width:65%px;">Sub Kriteria</th>
                  <th class="text-center">Action</th>
                </tr>
                <?php $i =1; foreach ($joinTable as $rows) {?>
                <tr>
                	<td><?php echo $i++ ?></td>
                	<td><?php echo $rows['nama_kriteria'] ?></td>
                	<td class="text-justify"><?php echo $rows['subkriteria'] ?></td>
                	<td class="text-center"><a href="<?php echo base_url('Master_kriteria/edit_sub_kriteria)/'.$rows['id_sub']) ?>"><span class="label label-warning">Edit</span></a>
                    <a onclick="return confirm ('Yakin Mengapus Data?')" href="<?php echo base_url('Nilai_kriteria/hapus_data_sub/'.$rows['id_sub']) ?>"><span class="label label-danger">Hapus</span></a>
                  </td>

                </tr>
<?php } ?>
              </table>
          </div>
      </div>
  </div>
</div>

<!--  -->
<div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Form Tambah Kriteria</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Nilai_kriteria/tambahSub') ?>" method="post">
        	<div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="kriteria">Nama Kriteria</label>
                <select name="id_kriteria" class="form-control" id="kriteria">
                  <?php foreach ($kriteria as $k): ?>
                    <option value="<?php echo $k['id_kriteria'] ?>"><?php echo $k['nama_kriteria'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
        		<div class="col-md-12">
        			<div class="form-group">
        				<label for="subkriteria">Nama SubKriteria</label>
        				<textarea  type="text" class="form-control" id="subkriteria" name="subkriteria" placeholder="Masukkan nama SubKriteria"></textarea>
        			</div>
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
<!--  -->
</div>

</div>