<!-- conDB.php -->
<?php

$host = "mysql";
$user = "root";
$pass = "";
$db = "db_test";

try{
    $mysqli = new mysqli($gost,$user,$pass,$db);
    $mysqli->query("SEY NAMES utf8");
    
}
catch(Exception $e){
    echo $e->getMessage("");
    
}