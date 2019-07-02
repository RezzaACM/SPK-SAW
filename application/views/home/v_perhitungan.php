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
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              	<table id="example1" class="table table-bordered table-striped">
			                <thead>
				                <tr>
				                  <th>No.</th>
				                  <th>Nama Guru</th>
				         		  <?php $i=1;
                      foreach ($kriteria as $k): ?>
				         		  	<th><?php echo $k['nama_kriteria']; echo (' (C'.$i++.')')?></th>
				         		  <?php endforeach; ?>
				                </tr>
                      </thead>
                      
                     
                       <tbody>
                         <?php $i=1; 
                      foreach ($dataGuru as $rows): ?>
                         <tr>
                           <td><?php echo $i++ ?></td>
                           <td><?php echo $rows['nama'] ?></td>
                         <?php foreach ($kriteria as $k) :?>

                          <?php $data =  $this->M_perhitungan->getTripleData(($rows['nama']),$k['id_kriteria'])->result_array(); ?>
                          <td>
                            <?php if (isset($data[0]['penilaian'])) {
                              echo $data[0]['penilaian'];
                              // var_dump($data[0]['penilaian']);
                            } else {
                              echo "";
                            } ?>
                          </td>
                           <?php endforeach; ?>
                         </tr>
                         <?php endforeach; ?>
                       </tbody>
                       
                      
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
        <form action="<?php echo base_url('perhitungan/nilai_guru') ?>" method="post">
          <div class="form-group">
            <label for="nama">Nama Guru</label>
            <select name="id_guru" id="nama" class="form-control">
            	<?php foreach ($dataGuru as $data): ?>
            		<option value="<?php echo $data['id_guru'] ?>"><?php echo $data['nama'] ?></option>
            	<?php endforeach ?>
            	
            </select>
          </div>
          <?php foreach ($kriteria as $k): ?>
            <div class="form-group">
            <label for="nama"><?php echo $k['nama_kriteria'] ?></label>

            <input class="form-control" type="text" name="penilaian" id="" placeholder="Masukkan Nama Lengkap" required="">
          </div>
          <?php endforeach ?>
          
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