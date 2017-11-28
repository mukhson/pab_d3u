<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	Welcome, 
	<small>[User Active]</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-lg-2 col-xs-6">
			<!-- small box -->
			<img src="<?php echo base_url('assets/dist/img/upe.png');?>" style="margin-left: 10px;width: 160px;">
		</div>
		
		<!-- Master -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3>&nbsp;</h3>

					<p>Data-Admin</p>
				</div>
				<div class="icon">
					<i class="fa fa-user-plus"></i>
				</div>
				<a href="<?php echo site_url('Admin');?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		
		<!-- Master -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3>&nbsp;</h3>

					<p>Mata Kuliah</p>
				</div>
				<div class="icon">
					<i class="fa  fa-book"></i>
				</div>
				<a href="<?php echo site_url('Matkul');?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		
		<div class="col-lg-4 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3>&nbsp;</h3>

					<p>Mahasiswa</p>
				</div>
				<div class="icon">
					<i class="fa  fa-graduation-cap"></i>
				</div>
				<a href="<?php echo site_url('Mhs');?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		
		<div class="col-lg-10 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>&nbsp;</h3>

					<p>Entry KRS</p>
				</div>
				<div class="icon">
					<i class="fa  fa-laptop"></i>
				</div>
				<a href="<?php echo site_url('Krs_admin');?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		
		<div class="col-lg-4 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>&nbsp;</h3>

					<p>Laporan Data Mahasiswa</p>
				</div>
				<div class="icon">
					<i class="fa  fa-credit-card"></i>
				</div>
				<a href="<?php echo site_url('Laporan/mhs');?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-4 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>&nbsp;</h3>

					<p>Laporan Data Matakuliah</p>
				</div>
				<div class="icon">
					<i class="fa  fa-credit-card"></i>
				</div>
				<a href="<?php echo site_url('Laporan/matkul');?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-4 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
					<h3>&nbsp;</h3>

					<p>Laporan KRS</p>
				</div>
				<div class="icon">
					<i class="fa  fa-credit-card"></i>
				</div>
				<a href="<?php echo site_url('Laporan/krs');?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
			
	</div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->