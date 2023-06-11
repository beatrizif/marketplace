<?php

$rotas = [
    '/' => '/pages/home.html',
    '/painel' => '/pages/painel.php',
    '/login' => '/pages/login.html',
    '/create' => '/pages/register.html',
    '/logar' => '/login.php',
    '/store' => '/register.php',
    '/logout' => '/logout.php',
];

function rotear ($uri, $rotas) {

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/error.php';
    }

}