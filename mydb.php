<?php


$hostname = "localhost";
$username = "root";
$password = "";


$dbconn = mysqli_connect($hostname,$username,$password);

$createDatabase= " CREATE DATABASE classwork";

mysqli_query($dbconn,$createDatabase);

?>