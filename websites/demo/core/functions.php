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
        require base_path($routes[$currentUri]);
    }
    else{
       abort(404);
    }
}

function base_path($file){
    return BASE_PATH.$file;
}

function view($file,$attributes=[]){

   extract($attributes);
 
   require base_path('views/'.$file);
}