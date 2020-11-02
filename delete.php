<?php
    require_once "dbcon.php";

    if (isset($_GET['del'])){

        $id =$_GET['del'];
        $updateSql ="DELETE FROM class_info WHERE id=$id";
        mysqli_query($dbconn,$updateSql);



        header('location:ind.php');
        }





?>