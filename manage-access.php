<div class="container">
<?php
if(isset($_GET['msg'])) {
    $message = $_GET['msg'];

    echo "<h3>".$message."</h3>";
}
include 'settings/pull_access.php';


?>

  <link href="style/style_control.css" rel="stylesheet" />
  <script src='scripts/remove_access.js'></script>


  <button class='btn btn-danger pull-left red-button-remove' onclick=elements_to_remove('accessories')>מחק את המוצרים המסומנים</button>

  </div>