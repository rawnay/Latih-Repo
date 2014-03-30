<?php
  if(isset($_GET['idpenerbit']))
    {
      $idpenerbit = $_GET['idpenerbit'];
      $query = "select * from penerbit where idpenerbit='$idpenerbit'";
      if($hasil = mysqli_query($con,$query))
        {
          $r = mysqli_fetch_assoc($hasil);
          $idpenerbitnya = $r['idpenerbit'];
          $namapenerbitnya = $r['namapenerbit'];
        }
    }                                           
?>  

<h3>Data Buku</h3>
<hr>
<form action="buku/input.proses.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nama Penerbit</label>
    <div class="col-xs-10 col-sm-10 col-md-12 col-lg-10">
      <p class="form-control-static"><?php echo $namapenerbitnya?></p>
      <input type="hidden" value="<?php echo $idpenerbitnya;?>" name="idpenerbit">
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">No. ISBN</label>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
      <input type="text" name="noisbn" id="noisbn" maxlength="10">
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Judul Buku</label>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
      <input type="text" name="judul" id="judul" class="controls">
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nomor Edisi</label>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
      <input type="text" name="noedisi" id="noedisi" maxlength="10">
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Copyright</label>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
      <input type="text" name="copyright" id="copyright">
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Deskripsi</label>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
      <textarea class="controls" name="deskripsi" id="deskripsi" cols="20" row="40"></textarea>
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Image</label>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
      <input type="file" name="pict" id="image" class="controls">
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Harga</label>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
      <span>Rp: </span><input type="text" name="harga" id="harga" maxlength="10">
    </div>                                                     
  </div>
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-offset-10 col-md-offset-2 col-md-10 col-lg-offset-2 col-lg-10">
      <input type="submit" name="submit" value="Save" class="btn btn-success"/>
    </div>
  </div>
</form>
