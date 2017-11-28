<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Welcome, User Active
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url('Admin'); ?>"> Admin </a></li>
			<li class="active">Tambah Admin</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Data Admin</h3>
					</div>
					<!-- /.box-header -->
					<!-- form-start -->
					<?php 
						$attribute_text=array('class'=>'form-control');
						$attribute_form=array('class'=>'form-horizontal', 'id'=>'myform');
						echo form_open('Admin/simpan',$attribute_form);
					?>
						<div class="box-body">
							
						</div>