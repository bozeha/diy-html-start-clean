
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        </style>
</head>
<body>
<?php
if (!isset($_SESSION)){
    session_start();  
    
  }

  if(!isset($_SESSION['aaaaa']))
  {
    echo "<h1>new set</h1>";
    $_SESSION['aaaaa']=  '11111';
}
else {
    echo "<h1>already set</h1>";
    
  }

?>
    
</body>
</html>