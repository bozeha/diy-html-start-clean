<?php
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

function startPull($current_guide)
{


include 'settings/connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);
$guide_array=[];
$temp_temp = [];
mysqli_query($connection, "set names 'utf8'");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$current_guide = mysqli_real_escape_string($connection, $current_guide);
$sql = "SELECT id, subject, user, guide_key, guide_title, guide_title_en,guide_subtitle,keywords,redirect,redirect_url,guide_accessories_array,guide_text_array ,guide_images_array, guide_videos_array, type_of_steps_array, guide_textarea_array FROM guides WHERE id = ".$current_guide;
$result = $connection->query($sql);
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
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
        $guide_array['guide_accessories_array'] = str_replace(",","\",\"",$guide_array['guide_accessories_array']);
        $string2json =  json_decode($guide_array['guide_accessories_array'],TRUE);
        $guide_array['guide_accessories_array']=$string2json;
        
        $guide_array['guide_text_array'] = $row["guide_text_array"];
        $string2json =  json_decode($guide_array['guide_text_array'],TRUE);
        $guide_array['guide_text_array']=$string2json;
        
        $guide_array['guide_images_array'] = $row["guide_images_array"];
        $string2json =  json_decode($guide_array['guide_images_array'],TRUE);
        $guide_array['guide_images_array']=$string2json;
        
        $guide_array['guide_videos_array'] = $row["guide_videos_array"];
        $string2json =  json_decode($guide_array['guide_videos_array'],TRUE);
        $guide_array['guide_videos_array']=$string2json;
        
        
        
        
        $guide_array['guide_textarea_array'] = $row["guide_textarea_array"];
        $string2json =  base64_decode($guide_array['guide_textarea_array']);
        $string2json2 = json_decode($string2json,TRUE);
        $guide_array['guide_textarea_array']=$string2json2;
       
        
        
        $guide_array['type_of_steps_array'] = $row["type_of_steps_array"];
        $string2json =  json_decode($guide_array['type_of_steps_array'],TRUE);
        $guide_array['type_of_steps_array']=$string2json;
        
    }

 if($guide_array['guide_redirect'])
    {
        if($guide_array['guide_redirect_url'])
            {
                echo "<script>var temp_link = '".$guide_array['guide_redirect_url']."'</script>";
                echo "<script>  window.location.assign(temp_link);</script>";
            }
    } 

echo "<script>var guide_keywords= '".$guide_array['guide_keywords']."'</script>";//use the keywords in the meta.js functions



//redirect 
   
///




// start pull accessores 
//$access_loop =0;
$sql = "SELECT id,access_name ,access_disc ,access_img FROM  accessories ";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo $row["id"]."--";
        $guide_array_access['id'][$row["id"]] = $row["id"];
        $guide_array_access['access_name'][$row["id"]] = $row["access_name"];
        $guide_array_access['access_disc'][$row["id"]] = $row["access_disc"];
        $guide_array_access['access_img'][$row["id"]] = $row["access_img"];
        //$access_loop++;
    }
}





echo "<div class='row' ><div class='col-12 top_main_guide'>";
echo "<div class='col-12 top_main_guide_img' style='background-image:url(".$guide_array['guide_images_array'][0].")'>";
echo "</div><div class='col-12'>";
echo "<h1>".$guide_array['guide_title']."</h1>";
echo "</div><div class='col-12'>";
echo "<h2>".$guide_array['guide_subtitle']."</h2>";
echo "</div>";
echo "</div></div>";


echo "<div class'row pull_access_div' style='display:inline-block;width:100%' >";



//////////////////

//$access_loop--;
if($guide_array['guide_accessories_array'][0][0]!="")
{
echo "<h3>רשימת המוצרים שצריך עבור מדריך זה </h3>";
    echo "<div class='access_div row'>";
    foreach($guide_array['guide_accessories_array'][0] as $key=>$value)
    {

            $current_access = $guide_array['guide_accessories_array'][0][$key];
        echo "<div class='pull-right col-6 col-md-2' ><span  class='pull-right col-12' data-access-id='".$guide_array_access['id'][$current_access]."'>";
        echo $guide_array_access['access_name'][$current_access]."</span>";
        echo "<img data-toggle='tooltip' data-placement='bottom' title='".$guide_array_access['access_disc'][$current_access]."' width='100px' height='100px' src='".$guide_array_access['access_img'][$current_access]."'/></div>";
        
    }
    echo "</div>";
}


/////////////////
/*include '/content/pull_access.php'; */
echo "</div>";



$array_of_loops['main']= 0;
$array_of_loops['text_img']= 0;
$array_of_loops['textarea']= 0;
$array_of_loops['youtube']= 0;
foreach($guide_array['type_of_steps_array'] as $val)
{
    if($guide_array['type_of_steps_array'][$array_of_loops['main']]=="text_and_img")
    {
        echo "<div class='row guide-row' ><span class='step_number'>".($array_of_loops['main']+1)."<span id='triangle-right'></span></span><div class='guide-box col-12 col-md-6 col-centered'>";
        echo "";
   /*     echo "<script>console.log('pp".$guide_array['guide_images_array'][$array_of_loops['text_img']+1]."pp')</script>";*/
        
        if(isset($guide_array['guide_images_array'][$array_of_loops['text_img']+1]))
        {
            echo "<div class='col-md-6 col-6 step-img-div'><img  onclick='fullSizeImage(this)' src='".$guide_array['guide_images_array'][$array_of_loops['text_img']+1]."'/></div>";
            echo "<div class='col-md-6 col-6 step-text-div'><span>".$guide_array['guide_text_array'][$array_of_loops['text_img']]."</span></div>";
        }
        else echo "<div class='col-md-12'><span>".$guide_array['guide_text_array'][$array_of_loops['text_img']]."</span></div>";
        
        echo "</div>";
        echo "</div>";
        $array_of_loops['text_img']++;
    }
    
    else if($guide_array['type_of_steps_array'][$array_of_loops['main']]=="textarea")
    {
        echo "<div class='row guide-row' ><span class='step_number'>".($array_of_loops['main']+1)."<span id='triangle-right'></span></span><div class='guide-box col-12 col-md-6 col-centered'>";
        echo "";      
        echo "<div class='col-md-12'>".$guide_array['guide_textarea_array'][$array_of_loops['textarea']]."</div>";
        echo "</div>";
        echo "</div>";
        $array_of_loops['textarea']++;
    }
    else if($guide_array['type_of_steps_array'][$array_of_loops['main']]=="youtube")
    {
        echo "<div class='row guide-row' ><span class='step_number'>".($array_of_loops['main']+1)."<span id='triangle-right'></span></span><div class='guide-box col-12 col-md-6 col-centered'>";
        echo "";
        echo "<div class='col-md-12'><iframe width='100%' height='500px' src='https://www.youtube.com/embed/".$guide_array['guide_videos_array'][$array_of_loops['youtube']]."' frameborder='0' allowfullscreen></iframe></div>";
        echo "</div>";
        echo "</div>";
        $array_of_loops['youtube']++;
    }
    $array_of_loops['main']++;
}

$guide_array['guide_videos_array'];



$connection->close();
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