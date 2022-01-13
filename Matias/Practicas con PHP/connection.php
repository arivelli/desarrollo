<?php


class connection{

    private $server="localhost";
    private $user="root";   
    private $password="";
    private $connection;
    
    
    public function __construct(){

        try {
            $this->connection= new PDO("mysql:host=$this->server;dbname=first_album",$this->user,$this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
            }catch( PDOException $e){
                return "connection failure".$e;
                
        }

    }

    public function run($sql){      //Insert/Delete/To update
    $this->connection->exec($sql);
    return $this->connection->lastInsertId();
    }

    public function consult($sql){
    $judgment=$this->connection->prepare($sql);
    $judgment->execute();
    return $judgment->fetchAll();
    }

}


?>