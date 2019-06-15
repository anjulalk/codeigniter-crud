<div id="wrapper">
<?php
		$data['active'] = 'home';
		$this->load->view('sidebar', $data) 
?>
	<div id="content-wrapper">
		<div class="container-fluid">
			<!-- Icon Cards-->
			<?php $this->load->view('icon_cards') ?>


			<!-- DataTables Example -->
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i>
					Tournaments
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Name</th>
									<th>Place</th>
									<th>Date</th>
									<th>Opposing Teams</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Place</th>
									<th>Date</th>
									<th>Opposing Teams</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach ($query as $line) {
									$base_url = base_url();

									echo '<tr>';
									echo '<td>';
									echo $line->name;
									echo '</td>';
									echo '<td>';
									echo $line->place;
									echo '</td>';
									echo '<td>';
									echo $line->date;
									echo '</td>';
									echo '<td>';
									echo $line->opposing_teams;
									echo '</td>';
									echo '<td>';
									
									echo '<a class="btn btn-warning" href="';
									echo base_url("/index.php/Tournaments/edit/$line->id");
									echo '" role="button">Edit</a>';

									echo "&nbsp";

									echo '<a class="btn btn-danger" href="';
									echo base_url("/index.php/Tournaments/remove/$line->id");
									echo '" role="button">Remove</a>';
									
									echo '</td>';
									echo '</tr>';
								}	
								?>	
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<footer class="sticky-footer">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright © GoldenArrow 2019</span>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fa fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>