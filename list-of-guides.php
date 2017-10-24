<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style/new_effects.css">
  <?php include 'settings/head.php'; ?>
  

</head>
<body>
    <?php include 'content/top_main.php'; 
    include 'content/guides_pull.php'; 
    ?>

  <div class="container list-of-guides">
  <h1></h1>
      <div class="row">
        <?php 


for($loop2=0;$loop2!=$guides_array['loop'];$loop2++) {
        if ($guides_array['active'][$loop2])// if the guide is activete
        {
        echo "<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 guide-block'><div class='hovereffect'><img src='".$guides_array['guide_images_array_fix'][$loop2][0]."' class='img-responsive'>";
        echo "<div class='overlay'><h2 >".$guides_array['guide_title'][$loop2]."</h2>";
        echo "<a class='info' href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><p>".$guides_array['guide_subtitle'][$loop2]."</p>";
        echo "</a></div></div></div>";
        }
    }


?>





          <?php include 'content/subjects_pull.php'; //to get the meta desc and meta title of current subject
          // add meta tags and title variable  and use with addMetaDescreption()
          foreach ($subjects_array['id'] as $key=>$value) 
          {
            if ($subjects_array['id'][$key]==$current_subject)
            {
              if(isset($subjects_array['title'][$key]))echo "<script>title = '".$subjects_array['title'][$key]."'</script>";
              if(isset($subjects_array['sub_keywords'][$key]))echo "<script>guide_keywords= '".$subjects_array['sub_keywords'][$key]."'</script>";
              else echo "<script>guide_keywords=''</script>";
             if(isset($subjects_array['sub_title'][$key]))echo "<script>disc_string = '".$subjects_array['sub_title'][$key]."'</script>";
             else echo "<script>disc_string=''</script>";

            }
          }
          ?>
      </div>

    </div>
</body>
</html>
<script src='scripts/meta.js'></script>
  <script>
  addMetaDescreption();
  $('h1').text(title);
  </script>
  