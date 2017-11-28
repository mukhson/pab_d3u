<!DOCTYPE html>
<html>
<?php include ("head.php");?>


<!--notif here -->
<div class="notif_top" style="display:none">
	<div class="alert alert-success" style="margin-left:0"><button class="close" data-dismiss="alert">×</button><center><strong>Data Berhasil di Tambahkan</strong></center></div>
</div>
<div class="notif_top_up" style="display:none" >
	<div class="alert alert-success" style="margin-left:0"><button class="close" data-dismiss="alert">×</button><center><strong>Data Berhasil di Perbaharui</strong></center></div>
</div>
	
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php //$this->load->view('themes/main-header',NULL,true); 
		include ("main-header.php");
		include ("main-sidebar.php");
		
		$this->load->view($_content);
		
		include ("main-footer.php");
		#include ("control-sidebar.php");
		
	?>
</div>
<!-- ./wrapper -->

<?php include ("footer.php");?>
</body>
</html>