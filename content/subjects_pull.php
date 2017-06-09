
<?php
include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
$subjects_array=[];
mysqli_query($connection, "set names 'utf8'");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT id, key_name, img, title, sub_title, keywords FROM subjects";
$result = $connection->query($sql);
$loop = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $subjects_array['id'][$loop] = $row["id"];
        $subjects_array['key_name'][$loop] = $row["key_name"];
        $subjects_array['img'][$loop] = $row["img"];
        $subjects_array['title'][$loop] = $row["title"];
        $subjects_array['sub_title'][$loop] = $row["sub_title"];
        $subjects_array['sub_keywords'][$loop] = $row["keywords"];
        $loop++;
    }
} else {
    echo "0 results";
}


$connection->close();
$loop2 = 0;


?>

