<?php


$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "classwork";

$dbconn = mysqli_connect($hostname,$username,$password,$dbname);

$tblQuery = "CREATE TABLE class_info(
            id INT(4) AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(20) NOT NULL,
            age INT(3) NOT NULL,
            email VARCHAR(20) NOT NULL,
            phone INT(20) NOT NULL,
            address VARCHAR(20)NOT NULL)";

mysqli_query($dbconn,$tblQuery);


?>