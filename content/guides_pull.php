<?php

if(isset($_GET['msg'])) {
    $message = $_GET['msg'];

    echo "<h3>".$message."</h3>";
}

if(isset($_GET['subject'])) {
    $current_subject = $_GET['subject'];
    // testeverychar is securety function protect from sql injection
    if (testEveryChar($current_subject))
        {    
            $guides_array= startPullAll($current_subject);
        }
        else
        {
             $guides_array['loop'] =0;
            worngInfo();   
        }
}
else 
{
    $current_subject = 'all';
    $guides_array= startPullAll($current_subject);
}

function startPullAll($current_subject)
{
    
include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($connection, "set names 'utf8'");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$current_subject = mysqli_real_escape_string($connection, $current_subject);
if ($current_subject=='all'){$sql = "SELECT id, active, subject, user, guide_key, guide_title, guide_subtitle, guide_images_array FROM guides";}
else {$sql = "SELECT id, active, subject, user, guide_key, guide_title, guide_subtitle, guide_images_array FROM guides WHERE subject = ".$current_subject;}
$result = $connection->query($sql);
$loop = 0;
if ($result && $result->num_rows > 0) {
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
        $connection->close();
        $loop2 = 0;


        // to use the loop out of the function for list-ofguides.php
        $guides_array['loop'] =$loop;
        return $guides_array;
    } 
    else 
    {
    //   echo "<div cloass='' style='width:100px;height:100px;float:right;cursor: pointer;color:blue' onclick='window.history.back()'>כעת אין מדריכים בקטגוריה לחץ כאן לחזור אחורה</div>";
    $guides_array['loop'] =0;
    worngInfo();
    }
}
function worngInfo()
{
    echo "<script>function goBack(){window.history.back()}</script>";
    echo "<div onclick='goBack()' id='go_back'>המדריך לא נמצא חזור חזרה</div>";

}

?>