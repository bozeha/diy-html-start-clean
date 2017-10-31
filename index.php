<html>

<title>אתר מדריכים</title>

<head>
  <?php include 'settings/head.php'; ?>
    <meta name="keywords" content="אתר מדריכים, מדריכים, קודי, מדריך לקודי, kodi, עשה זאת בעצמך,diy">
    <link rel="stylesheet" type="text/css" href="style/new_effects2.css">

</head>

<body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<div id="main-index-page">
  <?php include 'content/top_main.php';?>
    <div class="container">
      <div class="row">
        <!-- <h1>עשה זאת בעצמך</h1> -->
      </div>
    </div>
    <div id="section2">
      <div class="container">
        <div class="row">
          
          <?php 


          include 'content/guides_pull.php';


          for($loop2=0;$loop2!=$guides_array['loop'];$loop2++) {
            
            //echo "<div data-guide-selected='false' data-guide-id='".$guides_array['id'][$loop2]."' class='col-xs-6 selected-guide'><a href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><button class='btn edit-gudie-btn'>לצפיה במדריך</button></a><img src='".$guides_array['guide_images_array_fix'][$loop2][0]."' class='img-responsive  pull-left' style='max-width:177px;height:96px'>";
            //echo "<h5 style='font-weight:900;font-family:open'><strong></strong>".$guides_array['guide_title'][$loop2]."</h5>";
            //echo $guides_array['guide_images_array_fix'][$loop2][0];
             //$temp_fix = str_replace ('/','&#47;',$guides_array['guide_images_array_fix'][$loop2][0]);
            //echo $temp_fix;
            //echo "<div data-guide-id='".$guides_array['id'][$loop2]."' class='col-md-3'> <h3 class='text-center mb-5'>".$guides_array['guide_title'][$loop2]."</h3> <div class='card card-01 height-fix'> <div class='card-img-top d-flex' style='background-image:url(".$guides_array['guide_images_array_fix'][$loop2][0].")'><div class='cont-button align-self-end p-2 bd-highlight'>  <p class='card-text'><a href='#' class='fa fa-bookmark-o'></a><a class='glyphicon glyphicon-chevron-left btn btn-outline-success' href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>למדריך</a></p> </div> </div> </div> </div>";
            echo "<div data-guide-id='".$guides_array['id'][$loop2]."' class='card col-md-3'> <div class='card-img-top' style='background-image:url(".$guides_array['guide_images_array_fix'][$loop2][0].")'></div> <div class='card-block'><h4 class='card-title'>".$guides_array['guide_title'][$loop2]."</h3> <p class='card-text'>".$guides_array['guide_subtitle'][$loop2]."<a class='glyphicon glyphicon-chevron-left btn btn-outline-success' href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>למדריך</a></p></div> </div>";
            
            //echo "<p  style='background:#eee;margin-top:0px;padding:10px'>".$guides_array['guide_subtitle'][$loop2]."</p>";

           // echo "</div>";
        }
      
          // include 'content/subjects_pull.php'; // get ths subjects data and buiding subjects blocks
          // for($loop2=0;$loop2!=$loop;$loop2++) {
          //     echo "<figure class='snip1570 col-lg-3 col-md-4 col-sm-6 col-xs-12'><img src='".$subjects_array['img'][$loop2]."'  alt='sample88' /><i class='ion-android-arrow-forward'></i>";
          //     echo "<a href='list-of-guides.php?subject=".$subjects_array['id'][$loop2]."'><h3>".$subjects_array['title'][$loop2]."</h3><h4>".$subjects_array['sub_title'][$loop2]."</h4></a>";
          //     echo "</figure>";
          // }
?> 
        </div>

      </div>

    </div>
    </div>

</body>

</html>