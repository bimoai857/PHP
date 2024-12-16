<?php
namespace core;

class Validator{
    public static function string($value,$max=INF,$name=''){
        $length=strlen(trim($value));
         if($length==0){
            return 'A '.$name.' is required'; 
         }
       
    }
}