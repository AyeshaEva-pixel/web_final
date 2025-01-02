<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "newdb";


$con = mysqli_connect($servername, $username, $password, $db);




$dname= $_POST ['name'];
$designation = $_POST ['designation'];

$sql = "INSERT INTO `doctor_t`(`dname`, `Designation`) 
VALUES ('$dname','$designation')";
$exe = mysqli_query($con, $sql);
if ($exe){
    echo header('location:Admin.html');

}


?>