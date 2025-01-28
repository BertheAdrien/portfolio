<?php
// Configuration de base
define('BASE_PATH', __DIR__ . '/../..');
define('ASSETS_PATH', '/portfolio/public/assets');  // Ajout de /portfolio car nous sommes dans un sous-dossier de xampp
define('INCLUDES_PATH', __DIR__);

// Configuration de l'application
$config = [
    'site_name' => 'Mon Portfolio',
    'assets' => [
        'css' => ASSETS_PATH . '/css',
        'js' => ASSETS_PATH . '/js',
        'images' => ASSETS_PATH . '/images',
        'fonts' => ASSETS_PATH . '/fonts',
        'pdf' => ASSETS_PATH . '/pdf'
    ],
    'includes' => [
        'partials' => INCLUDES_PATH . '/partials'
    ]
];

// Fonction helper pour les assets
function asset($path) {
    return ASSETS_PATH . '/' . ltrim($path, '/');
}

// Fonction helper pour inclure les partials
function partial($name) {
    global $config;
    $file = $config['includes']['partials'] . '/' . $name . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        error_log("Partial not found: " . $file);
    }
}
