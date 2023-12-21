<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Checklist Maintenance</title>

  <!-- Custom fonts for this template -->
  <link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?=base_url()?>assets/css/fontfamilynunito.css" rel="stylesheet">
  <link href="<?=base_url() ?>assets/css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url() ?>assets/css/custom.css">
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; height: 320px; }
	/*[data-notify="message"] {
		top: 1rem;
		bottom: 2rem;
		left: 6rem;
		font-size: 20px;
		text-align: center;
		
	}*/
	
</style>
  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  	<link href="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="icon" href="<?=base_url() ?>assets/img/tasks-solid.svg" sizes="32x32" type="image/png">
	<link rel="icon" href="<?=base_url() ?>assets/img/tasks-solid.svg" sizes="16x16" type="image/png">
  	<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="<?=base_url() ?>assets/img/tasks-solid.svg" color="#563d7c">
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
        <div class="container-fluid"><!-- 404 Error Text -->
            <div class="text-center">
                <div class="error mx-auto" data-text="404">404</div>
	                <p class="lead text-gray-800 mb-5">Page Not Found</p>
	                <p class="lead text-gray-500 mb-5">The page you requested was not found.</p>
	            	<p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
	                <a href="<?=base_url()?>">&larr; Back to Dashboard</a>
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
		<script src="<?=base_url() ?>assets/vendor/jquery/jquery.min.js"> </script>
		<script src="<?=base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"> </script>

		<!-- Core plugin JavaScript-->
		<script src="<?=base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"> </script>

		<!-- Custom scripts for all pages-->
		<script src="<?=base_url() ?>assets/js/sb-admin-2.min.js"> </script>

		<!-- Page level plugins -->
		<script src="<?=base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"> </script>
		<script src="<?=base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"> </script>
		
		<!-- Page level custom scripts -->
		<script src="<?=base_url() ?>assets/js/demo/datatables-demo.js"> </script>
		<script src="<?=base_url() ?>assets/js/bootstrap-notify.min.js"> </script>
		<script src="<?=base_url() ?>assets/js/app.js"> </script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGl4jtZBCfK-ANIzxOceT9mUCPQqI1_Zc"></script>
<?php if ($this->session->flashdata('success')) { ?>
		<script>
		$.notify({
			icon: "fa fa-check-circle fa-1x",
			message: "<?=$this->session->flashdata('success')?>"
		},{
			type: "success",
				allow_dismiss: false,
				placement: {
					from: "top",
					align: "right"
				},
				animate: {
					enter: 'animated bounceInDown',
					exit: 'animated bounceOutUp'
				},
				template: '<div data-notify="container" class="col-xs-9 col-sm-3 alert alert-{0}" role="alert">' +
				'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
				'<span data-notify="icon"></span> ' +
				'<span data-notify="title">{1}</span> ' +
				'<span data-notify="message" class="text-center">{2}</span>' +
				'</div>'
		});
		</script>
<?php } ?>

<script>
	function tess(){
			$.notify({
				icon: "fa fa-check-circle fa-1x",
				message: "&nbsp; Welcome Andri"
			},{
				type: "success",
				allow_dismiss: false,
				placement: {
					from: "top",
					align: "right"
				},
				animate: {
					enter: 'animated bounceInDown',
					exit: 'animated bounceOutUp'
				},
				template: '<div data-notify="container" class="col-xs-9 col-sm-3 alert alert-{0}" role="alert">' +
				'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
				'<span data-notify="icon"></span> ' +
				'<span data-notify="title">{1}</span> ' +
				'<span data-notify="message" class="text-center">{2}</span>' +
				'</div>'
			});
	}
	function tesd(){
			$.notify({
				icon: "fa fa-check-circle fa-1x",
				message: "&nbsp; Welcome Andri"
			},{
				type: "danger",
				allow_dismiss: false,
				placement: {
					from: "top",
					align: "right"
				},
				animate: {
					enter: 'animated bounceInDown',
					exit: 'animated bounceOutUp'
				},
				template: '<div data-notify="container" class="col-xs-9 col-sm-3 alert alert-{0}" role="alert">' +
				'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
				'<span data-notify="icon"></span> ' +
				'<span data-notify="title">{1}</span> ' +
				'<span data-notify="message" class="text-center">{2}</span>' +
				'</div>'
			});
	}
</script>

</body>
</html>
