<?php

session_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'home.php',
    '/product' => 'item.php',
    '/admin' => 'admin.php',
    '/cart' => 'cart.php',
];

// Check if the requested URI is the admin route
if ($uri === '/admin') {
    // Check if the user is authenticated
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        // Redirect to the login page or display an access denied message
        header('Location: /login.php');
        exit();
    }
}

if (array_key_exists($uri, $routes)) {
    // Include the appropriate view file
    include 'views/' . $routes[$uri];
} else {
    // Include the notfound view file
    include 'views/notfound.php';
}
