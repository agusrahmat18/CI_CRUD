<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
	  <div class="container-fluid">
		<div class="row mb-2">
		  <div class="col-sm-6">
			<h1>Operasional</h1>
		  </div>
		  <div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="#">Home</a></li>
			  <li class="breadcrumb-item active">Edit Operasional</li>
			</ol>
		  </div>
		</div>
	  </div><!-- /.container-fluid -->
	</section>
		
    <!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<?php $this->load->view("template/breadcrumb.php") ?>
			<?php if ($this->session->flashdata('success')):?>
				<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
			<?php endif; ?>

			<!-- Card  -->
			<div class="card mb-3">
				<div class="card-header">
					<a href="<?php echo site_url('operasional') ?>"><i class="fas fa-arrow-left"></i> Back</a>
				</div>
				<div class="card-body">
					<form action="<?php base_url("operasional/edit") ?>" method="post" enctype="multipart/form-data" >
						<input type="hidden" name="id" value="<?php echo $operasional->id?>" />
						<div class="row">
							<div class="form-group col-md-3">
								<label for="pos">Pos<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('pos') ? 'is-invalid':'' ?>"
								 type="text" name="pos" placeholder="Nama Buku" value="<?php echo $operasional->pos ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pos') ?>
								</div>
							</div>
							<div class="form-group col-md-3">
								<label for="shift">Shift<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('shift') ? 'is-invalid':'' ?>"
								 type="text" name="shift" placeholder="Nama Buku" value="<?php echo $operasional->shift ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('shift') ?>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-3">
								<label for="nopol">No. Pol<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('nopol') ? 'is-invalid':'' ?>"
								 type="text" name="nopol" placeholder="Nama Buku" value="<?php echo $operasional->nopol ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nopol') ?>
								</div>
							</div>
							<div class="form-group col-md-3">
								<label for="cadangan">No. Pol Cadangan<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('cadangan') ? 'is-invalid':'' ?>"
								 type="text" name="cadangan" placeholder="Nama Buku" value="<?php echo $operasional->cadangan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('cadangan') ?>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-md-3">
								<label for="petugas">Petugas<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('petugas') ? 'is-invalid':'' ?>"
								 type="text" name="petugas" placeholder="Nama Buku" value="<?php echo $operasional->petugas ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('petugas') ?>
								</div>
							</div>
							<div class="form-group col-md-3">
								<label for="instruksi_bengkel">Instruksi Bengkel<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('instruksi_bengkel') ? 'is-invalid':'' ?>"
								 type="text" name="instruksi_bengkel" placeholder="Nama Buku" value="<?php echo $operasional->instruksi_bengkel ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('instruksi_bengkel') ?>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-3">
								<label for="km_sekarang">KM Sekarang<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('km_sekarang') ? 'is-invalid':'' ?>"
								 type="text" name="km_sekarang" placeholder="Nama Buku" value="<?php echo $operasional->km_sekarang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('km_sekarang') ?>
								</div>
							</div>
							<div class="form-group col-md-3">
								<label for="km_gantioli">KM Ganti Oli<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('km_gantioli') ? 'is-invalid':'' ?>"
								 type="text" name="km_gantioli" placeholder="Nama Buku" value="<?php echo $operasional->km_gantioli ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('km_gantioli') ?>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-3">
								<label for="logistik">Logistik<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('logistik') ? 'is-invalid':'' ?>"
								 type="text" name="logistik" placeholder="Nama Buku" value="<?php echo $operasional->logistik ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('logistik') ?>
								</div>
							</div>
							<div class="form-group col-md-3">
								<label for="kondisi">Kondisi<i style="color:red"> *</i></label>
								<input class="form-control <?php echo form_error('kondisi') ? 'is-invalid':'' ?>"
								 type="text" name="kondisi" placeholder="Nama Buku" value="<?php echo $operasional->kondisi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kondisi') ?>
								</div>
							</div>
						</div>
						<input class="btn btn-warning" type="submit" name="btn" value="Save" />
					</form>
				</div>
				<div class="card-footer small text-muted">* required fields</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /.content-wrapper -->
	</section>
</div>

<?php
$this->load->view('template/scrolltop.php'); 
// $this->load->view('template/js.php'); 
$this->load->view('template/footer');
?>

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/original/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/original/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/original/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/original/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/original/dist/js/demo.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>
</body>
</html>

