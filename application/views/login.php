
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Login Page</title>

		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="<?=base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link rel="icon" href="<?=base_url() ?>assets/img/tasks-solid.svg" sizes="32x32" type="image/png">
		<link rel="icon" href="<?=base_url() ?>assets/img/tasks-solid.svg" sizes="16x16" type="image/png">
		<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
		<link rel="mask-icon" href="<?=base_url() ?>assets/img/tasks-solid.svg" color="#563d7c">
		<link rel="icon" href="<?=base_url() ?>assets/img/tasks-solid.svg">
		
		<!-- Custom styles for this template-->
		<link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
		<style>
			.bg-gradient-custom {
    			background-color: #67a1ff;
    			background-image: linear-gradient(180deg,#6eabc2 10%,#506c6a 100%);
			    background-size: cover;
			}
		</style>
	</head>

	<body class="bg-gradient-custom">

		<div class="container">

			<!-- Outer Row -->
			<div class="row justify-content-center">

				<div class="col-xl-10 col-lg-12 col-md-9">

					<div class="card o-hidden border-0 shadow-lg my-5">
						<div class="card-body p-0">
							<!-- Nested Row within Card Body -->
							<div class="row">
								<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
								<div class="col-lg-6">
									<div class="p-5">
										<div class="text-center">
											<h1 class="h4 text-gray-900 mb-4">Login Page</h1>
										</div>
										<form class="user" method="post" action="<?=base_url().'login/dologin' ?>">
											<div class="form-group">
												<input type="text" class="form-control form-control-user" name="username" placeholder="NIK" required=>
											</div>
											<div class="form-group">
												<input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
											</div>
<hr />
											<button class="btn btn-primary btn-user btn-block" type="submit">
												Login
											</button>
										</form>
										<br />
										<div class="text-center">
											<a class="small" href="http://hrd.tvip.co.id/eis">Can't Log In, Try EIS</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="vendor/jquery/jquery.min.js"> </script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"> </script>

		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"> </script>

		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin-2.min.js"> </script>

	</body>

</html>