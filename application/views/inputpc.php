<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Checklist Maintenance">
  <meta name="author" content="ICT Infra">

  <title>Checklist Computer</title>

  <!-- Custom fonts for this template -->
  <link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
			<form class="form-horizontal" method="post" action="<?=base_url('home/savecheckpc')?>">
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
									<input type="text" class="form-control" value="Komputer" name="jenis" readonly />
								</div>
                  				<div class="col-md-6 mb-3">
                  					 <label for="date">Nama User Komputer</label>
					   				 <input type="text" class="form-control" placeholder="Nama User Komputer" name="nmuser">
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
                  					<label for="ruangan">Ruangan</label>
					    			<input type="text" class="form-control" placeholder="Ruangan" name="ruangan">
                  				</div>
                  				
                  				<div class="col-md-6 mb-3">
									<label for="exampleFormControlTextarea1">Latitude</label>					    			
									<input type="text" name="lat" class="lat form-control" readonly>
									<label for="exampleFormControlTextarea1">Longitude</label>	
									<input type="text" name="lon" class="lon form-control" readonly>
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
											<label id="processor">A. Processor Minimal 2.80 Ghz</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="processor" id="pchkyes" value="Sesuai"  onclick="profunction()" />
												<label class="form-check-label" for="exampleRadios1">Sesuai</label>
											</div>
											<div class="form-check">
														<input class="form-check-input" type="radio" name="processor" id="pchkno" value="Tidak Sesuai" onclick="profunction()" />
												<label class="form-check-label" for="exampleRadios2">Tidak Sesuai</label>
											</div>
											<div id="txtpro" style="display: none;" >
												<textarea class="form-control" rows="2" name="txtprocessor" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
											<label>B. Mainboard Minimal support 2.80 Ghz</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="mainboard" id="mchkyes" value="Sesuai" onclick="tfunction()">
												<label class="form-check-label" for="exampleRadios1">
															Sesuai
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="mainboard" id="mchkno" value="Tidak Sesuai" onclick="tfunction()">
												<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
												</label>
											</div>
											<div id="txtmb" style="display: none;" >
												<textarea class="form-control" rows="2" name="txtmainboard" ></textarea>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
											<label>C. Memory Minimal 2 GB</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="memory" id="exampleRadios1" value="Sesuai" >
												<label class="form-check-label" for="exampleRadios1">
															Sesuai
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="memory" id="exampleRadios2" value="Tidak Sesuai">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
											<label>D. Hardisk minimal 250 GB</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="harddisk" id="exampleRadios1" value="Sesuai" >
												<label class="form-check-label" for="exampleRadios1">
													Sesuai
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="harddisk" id="exampleRadios2" value="Tidak Sesuai">
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
											<label>E. Monitor ( resolusi minimal 1024 x 768, warna dan kecerahan yang layak )</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="monitor" id="exampleRadios1" value="Sesuai" >
												<label class="form-check-label" for="exampleRadios1">
															Sesuai
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="monitor" id="exampleRadios2" value="Tidak Sesuai">
												<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
												</label>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
											<label>F. Mouse & Keyboard layak dan mudah dioperasikan</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="mousekey" id="exampleRadios1" value="Sesuai" >
												<label class="form-check-label" for="exampleRadios1">
															Sesuai
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="mousekey" id="exampleRadios2" value="Tidak Sesuai">
												<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
												</label>
											</div>
	                					</div>
	                					<div class="col-md-6 mb-3">
											<label>G. Power Supply min 380 Watt</label>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="psu" id="exampleRadios1" value="Sesuai" >
												<label class="form-check-label" for="exampleRadios1">
															Sesuai
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="psu" id="exampleRadios2" value="Tidak Sesuai">
												<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
												</label>
											</div>
	                					</div>
	                					
										<div class="col-md-6 mb-3">
											<label>H. Barcode Scanner</label>
											<select id="bscanner" class="form-control" name="bscanner" onchange="bsfunction(this.value)">
												<option value="Tidak Ada" selected>Tidak Ada</option>
												<option value="ada">Ada</option>
											</select>
											
											<div class="form-check bscan">
												<input class="form-check-input" type="radio" name="scanner" id="scanner" value="Sesuai" >
												<label class="form-check-label" for="exampleRadios1">
															Sesuai
												</label>
											</div>
											<div class="form-check bscan">
												<input class="form-check-input" type="radio" name="scanner" id="scanner" value="Tidak Sesuai" >
												<label class="form-check-label" for="exampleRadios2">
													Tidak Sesuai
												</label>
											</div>
										</div>
	                					<div class="col-md-6 mb-3">
											<label>I. Printer ( Dotmatrix / Toner / Cartridge ) </label>
											<select id="printerr" class="form-control" name="printerr" onchange="sfunction(this.value)">
												<option value="Tidak Ada" selected>None</option>
												<option value="Dotmatrix">Dotmatrix</option>
												<option value="Toner">Toner</option>
												<option value="Cartridge">Cartridge</option>
											</select>
												<input class="form-control mt-2" type="text" name="model" id="model" placeholder="Input Model Printer" disabled />
											<div class="form-check">
												<input class="form-check-input" type="radio" name="printer" id="printer" value="Sesuai" >
												<label class="form-check-label" for="exampleRadios1">
															Sesuai
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input radiots" type="radio" name="printer" id="printer" value="Tidak Sesuai" >
												<label class="form-check-label" for="exampleRadios2">
														Tidak Sesuai
												</label>
											</div>
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
									<h6 class="m-0 font-weight-bold text-primary">Software</h6>
						</div>
								<!-- Card Body -->

								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-6 mb-3">
													<label>J. Operation System min Window 7 Pro 32bit</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="os" id="exampleRadios1" value="Sesuai" >
														<label class="form-check-label" for="exampleRadios1">Sesuai</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="os" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">Tidak Sesuai</label>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label>K. Join Domain Intranet</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="domain" id="exampleRadios1" value="Sesuai" >
														<label class="form-check-label" for="exampleRadios1">
															Sesuai
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="domain" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
														</label>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label>L. Browser ( Google Chrome dan Firefox )
													</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="browser" id="exampleRadios1" value="Sesuai" >
														<label class="form-check-label" for="exampleRadios1">
															Sesuai
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="browser" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
														</label>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label>M. Ms. Office min versi 2007</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="office" id="exampleRadios1" value="Sesuai" >
														<label class="form-check-label" for="exampleRadios1">
															Sesuai
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="office" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
														</label>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label>N. AntiVirus ( min Symantec / Avast)
													</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="antivirus" id="exampleRadios1" value="Sesuai" >
														<label class="form-check-label" for="exampleRadios1">
															Sesuai
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="antivirus" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
														</label>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label>O. PDF Viewer</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="pdf" id="exampleRadios1" value="Sesuai" >
														<label class="form-check-label" for="exampleRadios1">
															Sesuai
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="pdf" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
														</label>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label>P. WinRar / 7-zip</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="compress" id="exampleRadios1" value="Sesuai" >
														<label class="form-check-label" for="exampleRadios1">
															Sesuai
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="compress" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
														</label>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label>Q. VNC server</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="vnc" id="exampleRadios1" value="Sesuai" >
														<label class="form-check-label" for="exampleRadios1">
															Sesuai
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="vnc" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
														</label>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<label>R. Wallpaper Perusahaan
													</label>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="wallpaper" id="exampleRadios1" value="Sesuai"  >
														<label class="form-check-label" for="exampleRadios1">
															Sesuai
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="wallpaper" id="exampleRadios2" value="Tidak Sesuai">
														<label class="form-check-label" for="exampleRadios2">
															Tidak Sesuai
														</label>
													</div>
												</div>
												<div class="col-md-12 mb-3">
													<div class="card shadow mb-4">
														<div class="card-header py-3">
															<h6 class="m-0 font-weight-bold text-primary">Additional Software</h6>
														</div>
														<div class="card-body row">
															<div class="form-check  col-md-3">
																<input class="form-check-input" type="checkbox" name="dms3" value="Aplikasi DMS3" id="dms3">
																<label class="form-check-label" for="flexCheckDefault">
																	Aplikasi DMS3
																</label>
															</div>
															<div class="form-check  col-md-3">
																<input class="form-check-input" type="checkbox" name="cctv" value="Videoviewer/IVMS" id="cctv" >
																<label class="form-check-label" for="flexCheckChecked">
																	Videoviewer / IVMS
																</label>
															</div>
															<div class="form-check  col-md-3">
																<input class="form-check-input" type="checkbox" name="visio" value="Ms. Visio Min. Versi 2007" id="cctv" >
																<label class="form-check-label" for="flexCheckChecked">
																	Ms. Visio Min. Versi 2007
																</label>
															</div>
															<div class="form-check  col-md-3">
																<input class="form-check-input" type="checkbox" name="gl" value="Program GL" id="cctv" >
																<label class="form-check-label" for="flexCheckChecked">
																	Program GL
																</label>
															</div>
															<div class="mt-3 m-2">
																<div  style="display: block;" >
																	<label>Aplikasi Lainnya</label>
																	<textarea class="form-control" rows="2" name="etc" ></textarea>
																</div>
																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit Data</button>
									</div>
								</div>
							</div>		  	
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

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?=base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7803427.js"></script>
<!-- End of HubSpot Embed Code -->
  <!-- Page level custom scripts -->
  <script src="<?=base_url()?>assets/js/demo/datatables-demo.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap-notify.min.js"></script>
  <script src="<?=base_url()?>assets/js/app.js"></script>
  <script src="<?=base_url()?>assets/js/fungsi.js"></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGl4jtZBCfK-ANIzxOceT9mUCPQqI1_Zc"></script>
<script>
	var x = document.getElementById("demo");
	var y = document.getElementById("demo1");
	x.innerHTML = "Loading Location.... , Pastikan allow dan accept location";
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
