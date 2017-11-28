<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
	<div class="pull-left image">
	  <img src="<?php echo base_url('assets/dist/img/avatar5.png');?>" class="img-circle" alt="User Image">
	</div>
	<div class="pull-left info">
	  <p><?php echo "[USER AKTIF]";?></p>
	  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	</div>
  </div>
  
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
	<li class="header">Menu Utama</li>
	<li class="active">
	  <a href="<?php echo site_url('Home');?>">
		<i class="fa fa-calendar"></i> <span>Dashboard</span>
	  </a>
	</li>
	<li class="treeview">
	  <a href="#">
		<i class="fa fa-table"></i> <span>Data Master</span>
		<span class="pull-right-container">
			  <i class="fa fa-angle-left pull-right"></i>
			</span>
	  </a>
	  <ul class="treeview-menu">
		<li><a href="<?php echo site_url('Matkul');?>"><i class="fa fa-circle-o"></i> Data Matakuliah</a></li>
		<li><a href="<?php echo site_url('Mhs');?>"><i class="fa fa-circle-o"></i> Data Mahasiswa</a></li>
	  </ul>
	</li>
	
	<li class="treeview">
	  <a href="#">
		<i class="fa fa-table"></i> <span>Data Transaksi</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">
		<li><a href="<?php echo site_url('Krs')?>"><i class="fa fa-circle-o"></i> Entry KRS</a></li>
	  <li><a href="<?php echo site_url('Krs_admin')?>"><i class="fa fa-circle-o"></i> Entry KRS [Admin]</a></li>
	  </ul>
	</li>
	
	<li class="treeview">
	  <a href="#">
		<i class="fa fa-table"></i>
		<span>Laporan-Laporan</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">
		<li><a href="<?php echo site_url('laporan/mhs');?>"><i class="fa fa-circle-o"></i> Data Mahasiswa</a></li>
		<li><a href="<?php echo site_url('laporan/matkul');?>"><i class="fa fa-circle-o"></i> Data Mata Kuliah</a></li>
		<li><a href="<?php echo site_url('laporan/krs');?>"><i class="fa fa-circle-o"></i> KRS Mahasiswa</a></li>
	  </ul>
	</li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>

