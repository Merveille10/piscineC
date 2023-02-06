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

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css" />

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="css/components/bs-filestyle.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Upload Ressource | ZIYZA</title>

<style>
.file-caption.icon-visible .file-caption-name {
	font-family: 'Lato', sans-serif;
	color: #666;
}
</style>

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
				<h1>Uploader une ressource</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Uploader une ressource</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row">
							<div class="col-lg-6">
								<form class="row" action="include/form.php" method="post" enctype="multipart/form-data">
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="col-12 form-group">
										<label>Nom complet de la ressource</label>
										<input type="text" name="name" class="form-control required" value="" placeholder="Entrez le nom complet de la ressource">
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="w-100"></div>
											<div class="col-md-6 form-group">
												<label>Type de ressource:</label>
												<select class="form-select required" name="type" >
													<option value="">-- Sélectionner --</option>
													<option value="ebook">Ebook</option>
													<option value="audio">Audio</option>
													<option value="vide">Vidéo</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label>Uploader la ressource:</label>
											<input type="file" id="res" name="ressource" class="file-loading  form-select required" data-show-preview="true" />
										</div>
										<div class="form-group">
											<label>Uploader la couverture de la ressource :</label>
											<input type="file" id="cov"   name="cover" class="file-loading  form-select required" data-show-preview="true" />
										</div>
										
									</div>
									
									<div class="col-12">
										<button type="submit" name="upload" class="button button-3d button-black m-0">Téléverser</button>
									</div>

								</form>
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

	<!-- Bootstrap File Upload Plugin -->
	<script src="js/components/bs-filestyle.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>
		jQuery(document).ready( function(){
			

			$("#res").fileinput({
				required: true,
				browseClass: "btn btn-secondary",
				browseIcon: "",
				removeClass: "btn btn-danger",
				removeLabel: "",
				removeIcon: "<i class='icon-trash-alt1'></i>",
				showUpload: false
			});

			$("#cov").fileinput({
				required: true,
				browseClass: "btn btn-secondary",
				browseIcon: "",
				removeClass: "btn btn-danger",
				removeLabel: "",
				removeIcon: "<i class='icon-trash-alt1'></i>",
				showUpload: false
			});
		})
	</script>

</body>
</html>