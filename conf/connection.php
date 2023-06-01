<?php
$host="localhost";
$database="mypiramida";
$user="root";
$password="11";
try{
    $db=new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$password);

}
catch(PDOException $e){
    echo $e->getMessage();
}

?>