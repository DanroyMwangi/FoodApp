<?php
require("dbConnect.php");

class customers{
    private $conn;
    function __construct($db)
    {
        $this->conn = $db->connect();
    }
    function fetchAll(){
        $sql = "SELECT `buyerId`, `fName`, `lname`, `email`, `address` FROM `buyer`;";
    
        $result = mysqli_query($this->conn,$sql);
        if($result->num_rows>0){
            return $result;
        }
        mysqli_close($this->conn);
    }
    function delete($userId){
        $sql = "DELETE FROM `buyer` WHERE `buyerId`=$userId;";
        $result = mysqli_query($this->conn,$sql);
        if($result == 1){
            header("location:admin-dash.php");
        }
        mysqli_close($this->conn);
    }
    function update($buyerId,$fname,$lname,$email,$address){
        $sql = "UPDATE `buyer` SET `fname`='$fname',`lname`='$lname',`email`='$email',`address`='$address' WHERE `buyerId`=$buyerId;";
        $result = mysqli_query($this->conn,$sql);
        if($result == 1){
            header("location:admin-dash.php");
        }
        mysqli_close($this->conn);
    }
}

?>