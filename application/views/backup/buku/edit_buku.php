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
			<h1>List Buku</h1>
		  </div>
		  <div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
			  <li class="breadcrumb-item"><a href="#">Home</a></li>
			  <li class="breadcrumb-item active">Edit List Buku</li>
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
					<a href="<?php echo site_url('table_buku') ?>"><i class="fas fa-arrow-left"></i> Back</a>
				</div>
				<div class="card-body">
					<form action="<?php base_url("table_buku/edit") ?>" method="post" enctype="multipart/form-data" >
						<input type="hidden" name="id" value="<?php echo $buku->id?>" />
						<div class="row">
							<div class="form-group col-md-3">
								<label for="nama_buku">Nama Buku*</label>
								<input class="form-control <?php echo form_error('nama_buku') ? 'is-invalid':'' ?>"
								 type="text" name="nama_buku" placeholder="Nama Buku" value="<?php echo $buku->nama_buku ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_buku') ?>
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

