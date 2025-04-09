<?php
$pageTitle = 'Expérience Pro - Adrien Berthe';
?>

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Le système de tickets chez CGI</h2>
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
                        <p>Dans le cadre de mon expérience professionnelle, je travaille sur un projet de <strong>migration de bases de données</strong> en collaboration avec <strong>CNP Assurances</strong> dans le domaine de l'assurance vie.</p>
                        <p>Mes principales missions consistent à :</p>
                        <ul>
                            <li>📌 Traiter les tickets JIRA selon les besoins du client.</li>
                            <li>🔍 Effectuer des corrections et modifications de données en base.</li>
                            <li>⚙️ Modifier et adapter des composants pour les produits d'assurance.</li>
                        </ul>
                    </div>    
                </div>
            </div>

            <!-- Images de démonstration -->
            <div class="col-md-7 col-md-pull-4 image-content">
                <div class="image-item animate-box">
                    <img src="public/assets/images/JiraCapture.png" class="img-responsive" alt="Exemple de ticket JIRA">
                </div>
                <div class="image-item animate-box">
                    <img src="public/assets/images/dicussionJIRA.jpg" class="img-responsive" alt="Modification en base de données">
                </div>
            </div>            
        </div>
    </div>

    <!-- Section Tâches -->
    <div class="row">
        <div class="col-md-12">
            <h2>Suivi de la vie d'un ticket</h2>
            <p>Chaque ticket JIRA suit une vie structurée, passant par plusieurs étapes.</p>
            <p>Lorsqu'un ticket est créé par le client et/ou les prestataires, il est initialisé avec une description, des priorités, et des états.</p>
            <p>Ce ticket va ensuite être qualifié et affecté à une personne.</p>
            <p>Ce ticket est ensuite suivi par le développeur qui va effectuer les modifications requises.</p>
            <p>Une fois les modifications effectuées, le ticket est validé et passée à l'état "Clos" par le client.</p>
        </div>
    </div>

    <div class="row">
  <div class="col-md-12 animate-box detail">
    <p>
      À la suite de l’introduction d’un nouveau produit à migrer, intégrant une nouvelle fonctionnalité appelée <strong>EFI "BRV"</strong>, l’un de nos programmes n’était pas adapté à cette évolution et a généré une erreur sur plus d’un million de lignes. Ce programme a pour rôle de <strong>valider l’intégrité des données post-migration</strong> en exécutant une série de requêtes SQL dans un environnement COBOL.
    </p>

    <p>
      Après attribution du ticket, j’ai procédé à une analyse approfondie, puis, en concertation avec l’équipe projet et le client, nous avons décidé d’<strong>exclure les EFI "BRV"</strong> de cette vérification, car ils ne sont pas concernés par ce contrôle.
    </p>

    <p>
      J’ai donc redescendu le programme en environnement de développement pour y apporter les modifications nécessaires 
      (<a href="enterprise.php">voir schéma</a>). Par la suite, j’ai <strong>déployé la nouvelle version en environnement de test</strong>, puis exécuté le JCL associé afin de valider le bon fonctionnement de ma modification.
    </p>

    <p>
      Une fois les tests concluants, j’ai transféré le programme en environnement de qualification, où j’ai soumis une demande à l’équipe de préproduction pour qu’elle en prenne le relais. La préproduction procèdera aux tests de validation, avec mon accompagnement si besoin. 
      Si tout est conforme, <strong>le programme sera ensuite promu en production</strong>, remplaçant ainsi l’ancienne version.
    </p>

    <p>
      Enfin, une fois la livraison en production effectuée, <strong>le ticket est clôturé par le client</strong> et passe à l’état <em>"Clos"</em>.
    </p>
  </div>
</div>


    <div class="row">
        <div class="col-md-12">
            <h2>Tâches Réalisées</h2>
            <ul>
                <li>📋 Prise en charge et gestion des tickets JIRA.</li>
                <li>🛠️ Analyse et correction des données en base.</li>
                <li>🔄 Modification et adaptation des composants produits.</li>
            </ul>
        </div>
    </div>

    <!-- Section Outils Utilisés -->
    <div class="row">
        <div class="col-md-12">
            <h2>Outils Utilisés</h2>
            <ul>
                <li>📝 JIRA pour la gestion des tickets.</li>
                <li>💾 SQL et PL/SQL pour les bases de données.</li>
                <li>⚙️ Java et Spring Boot pour le backend.</li>
                <li>🛠️ GitHub pour le versioning et le suivi des modifications.</li>
            </ul>
        </div>
    </div>

    <!-- Section Compétences -->
    <div class="row">
        <div class="col-md-12">
            <h2>Compétences</h2>
            <ul>
                <li><strong><a href="?page=competences">Répondre aux incidents et aux demandes d’assistance et d’évolution</a></strong></li>
            </ul>
        </div>
    </div>

</div><!-- END container-wrap -->
</html>
