<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adrien Berthe &mdash; Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio d'Adrien Berthe" />
    <meta name="keywords" content="portfolio, développeur, BTS SIO" />
    <meta name="author" content="Adrien Berthe" />

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
    <link rel="stylesheet" href="/public/assets/css/animate.css">
    <!-- Icomoon Icon Fonts -->
    <link rel="stylesheet" href="/public/assets/css/icomoon.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/public/assets/css/bootstrap.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="/public/assets/css/flexslider.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/supercool.css">
    <link rel="stylesheet" href="/public/assets/css/test.css">

    <!-- Modernizr JS -->
    <script src="/public/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="top-menu">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="?page=accueil">Adrien Berthe<span>.</span></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <?php
                            $currentPage = $_GET['page'] ?? 'accueil'; // Obtenir la page actuelle depuis l'URL
                            ?>
                            <li <?php if ($currentPage == 'accueil') echo 'class="active"'; ?>><a href="?page=accueil">Accueil</a></li>
                            <li <?php if ($currentPage == 'btssio') echo 'class="active"'; ?>><a href="?page=btssio">BTS SIO</a></li>
                            <li <?php if ($currentPage == 'entreprise') echo 'class="active"'; ?>><a href="?page=entreprise">Entreprise</a></li>
                            <li <?php if ($currentPage == 'veille') echo 'class="active"'; ?>><a href="?page=veille">Veille</a></li>
                            <li <?php if ($currentPage == 'realisations') echo 'class="active"'; ?>><a href="?page=realisations">Réalisations</a></li>
                            <li <?php if ($currentPage == 'competences') echo 'class="active"'; ?>><a href="?page=competences">Compétences</a></li>
                            <li <?php if ($currentPage == 'synthese') echo 'class="active"'; ?>><a class="synthese-boutton" href="?page=synthese">Tableau de Synthèse</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</body>
</html>
