<?php
  include '../config/connect.php';
  include '../config/fungsi_thumb.php';
  
  $idpenerbit = $_POST['idpenerbit'];
  $noisbn = $_POST['noisbn'];
  $judul = $_POST['judul'];
  $noedisi = $_POST['noedisi'];
  $copyright = $_POST['copyright'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];
  $lokasi_file = $_FILES['pict']['tmp_name'];
  $tipe_file = $_FILES['pict']['type'];
  $nama_file = $_FILES['pict']['name'];
  $rands = rand(000000,999999);
  $nama_file_unik = $rands . $nama_file;
  
  if(!empty($lokasi_file))
    {
      $folder = "../img/img_ori/";
      thumb($nama_file_unik,$folder,$tipe_file);
      $query = "insert into buku values('$noisbn','$judul','$noedisi','$copyright','$deskripsi','$idpenerbit','$nama_file_unik','$harga')";
		mysqli_query($con,$query) or die(mysql_error());
	   
      
    }
?>