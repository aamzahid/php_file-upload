<!DOCTYPE html>
<html>
<head>

    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    Name:<input type="text" name="name" placeholder="Enter your name"><br><br>
    AGE:<input type="text" name="age" placeholder="Enter your age"><br><br>
    Email:<input type="email" name="email" placeholder="Enter your email"><br><br>
    Phone:<input type="text" name="phone" placeholder="Enter your phone number"><br><br>
    Address:<input type="text" name="address" placeholder="Enter your address"><br><br>


    image:<input type="file" name="img">
    
    <input type="submit" name="submit"><br><br><br>


    </form>

        <?php
            require_once "dbcon.php";
            if(isset($_POST["submit"])){
                $name = $_POST["name"];
                $age = $_POST["age"];
                $mail = $_POST["email"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];

                $img = $_FILES ['img'];
	            $imgtmp = $img['tmp_name'];
	            $imgnm = $img['name'];
	            $rnd = rand().$imgnm;
	            move_uploaded_file($imgtmp , "images/.$rnd");


                $insertSql = " INSERT INTO class_info(name,age,email,phone,address,filename) VALUES ('$name','$age','$mail','$phone','$address','$rnd')";
            
                mysqli_query($dbconn,$insertSql);

                // mysqli_query($dbconn,"INSERT INTO class_info (filename) VALUES('$rnd')" );
            
            }
        
        
        ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>AGE</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Image</th>
        </tr>
    

            <?php
            $db = mysqli_connect('localhost','root','','classwork');

            $readData ="SELECT * FROM class_info";
            $dbData = mysqli_query($dbconn,$readData);

            while($rows = mysqli_fetch_array($dbData)){
                ?>

                  <tr>
                      <td><?php echo $rows["name"]?></td>
                      <td><?php echo $rows["age"]?></td>
                      <td><?php echo $rows["email"]?></td>
                      <td><?php echo $rows["phone"]?></td>
                      <td><?php echo $rows["address"]?></td>

                      <td><img src="images/.<?php echo $rows['filename'];?>" alt="img"></td>
                      
                      <td><a href="update.php?edit=<?php echo $rows["id"]; ?> ">Edit</a></td>
                      <td><a href="delete.php?del=<?php echo $rows["id"];?> ">Delete</a></td>

                      
                      
                  </tr>  

                    <?php

            }

            ?>

            
        </table>

<!-- img -->




<!-- img end -->



</body>
</html>