<?php

function dd($input)
{
    echo '<pre>';
    var_dump($input);
    echo '</pre>';
    die();
}

function urlIs($url)
{
    $parsed_url = parse_url($_SERVER['REQUEST_URI']);
    return $parsed_url['path'] === $url;
}
