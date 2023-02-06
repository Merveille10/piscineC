<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/components/timepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/components/daterangepicker.css" type="text/css" />


	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Changer son mot de passe | ZIYZA</title>

	
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php include_once('main/header.php') ?>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Changer mon mot de passe</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
					<li class="breadcrumb-item active" aria-current="page">Changer mon mot de passe</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap bg-light">

				<div class="container ">

					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10">
							<div class="card shadow-sm">
								<div class="card-header">
									<h4 class="mb-0">Récupérer votre compte</h4>
								</div>
								<div class="card-body">

								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="mb-0" action="#" method="post">

											<h3>Changer votre mot de passe</h3>

											<div class="row">
                                                <div class="col-12 form-group">
                                                    <label for="register-form-name">Entrez le code reçu par mail:</label>
                                                    <input type="text"  name="code" value="" class="form-control" />
                                                </div>

                                                <div class="col-12 form-group">
                                                    <label for="register-form-password">Choisir un nouveau mot de passe:</label>
                                                    <input type="password" name="password" value="" class="form-control" />
                                                </div>

											<div class="col-12 form-group">
												<label for="register-form-repassword">Entrez à nouveau le nouveau mot de passe:</label>
												<input type="password" name="password_confirmation" value="" class="form-control" />
											</div>
												<div class="col-12 form-group">
													<button class="button button-3d button-black m-0"  name="forgot" value="forgot">Mettre à jour </button>
													<a href="login.php" class="float-end">S'inscrire/Se connecter</a>
												</div>
											</div>

										</form>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include_once('main/footer.php') ?>
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	


</body>
</html>