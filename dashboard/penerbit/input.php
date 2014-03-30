<form action="penerbit/input.proses.php" method="POST" class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nama Penerbit</label>
    <div class="col-xs-10 col-sm-10 col-md-12 col-lg-10">
      <input class="controls" type="text" name="namapenerbit" id="namapenerbit">
    </div>                                                     
  </div>
  <div class="form-group">
    <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Alamat Penerbit</label>
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
      <textarea class="controls" name="alamatpenerbit" id="alamatpenerbit" cols="20" row="40"></textarea>
    </div>                                                     
  </div>
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-offset-10 col-md-offset-2 col-md-10 col-lg-offset-2 col-lg-10">
      <input type="submit" name="submit" value="Save" class="btn btn-success"/>
    </div>
  </div>
</form>