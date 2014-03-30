<?php
  include '../config/connect.php';
  $nama = $_POST['namapenerbit'];
  $alamat = $_POST['alamatpenerbit'];
  
  $query = "insert into penerbit values(" . "' ','$nama','$alamat'" . ")";
  if($result = mysqli_query($con,$query))
    {
      header("location: ../?page=penerbit");
    }
?>