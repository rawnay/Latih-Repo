<?php
  if(isset($_GET['idpenerbit']))
    {
      $idpenerbit = $_GET['idpenerbit'];
      $query = "select * from penerbit where idpenerbit='$idpenerbit'";
      if($result = mysqli_query($con,$query))
        {
          $r = mysqli_fetch_assoc($result);
          $namapenerbit = $r['namapenerbit'];
          $alamatpenerbit = $r['alamatpenerbit'];
        }
    }
  
?>
<form action="penerbit/edit.proses.php" method="POST" class="form-horizontal" role="form">
  <div class="form-group">
    <div class="col-xs-10 col-sm-10 col-md-12 col-lg-10">
      <input type="text" name="idpenerbit" id="idpenerbit" value="<?php echo $idpenerbit;?>" hidden >
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nama Penerbit</label>
    <div class="col-xs-10 col-sm-10 col-md-12 col-lg-10">
      <input type="text" name="namapenerbit" id="namapenerbit" value="<?php echo $namapenerbit;?>">
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Alamat Penerbit</label>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
      <textarea name="alamatpenerbit" id="alamatpenerbit" cols="20" row="40"><?php echo $alamatpenerbit;?></textarea>
    </div>                                                     
  </div>
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-offset-10 col-md-offset-2 col-md-10 col-lg-offset-2 col-lg-10">
      <input type="submit" name="submit" value="Edit" class="btn btn-success"/>
    </div>
  </div>
</form>