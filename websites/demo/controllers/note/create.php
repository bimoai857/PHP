<?php

require base_path('core/Constants.php');
require base_path('core/Validator.php');

$config = require base_path('config.php');

$db=new Database($config['database']);


$title=$_POST['title'];
$description=$_POST['description'];
$user_id=Constants::USER_ID;

if($_SERVER['REQUEST_METHOD']=="POST"){

    $errors=[];

    $titleError=Validator::string($_POST["title"],40,"title");

    if($titleError){
        $errors['title']=$titleError;
    }

    $descriptionError=Validator::string($_POST["description"],100,"description");

    if($descriptionError){
        $errors['description']=$descriptionError;
    }

    if(empty($errors['title'])&&empty($errors['description'])){
       
        $data=$db->query('insert into notes(title,description,user_id) values(:title,:description,:user_id)',[
        
            'title'=>$title,
            'description'=>$description,
            'user_id'=>$user_id
        ]);

        echo "Notes Created!!";
    }

  
    // view('note/index.view.php',['heading'=>'Notes']);
}