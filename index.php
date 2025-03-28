<?php
require_once __DIR__ . '/src/includes/bootstrap.php';
require_once __DIR__ . '/src/includes/config.php';

// Router simple
$page = clean_input($_GET['page'] ?? 'accueil');
$allowedPages = [
    'accueil' => 'index.php',
    'competences' => 'competences.php',
    'realisations' => 'realisations.php',
    'btssio' => 'btssio.php',
    'entreprise' => 'entreprise.php',
    'veille' => 'veille.php',
    'veille-sql' => 'veilleSQL.php',
    'veille-moteur-graph' => 'veilleMoteurGraph.php',
    'synthese' => 'synthese.php',
    'mentions-legales' => 'mentionslegale.php',
    'contact' => 'contact.php',
    'project-welcome-training' => 'projectWelcomeTraining.php',
    'calculette-imo' => 'calculetteImo.php',
    'project-click-neat' => 'projectClickNEat.php',
    'project-portfolio' => 'projectPortfolio.php',
    'project-ticketing' => 'projectTicketing.php'
];

// Vérifier si la page demandée existe
$pageFile = isset($allowedPages[$page]) 
    ? __DIR__ . '/src/pages/' . $allowedPages[$page]
    : __DIR__ . '/src/pages/404.php';

// Démarrer la mise en tampon
ob_start();

// Inclure la page demandée
if (file_exists($pageFile)) {
    require_once $pageFile;
} else {
    header("HTTP/1.0 404 Not Found");
    require_once __DIR__ . '/src/pages/404.php';
}

// Récupérer le contenu du tampon
$content = ob_get_clean();

// Inclure le layout avec le contenu
require_once __DIR__ . '/src/includes/layout.php';
