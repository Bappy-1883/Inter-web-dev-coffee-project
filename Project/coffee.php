<?php

$name = $_GET["username"];
$email = $_GET["useremail"];
$phone = $_GET["userno"];
$message = $_GET["message"];

$username = "root";
$servername = "localhost";
$password = "";
$dbname = "coffee3";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection fail") . $conn->connect_error;
}

echo "<h1>Congralutions $name You have reserved your table</h1>";

$sql = "INSERT INTO customer VALUES('.$name.', '.$email.', '.$phone.', '.$message.')";

if($conn->query($sql)===TRUE){
    echo "Information is filled";
} else{
    echo "error: " . $conn->error;
}
$conn->close();

?>