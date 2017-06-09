

<?php

$current_active= $_POST["guide-id"];
$current_checked= $_POST["checked"];



include '../settings/connect.php';

$connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_query($connection, "set names 'utf8'");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

if($current_checked== 'true')
{
 $sql = "UPDATE guides SET active=1 WHERE id=".$current_active."";
}
if($current_checked== 'false')
{
 $sql = "UPDATE guides SET active=0 WHERE id=".$current_active."";
}
$result = $connection->query($sql);


$connection->close();


?>