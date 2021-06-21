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
              <li class="breadcrumb-item active">Operasional</li>
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
				<a href="<?php echo site_url('operasional/add') ?>"><i class="fas fa-plus"></i> Add New</a>
			</div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="50px">ID</th>
                    <th width="250px">DateTime</th>
                    <th width="250px">Pos</th>
                    <th width="250px">No.Pol</th>
                    <th width="250px">Cadangan</th>
                    <th width="250px">Shift</th>
                    <th width="250px">Petugas</th>
                    <th width="250px">KM Sekarang</th>
                    <th width="250px">KM Ganti Oli</th>
                    <th width="250px">Instruksi Bengkel</th>
                    <th width="250px">Logistik</th>
                    <th width="250px">Kondisi</th>
                    <th width="150px">Action</th>
                  </tr>
                </thead>
				<?php
				$no=1;
				?>
                <tbody>
					<?php foreach ($operasional as $data): ?>
					<tr>
						<td width="50px"><?php echo $no++; ?></td>
						<td width="250px"><?php echo $data->datetime; ?></td>
						<td width="250px"><?php echo $data->pos; ?></td>
						<td width="250px"><?php echo $data->nopol; ?></td>
						<td width="250px"><?php echo $data->cadangan; ?></td>
						<td width="250px"><?php echo $data->shift; ?></td>
						<td width="250px"><?php echo $data->petugas; ?></td>
						<td width="250px"><?php echo $data->km_sekarang; ?></td>
						<td width="250px"><?php echo $data->km_gantioli; ?></td>
						<td width="250px"><?php echo $data->instruksi_bengkel; ?></td>
						<td width="250px"><?php echo $data->logistik; ?></td>
						<td width="250px"><?php echo $data->kondisi; ?></td>
						<td width="150px">
							<a href="<?php echo site_url('operasional/edit/'.$data->id) ?>"
							 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
							<a onclick="deleteConfirm('<?php echo site_url('operasional/delete/'.$data->id) ?>')"
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
<!-- <script src="<?php echo base_url();?>assets/original/plugins/datatables/dataTables.bootstrap4.js"></script> -->
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
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
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>



</body>
</html>
