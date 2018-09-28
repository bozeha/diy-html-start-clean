<html>

<title>אתר מדריכים</title>

<head>
  <?php include 'settings/head.php'; ?>
    <meta name="keywords" content="אתר מדריכים, מדריכים, קודי, מדריך לקודי, kodi, עשה זאת בעצמך,diy">
    <link rel="stylesheet" type="text/css" href="style/new_effects2.css">

</head>

<body>
<div id="main-index-page">
  <?php include 'content/top_main.php';?>
    <div class="container">
      <div class="row">
      </div>
    </div>
    <div id="section2">
      <div class="container">
          <div class="row">
              <div id="heading_1-0" class="comp heading heading--constrained" style="
    margin: 0 auto;
">
                  <h1 class="heading__title">DIY עשה זאת בעצמך</h1>
                  <h2 class="heading__subtitle">מדריכים בכל תחומי החיים, כיצד לעשות בעצמך ולחסוך הרבה כסף</h2>
              </div>
          </div>
        <div class="row">
          
          <?php 


          include 'content/guides_pull.php';


          for($loop2=0;$loop2!=$guides_array['loop'];$loop2++) {
            if ($guides_array['active'][$loop2]==1)
            {
             // echo "<script>console.log('active ".$guides_array['guide_title'][$loop2]."')</script>";
              echo "<div data-guide-id='".$guides_array['id'][$loop2]."' class='col-md-3 align-items-stretch d-flex'> <div class='card col-xs-12'><div class='card-img-top' style='background-image:url(".$guides_array['guide_images_array_fix'][$loop2][0].")'></div> <div class='card-block'><h4 class='card-title'>".$guides_array['guide_title'][$loop2]."</h3> <p class='card-text'>".$guides_array['guide_subtitle'][$loop2]."<a class='glyphicon glyphicon-chevron-left btn btn-outline-success' href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>למדריך</a></p></div> </div></div>";
            
            }

        }
    
?> 
        </div>

      </div>

    </div>
    </div>

</body>

</html>