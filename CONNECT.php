<?php
    $email =$_POST['email'];
    $subject =$_POST['subject'];

    //SIMPLE DATABASE CONNECTION// 
    $conn = new mysqli('localhost','root','','course');
    if($conn->connect_error)
    {
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into newp(email,subject)values(?,?)");
        $stmt->bind_param("ss",$email,$subject);
        $stmt->execute();
        echo "SUCCESS..";
        $stmt->close();
        $conn->close();
    }

    
    ?>