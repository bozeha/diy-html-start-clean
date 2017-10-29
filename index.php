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
        <h1>עשה זאת בעצמך</h1>
      </div>
    </div>
    <div id="section2">
      <div class="container">
        <div class="row">
          <div id="adds" style="" class="col-md-4 hidden-xs hidden-sm">
            <div class='row'>
              <div class='col-xs-12  an-add' style=''>
                <?php include 'ads/left-big-ad.php';?>
              </div>
            </div>
          </div>
          <?php 
          
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