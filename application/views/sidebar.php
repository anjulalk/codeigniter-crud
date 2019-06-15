<!-- Sidebar -->
<ul class="sidebar navbar-nav">
	<li class="nav-item active">
	<a class="nav-link" href="<?php echo base_url()?>">
		<i class="fa fa-fw fa-tachometer" aria-hidden="true"></i>
		<span>Dashboard</span>
	</a>
	</li>
	<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="fa fa-fw fa-folder"></i>
		<span>Players</span>
	</a>
	<div class="dropdown-menu" aria-labelledby="pagesDropdown">
		<a class="dropdown-item" href="<?php echo base_url()?>index.php/Players/">View Players</a>
		<a class="dropdown-item" href="<?php echo base_url()?>index.php/Players/add">Add Players</a>
		<a class="dropdown-item" href="<?php echo base_url()?>index.php/Players/edit">Edit Players</a>
		<a class="dropdown-item" href="<?php echo base_url()?>index.php/Players/remove">Remove Players</a>
	</div>
	</li> 	
</ul>
