<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Welcome,
			<small>[User Active]</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">MataKuliah</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<?php echo $this->session->flashdata('msg'); ?>
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Data MataKuliah</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive">
						<div class="form-group">
							<a href="<?php echo site_url('Admin/tambah');?>" class="btn btn-primary btn-flat">
								<i class="fa fa-plus"></i>Tambah</a>
						</div>
						<table class="table table-bordered table-striped" id="example2">
							<thead>
								<tr>
									<th>Kode Matakuliah</th>
									<th>Nama Matakuliah</th>
									<th>Nama</th>
									<th>Password</th>
									<th>Role</th>
									<th width="100">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$nomor=0;
									foreach ($dt_matkul as $data_record) {
										$nomor++;
								?>
								<tr>
									<td><?php echo $nomor?></td>
									<td><?php echo $data_record['fnip']?></td>
									<td><?php echo $data_record['fnama']?></td>
									<td><?php echo $data_record['fpasswd']?></td>
									<td><?php echo $data_record['frole']?></td>
									<td align="center">
										<?php echo anchor('matkul/ubah/'.$data_record['fnip'],'<i class="fa fa-pencil"></i>',array('class'=>'btn btn-primary btn-flat'))?>
										<?php echo anchor('matkul/hapus/'.$data_record['fnip'],'<i class="fa fa-trash"></i>',array('class'=>'btn btn-warning btn-flat'))?>									
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col (right) -->
		</div>
		<!-- /.row -->
	</section>
</div>
