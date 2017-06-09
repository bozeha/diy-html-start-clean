<?php
if(isset($_GET['msg'])) {
    $message = $_GET['msg'];

    echo "<h3>".$message."</h3>";
}




include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
$guides_array=[];
if(isset($_GET['subject'])) {
    $current_subject = $_GET['subject'];
}else {
    //$test = '';
    $current_subject = 'all';
}
mysqli_query($connection, "set names 'utf8'");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($current_subject=='all'){$sql = "SELECT id, active, subject, user, guide_key, guide_title, guide_subtitle, guide_images_array FROM guides";}
else {$sql = "SELECT id, active, subject, user, guide_key, guide_title, guide_subtitle, guide_images_array FROM guides WHERE subject = ".$current_subject;}
$result = $connection->query($sql);
$loop = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $guides_array['id'][$loop] = $row["id"];
        $guides_array['active'][$loop] = $row["active"];
        $guides_array['subject'][$loop] = $row["subject"];
        $guides_array['user'][$loop] = $row["user"];
        $guides_array['guide_key'][$loop] = $row["guide_key"];
        $guides_array['guide_title'][$loop] = $row["guide_title"];
        $guides_array['guide_subtitle'][$loop] = $row["guide_subtitle"];
        $guides_array['guide_images_array'][$loop] = $row["guide_images_array"];
        $string2json =  json_decode($guides_array['guide_images_array'][$loop],TRUE);
        $guides_array['guide_images_array_fix'][$loop]=$string2json;
        $guides_array['guide_images_array_fix'][$loop] = explode(",",$guides_array['guide_images_array_fix'][$loop][0]);


        $loop++;
    }
} else {
    echo "<div cloass='' style='width:100px;height:100px;float:right;cursor: pointer;color:blue' onclick='window.history.back()'>כעת אין מדריכים בקטגוריה לחץ כאן לחזור אחורה</div>";
}


$connection->close();
$loop2 = 0;

/*if ($current_subject=='all')
{*/

//}
//else
/*if ($current_subject!='all')
{
    
}*/



?>