<?php 

require 'functions.php';

$currentUri= parse_url($_SERVER['REQUEST_URI'])['path'];


$routes=[
    '/'=>'controllers/index.php',
    '/about'=>'controllers/about.php',
    '/notes'=>'controllers/notes.php'
];

routeToController($currentUri,$routes);