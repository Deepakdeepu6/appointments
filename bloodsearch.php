<?php
include("process.php");
 $search=$_POST['search'];
        $sl="select * from patient where blood='$search'";
        $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
        echo "<div class='table-responsive mt-4'>";
         echo "<table class='table table-striped table-bordered table table-sm'>";
         echo "<tr><th>Id</th><th>Name</th><th>Contact Number</th><th>Email </th><th>Address</th><th >Blood Type</th>";
        while($row=mysqli_fetch_array($result))
        {
          ?>
           <tr > <td><?php echo $row['id']?></td><td><?php echo $row['name']?></td><td><?php echo $row['number']?></td><td><?php echo $row['email']?></td><td><?php echo $row['address']?></td><td><?php echo $row['blood']?></td>
           
           </tr>

          <?php
        }
        echo "</table>";
      echo "</div>";

      ?>