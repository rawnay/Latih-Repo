<?php
  ob_start();
  $server = "localhost";
  $user = "root";
  $password = "";
  $databasenya = "dbtokobuku";
  
  $con = mysqli_connect($server, $user, $password) or die ("Ooopsss connection dead jooee...");
  mysqli_select_db($con,$databasenya) or die ("We cannot find the database jooee...");
?>