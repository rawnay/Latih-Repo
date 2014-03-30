<?php
   if(isset($_GET['idpenerbit']))
    {
      $idpenerbit = $_GET['idpenerbit'];
      $query = "select * from penerbit where idpenerbit='$idpenerbit'";
      if($hasil = mysqli_query($con,$query))
        {
          $r = mysqli_fetch_assoc($hasil);
          $ids = $r['idpenerbit'];
          $namapenerbit = $r['namapenerbit'];
          $alamatpenerbit = $r['alamatpenerbit'];
        }
    }
?>
<h3>Detail Penerbit</h3>
<table class="table table-hover">
    <tr>
      <td><h5>Nama<h5></td>
      <td><h5>: <?php echo $namapenerbit;?></h5></td>
    </tr>
    <tr>
      <td><h5>Alamat</h5></td>
      <td><h5>: <?php echo $alamatpenerbit;?></h5></td>
    </tr>
    <tr>
      <td><h5>Action</h5></td>
      <td><a href="?page=editpenerbit&idpenerbit=<?php echo $ids?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit</a>
      <a href="?page=deletepenerbit&idpenerbit=<?php echo $ids?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a>
      </td>
    </tr>
</table>