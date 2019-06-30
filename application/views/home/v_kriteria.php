  <div class="content-wrapper">


	 <section class="content">
	 	<div><h3 class="box-title">Master Kriteria</h3></div>
      <div class="row">
        <div class="col-md-12">
          <div class="box" style="margin-top: 150px;">
            <div class="box-header with-border">
              <div class="tombolTambaha row">
			      <div class="col-md-9 col-sm-9">
			        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Tambah Kriteria</button>
			      </div>
			    </div>
			        <?php if($this->session->flashdata('flash')): ?>
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> Kriteria berhasil <?php echo $this->session->flashdata('flash') ?>
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
                  <th >Nama Kriteria</th>
                  <th>Bobot</th>
                  <th>Attribute</th>
                  <th class="text-center">Action</th>
                </tr>
                <?php 
                	$i = 1;
                foreach ($kriteria as $row) { ?>
                <tr>
                	<td><?php echo $i++ ?></td>
                	<td><?php echo $row['nama_kriteria'] ?></td>
                  <td><?php echo $row['bobot'] ?></td>
                  <td><?php echo $row['attribute_kriteria'] ?></td>
                	<td class="text-center"><a href="" data-toggle="modal" data-target="#myModal3<?php echo $row['id_kriteria'] ?>"><span class="label label-warning">Edit</span></a>
                		<a onclick="return confirm ('Yakin Mengapus Data?')" href="<?php echo base_url('Master_kriteria/hapusKriteria/'.$row['id_kriteria']) ?>"><span class="label label-danger">Hapus</span></a>
                	</td>
                  <!--  -->
<div class="modal fade bs-example-modal-sm" id="myModal3<?php echo $row['id_kriteria'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Form Tambah Kriteria</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Master_kriteria/updateKriteria2/'.$row['id_kriteria']) ?>" method="post">
          <div class="form-group">
            <label for="nuptk">Nama Kriteria</label>
            <input class="form-control" type="text" name="nama_kriteria" id="nuptk" value="<?php echo $row['nama_kriteria'] ?>" >
          </div>
          <div class="form-group">
            <input type="hidden" name="id_kriteria" value="<?php echo $row['id_kriteria'] ?>">
            <label for="bobot">Bobot</label>
            <input class="form-control" type="text" value="<?php echo $row['bobot'] ?>" name="bobot" id="bobot" value="<?php echo $row['bobot'] ?>">
          </div>
          <div class="form-group">
            <label for="attribute">Attribute</label>
            <select name="attribute_kriteria" class="form-control" id="">
              <?php foreach ($attribute as $kri): ?>
                <option value="<?php echo $kri ?>"><?php echo $kri ?></option>
              <?php endforeach ?>
            </select>
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
                  <!--  -->
<?php } ?>
                </tr>

              </table>
          </div>
      </div>
  </div>
</div>
</section>

<!--  -->

<div class="modal fade bs-example-modal-sm" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Form Tambah Kriteria</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Master_kriteria/tambah_kriteria') ?>" method="post">
          <div class="form-group">
            <label for="nuptk">Nama Kriteria</label>
            <input class="form-control" type="text" name="nama_kriteria" id="nuptk" >
          </div>
          <div class="form-group">
            <label for="bobot">Bobot</label>
            <input class="form-control" type="text" name="bobot" id="bobot" >
          </div>
          <div class="form-group">
            <label for="attribute">Attribute</label>
            <select name="attribute_kriteria" class="form-control" id="">
              <?php foreach ($attribute as $kri): ?>
                <option value="<?php echo $kri ?>"><?php echo $kri ?></option>
              <?php endforeach ?>
            </select>
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


<!--  -->


<!--  -->



</div>