<?php
$badword1 = $_GET["badword1"];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      span{
        font-weight: 700;
      }
    </style>
  </head>
  <body>
    <h1></h1>
    <p>Lorem ipsum dolor sit amet, <span><?php echo substr_replace($badword1, "***",0,strlen($badword1)); ?> </span>  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <span> <?php echo substr_replace($badword1, "***",0,strlen($badword1)); ?> </span>  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <span> <?php echo substr_replace($badword1, "***",0,strlen($badword1)); ?> </span>  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, <span><?php if(strlen($badword1) > 0){ echo $badword1;} ?> </span>  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <span> <?php if(strlen($badword1) > 0){ echo $badword1;} ?> </span> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <span> <?php if(strlen($badword1) > 0){ echo $badword1;} ?> </span> velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
</html>
