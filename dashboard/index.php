<?php
   include 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="tricko" content="">
    <title>Administrator Dashboard</title>
    <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="../css/custom.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
      <?php
        require 'component/header.php';
      ?>
    </header>
    <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
             <?php
               require 'component/sidebar.php';
             ?>
          </div>
         <div class="row-fluid">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
             <?php
               require 'content.php';
             ?>
          </div>
         </div>
        </div>
    </div>  
    
  </body>
</html>
