<?php
include '../settings/php_help_functions.php';
include '../settings/security.php';

if(isset($_GET['guide'])) {
    $current_guide = $_GET['guide'];

    // testeverychar is securety function protect from sql injection
    if (testEveryChar($current_guide))
    {
        startPull($current_guide);
    }
    else
    {
        worngInfo();
    }
}else {
    worngInfo();
}

// return true/false if $str ends with $sub

function startPull($current_guide)
{


    include '../settings/connect.php';
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $guide_array=[];
    $temp_temp = [];
    mysqli_query($connection, "set names 'utf8'");
// Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $current_guide = mysqli_real_escape_string($connection, $current_guide);
    $sql = "SELECT id, subject, user, guide_key, guide_title, guide_title_en,guide_subtitle,keywords,redirect,redirect_url,guide_accessories_array,guide_text_array ,guide_images_array, guide_videos_array, type_of_steps_array, guide_textarea_array, notification FROM guides WHERE id = ".$current_guide;
    $result = $connection->query($sql);
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $guide_array['id'] = $row["id"];
            $guide_array['subject'] = $row["subject"];
            $guide_array['user'] = $row["user"];
            $guide_array['guide_key'] = $row["guide_key"];
            $guide_array['guide_title'] = $row["guide_title"];
            $guide_array['guide_title_en'] = $row["guide_title_en"];

            $guide_array['guide_subtitle'] = $row["guide_subtitle"];

            $guide_array['guide_keywords'] = $row["keywords"];
            $guide_array['guide_redirect'] = $row["redirect"];
            $guide_array['guide_redirect_url'] = $row["redirect_url"];

            $guide_array['guide_accessories_array'] = $row["guide_accessories_array"];
            $guide_array['guide_accessories_array'] = str_replace(",", "\",\"", $guide_array['guide_accessories_array']);
            $string2json = json_decode($guide_array['guide_accessories_array'], TRUE);
            $guide_array['guide_accessories_array'] = $string2json;

            $guide_array['guide_text_array'] = $row["guide_text_array"];
            $string2json = json_decode($guide_array['guide_text_array'], TRUE);
            $guide_array['guide_text_array'] = $string2json;

            $guide_array['guide_images_array'] = $row["guide_images_array"];
            $string2json = json_decode($guide_array['guide_images_array'], TRUE);
            $guide_array['guide_images_array'] = $string2json;


            //$x =json_decode('["C:\\\fakepath\\\111111.mp4","x578xTJ4T4g?autoplay=0&loop=0&controls=0&rel=0"]');
            // echo ($row["guide_videos_array"]);
            //$x = $row["guide_videos_array"];
            //print_r($x);

            $guide_array['guide_videos_array'] = $row["guide_videos_array"];
            $string2json = json_decode($guide_array['guide_videos_array']);
            $guide_array['guide_videos_array'] = $string2json;

            //print_r($guide_array['guide_videos_array']);
            //print_r($string2json."yyyyyyyyyyyyyyy");


            $guide_array['guide_textarea_array'] = $row["guide_textarea_array"];
            $string2json = base64_decode($guide_array['guide_textarea_array']);
            $string2json2 = json_decode($string2json, TRUE);
            $guide_array['guide_textarea_array'] = $string2json2;


            $guide_array['type_of_steps_array'] = $row["type_of_steps_array"];
            $string2json = json_decode($guide_array['type_of_steps_array'], TRUE);
            $guide_array['type_of_steps_array'] = $string2json;


            $guide_array['notification'] = explode(",",$row["notification"]);
            // $string2json_notification = json_decode($guide_array['notification'], TRUE);
            //$guide_array['notification'] = $string2json_notification;


        }



//////////////////

//$access_loop--;




/////////////////
        /*include '/content/pull_access.php'; */
 

        $array_of_loops['main']= 0;
        $array_of_loops['text_img']= 0;
        $array_of_loops['textarea']= 0;
        $array_of_loops['youtube']= 0;

        $guide_array['guide_videos_array'];



        $connection->close();
    //echo json_encode($guide_array);
    //print_r($guide_array);
       echo json_encode($guide_array, JSON_UNESCAPED_UNICODE);

    }


    else {
        worngInfo();
    }
}


function worngInfo()
{
    echo "<script>function goBack(){window.history.back()}</script>";
    echo "<div onclick='goBack()' id='go_back'>המדריך לא נמצא חזור חזרה</div>";

}

?>