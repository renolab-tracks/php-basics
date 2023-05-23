<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => "controllers/home.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "/posts" => "controllers/posts.php",
    "/posts/create" => "controllers/posts.create.php"
];


function routeToController($uri, $routes)
{

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($status_code = 404)
{
    http_response_code($status_code);
    require "views/$status_code.php";
}

routeToController($uri, $routes);
