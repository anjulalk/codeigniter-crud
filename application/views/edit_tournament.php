<div id="wrapper">
<?php
		$data['active'] = 'edit';
		$this->load->view('sidebar', $data) 
?>
	<div id="content-wrapper">
		<div class="container-fluid">
		<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i>
					Edit Tournament
					</div>
				<div class="card-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open("Tournaments/edit/".$query[0]->id);?>
				<div class="form-group">
    <label for="id">Tournament ID:</label>
    <input type="text" value="<?php echo $query[0]->id ?>" disabled name="id" class="form-control" id="name">
  </div>

				<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $query[0]->name ?>" class="form-control" id="name">
  </div>

  <div class="form-group">
    <label for="place">Place:</label>
    <input type="text" name="place" value="<?php echo $query[0]->place ?>" class="form-control" id="place">
  </div>
  <div class="form-group">
    <label for="date">Date:</label>
    <input type="date" name="date" value="<?php echo $query[0]->date ?>" class="form-control" id="date">
  </div>
  <div class="form-group">
    <label for="opposing_teams">Opposing teams:</label>
    <input type="name" name="opposing_teams" value="<?php echo $query[0]->opposing_teams ?>"class="form-control" id="opposing_teams">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form> 
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