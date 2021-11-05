<?php
require_once("dbConnect.php");
session_start();
$db = new db();
$myconn = $db->connect();

$userEmail = $_POST["userEmail"];
$userPass = $_POST["loginPass"];
    $stmt= "SELECT * FROM `buyer` WHERE `email`='$userEmail';";
    $result = mysqli_query($myconn,$stmt);
    if($result->num_rows==1){
        $dataArray = $result->fetch_assoc();
        if(password_verify($userPass, $dataArray["password"] )){
            $_SESSION['userId'] = $dataArray['buyerId'];
            $_SESSION['fname'] = $dataArray['fName'];
            $_SESSION['lname'] = $dataArray['lname'];
            $_SESSION['email'] = $dataArray['email'];
            $_SESSION['address'] = $dataArray['address'];
            $_SESSION['cart-number'] = 0;
            $_SESSION['cart-items'] = array();
            $_SESSION['total'] = 0;
            header("location:../index.php");
        }
        else{
            echo "<script>alert('Failed')</script>";
            header("location:../login.php");
        }
    }
    else{
        echo "<script>alert('Failed')</script>";
        header("location:../login.php");
    }
?>