<?php 

$routes=require base_path("route.php");

$currentUri= parse_url($_SERVER['REQUEST_URI'])['path'];


routeToController($currentUri,$routes);