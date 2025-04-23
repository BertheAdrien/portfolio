<?php
$pageTitle = 'ProjectWelcomeTraining - Adrien Berthe';
?>

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
                    <img src="/public/assets/images/WelcomeTrainingConnexion.PNG" class="img-responsive" alt="Interface de connexion">
                </div>
                <div class="image-item animate-box">
                    <img src="/public/assets/images/WelcomeTrainingAdmin.PNG" class="img-responsive" alt="Interface d'administration">
                </div>
				<div class="image-item animate-box">
                    <img src="/public/assets/images/WelcomeTrainingSignature.PNG" class="img-responsive" alt="Interface d'administration">
                </div>
            </div>            
        </div>
    </div>

    <!-- Section Tâches -->
    <div class="row">
        <div class="col-md-12">
            <h2>Tâches Réalisées</h2>
            <ul>
                <li>📌 Conception d'une base de données MySQL pour la gestion des présences et comptes utilisateurs.</li>
                <li>📌 Développement d'un espace de connexion sécurisé avec hachage des mots de passe.</li>
                <li>📌 Création d'un tableau de bord pour l'administrateur.</li>
                <li>📌 Test et validation du projet.</li>
            </ul>
        </div>
    </div>

    <!-- Section Outils Utilisés -->
    <div class="row">
        <div class="col-md-12">
            <h2>Outils Utilisés</h2>
            <ul>
                <li>🖥️ HTML, CSS, JavaScript pour le front-end.</li>
                <li>⚙️ PHP et MySQL pour le back-end et la gestion des données.</li>
                <li>🛠️ VS Code et GitHub pour le développement et la gestion du projet.</li>
                <li>🌐 Hébergement sur OVH.</li>
            </ul>
        </div>
    </div>

	<div class="row">
        <div class="col-md-12">
            <h2>Compétences</h2>
            <ul>
                <li><strong><a href="?page=competences">Gérer le patrimoine informatique</a></strong></li>
                <p>Mettre en place et vérifier les niveaux d'habilitation associés à un service
                <br>Gérer des sauvegardes

                <li><strong><a href="?page=competences">Mettre à disposition des utilisateurs un service informatique</a></strong></li>
                <p>Réaliser les tests d'intégration et d'acceptation d'un service
                <br>Déployer un service
                <br>Accompagner les utilisateurs dans la mise en place d'un service</p>

                <li><strong><a href="?page=competences">Travailler en mode projet</a></strong></li>
                <p>Analyser les objectifs et les modalités d'organisation d'un projet
                <br>Planifier les activités
                <br>Évaluer les indicateurs de suivi d'un projet et analyser les écarts</p>
            </ul>
        </div>
    </div>

    <!-- Liens Utiles -->
    <div class="row">
        <div class="col-md-12">
            <h2>Liens Utiles</h2>
            <ul>
                <li><a href="https://welcometraining.bertadrien.fr/" target="_blank"><i class="fas fa-link"></i> Site Web du Projet</a></li>
                <li><a href="https://github.com/BertheAdrien/WelcomeTraining" target="_blank"><i class="fab fa-github"></i> Repository GitHub</a></li>
                <li><a href="#" target="_blank"><i class="fas fa-calendar-alt"></i> Diagramme de GANTT</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>Documents de Conception</h2>

            <div class="doc-section" style="margin-bottom: 40px;">
                <h4>📅 Diagramme de Gantt</h4>
                <p>Voici le diagramme de Gantt représentant la planification du projet.</p>
                <img src="/public/assets/docs/ClickNEatGantt.jfif" alt="Diagramme de Gantt ClickNEat" class="img-responsive" style="max-width:100%; border: 1px solid #ccc; padding: 10px;">
            </div>

            <div class="doc-section" style="margin-bottom: 40px;">
                <h4>🧩 Modèle Conceptuel de Données (MCD)</h4>
                <p>Ce schéma illustre les entités et relations de la base de données.</p>
                <img src="/public/assets/docs/ClickNEatMCD.png" alt="MCD ClickNEat" class="img-responsive" style="max-width:100%; border: 1px solid #ccc; padding: 10px;">
            </div>

            <div class="doc-section" style="margin-bottom: 40px;">
                <h4>🧭 Diagramme de Cas d’Utilisation</h4>
                <p>Ce diagramme montre les principales interactions entre les utilisateurs et le système.</p>
                <img src="/public/assets/docs/ClickNEatUseCase.png" alt="Diagramme de cas d’utilisation ClickNEat" class="img-responsive" style="max-width:100%; border: 1px solid #ccc; padding: 10px;">
            </div>

        </div>
    </div>

</div><!-- END container-wrap -->



</html>
