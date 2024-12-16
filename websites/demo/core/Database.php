<?php

namespace core;
use PDO;

class Database{

    public $connection,$statement;

    public function __construct($config,$username='root',$password='root')
    {

        $dsn='mysql:'.http_build_query($config,'',';');
        
        $this->connection=new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);;
    }

    public function query($query,$params){
      
        $this->statement=$this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function findOrFail(){
        
       $data=$this->statement->fetchAll();

       if($data){
        return $data;
       }
       else{
        abort(403);
       }
    }
}
