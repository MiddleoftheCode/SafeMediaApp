<?php
session_start();


$servername = "localhost";
$username = "awasthim_omar";
$password = "_7dWDq+Fq&0&";
$connectioninfo = "awasthim_safemedia";

$conn = new mysqli($servername, $username, $password, $connectioninfo);

if($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
     "<br>";
}


$pass = $_POST["password"];
$username = $_POST["empid"];


$sql = "SELECT empID,password FROM emp WHERE empID = '$username' AND password = '$pass';" ;

$result  = $conn->query($sql) or die($conn->error);


if ($result->num_rows > 0) {
    $_SESSION["user"]= $_POST["empid"];
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMediaApp/index.php");
    
    
} else {
    echo "Account not found please register";
}

$conn->close();




?>