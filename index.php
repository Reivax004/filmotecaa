<?php
// index.php - Front Controller

// Récupération de l'URL
$request = $_SERVER['REQUEST_URI'];

// Suppression des éventuels paramètres de l'URL
$uri = parse_url($request, PHP_URL_PATH);

// Fonction de routage
function route($uri) {
    // Définition des routes
    $routes = [
        '/catalogue' => 'views/catalogue_front.php',
        //'/contact' => 'views/contact.php'
    ];

    // Vérifier si la route demandée existe
    if (array_key_exists($uri, $routes)) {
        // Charger la vue correspondante
        require $routes[$uri];
    } else {
        // Page 404 si la route n'existe pas
        http_response_code(404);
        echo "Page non trouvée";
    }
}

// Appeler le routeur
route($uri);
