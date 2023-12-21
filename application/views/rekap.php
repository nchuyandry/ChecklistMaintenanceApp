<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Checklist Maintenance Report</title>

  <!-- Custom fonts for this template -->
  <link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; height: 320px; }
	.dt-button {
		color: #fff;
		background-color: #2e59d9;
		border-color: #2653d4;
	}
			
</style>


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

						<h1 class="h3 mb-2 text-gray-800">Checklist Maintenance Report</h1>
						<p class="mb-4"></p>

						<!-- DataTales Example -->
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Report</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped" id="checklistdata" width="100%" cellspacing="0">
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
											</tr>
										</thead>
										
										<tbody>
											
											<?php foreach($report as $row){
												$tanggal = $row->tgl;
												?>
											<tr>
												<td><?php echo date("d M Y", strtotime($tanggal)) ?></td>
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
											</tr>
											<?php } ?>
											
										</tbody>
									</table>
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

  <!-- Bootstrap core JavaScript-->
 <!-- <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <!--<script src="<?=base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>-->
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"> </script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"> </script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"> </script>
  <script src="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7803427.js"></script>
<!-- End of HubSpot Embed Code -->
  <!-- Page level custom scripts -->
  <script src="<?=base_url()?>assets/js/demo/datatables-demo.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap-notify.min.js"></script>
<script src="<?=base_url()?>assets/js/app.js"></script>
<script>
$(document).ready(function() {
	$('#checklistdata').DataTable( {
		dom: 'Bfrtip',
		buttons: [ 'copy', 'print', {
			extend: 'excelHtml5',
			autoFilter: true,
			sheetName: 'Exported data'
		} ]
	} );
} );
</script>

</html>
