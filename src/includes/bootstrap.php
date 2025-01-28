<?php
// Démarrer la session si nécessaire
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclure la configuration
require_once __DIR__ . '/config.php';

// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris');

// Fonction pour nettoyer les entrées
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Fonction pour obtenir l'URL de base
function base_url($path = '') {
    $base_url = '/portfolio';  // Ajustez selon votre configuration
    return $base_url . '/' . ltrim($path, '/');
}
