


<?php

 header('Access-Control-Allow-Origin: *');  
include '../settings/connect.php';
$servername = "doitcom.ipagemysql.com";
$username = "boze";
$password = "BOZE1234567";
$dbname = "aqua";



$ip_address= $_GET['ip'];
$user_name= $_GET['name'];
$current_date= $_GET['date'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE sites SET ip='".$ip_address."',date='".$current_date."' WHERE name='".$user_name."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    
    echo "Error updating record: " . $conn->error;
}

$conn->close();





?>

