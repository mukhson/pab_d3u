<header class="main-header">
<!-- Logo -->
<a href="<?php echo site_url('Home');?>" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>K</b>RS</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>KRS</b>Online</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
  </a>

  <div class="navbar-custom-menu">
	<ul class="nav navbar-nav">
	  <!-- User Account: style can be found in dropdown.less -->
	  <li class="dropdown user user-menu">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		  <img src="<?php echo base_url('assets/dist/img/avatar5.png');?>" class="user-image" alt="User Image">
		  <span class="hidden-xs"><?php echo "USER AKTIF"?></span>
		</a>
		<ul class="dropdown-menu">
		  <!-- User image -->
		  <li class="user-header">
			<img src="<?php echo base_url('assets/dist/img/avatar5.png');?>" class="img-circle" alt="User Image">

			<p>
			  [Nama User] - [Group User]
			  <small>[Last Login]</small>
			</p>
		  </li>
		  <!-- Menu Footer-->
		  <li class="user-footer">
			<div class="pull-left">
			  <a href="<?php echo site_url('Profile');?>" class="btn btn-default btn-flat">Profile</a>
			</div>
			<div class="pull-right">
			  <a href="<?php echo site_url('Home/logout');?>" class="btn btn-default btn-flat">Sign out</a>
			</div>
		  </li>
		</ul>
	  </li>
	  <!-- Control Sidebar Toggle Button -->
	  <!-- <li>
		<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
	  </li>-->
	</ul>
  </div>
</nav>
</header>