<?php
  if(isset($_GET['page']))
    {
      switch ($_GET['page'])
        {
          case "home":
          include 'component/home.php';
          break;
          
          case "penerbit":
          include 'penerbit/input.php';
          break;
          
          case "inputpenerbit":
          include 'penerbit/input.php';
          break;
          
          case "viewpenerbit":
          include 'penerbit/view.php';
          break;
          
          case "deletepenerbit":
          $_GET['idpenerbit'];
          include 'penerbit/delete.php';
          break;
          
          case "detailpenerbit":
          $_GET['idpenerbit'];
          include 'penerbit/detail.php';
          break;
          
          case "editpenerbit":
          $_GET['idpenerbit'];
          include 'penerbit/edit.php';
          break;
          
          case "inputbuku":
          include 'buku/input.php';
          break;
          
          case "detailbuku":
          $_GET['idpenerbit'];
          include 'buku/detail.php';
          break;
        }
    } 
  else
    {
      include 'component/home.php';
    }
?>