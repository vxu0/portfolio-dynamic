<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
echo "<script>console.log('uri:' . $uri);</script>";

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/technical' => 'controllers/technical.php',
    '/creative' => 'controllers/creative.php',
    '/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);