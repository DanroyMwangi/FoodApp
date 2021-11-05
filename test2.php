<?php

$conn = mysqli_connect("localhost","Ndung'u","mwangidanroyndungu","employees") or die;

$sql = "SELECT * FROM `employees` LIMIT 10";

$employees = mysqli_query($conn,$sql);

foreach($employees as $employee){
    echo $employee['first_name'];
    echo "<br>";
}

//echo "<script>alert('Successfully ordered')</script>";

?>