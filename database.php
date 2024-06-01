<?php

//include the connection file
include('connection.php');

//create an instance of Connection class
$connection = new Connection();

//call the createDatabase methods to create database "chap4Db"
$connection->createDatabase('crudPoo6');

$query = "
CREATE TABLE Clients (
id INT(6)  AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(30) ,
prenom VARCHAR(30) ,
note FLOAT
)
";

//call the selectDatabase method to select the chap4Db
$connection->selectDatabase('crudPoo6');

//call the createTable method to create table with the $query
$connection->createTable($query);


?>
