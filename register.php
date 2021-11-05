<?php
    require_once("dbConnect.php");
    class buyer{
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
        $user = new buyer($fname,$lname,$email,$address,$pass);
        $db = new db();
        $db->connect();
        $db->insertUser($user);
    }
    else{
        echo "<script>alert('Password mismatch')</script>";
        header("Location:login.html");
    }
?>