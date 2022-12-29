
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Formation: Jak Investisseur</title>

	<!-- Site favicon -->
	<link rel="icon" href="assets/images/perso/logoJak.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/perso/logoJak.png" />

	<!-- DESCRIPTION -->
	<meta name="description" content="Formation: Jak Investisseur" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/perso/logoJak.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/perso/logoJak.png" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

@include('Layouts.headerAdmin')
	

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form Wizards</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Wizards</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-danger h4"> Ne recharger pas la page avant d'avoir fini</h4>
						{{-- <p class="mb-30">jQuery Step wizard</p> --}}
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard" action="{{ route('create.Cours') }}" method="post" enctype= "multipart/form-data">
							@csrf

							<h5>Tout les détails sur la Formation</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="col-12">
										
									</div>
									
										<div class="form-group">
											<label >Titre de la Formation :</label>
											<input type="text" class="form-control"name="titre_cours">
										</div>
									</div>
									
									
									<div class="col-md-6">
										<div class="form-group">
											<label >Une image de la Formation :</label>
											<input type="file" class="form-control"name="url_image">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Categorie de la Formation ? :</label>
											<select class="custom-select form-control"name="categorie_cours">
												<option value="">Immobilier</option>
												<option value="Amsterdam">Agricole</option>
												<option value="Berlin">...</option>
												<option value="Frankfurt">....</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Langue :</label>
											<select class="custom-select form-control"name="langue_cours">
												<option value="Français" selected>Français</option>
												{{-- <option value="Valeur">Valeur</option> --}}
											</select>
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Difficultés :</label>
											<select class="custom-select form-control"name="difficulte_cours">
												<option> --- </option>
												<option value="Debutant"> Debutant</option>
												<option value="Moyen"> Moyen</option>
												<option value="Difficile"> Difficile </option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Debouchés :</label>
											<select class="custom-select form-control"name="debouche_cours">
												<option> --- </option>
												<option value="Entrepreneur"> Entrepreneur</option>
												<option value="Investisseur"> Investisseur</option>
												<option value="Professeur"> Professeur </option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Durée :</label>
											<select class="custom-select form-control"name="duree_cours">
												<option> Definir une Durée </option>
												<option value="1 Mois"> 1 Mois</option>
												<option value="2 Mois"> 2 Mois</option>
												<option value="3 Mois"> 3 Mois </option>
												<option value="4 Mois"> 4 Mois </option>
												<option value="5 Mois"> 5 Mois </option>
												<option value="6 Mois"> 6 Mois </option>
												<option value="7 Mois"> 7 Mois </option>
											</select>
										</div>
									</div>
										<div class="col-md-12">
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control"name="description_cours"></textarea>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 2 -->
							<h5> Première Video </h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Titre de la Video </label>
											<input type="text" class="form-control"name="plan_un">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Video :</label>
											<input type="file" class="form-control"name="video_un">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label> Description :</label>
											<textarea class="form-control"name="description_un"></textarea>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 3 -->
							<h5> Deuxième Vidéo</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Titre de la Video </label>
											<input type="text" class="form-control"name="plan_deux">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Video :</label>
											<input type="file" class="form-control"name="video_deux">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label> Description :</label>
											<textarea class="form-control"name="description_deux"></textarea>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 4 -->
							<h5> Troisième Vidéo</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Titre de la Video </label>
											<input type="text" class="form-control"name="plan_trois">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Video :</label>
											<input type="file" class="form-control"name="video_trois">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label> Description :</label>
											<textarea class="form-control"name="description_trois"></textarea>
										</div>
									</div>
								</div>
							</section>
					</div>
				</div>

				

				<!-- success Popup html Start -->
				<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20"> Soumission des Cours </h3>
								<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
								 Merci de bien vouloir appuyer sur Envoyer
							</div>
							<div class="modal-footer justify-content-center">
								<button type="submit" class="btn btn-primary"> Envoyer </button>
							</div>
						</div>
					</div>
				</div>

			</form>

				<!-- success Popup html End -->
			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>
</html>