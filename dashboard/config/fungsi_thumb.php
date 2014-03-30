<?php
  function thumb($fupload_name,$direktori,$type)
    {
      // file gambar yang akan diupload
      $file_upload = $direktori . $fupload_name;
      $direktori = "../img/img_thumb/";
     
       // simpan gambar dalam ukuran yang sebenarnya
      $nama_gbr_asli = $_FILES['pict']['tmp_name'];
      move_uploaded_file($nama_gbr_asli, $file_upload);
      
      // cek ekstensi file
      if ($type=="image/png") {
      	  $typeMime = "png";
      } 
          else if($type=="image/jpeg" || $type=="image/jpg"){
              $typeMime = "jpg";
            }
                else if($type=="image/gif") {
                    $typeMime = "gif";
                  }  else {
                      $typeMime = false;
                  }
      
      // Create Thumb Berdasarkan Filter Type filenya Yo
      if ($typeMime == "jpeg" || $typeMime=="jpg") {
		  $gbr_asli = imagecreatefromjpeg($file_upload);
         $handle = 1; // handle untuk jpeg
      } else if($typeMime == "png") {
         $gbr_asli = imagecreatefrompng($file_upload);
         $handle = 2; // handle untuk png
      } else if($typeMime == "gif") {
        $gbr_asli = imagecreatefromgif($file_upload);
        $handle = 3; // handle untuk gif
      }
      $lebar    = imageSX($gbr_asli);  
      $tinggi   = imageSY($gbr_asli);
      
      // simpan dalam ukurran yang diinginkan(thumbnailnya)
      $tum_lebar = 200; // ukuran 200pixel
      $tum_tinggi = 200;
      //$tum_tinggi = ($tum_lebar/$lebar) * $tinggi;
      
      
      //fungsi unttuk merubah ukuran gambar (resample)
      $gbr_thumb = imagecreatetruecolor($tum_lebar,$tum_tinggi);
      imagecopyresampled($gbr_thumb, $gbr_asli, 0, 0, 0, 0, $tum_lebar, $tum_tinggi, $lebar, $tinggi);
      
      if ($handle==1) {
      // simpan gambar versi thumbnailnya
      imagejpeg($gbr_thumb,$direktori . "thumb_" . $fupload_name);
      } 
      else if($handle==2){
      imagepng($gbr_thumb,$direktori . "thumb_" . $fupload_name);
      }
      else if($handle==3) {
      imagegif($gbr_thumb,$direktori . "thumb_" . $fupload_name);
      } 
      else {
        echo "sorry :p";
      }        

      // hapus objek gambar yang ada dimemori
      imagedestroy($gbr_asli);
      imagedestroy($gbr_thumb);	
    }
    

      
?>