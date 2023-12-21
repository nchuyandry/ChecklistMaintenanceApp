<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Checklist Maintenance">
<meta name="author" content="ICT Infra">

		<title>Checklist Other Devices </title>

  <!-- Custom fonts for this template -->
<link href="<?=base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url() ?>assets/css/fontfamilynunito.css" rel="stylesheet">
<link href="<?=base_url() ?>assets/css/animate.min.css" rel="stylesheet">
<link href="<?=base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" >
<link href="<?=base_url() ?>assets/css/custom.css" rel="stylesheet" >
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />
	<style>
		body { margin: 0; padding: 0; }
		#map { position: absolute; top: 0; bottom: 0; width: 100%; height: 320px; }
	</style>
  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="icon" href="<?=base_url()?>assets/img/tasks-solid.svg" sizes="32x32" type="image/png">
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
        <div class="container-fluid">
			<form class="form-horizontal" method="post" action="<?=base_url('home/saveother')?>" onsubmit="saving()">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Form Checklist Maintenance</h1>


              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">New</h6>
				</div>
                <!-- Card Body -->
                
                <div class="card-body">
                  <div class="row">
                  	<div class="col-md-12">
                  		
                  			<div class="row">
                  				<div class="col-md-6 mb-3">
                  					<label for="date">Date</label>
									<input type="text" class="form-control" name="date" value="<?php echo date('d-m-Y H:i:s') ?>" readonly />
                  				</div>
								<div class="col-md-6 mb-3">
									<label for="jenis">Jenis Perangkat</label>
									<input type="text" class="form-control" value="Lainnya" name="jenis" readonly />
								</div>
                  				<div class="col-md-6 mb-3">
                  					 <label for="date">Nama User </label>
					   				 <input type="text" class="form-control" placeholder="Nama User" name="nmuser" required />
                  				</div>
                  				<div class="col-md-6 mb-3">
                  					<label for="depo">Depo</label>
					    			<select class="form-control" name="nmdepo">
								    <?php foreach($nmdepo as $row){?>
								    	<option value="<?php echo $row->namadepo?>"><?php echo $row->namadepo?></option>
								    <?php } ?>
								    </select>
                  				</div>
                  				<div class="col-md-6 mb-3">
									<label for="exampleFormControlTextarea1">Latitude</label>
									<input type="text" name="lat" class="lat form-control" readonly />
                  				</div>
                  				
                  				<div class="col-md-6 mb-3">
									
									<label for="exampleFormControlTextarea1">Longitude</label>	
									<input type="text" name="lon" class="lon form-control" readonly />
									<p class="text-right" id="demo"></p>
                  				</div>
                  			</div>
                  		
                  	</div>
                  </div>
                </div>
		  	</div>
		  	
<!--=====================================================================================================================================================================================================-->
		  	<div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		                  <h6 class="m-0 font-weight-bold text-primary">Hardware</h6>
						</div>
		                <!-- Card Body -->
                
	                	<div class="card-body">
	                		<div class="row">
	                			<div class="col-md-12">
	                				<div class="row">
	                					<div class="col-md-6 mb-3">
											<label id="processor">
											<b>A. TV ( Waterin / Preseller / Dashboard Report )</b></label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="tv" id="tvyes" value="Sesuai" onclick="tvfunction()" required>
												<label class="form-check-label" for="exampleRadios1">Sesuai</label>
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="tv" id="tvno" value="Tidak Sesuai" onclick="tvfunction()"  required >
												<label class="form-check-label" for="exampleRadios2">Tidak Sesuai</label>
											</div>
											<div id="tvmon" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txttv" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
													<label><b>B. Tab </b></label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="tab" id="tabyes" value="Sesuai" required onclick="tabfunction()">
												<label class="form-check-label" for="exampleRadios1">
															Sesuai
												</label>
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="tab" id="tabno" value="Tidak Sesuai"required onclick="tabfunction()">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
											<div id="tab" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txttab" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
											<label><b>C. Pabx</b></label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="pabx" id="pabxyes" value="Sesuai" required onclick="pbxfunction()">
												<label class="form-check-label" for="exampleRadios1">
													Sesuai
												</label>
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="pabx" id="pabxno" value="Tidak Sesuai" required onclick="pbxfunction()">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
											<div id="pabx" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txtpabx" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
													<label>
														<b>D. Mesin Absen</b> </label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="absen" id="absenyes" value="Sesuai" required onclick="absfunction()">
												<label class="form-check-label" for="exampleRadios1">
													Sesuai
												</label>
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="absen" id="absenno" value="Tidak Sesuai" required onclick="absfunction()">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
											<div id="absen" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txtabsen" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
													<label>
														<b>E. Modem</b></label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="modem" id="modemyes" value="Sesuai" required onclick="mdmfunction()" >
												<label class="form-check-label" for="exampleRadios1">
													Sesuai
												</label>
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="modem" id="modemno" value="Tidak Sesuai" required onclick="mdmfunction()">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
											<div id="modem" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txtmodem" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
													<label>
														<b>F. Router</b></label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="router" id="routeryes" value="Sesuai" required onclick="rtfunction()">
												<label class="form-check-label" for="exampleRadios1">
													Sesuai
												</label>
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="router" id="routerno" value="Tidak Sesuai" required onclick="rtfunction()">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
											<div id="router" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txtrouter" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
													<label>
														<b>G. AP Wifi</b></label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="wifi" id="wifiyes" value="Sesuai" required onclick="wifunction()">
												<label class="form-check-label" for="exampleRadios1">
													Sesuai
												</label>
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="wifi" id="wifino" value="Tidak Sesuai" required onclick="wifunction()">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
											<div id="wifi" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txtwifi" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
													<label>
														<b>H. Hub</b></label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="hub" id="hubyes" value="Sesuai" required onclick="hubfunction()">
												<label class="form-check-label" for="exampleRadios1">
													Sesuai
												</label>
											</div>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="hub" id="hubno" value="Tidak Sesuai"required onclick="hubfunction()">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
											<div id="hub" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txthub" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
													<label>
														<b>I. DVR / NVR CCTV</b></label>
											<div class="form-check">
													<input class="form-check-input" type="radio" name="dvr" id="dvryes" value="Sesuai" required onclick="dvrfunction()">
												<label class="form-check-label" for="exampleRadios1">
													Sesuai
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="dvr" id="dvrno" value="Tidak Sesuai"required onclick="dvrfunction()">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
											<div id="dvr" style="display: none;" >
												<small>*Harap diisi ketidaksesuaian</small>
												<textarea class="form-control" rows="2" name="txtdvr" ></textarea>
											</div>
	                					</div>
	                				</div>
	                			</div>
	                		</div>
	                		<div class="col-md-12 mb-3">
								<div  style="display: block;" >
									<label><b>Catatan</b></label>
									<p><small>*Harap diisi apabila ada kondisi perangkat yang tidak sesuai</small></p>
									<textarea class="form-control" rows="5" name="note"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit Data</button>
							</div>
						</div>
		  			</div>
<!--=====================================================================================================================================================================================================-->
							  	
					</form>
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

  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
  <script async defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>-->


 <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>


  <script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

  <script src="<?=base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>


 <!-- <script src="<?=base_url()?>assets/js/demo/datatables-demo.js"></script>-->
  <script src="<?=base_url()?>assets/js/bootstrap-notify.min.js"></script>
  <!--<script src="<?=base_url()?>assets/js/notify.js"></script>-->
  <script src="<?=base_url()?>assets/js/app.js"></script>
  <script src="<?=base_url()?>assets/js/fungsi2.js"></script>
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyDGl4jtZBCfK-ANIzxOceT9mUCPQqI1_Zc"></script>
  <script>
  	
  </script>
<?php
if ($this->session->flashdata('saveother')) { ?>
<script>
	$.notify({
			// options
			icon: 'far fa-check-circle fa-1x ',
			message: '<?=$this->session->flashdata('saveother')?>'
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
<?php }elseif ($this->session->flashdata('errors')) { ?>
<script>
	$.notify({
			// options
			icon: 'far fa-times-circle fa-1x '
			message: '<?=$this->session->flashdata('errors')?>'
	},{
			// settings
			type: 'danger',
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
<?php }elseif ($this->session->flashdata('fail')) { ?>
<script>
	$.notify({
			// options
			icon: 'far fa-times-circle fa-1x ',
			title: 'Error',
			message: '<?=$this->session->flashdata('fail')?>'
	},{
			// settings
			type: "danger",
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
<?php } ?>
<script>
function saving()
{
	var notify = $.notify('<strong>Saving</strong> Do not close this page!', {
		type: 'info',
		allow_dismiss: false,
		showProgressbar: true
	});
	setTimeout(function() {
		notify.update('message', '<strong>Saving</strong> Data.');
	}, 1000);
}
</script>
<script>
	var x = document.getElementById("demo");
	var y = document.getElementById("demo1");
	x.innerHTML = "Loading Location.... Tunggu 10 Detik, Pastikan allow dan accept location";
	function getLocation()
	{
		if (navigator.geolocation) {
			navigator.geolocation.watchPosition(showPosition);
		} else {
			x.innerHTML = "Geolocation is not supported by this browser.";
		}
	}

	function showPosition(position)
	{
		x.innerHTML="<a href='https://www.google.com/search?q=" + position.coords.latitude + " " + position.coords.longitude + "'>CEK LOKASI</a>";
		$(".lat").val(position.coords.latitude);
		$(".lon").val(position.coords.longitude);
	}
		</script>
		<script type="text/javascript">
		function validateForm()
		{
			var x = document.forms["draftform"]["lat"].value;
			var y = document.forms["draftform"]["lon"].value;
			if (x == "" && y == "") {
				alert('Lokasi Anda Tidak Terdeteksi');
				return false;
			}
		}
		</script>
		<script type="text/javascript">
		function validateForm1()
		{
			var x = document.forms["draftform"]["lat"].value;
			var y = document.forms["draftform"]["lon"].value;
			if (x == "" && y == "") {
				alert('Lokasi Anda Tidak Terdeteksi');
				return false;
			}
		}
</script>
	
</body>
</html>
