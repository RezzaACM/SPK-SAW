<div class="content-wrapper">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center"> Edit Nama Kriteria</h1>
		</div>
	</div>
</div>

	<form action="<?php echo base_url() ?>master/updateDataGuru" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<div class="form-group">
			            <input type="hidden" min=0 class="form-control" name="id" id="nuptk" value="" readonly="">
			        </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label for="id">Nama Kriteria</label>
			            <input type="text" class="form-control" name="id" id="nama_kriteria" >
			        </div>
				</div>
			</div>
		</div>
	</form>
</div>