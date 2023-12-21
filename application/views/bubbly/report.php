<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="<?=base_url() ?>assets/img/tvip.png">
		<title>
			Dashboard
		</title>
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
		<link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<!-- Nucleo Icons -->
		<link href="<?=base_url()?>assets/css/nucleo-icons.css" rel="stylesheet" />
		<!-- CSS Files -->
		<link href="<?=base_url()?>assets/css/black-dashboard.min.css?v=1.1.1" rel="stylesheet" />
		<link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet">		
		<link href="<?=base_url()?>assets/css/sweetalert.css" rel="stylesheet" >
		<link href="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="<?=base_url() ?>assets/css/buttons.dataTables.min.css" rel="stylesheet">
		<!-- CSS Just for demo purpose, don't include it in your project 
		<link href="<?=base_url()?>assets/css/demo.css" rel="stylesheet" />-->
	</head>

	<body class="white-content">
		<div class="wrapper">
			<?php $this->load->view('bubbly/sidebar')?>
			<div class="main-panel" data="blue">
				<!-- Navbar -->
				<?php $this->load->view('bubbly/navbar')?>
				<!-- End Navbar -->
				
				<div class="content">
					<div class="content">
        <div class="col-md-8 ml-auto mr-auto">
          <h2 class="text-center">Maintenance Report</h2>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="checklistdata" width="100%" cellspacing="0">
                  <thead>
                    <tr>
								<th>Tanggal</th>
								<th>Nama Depo</th>
								<th>Nama User</th>
								<th>Lokasi Ruangan</th>
								<th>Jenis Perangkat</th>
								<th>Processor min 2.80GHz / 2.40GHz Untuk Laptop</th>
								<th>Motherboard min support 2.80GHz</th>
								<th>Memory min 2 GB</th>
								<th>Hardisk min 250 GB / 160 GB Untuk Laptop</th>
								<th>Monitor (min resolusi 1024x768)</th>
								<th>Mouse & Keyboard layak dan mudah dioperasikan</th>
								<th>Power Supply min 380 Watt</th>
								<th>Printer</th>
								<th>Barcode Scanner</th>
								<th>Operation System min Window 7 Pro 32bit</th>
								<th>Join Domain Intranet</th>
								<th>Browser ( Google Chrome dan Firefox )</th>
								<th>Ms. Office min versi 2007</th>
								<th>AntiVirus ( min Symantec / Avast)</th>
								<th>PDF Viewer</th>
								<th>WinRar / 7-zip</th>
								<th>VNC server</th>
								<th>Wallpaper Perusahaan</th>
								<th>Additional Software</th>
								<th>Lokasi </th>
								<th>PIC </th>
								<th>Photo</th>
								<th> </th>
					</tr>
                  </thead>
                 <tbody>
						<?php foreach($report as $row){
							$tanggal = $row->tgl;
												?>
							<tr>
								<td><?php echo date("d M Y H:i", strtotime($tanggal)) ?></td>
								<td><?php echo $row->namadepo?></td>
								<td><?php echo $row->namauser?></td>
								<td><?php echo $row->ruangan?></td>
								<td><?php echo $row->jenis?></td>
								<td><?php echo $row->processor?></td>
								<td><?php echo $row->mainboard?></td>
								<td><?php echo $row->memory?></td>
								<td><?php echo $row->harddisk?></td>
								<td><?php echo $row->monitor?></td>
								<td><?php echo $row->mousekey?></td>
								<td><?php echo $row->psu?></td>
								<td><?php echo $row->printer?></td>
								<td><?php echo $row->scanner?></td>
								<td><?php echo $row->os?></td>
								<td><?php echo $row->domaintvip?></td>
								<td><?php echo $row->browser?></td>
								<td><?php echo $row->msoffice?></td>
								<td><?php echo $row->antivirus?></td>
								<td><?php echo $row->pdf?></td>
								<td><?php echo $row->compressed?></td>
								<td><?php echo $row->vnc?></td>
								<td><?php echo $row->wallpaper?></td>
								<td><?php echo $row->addsoftware?></td>
								<td><a href="https://www.google.com/search?q=<?php echo $row->lokasi ?>"><?php echo $row->lokasi ?></a></td>
								<td><?php echo $row->PIC?></td>
								<td>
									<a href="<?php echo base_url()."assets/uploads/".$row->image ?>" ><?php echo $row->image ?></a>
								</td>
								<?php if($this->session->userdata('name') == "ANDRIANTO"){?>
									<td>
									
									<button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Tooltip on top" title="Remove" onclick="remove('<?=$row->id?>')">
                            <i class="fas fa-times fa-2x"></i>
                          </button>
									</td>
								<?php } ?>
							</tr>
						<?php } ?>
						</tbody>
                </table>
                </div>
              </div>
			</div>
		</div>
		</div>
				</div> <!--content-->
<?php $this->load->view('bubbly/footer')?>
			</div>
		</div>
		<?php // $this->load->view('plugin') ?>
		<!--   Core JS Files   -->
		<script src="<?=base_url()?>assets/bjs/jquery.min.js"> </script>
		<script src="<?=base_url()?>assets/bjs/popper.min.js"> </script>
		<script src="<?=base_url()?>assets/bjs/bootstrap.min.js"> </script>
		<script src="<?=base_url()?>assets/bjs/perfect-scrollbar.jquery.min.js"> </script>
		<!--  Google Maps Plugin    -->
		<!-- Place this tag in your head or just before your close body tag. -->
		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"> </script>
		<!-- Chart JS -->
		<script src="<?=base_url()?>assets/bjs/chartjs.min.js"> </script>
		<!--  Notifications Plugin    -->
		<script src="<?=base_url()?>assets/bjs/bootstrap-notify.js"> </script>
		<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
		<script src="<?=base_url()?>assets/bjs/black-dashboard.min.js?v=1.0.0"> </script> 
		<!--Black Dashboard DEMO methods, don't include it in your project! -->
		<script src="<?=base_url()?>assets/bjs/demo.js"> </script>
		
		<script src="<?=base_url()?>assets/js/sweetalert.min.js"></script>

		<script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
		<!--<script src="<?=base_url() ?>assets/js/control.js">-->
		<script src="<?=base_url() ?>assets/js/jquery.dataTables.min.js"> </script>
		<script src="<?=base_url() ?>assets/js/dataTables.buttons.min.js"> </script>
		<script src="<?=base_url() ?>assets/js/jszip.min.js"> </script>
		<script src="<?=base_url() ?>assets/js/vfs_fonts.js"> </script>
		<script src="<?=base_url() ?>assets/js/buttons.html5.min.js"> </script>
		<script src="<?=base_url() ?>assets/js/buttons.print.min.js"> </script>
		<script src="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
			
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
		<script>
			$(document).ready(function() {
				// Javascript method's body can be found in assets/js/demos.js
				demo.initDashboardPageCharts();

			});
		</script>
		<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"> </script>
		<script>
			window.TrackJS &&
			TrackJS.install({
				token: "ee6fab19c5a04ac1a32a645abde4613a",
				application: "black-dashboard-free"
			});
		</script>
		
	</body>

</html>