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
					<div class="row">
					  <div class="col-lg-3 col-md-6">
			            <div class="card card-stats">
			              <div class="card-body">
			                <div class="row">
			                  <div class="col-5">
			                    <div class="info-icon text-center icon-warning">
			                      <i class="tim-icons icon-chat-33"></i>
			                    </div>
			                  </div>
			                  <div class="col-7">
			                    <div class="numbers">
			                      <p class="card-category">Number</p>
			                      <h3 class="card-title">150GB</h3>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <div class="card-footer">
			                <hr>
			                <div class="stats">
			                  <i class="tim-icons icon-refresh-01"></i> Update Now
			                </div>
			              </div>
			            </div>
			          </div>
			          <div class="col-lg-3 col-md-6">
			            <div class="card card-stats">
			              <div class="card-body">
			                <div class="row">
			                  <div class="col-5">
			                    <div class="info-icon text-center icon-primary">
			                      <i class="tim-icons icon-shape-star"></i>
			                    </div>
			                  </div>
			                  <div class="col-7">
			                    <div class="numbers">
			                      <p class="card-category">Followers</p>
			                      <h3 class="card-title">+45k</h3>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <div class="card-footer">
			                <hr>
			                <div class="stats">
			                  <i class="tim-icons icon-sound-wave"></i> Last Research
			                </div>
			              </div>
			            </div>
			          </div>
			          <div class="col-lg-3 col-md-6">
			            <div class="card card-stats">
			              <div class="card-body">
			                <div class="row">
			                  <div class="col-5">
			                    <div class="info-icon text-center icon-success">
			                      <i class="tim-icons icon-single-02"></i>
			                    </div>
			                  </div>
			                  <div class="col-7">
			                    <div class="numbers">
			                      <p class="card-category">Users</p>
			                      <h3 class="card-title">150,000</h3>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <div class="card-footer">
			                <hr>
			                <div class="stats">
			                  <i class="tim-icons icon-trophy"></i> Customers feedback
			                </div>
			              </div>
			            </div>
			          </div>
			          <div class="col-lg-3 col-md-6">
			            <div class="card card-stats">
			              <div class="card-body">
			                <div class="row">
			                  <div class="col-5">
			                    <div class="info-icon text-center icon-danger">
			                      <i class="tim-icons icon-molecule-40"></i>
			                    </div>
			                  </div>
			                  <div class="col-7">
			                    <div class="numbers">
			                      <p class="card-category">Errors</p>
			                      <h3 class="card-title">12</h3>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <div class="card-footer">
			                <hr>
			                <div class="stats">
			                  <i class="tim-icons icon-watch-time"></i> In the last hours
			                </div>
			              </div>
			            </div>
			          </div>
						<div class="col-lg-12">
							<div class="card card-chart">
								<div class="card-header">
									<h5 class="card-category">Humidity</h5>
									<h3 class="card-title">
										<i class="tim-icons icon-tablet-2 text-info"></i> %</h3>
								</div>
								<div class="card-body">
									<div class="chart-area">
										<canvas id="humidity"></canvas>
									</div>
								</div>
							</div>
						</div>
						
					</div>
		
				</div>
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
		<!--<script src="<?=base_url() ?>assets/js/control.js">-->
			
		
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