<?php

require 'Database.php';
require_once '/Users/bimochanshrestha/projects/php/websites/demo/Constants.php';


$config = require(__DIR__ . '/../config.php');

$db=new Database($config['database']);


$title=$_POST['title'];
$description=$_POST['description'];
$user_id=Constants::USER_ID;

if($_SERVER['REQUEST_METHOD']=="POST"){
    $data=$db->query('insert into notes(title,description,user_id) values(:title,:description,:user_id)',[
        
        'title'=>$title,
        'description'=>$description,
        'user_id'=>$user_id
    ]);

}