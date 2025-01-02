<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "newdb";

$con = mysqli_connect($servername, $username, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



$email = $_POST ['email'];
$pass  = $_POST ['pass'];
$type = $_POST ['type'];


$sql = "SELECT * FROM `login_t` WHERE email = '$email' AND pass = '$pass' AND type = '$type'";
$exe = mysqli_query($con, $sql);

$result = mysqli_num_rows($exe);

if ($result == 1) {
    $row = mysqli_fetch_assoc($exe);

    if ($type ==='admin') {
        header("Location: Admin.html");
        exit();
    } 
    elseif ($type==='student') {
        header("Location: font-page.html");
        exit();
    } 
    elseif ($type==='doctor') {
        header("Location: DoctorPage.html");
        exit();
    } 
    else {
        echo "Invalid user type";
    }
} else {
    echo "Login failed. Incorrect email or password.";
}

mysqli_close($con);
?>
