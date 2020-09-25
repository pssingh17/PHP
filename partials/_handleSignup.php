<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];
    
    $existsql = "select * from `users` where user_email ='$user_email'";
    $result = mysqli_query($conn,$existsql);
    $numRows = mysqli_num_rows($result);

    if($numRows > 0){
        $showError = "EMAIL ALREADY IN USE";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`,`user_pass`,`timestamp`) VALUES ('$user_email','$hash',current_timestamp())";
            $result = mysqli_query($conn,$sql);
            echo $result;
            if($result){
                $showAlert =true;
                header("Location:/Php/forums/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError ="PASSOWRDS DONT MATCH";
        }
        header("Location:/Php/forums/index.php?signupsuccess=false&error=$showError");
    }
}