<div class="content-wrapper">
	<section style="min-height: 100px;" class="content-header">
      <h1 class="">
        Sunting Data Guru
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Sunting Data Guru</li>
      </ol>
    </section>
    <?php foreach($guru as $row){
    	$jabatan2 = $row['tugas_jabatan'];
    	// if ($jabatan ) {
    		# code...
    	
    } ?>
	<?php foreach($guru as $row){ ?>
	<form action="<?php echo base_url('master/updateDataGuru/'.$row['id_guru']) ?>" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<div class="form-group">
			            <input type="hidden" min=0 class="form-control" name="id_guru" id="nuptk" value="<?php echo $row['id_guru'] ?>" readonly="">
			        </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					<div class="form-group">
			            <label for="nuptk">NUPTK</label>
			            <input type="number" min=0 class="form-control" name="nuptk" id="nuptk" value="<?php echo $row['nuptk'] ?>" readonly="">
			        </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					<div class="form-group">
			            <label for="nama">Nama Lengkap</label>
			            <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Lengkap" required="">
			          </div>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
			            <label for="tempat">Tempat Lahir</label>
			            <input class="form-control" type="text" name="tempat" id="tempat" value="<?php echo $row['tempat'] ?>" placeholder="Masukkan Tempat Lahir">
			          </div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
			            <label for="tanggal">Tanggal Lahir</label>
			            <input class="form-control" type="date" value="<?php echo $row['tanggal_lahir'] ?>" name="tanggal_lahir" id="tanggal">
			          </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
			            <label for="jenis_kelamin">Jenis Kelamin</label>
			            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
			            	<?php if ($row['jenis_kelamin'] == "Perempuan"){ ?>
			              <option selected value="<?php $row['jenis_kelamin'] ?>"><?php echo $row['jenis_kelamin'] ?></option>
			              <option  value="Laki-laki">Laki-laki</option>
			          <?php }elseif($row['jenis_kelamin'] == "Laki-laki"){ ?>
			          	<option selected value="<?php echo $row['jenis_kelamin'] ?>"><?php echo($row['jenis_kelamin']) ?></option>
			          	<option value="Perempuan">Perempuan</option>
			          <?php } ?>
			            </select>
			          </div>
				</div>
				<div class="col-md-5 col-sm-12">
					<div class="form-group">
			            <label for="jabatan">Jabatan</label>
			            <select class="form-control" name="tugas_jabatan" id="jabatan">
			            	<?php foreach ($jabatan as $j) :?>
			            		<?php if($j == $jabatan2): ?>
			            		<option selected value="<?php echo($j) ?>"><?php echo($j) ?></option>
								<?php else: ?>
								<option value="<?php echo($j) ?>"><?php echo($j) ?></option>
			            		<?php endif; ?>
			            	<?php endforeach; ?>
			            </select>
			          </div>
				</div>
			</div>
			<div class="row">
				<div class=" col-md-10 col-sm-12">
					<button type="submit" class="btn btn-primary" style="float: right; border-radius: 10px; width: 100px;">Update</button>
					<a type="button" class="btn btn-danger" style="float: right; margin-right: 10px; background: red; color: white; border-radius: 70px;" href="<?php echo base_url('') ?>Master/guru">Kembali</a>

				</div>
			</div>
		</div>
		
	</form>
<?php } ?>






</div>