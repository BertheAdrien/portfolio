<?php include('partials/header.php'); ?>
<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Outil de Signature en Ligne</h2>
            </div>
        </div>
    </div>
    
    <div id="fh5co-portfolio">
        <div class="row">
            <!-- Contexte -->
            <div class="col-md-4 col-md-push-8 sticky-parent">
                <div class="detail">
                    <div class="image-item animate-box cgi">
                        <h2>Contexte</h2>
                        <p>Dans le cadre de ma deuxième année de BTS SIO, j'ai développé un outil de signature en ligne destiné aux établissements scolaires. Cet outil permet aux élèves et aux professeurs d'accéder à leurs emplois du temps, de signer numériquement leur présence à un cours en cours et de suivre l'historique des sessions.
						Ce projet vise à offrir une gestion numérique complète des présences, avec un accès centralisé et sécurisé aux informations scolaires.</p>
						<p>Un compte administrateur a également été implémenté pour gérer l'ensemble des données de l'application, y compris les comptes utilisateurs, les classes et les professeurs. L'administrateur peut modifier, ajouter ou supprimer des comptes et gérer les droits d'accès.
						Les utilisateurs, quant à eux, peuvent se créer un compte directement via une page d'inscription. Toutes les données sont stockées dans une base de données relationnelle sécurisée.</p>
                    </div>    
                </div>
            </div>

            <!-- Images de démonstration -->
            <div class="col-md-7 col-md-pull-4 image-content">
                <div class="image-item animate-box">
                    <img src="images/WelcomeTrainingConnexion.png" class="img-responsive" alt="Interface de connexion">
                </div>
                <div class="image-item animate-box">
                    <img src="images/WelcomeTrainingAdmin.png" class="img-responsive" alt="Interface d'administration">
                </div>
				<div class="image-item animate-box">
                    <img src="images/WelcomeTrainingSignature.png" class="img-responsive" alt="Interface d'administration">
                </div>
            </div>            
        </div>
    </div>

    <!-- Section Tâches -->
    <div class="row">
        <div class="col-md-12">
            <h2>Tâches Réalisées</h2>
            <ul>
                <li>Conception d'une base de données MySQL pour la gestion des présences et comptes utilisateurs.</li>
                <li>Développement d'un espace de connexion sécurisé avec hachage des mots de passe.</li>
                <li>Création d'un tableau de bord pour l'administrateur.</li>
                <li>Test et validation du projet.</li>
            </ul>
        </div>
    </div>

    <!-- Section Outils Utilisés -->
    <div class="row">
        <div class="col-md-12">
            <h2>Outils Utilisés</h2>
            <ul>
                <li>HTML, CSS, JavaScript pour le front-end.</li>
                <li>PHP et MySQL pour le back-end et la gestion des données.</li>
                <li>VS Code et Figma pour le développement et les maquettes.</li>
            </ul>
        </div>
    </div>

	<div class="row">
        <div class="col-md-12">
            <h2>Compétences</h2>
            <ul>
				<li><strong>Travailler en mode projet</strong></li>
				<p>Analyser les objectifs et les modalités d'organisation d'un projet
				<br>Planifier les activités</p>
				<li><strong>Mettre à disposition des utilisateurs un service informatique</strong></li>
				<p>Réaliser les tests d'intégration et d'acceptation d'un service
				<br>Déployer un service
				<br>Accompagner les utilisateurs dans la mise en place d'un service</p>	
			</ul>
        </div>
    </div>

    <!-- Liens Utiles -->
    <div class="row">
        <div class="col-md-12">
            <h2>Liens Utiles</h2>
            <ul>
                <li><a href="https://www.votresite.com" target="_blank"><i class="fas fa-link"></i> Site Web du Projet</a></li>
                <li><a href="https://github.com/votreusername/outil-signature" target="_blank"><i class="fab fa-github"></i> Repository GitHub</a></li>
                <li><a href="https://www.votreurl.com/gantt" target="_blank"><i class="fas fa-calendar-alt"></i> Diagramme de GANTT</a></li>
            </ul>
        </div>
    </div>

</div><!-- END container-wrap -->

<?php include('partials/footer.php'); ?>
<?php include('partials/script.php'); ?>
</html>
