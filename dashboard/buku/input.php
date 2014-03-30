<h3>Input Buku</h3>
<table class='table table-hover'> 
    <th>No</th> 
    <th>Nama Penerbit</th>
    <th>Action</th>
    <tbody>
      <?php
        $query = "select * from penerbit";
        $no = 1;
        if($result = mysqli_query($con,$query))
        {
          while ($r = mysqli_fetch_assoc($result))
            {
            
          $idpenerbit = $r['idpenerbit'];
          $namapenerbit = $r['namapenerbit'];
        
            echo
              "<tr>" .
                "<td>$no</td>" .
                "<td>$namapenerbit</td>" .
                "<td><a href='?page=detailbuku&idpenerbit=$idpenerbit' class='btn btn-success'>Input Buku</a></td>" .
              "</tr>";
              $no++;
            }
        }
      ?> 
        
    </tbody> 
</table> 