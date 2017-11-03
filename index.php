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
      </div>
    </div>
    <div id="section2">
      <div class="container">
        <div class="row">
          
          <?php 


          include 'content/guides_pull.php';


          for($loop2=0;$loop2!=$guides_array['loop'];$loop2++) {
     
            echo "<div data-guide-id='".$guides_array['id'][$loop2]."' class='col-md-3 align-items-stretch d-flex'> <div class='card col-xs-12'><div class='card-img-top' style='background-image:url(".$guides_array['guide_images_array_fix'][$loop2][0].")'></div> <div class='card-block'><h4 class='card-title'>".$guides_array['guide_title'][$loop2]."</h3> <p class='card-text'>".$guides_array['guide_subtitle'][$loop2]."<a class='glyphicon glyphicon-chevron-left btn btn-outline-success' href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>למדריך</a></p></div> </div></div>";

        }
    
?> 
        </div>

      </div>

    </div>
    </div>

</body>

</html>