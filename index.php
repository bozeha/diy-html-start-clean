<html>

<title>אתר מדריכים</title>

<head>
  <?php include 'settings/head.php'; ?>
   <meta name="keywords" content="אתר מדריכים, מדריכים, קודי, מדריך לקודי, kodi, עשה זאת בעצמך,diy">
    <link rel="stylesheet" type="text/css" href="style/new_effects2.css">

</head>

<body>

  <?php
//include 'content/top_main.php';
?>

    </div>
    <div id="section2">
      <div class="container">
        <div class="row" >
          <div id="adds" style="" class="col-md-4 hidden-xs hidden-sm">
          <!--  <div class='row'>
              <div class='col-xs-12 an-add' style='background-color:blue;height:200px'>
              </div>
            </div>-->
            <div class='row'>
              <div class='col-xs-12  an-add' style=''>
              <?php 
                      include 'ads/left-big-ad.php';
              ?>

              </div>
            </div>
  <!--          <div class='row'>
              <div class='col-xs-12 an-add' style='background-color:blue;height:200px'>

              </div>
            </div>-->
          </div>
          <?php include 'content/subjects_pull.php'; // get ths subjects data and buiding subjects blocks
                for($loop2=0;$loop2!=$loop;$loop2++) {
                echo "<figure class='snip1570 col-lg-3 col-md-4 col-sm-6 col-xs-12'><img src='".$subjects_array['img'][$loop2]."'  alt='sample88' /><i class='ion-android-arrow-forward'></i>";
                echo "<a href='list-of-guides.php?subject=".$subjects_array['id'][$loop2]."'><h3>".$subjects_array['title'][$loop2]."</h3><h4>".$subjects_array['sub_title'][$loop2]."</h4></a>";
                echo "</figure>";
                 }
            ?>
        </div>

      </div>
      <div class="row" style="background:#29d846">
        <div class="container">
          <div class="col-md-3">
            <p class="text-center"><a href="#" style="color:#fff">Contact Us</a></p>
            <p class="text-center"><a href="#" style="color:#fff"> Partners</a></p>
            <p class="text-center"><a href="#" style="color:#fff">Seaworld</a></p>
          </div>
          <div class="col-md-3">
            <p class="text-center"><a href="#" style="color:#fff">About Us</a></p>
            <p class="text-center"><a href="#" style="color:#fff">Universal</a></p>
            <p class="text-center"><a href="#" style="color:#fff">American Airlines</a></p>
          </div>
          <div class="col-md-3">
            <p class="text-center"><a href="#" style="color:#fff">Privacy Policy</a></p>
            <p class="text-center"><a href="#" style="color:#fff">Disney</a></p>
            <p class="text-center"><a href="#" style="color:#fff">British Airways</a></p>
          </div>
          <div class="col-md-3">
            <p class="text-center"><a href="#" style="color:#fff">Etihad</a></p>
            <p class="text-center"><a href="#" style="color:#fff">Virgin Atlantic</a></p>
            <p class="text-center"><a href="#" style="color:#fff">Floritix</a></p>
          </div>
        </div>
        <div class="row">
          <p class="text-center" style="color:#fff;margin-top:20px">&copy Orlando Guests 2015 | Contact us for advertising opportunities</p>
        </div>
      </div>
    </div>
    </div>
    </div>

</body>

</html>