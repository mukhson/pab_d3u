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
			<li class="active">Ubah Admin</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Ubah Data Admin</h3>
					</div>
					<!-- /.box-header -->
					<!-- form-start -->
					<?php 
						$attribute_text=array('class'=>'form-control');
						$attribute_form=array('class'=>'form-horizontal', 'id'=>'myform');
						echo form_open('Admin/ubah',$attribute_form);

						$nomor=0;
									foreach ($dt_admin as $data_admin_edit) {
										$nomor++;
									}
					?>
					<div class="box-body">
							<div class="form-group">
								<label for="txt_nip_admin" class="col-sm-2 control-label">Nomor Induk Pegawai</label>
								<div class="col-sm-10">
									<?php echo form_input('txt_nip_admin',$data_admin_edit['fnip'],$attribute_text); ?>
									<?php echo form_hidden('txt_nip_edit_admin',$data_admin_edit['fnip'],$attribute_text); ?>
								</div>
							</div>
							<div class="form-group">
								<label for="txt_nama_admin" class="col-sm-2 control-label">Nama Pegawai</label>
								<div class="col-sm-10">
									<?php echo form_input('txt_nama_admin',$data_admin_edit['fnama'],$attribute_text); ?>
								</div>
							</div>
							<div class="form-group">
								<label for="txt_pwd" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<?php echo form_input('txt_pwd',$data_admin_edit['fpasswd'],$attribute_text); ?>
								</div>
							</div>
							<div class="form-group">
								<label for="txt_role" class="col-sm-2 control-label">Role</label>
								<div class="col-sm-10">
									<?php
									$role_admin = array('99'=>'Pilih Role','0'=>'User','1'=>'Admin');
									echo form_dropdown('txt_role',$role_admin,$data_admin_edit['frole'],$attribute_text);
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="tags" class="control-label col-lg-2">&nbsp;</label>
								<div class="col-sm-10">
									<?php echo form_submit('btn_simpan','Submit',array('class'=>'btn btn-primary btn-flat')); ?>
								</div>
							</div>
						</div>
						<!-- /.box body -->
						<div class="box-footer">
							<a onclick="window.history.back(-1)" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali </a>
						</div>
						<!-- /.box footer -->
					<?php echo form_close(); ?>
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col(right) -->
		</div>
		<!-- /.row -->
	</section>
</div>
