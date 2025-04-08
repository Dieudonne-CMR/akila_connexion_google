
<?php

require_once __DIR__ . '/../../../vendor/autoload.php';
// Charger le fichier .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
$dotenv->load();
/**
 * Configuration pour l'API Google OAuth
 */

// Définir les constantes à partir des variables d'environnement
define('GOOGLE_CLIENT_ID', $_ENV['GOOGLE_CLIENT_ID']);
define('GOOGLE_CLIENT_SECRET', $_ENV['GOOGLE_CLIENT_SECRET']);
define('GOOGLE_REDIRECT_URI', in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']) ? $_ENV['GOOGLE_REDIRECT_URI'] : $_ENV['GOOGLE_REDIRECT_URI_SERVER']);

