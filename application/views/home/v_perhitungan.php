  <div class="content-wrapper">

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Perankingan</h1>
				</div>
			</div>
		</div>

 		<div class="row">
			<div class="col-md-12">
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
				                  <th>Nama Guru</th>
				         		  <?php $i=1;foreach ($kriteria as $k): ?>
				         		  	<th><?php echo $k['nama_kriteria']; echo (' (C'.$i++.')')?></th>
				         		  <?php endforeach ?>
				                </tr>
			                </thead>
		            	</table>
		       		</div>
		    	</div>
			</div>
		</div>

	</div>


  </div>