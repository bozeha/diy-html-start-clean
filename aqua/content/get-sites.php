

<?php include '../settings/connect.php'; ?>

<?php


$dbname = "aqua";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, ip, date FROM sites";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
              echo "<table><tr><td>id</td><td>name</td><td>url</td><td>date</td></tr>";
              echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td><a href='http://". $row["ip"]."'>" . $row["ip"]. "</a> </td><td>".$row["date"]."</td></td></table> ";
    }
} else {
    echo "0 results";
}
$conn->close();
?>