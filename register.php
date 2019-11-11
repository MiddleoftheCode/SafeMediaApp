<?php

$servername = "localhost";
$username = "awasthim_omar";
$password = "_7dWDq+Fq&0&";
$connectioninfo = "awasthim_safemedia";

$conn = new mysqli($servername, $username, $password, $connectioninfo);

if($conn->connect_error) 
{
         header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/signup.html");
}


$empid = $_POST["empid"];
$name = $_POST["name"];
$pass = $_POST["password"];
$company = $_POST["company"];


$sql = "INSERT INTO emp (empID,password,Name,Company) VALUES ('$empid', '$pass', '$name', '$company')";


if ($conn->query($sql) === TRUE) {
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/login.php");
    die();
    
} else {
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMedia/login.php");
    die();
}

$conn->close();

?>