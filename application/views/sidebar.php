<!-- Sidebar -->
<ul class="sidebar navbar-nav">
	<li class="nav-item <?php if (strcmp($active,'home')==0)  echo 'active'?>">
	<a class="nav-link" href="<?php echo base_url()?>">
		<i class="fa fa-fw fa-tachometer" aria-hidden="true"></i>
		<span>Dashboard</span>
	</a>
	</li>

	<li class="nav-item <?php if (strcmp($active,'add')==0)  echo "active"?>">
	<a class="nav-link" href="<?php echo base_url("index.php/Tournaments/add")?>">
		<i class="fa fa-fw fa-tachometer" aria-hidden="true"></i>
		<span>Add Tournament</span>
	</a>
	</li>
</ul>
