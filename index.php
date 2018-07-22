<!DOCTYPE html>
<html lang="pt-br" style="height:100% !important;">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Kaio Nascimento">
		<title>Ricardo Auto Som - Bonito MS</title>

		<link rel="shortcut icon" href="img/favicon.png" />

		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href="css/padrao.min.css" rel="stylesheet">
		<link href="css/servicos.css" rel="stylesheet">
		<link href="css/backToTop.css" rel="stylesheet">

	    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	</head>

 	<body id="page-top" style="height:100% !important;">
	    <!-- Navegação -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#212529; max-height:10%;">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">
					<img src="img/favicon_novo.png" id="favicon_img" width="250" style="margin-top:5px;">
				</a> <!-- Ricardo Auto Som -->
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					Menu
					<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
						</li>
						<!--<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#team">Equipe</a>
						</li>-->
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#downloads">Downloads</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Cabeçalho -->
		<header class="masthead" style="height:100% !important;">
			<div class="container">
				<div class="intro-text">
					<div class="intro-lead-in" style="color: #ffa500 !important">
					</div>
					<!--<div class="intro-heading">É um prazer tê-lo aqui</div>
					<a class="btn btn-xl js-scroll-trigger" href="#services" style="background-color: #ff7b00 !important">
						Vamos nessa!
					</a>-->
				</div>
			</div>
		</header>

		<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
		
		<section id="services" style="padding: 4% 0 !important;">
<?php
			include_once('servicos.php');
?>		
		</section>

    	<!-- Fotos -->
    	<section class="p-0" id="portfolio" style="padding: 4% 0 !important; background-color: #ffa500;">
<?php
			include_once('portfolio.php');
?>
		</section>

		<!-- Sobre --> 
		<section id="about" style="padding: 4% !important;">
<?php
			include_once('sobre.php');
?>
		</section>

		<!-- Downloads  style="padding: 30px 0 !important; height:100% !important; min-height: 770px !important;"-->
		<section id="downloads" style="padding: 4% 0 !important; background-color: #dedede;">
<?php
			include_once('downloads.php');
?>
		</section>

		<!-- Contato  style="height:100% !important;" -->
		<section id="contact">
<?php
			include_once('contato.php');
?>
		</section>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<span class="copyright" style="color:black"><!-- #ff7b00 -->
							<b>
								Copyright &copy; Ricardo Auto Som - <?php echo date('Y'); ?> -
								Todos os Direitos Reservados 
							</b>
						</span>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<span style="color:black"><!-- #ff7b00 -->
							<b>
								Desenvolvido por - <a style="cursor: pointer;" id="bnr_contact"> BNR Softwares </a> 
							</b>
						</span>
					</div>
				</div>
			</div>
		</footer>

		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/popper/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/contact_me.js"></script>

		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
	    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

		<script src="js/agency.min.js"></script>
		<script src="js/creative.min.js"></script>

		<script>
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
					$('#return-to-top').fadeIn(200);    // Fade in the arrow
				} else {
					$('#return-to-top').fadeOut(200);   // Else fade out the arrow
				}
			});
			$('#return-to-top').click(function() {      // When arrow is clicked
				$('body,html').animate({
					scrollTop : 0                       // Scroll to top of body
				}, 500);
			});

			$('#bnr_contact').click(function(){
				alert('Em breve serão disponibilizadas mais informações sobre a BNR Softwares!');
			});
		</script>
	</body>
</html>