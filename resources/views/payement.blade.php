<!DOCTYPE html>
<html lang="fr">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="Formation: Jak Investisseur" />
	
	<!-- OG -->
	<meta property="og:title" content="Formation: Jak Investisseur" />
	<meta property="og:description" content="Formation: Jak Investisseur" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/perso/logoJak.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/perso/logoJak.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Formation: Jak Investisseur </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER END -->


    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/mdb.min.css" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body id="bg">
    <div class="page-wraper">
    <div id="loading-icon-bx"></div>
    
        <!-- Header Top ==== -->
        <header class="header rs-nav header-transparent">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <a href="{{ route('accueil')}}"><img src="assets/images/perso/logoJakS.png" alt=""></a>
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                            </div>
                        </div>
                        <!-- Search Box ==== -->
                        <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="{{ route('accueil') }}"><img src="assets/images/perso/logoJakS.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">	
                                <li class="active"><a href="{{ route('accueil')}}">Accueil </a> </li>
                                
							<li><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('about') }}"> A propos de Nous <i class="fa fa-angle-right"></i></a>
									</li>
									<li><a href="{{ route('faq') }}">FAQ's<i class="fa fa-angle-right"></i></a>
									</li>
									<li><a href="{{ route('contact') }}"> Nous Contacter <i class="fa fa-angle-right"></i></a>
									</li>
								</ul>
							</li>
        
                                {{-- Pages --}}
        
                                <li class="add-mega-menu"><a href="javascript:;"> Cours <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <h5 class="menu-adv-title">Mes Courses</h5>
                                            <ul>
                                                <li><a href="{{ route('courses')}}"> Formations </a></li>
                                                <li><a href="{{ route('ourCourses')}}"> Details Formations</a></li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <img src="assets/images/perso/logoJak.png" alt=""/>
                                        </li>
                                    </ul>
                                </li>
                                
                                {{-- Blogs --}}
        
                                <li class="nav"><a href="javascript:;">Profile </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('profile') }}"> Mes Informations </a></li>
                                    </ul>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Top END ==== -->



    	<!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="page-banner ovbl-dark" style="background-image:url(https://images.pexels.com/photos/4963087/pexels-photo-4963087.jpeg?auto=compress&cs=tinysrgb&w=600);">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="text-white"> Payements </h1>
                     </div>
                </div>
            </div>


    {{-- <div class="container"> --}}
        <div class=" col-md-auto card" >
            <div class="row g-0">
              <div class="col-md-6">
                
                <div class="card-body">
                    <div class="card">
                        <img src="" alt="">
                    </div>
                    
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <input class="form-control mt-1" type="text" value="Nom du Cours" aria-label="Disabled input example" disabled readonly>
                        </div>
                      </div>
    
                      <div class="mb-3 row">
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="Durée du Cours" aria-label="Disabled input example" disabled readonly>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="Prix" aria-label="Disabled input example" disabled readonly>
                        </div>
                      </div> 
                </div>

              </div>
              
              <div class="card text-white bg-dark mb-3 col-md-6">
                <div class="card-header"> Informations </div>
                <div class="card-body">

                  <h5 class="card-title"> Titre de Payement </h5>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Eum eaque doloribus dignissimos cupiditate facilis, soluta atque
                  eos repellendus repellat magnam nam perspiciatis nostrum. Eveniet
                  animi quibusdam natus pariatur ipsa repudiandae?

                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" value="Entrer votre adresse Mail">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-form-label"> Information de Carte </label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" value="Entrer vos information de Payement">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-form-label"> Moyen Utiliser </label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" value="">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-form-label"> Position Geographique </label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" value="Pays ">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <div class="col-sm-10">
                      <input type="submit" class="btn btn-primary" value="Payer">
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
    {{-- </div> --}}


    <!-- Footer ==== -->
     <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="{{ route('accueil')}}"><img src="assets/images/perso/logojakS.png" width="50" alt=""/></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							{{-- <a href="#" class="btn "> Nous rejoindre</a> --}}
						</div>
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title"> S'enreigistrer pour recevoir les nouveautés</h5>
							<p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="" method="post">
									<div class="ajax-message"></div>
									<div class="input-group">
										<input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
										</span> 
									</div>
								</form>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							{{-- <div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title"> Menu</h5>
									<ul>
										<li><a href="{{ route('accueil') }}">Accueil</a></li>
										<li><a href="{{ route('about')}}">A Propos</a></li>
										<li><a href="{{ route('faq')}}">FAQs</a></li>
										<li><a href="{{ route('contact')}}">Contact</a></li>
									</ul>
								</div>
							</div> --}}
							{{-- <div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title"> Cours</h5>
									<ul>
										<li><a href="{{ route('courses')}}">Formations </a></li>
										<li><a href="{{ route('ourCourses')}}"> Details Formations</a></li>
										<li><a href="{{ route('profile')}}">Profile</a></li>
									</ul>
								</div>
							</div> --}}
						</div>
                    </div>
					
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        {{-- <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Notre Gallerie</h5>
                            <ul class="magnific-image">
								<li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
							</ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 text-center"> &copy; CopyRight Tout Droit Reserves  <a href="mailto:exemple@gmail.com"> Jak Investisseur </a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>


<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
<!-- Revolution JavaScripts Files -->
<script src="assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script>
jQuery(document).ready(function() {
	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"assets/vendors/revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"on",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style: "uranus",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},
				
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[768,600,600,600],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});	
</script>
</body>

</html>
