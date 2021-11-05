<?php
require_once("dbConnect.php");
session_start();
$db = new db();
$myconn = $db->connect();
//SELECT `adminId`, `uname`, `email`, `address`, `password` FROM `admin` WHERE 1

$adminUsername = $_POST["adminUsername"];
$adminPassword = $_POST["adminPassword"];
    $stmt= "SELECT * FROM `admin` WHERE `uname`='$adminUsername' AND `password`=$adminPassword;";
    $result = mysqli_query($myconn,$stmt);
    if($result->num_rows==1){
        $dataArray = $result->fetch_assoc();
        print_r($dataArray);
        if($adminPassword == $dataArray["password"]){
            $_SESSION['adminId'] = $dataArray['adminId'];
            $_SESSION['adminuname'] = $dataArray['uname'];
            $_SESSION['adminemail'] = $dataArray['email'];
            $_SESSION['adminaddress'] = $dataArray['address'];
            header("location:../admin-dash.php");
        }
        else{
            $_SESSION['message'] = "Login Failed";
            header("location:../admin-dash.php");
        }
    }
    else{
        $_SESSION['message'] = "Login Failed";
        header("location:../admin-dash.php");
    }
?>