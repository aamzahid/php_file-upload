<?php
     require_once "dbcon.php";
    if(isset($_GET['edit'])){
        
        $id =$_GET['edit'];
        
        $edit_info = mysqli_query($dbconn,"SELECT * FROM class_info WHERE id= $id");
        $tableInfo = mysqli_fetch_array($edit_info);

    }
?>


<form action="" method="POST">

    Name:<input type="text" name="name" value="<?php echo $tableInfo['name'];?>"><br><br><br>
    Email:<input type="email" name="email" value="<?php echo $tableInfo['email'];?>"><br><br><br>

    <input type="submit" name="submit" value="Update">
    

</form>

<?php

if (isset($_POST['submit'])){
    $id = $_GET['edit'];
    $name = $_POST ['name'];
    $email = $_POST ['email'];

    $updateSql = "UPDATE class_info SET name = '$name', email= '$email' WHERE id=$id"; 

    mysqli_query($dbconn,$updateSql);
    header('location: ind.php');


}

?>