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

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Inscription / Connexion | ZIYZA</title>

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
				<h1>Inscription || Connexion</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
					<li class="breadcrumb-item active" aria-current="page">Inscription || Connexion</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">

						<ul class="tab-nav tab-nav2 center clearfix">
							<li class="inline-block"><a href="#tab-login">Login</a></li>
							<li class="inline-block"><a href="#tab-register">Register</a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content" id="tab-login">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="mb-0" action="#" method="post">

											<h3>Connectez-vous à votre compte</h3>

											<div class="row">
												<div class="col-12 form-group">
													<label for="login-form-username">Pseudo:</label>
													<input type="text"  name="username" value="" class="form-control" />
												</div>

												<div class="col-12 form-group">
													<label for="login-form-password">Password:</label>
													<input type="password" name="password" value="" class="form-control" />
												</div>

												<div class="col-12 form-group">
													<button class="button button-3d button-black m-0"  name="login" value="login">Se connecter</button>
													<a href="forgot-password.php" class="float-end">Mot de passe oublié ?</a>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>

							<div class="tab-content" id="tab-register">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<h3>Créez un compte !</h3>

										<form id="register-form" name="register-form" class="row mb-0" action="#" method="post">

											<div class="col-12 form-group">
												<label for="register-form-name">Pseudo:</label>
												<input type="text"  name="username" value="" class="form-control" />
											</div>

											<div class="col-12 form-group">
												<label for="register-form-email">Addresse Email:</label>
												<input type="text" name="email" value="" class="form-control" />
											</div>

											<div class="col-12 form-group">
												<label for="register-form-password">Choisir un mot de passe:</label>
												<input type="password" name="password" value="" class="form-control" />
											</div>

											<div class="col-12 form-group">
												<label for="register-form-repassword">Entrez à nouveau le mot de passe:</label>
												<input type="password" name="password_confirmation" value="" class="form-control" />
											</div>

											<div class="col-12 form-group">
												<button class="button button-3d button-black m-0"  name="register" value="Je m'inscris">Je m'inscris</button>
											</div>

										</form>
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