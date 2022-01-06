<?php
session_start();

$_SESSION["user"]="Mathaias";
$_SESSION["status"]="logged in";

echo "WELCOME!! session started"."<br/>";

echo  "user:  ".$_SESSION["user"]." status:  ".$_SESSION["status"];

?>