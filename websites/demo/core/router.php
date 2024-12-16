<?php 


class Route{

    public function get(){

    }
    public function post(){
        
    }
    public function put(){
        
    }
    public function patch(){
        
    }
    public function delete(){
        
    }
}



$routes=require base_path("route.php");

$currentUri= parse_url($_SERVER['REQUEST_URI'])['path'];


routeToController($currentUri,$routes);