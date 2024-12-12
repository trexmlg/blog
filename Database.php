<?php


class Database {


    public $pdo;




    //konstruktors un destruktors
     public function __construct($config){
        $dsn = "mysql:" . http_build_query($config,"",";");
        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }


    public function query(){
       
        $statement =  $this->pdo->prepare("SELECT * FROM post");
        $statement->execute();
        return $statement;


    }
}








?>
