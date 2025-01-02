<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "newdb";


$con = mysqli_connect($servername, $username, $password, $db);
if ($con){
    echo "Connection established";
}

$q1 = $_POST['q1'];
// $q2 = $_POST['question2'];
// $q3 = $_POST['question3'];
// $q4 = $_POST['question4'];

// $result = ($q1+$q2+$q3+$q4);

$sql = "INSERT INTO `analysisdata`(`value`) 
VALUES ('$q1')";
$exe = mysqli_query($con, $sql);


?>