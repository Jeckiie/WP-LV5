<?php
function OpenCon(){
    $dbhost = "eu-cdbr-west-03.cleardb.net";
    $dbuser = "b34287243877bc";
    $dbpass = "db7ac085";
    $db = "heroku_17af0e6b7b35bdc";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
}
 
function CloseCon($conn){
    $conn -> close();
}
   
?>