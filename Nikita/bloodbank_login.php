<?php
session_start();
include("connect.php");
if(isset($_POST['uname']) && isset($_POST['psw'])){
    $name = $_POST['uname'];
    $pass =  $_POST['psw']; 
    
    if(empty($name)){
        header("Location: FirstPage.php?error=username is required");
        exit();
    }else if(empty($pass)){
        header("Location: FirstPage.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM bloodbank_login WHERE username='$name' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1) {
               header("Location: home_of_bloodbank.php");
               exit();
         }else{
            header("Location: FirstPage.php?error=Incorrect user_name or Password");
            exit();
        }
    } 
}