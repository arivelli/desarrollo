<?php

$server="localhost"; // 127.0.0.1
$user="root";
$password="";

try{

  $connection=new PDO("mysql:host=$server;dbname=first_album", $user,$password );
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  $sql="SELECT * FROM `photos`";

  $judgment=$connection->prepare($sql);
  $judgment->execute();

  $result=$judgment->fetchall();

  //print_r($result);

  foreach($result as $photo){
      echo $photo['name'] . "<br/>" . "<br/>";
  }



  echo "Established connection";

}catch(PDOException $error){
    echo "Error connection".$error;

}

?>