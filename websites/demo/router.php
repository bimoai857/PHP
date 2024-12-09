<?php 

require 'functions.php';

$routes=require("route.php");

$currentUri= parse_url($_SERVER['REQUEST_URI'])['path'];


routeToController($currentUri,$routes);