<h3>Data Penerbit</h3>
  <table class='table table-hover'> 
    <th>No</th> 
    <th>Nama</th>
    <th>Alamat</th>
    <th>Action</th> 
    <tbody>
<?php 
  
  $query = "select * from penerbit order by idpenerbit ASC";
  $no = 1;
  if($hasil = mysqli_query($con,$query))
  {       
    while($r = mysqli_fetch_assoc($hasil))
    {
    echo
    "<tr>" .
      "<td>$no</td>" .
      "<td>$r[namapenerbit]</td>" .
      "<td>$r[alamatpenerbit]</td>" .
      "<td><a href='?page=detailpenerbit&idpenerbit=$r[idpenerbit]' class='btn btn-primary'><span class='glyphicon glyphicon-info-sign'></span>&nbsp;Detail</a> &nbsp; <a href='?page=deletepenerbit&idpenerbit=$r[idpenerbit]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span>&nbsp;Delete</a></td>" .
    "</tr>";
    $no++;
    }       
  }                
?>
    </tbody>
  </table>
<div class='container'>
  <div class='col-xs-offset-6 col-xs-2 col-md-offset-6 col-md-2 col-lg-offset-6 col-lg-2 col-sm-offset-6 col-sm-2'><a href='?page=inputpenerbit' class='btn btn-success'><span class="glyphicon glyphicon-pencil"></span>&nbsp;Input Penerbit</a></div>
</div>
