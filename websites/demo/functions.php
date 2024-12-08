<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die(); 
}

function abort($code){
    http_response_code($code);
    if($code==404){
        require 'views/404.php';
    }
   elseif($code==403){
    require 'views/403.php';
   }
    die();
}

function routeToController($currentUri,$routes){

    if(array_key_exists($currentUri,$routes)){
        require $routes[$currentUri];
    }
    else{
       abort(404);
    }
}
