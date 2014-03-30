<?php
  if(isset($_GET['idpenerbit']))
    {
       $idpenerbit = $_GET['idpenerbit'];
       $query = "delete from penerbit where idpenerbit='$idpenerbit'";
       if($result = mysqli_query($con,$query))
        {
          header("location: ?page=viewpenerbit");
        }
    }
?>