<?php
  include '../config/connect.php';
  $idpenerbit = $_POST['idpenerbit'];
  $namapenerbit = $_POST['namapenerbit'];
  $alamatpenerbit = $_POST['alamatpenerbit'];
  
  $query = "update penerbit set namapenerbit='$namapenerbit', alamatpenerbit='$alamatpenerbit' where idpenerbit='$idpenerbit' LIMIT 1";
  if($hasil = mysqli_query($con,$query))
    {
      echo "haha";
      header("location: ../?page=detailpenerbit&idpenerbit=".$idpenerbit);
    }
?>