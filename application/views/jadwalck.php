<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Checklist Maintenance">
<meta name="author" content="ICT Infra">

  <title>Jadwal Checklist Maintenance</title>

  <!-- Custom fonts for this template -->
<link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>assets/css/fontfamilynunito.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" >
<link href="<?=base_url()?>assets/css/sweetalert.css" rel="stylesheet" >
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; height: 320px; }
	
	button.dt-button, div.dt-button, a.dt-button, input.dt-button {
		color: #7171a6;
   		background-color: transparent;
    	border-color: #e6e6f2;
	}
	.btn-remove{
		font-size: 1.5rem !important;
		border: 0;
    	box-shadow: none;
    	padding: .5rem .7rem;
    	background: transparent;
    	color: #f20000 !important;
    	font-weight: 600;
	}
	.table>:not(:last-child)>:last-child>* {
	    border-bottom-color: #e3e6f0 !important; 
	}
			
</style>

	<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
  <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">


  	<link href="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="<?=base_url() ?>assets/css/buttons.dataTables.min.css" rel="stylesheet">
	
	<link rel="icon" href="<?=base_url()?>assets/img/tasks-solid.svg" sizes="32x32" type="image/png">
	<link rel="icon" href="<?=base_url()?>assets/img/tasks-solid.svg" sizes="16x16" type="image/png">
	<link rel="mask-icon" href="<?=base_url()?>assets/img/tasks-solid.svg" color="#563d7c">
	<link rel="icon" href="<?=base_url() ?>assets/img/tasks-solid.svg">
</head>

<body id="page-top" onLoad="getLocation()">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('sidebar')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<?php $this->load->view('topbar')?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

		<h1 class="h3 mb-2 text-gray-800"></h1>
		<p class="mb-4"></p>

						<!-- DataTables Example -->
				
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h4 class="m-0 font-weight-bold text-primary">
				<lord-icon src="https://cdn.lordicon.com/amrlvyxr.json"trigger="loop" style="width:32px;height:32px"></lord-icon>
				Jadwal Checklist Maintenance 2023
				</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<img width="1000px" src="<?=base_url()?>assets/img/jadwal2023.JPG"/>
				</div>
			</div>
		</div>
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h4 class="m-0 font-weight-bold text-primary">
				<lord-icon src="https://cdn.lordicon.com/amrlvyxr.json"trigger="loop" style="width:32px;height:32px"></lord-icon>
				Jadwal Checklist Maintenance 2022
				</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<img width="1000px" src="<?=base_url()?>assets/img/jadwal.jpeg"/>
				</div>
			</div>
		</div>
	</div>
        <!-- /.container-fluid -->

 </div>
      <!-- End of Main Content -->

      <!-- Footer -->
		<?php $this->load->view('footer')?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


 <!-- <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>-->
<script src="<?=base_url()?>assets/js/jquery-3.5.1.js"> </script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/js/sweetalert.min.js"></script>

<script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

<script src="<?=base_url() ?>assets/js/jquery.dataTables.min.js"> </script>
<script src="<?=base_url() ?>assets/js/dataTables.buttons.min.js"> </script>
<script src="<?=base_url() ?>assets/js/jszip.min.js"> </script>
<script src="<?=base_url() ?>assets/js/vfs_fonts.js"> </script>
<script src="<?=base_url() ?>assets/js/buttons.html5.min.js"> </script>
<script src="<?=base_url() ?>assets/js/buttons.print.min.js"> </script>
<script src="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="<?=base_url()?>assets/js/demo/datatables-demo.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap-notify.min.js"></script>
<script src="<?=base_url()?>assets/js/app.js"></script>
<?php
if ($this->session->flashdata('delete')) { ?>
<script>
	$.notify({
			// options
			icon: 'far fa-check-circle fa-1x ',
			message: '<?=$this->session->flashdata('delete')?>'
	},{
			// settings
			type: 'success',
			allow_dismiss: false,
			placement: {
				from: "top",
				align: "right"
			},
			animate: {
				enter: 'animated bounceIn',
				exit: 'animated bounceOut'
			},
			template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
			'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
			'<span data-notify="icon"></span> ' +
			'<span data-notify="title">{1}</span> ' +
			'<span data-notify="message">{2}</span>' +
			'</div>'
	});
</script>
<?php }?>
<script>
$(document).ready(function() {
	$('#checklistdata').DataTable( {
		responsive:true,
		dom: 'Bfrtip',
		buttons: [  
		{
			extend: 'copyHtml5',
			text:   '<i class="fas fa-copy"></i> Copy File',
			titleattr: 'Copy'
		},
		{
			extend: 'excelHtml5',
			text:   '<i class="fas fa-file-excel"></i> Export to Excel',
			autoFilter: true,
			sheetName: 'Exported data'
		},
		{
			extend: 'csvHtml5',
			text:   '<i class="fas fa-file-csv"></i> Export to CSV',
			autoFilter: true,
			sheetName: 'Exported data'
		} ]
	} );
} );
</script>
<script>
$(document).ready(function() {
	$('#checkdata').DataTable( {
		dom: 'Bfrtip',
		buttons: [  
		{
			extend: 'copyHtml5',
			text:   '<i class="fas fa-copy"></i> Copy File',
			titleattr: 'Copy'
		},
		{
			extend: 'excelHtml5',
			text:   '<i class="fas fa-file-excel"></i> Export to Excel',
			autoFilter: true,
			sheetName: 'Exported data'
		},
		{
			extend: 'csvHtml5',
			text:   '<i class="fas fa-file-csv"></i> Export to CSV',
			autoFilter: true,
			sheetName: 'Exported data'
		} ]
	} );
} );
</script>
<script>
		function remove(id){
			var id = id;
			swal({
				title: "Are you sure?",
				text: "Data will be Deleted",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Yes, Delete!",
				closeOnConfirm: false
			},
			function(isConfirm){
				if (isConfirm) {
					window.location.href = '<?=base_url()?>remove/'+id;
					swal("Done", "Data has been deleted.", "success");
				}
			});

		}
		</script>
</body>
</html>
