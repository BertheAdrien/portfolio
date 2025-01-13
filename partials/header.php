<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Adrien Berthe &mdash; Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i" rel="stylesheet">

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/supercool.css">
	<link rel="stylesheet" href="css/test.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="acceuil.php">Adrien Berthe<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
                            <?php
                            $currentPage = basename($_SERVER['PHP_SELF']); // Obtenez le nom de la page actuelle
                            ?>
							<li <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>><a href="index.php">Acceuil</a></li>
							<li <?php if ($currentPage == 'btssio.php') echo 'class="active"'; ?>><a href="btssio.php">BTS SIO</a></li>
							<li <?php if ($currentPage == 'entreprise.php') echo 'class="active"'; ?>><a href="entreprise.php">Entreprise</a></li>
                            <li <?php if ($currentPage == 'veille.php') echo 'class="active"'; ?>><a href="veille.php">Veille</a></li>
							<li <?php if ($currentPage == 'realisations.php') echo 'class="active"'; ?>><a href="realisations.php">Réalisations</a>
							<li <?php if ($currentPage == 'competences.php') echo 'class="active"'; ?>><a href="competences.php">Compétences</a>
							<li <?php if ($currentPage == 'synthese.php') echo 'class="active"'; ?>><a class="synthese-boutton;" href="synthese.php">Tableau de Synthèse</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>