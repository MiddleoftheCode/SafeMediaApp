<?php
$servername = "localhost";
$username = "awasthim_omar";
$password = "_7dWDq+Fq&0&";
$connectioninfo = "awasthim_safemedia";

$conn = new mysqli($servername, $username, $password, $connectioninfo);

$code = $_GET["code"];


$sql = "SELECT Username,Password FROM account WHERE code = '$code';" ;

$result  = $conn->query($sql) or die($conn->error);
if ($result->num_rows > 0) {
    $_SESSION["user"]= $_POST["user"];
    header("Location: http://awasthim.dev.fast.sheridanc.on.ca/SafeMediaApp/survey.php");
    
    
}
else {
    echo "Code not found please register";
}

?>