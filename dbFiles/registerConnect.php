<?php
    require_once("dbconnect.php");
    $db = new db();
    $myconn = $db->connect();

    class customer{
        public $fName,$lname,$email,$address,$pass;

        function __construct($fName,$lname,$email,$address,$pass){
            $this->fName =$fName;
            $this->lName =$lname;
            $this->email =$email;
            $this->address =$address;
            $this->pass =password_hash($pass,PASSWORD_DEFAULT);
        }
    }
    $conPass = $_POST["rePass"];
    $pass = $_POST["regPass"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    if($conPass == $pass){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            header("Location:../login.php?<script>alert('Invalid Values')</script>");
        }
        else{
            $customer = new customer($fname,$lname,$email,$address,$pass);
            $stmt= "INSERT INTO `buyer`(`fName`, `lname`, `email`, `address`, `password`) VALUES ('$customer->fName','$customer->lName','$customer->email','$customer->address','$customer->pass');";
            $result = mysqli_query($myconn,$stmt);
            if($result==1){
                header("Location:../login.php?Message=success");
            }
            else{
                $error = $myconn->error; 
                header("Location:../login.php?Message=$error");
            }
        }
    }
    else{
        echo "<script>alert('Password mismatch')</script>";
        header("Location:../login.php");
    }
    
?>