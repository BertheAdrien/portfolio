<?php
$pageTitle = "Accueil - Adrien Berthe";
?>

<div class="fh5co-loader"></div>
<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Bienvenue sur mon Portfolio</h2>
				<h3>A propos de moi :</h3>
				<p>Apres quelques années à avoir travaillé dans le monde de la grande distribution, j'ai décidé de me lancer dans un domaine qui me plaisait vraiment. Passionné d'informatique et de nouvelles technologies depuis très jeune, je me suis donc embarqué dans un BTS SIO SLAM pour accroitre mes connaissances et relever de nouveaux défis. Investi et curieux, je n'hésites pas a demander de l'aide mais aussi donner mon avis sur les différents travaux que l'on peut réaliser durant ces années d'études.</p>
                <p>Ce portfolio est réalisé dans le cadre de ma formation du BTS SIO à l'ESPL d'Angers.</p>
            </div>
        </div>
		<ul class="fh5co-social-icons reseaux">
			<li><a href="https://github.com/BertheAdrien" target="_blank"><i class="icon-github"></i></a></li>
			<li><a href="https://www.linkedin.com/in/adrien-berthe-a80647218/" target="_blank"><i class="icon-linkedin"></i></a></li>
		</ul>	
    </div>
			
	<div id="fh5co-portfolio">
        <div class="row nopadding">
            <div class="col-md-6 padding-right">
                <div class="row">
                    <div class="col-md-12 animate-box">
					    <a href="<?php echo asset('images/cvDL.pdf'); ?>" target="_blank" class="portfolio-grid">
                            <img src="<?php echo asset('images/cvPng.PNG'); ?>" class="img-responsive" alt="CV Adrien Berthe">
                            <div class="desc">
                                <h3>Télécharger le CV</h3>
                            </div>
                        </a>
                    </div>
			    </div>
            </div>
		    <div class="col-md-6 padding-left">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="desc">
                            <h3>Environnement éducatif et professionnel</h3>
                            <span>  
                                <div class="col-md-12 animate-box">
                                    <a href="?page=btssio" class="portfolio-grid">
                                        <img src="<?php echo asset('images/logosio.png'); ?>" class="img-responsive link-index" style="border: 4px solid #F95959; border-radius: 14px" alt="Logo BTS SIO">
                                        <div class="desc">
                                            <h3>Présentation de la formation</h3>
                                        </div>
                                    </a>         
                                </div>
                            </span>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-md-6 padding-left">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="desc">
                            <span>  
                                <div class="col-md-12 animate-box">
                                    <a href="?page=entreprise" class="portfolio-grid">
                                        <img src="<?php echo asset('images/CGIlogo.png'); ?>" class="img-responsive link-index" style="border: 4px solid #F95959; border-radius: 14px" alt="Logo CGI">
                                        <div class="desc">
                                            <h3>Présentation de mon entreprise</h3>
                                        </div>
                                    </a>         
                                </div>
                            </span>
                        </div>  
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
