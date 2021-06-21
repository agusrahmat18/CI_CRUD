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
              <li class="breadcrumb-item active">List Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
			<div class="card-header">
				<a href="<?php echo site_url('table_buku/add') ?>"><i class="fas fa-plus"></i> Add New</a>
			</div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th width="50px">ID</th>
					<th width="250px">Nama Buku</th>
					<th width="150px">Action</th>
                </tr>
                </thead>
				<?php
				$no=1;
				?>
                <tbody>
					<?php foreach ($buku as $data): ?>
					<tr>
						<td width="50px"><?php echo $no++; ?></td>
						<td width="250px"><?php echo $data->nama_buku; ?></td>
						<td width="150px">
							<a href="<?php echo site_url('table_buku/edit/'.$data->id) ?>"
							 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
							<a onclick="deleteConfirm('<?php echo site_url('table_buku/delete/'.$data->id) ?>')"
							 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
						</td>
					</tr>
					<?php endforeach; ?>

				</tbody>
				<?php 
				// } 
				?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
$this->load->view('template/footer');
$this->load->view('template/modal.php');
$this->load->view('template/scrolltop.php');
?>

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/original/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/original/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/original/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/original/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/original/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/original/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/original/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>



</body>
</html>
