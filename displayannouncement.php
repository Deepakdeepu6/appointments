<?php
include("process.php");
$commentNew=$_POST['commentsNewCount'];
          $sl="select * from announcement order by announce_id desc limit $commentNew";
          $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
          // echo "<div class='container insidecontainer'>";
          
          while($row=mysqli_fetch_array($result))

          {
              ?> <div class="container">
              <div class="table-responsive">
              <table class="table table-light table-bordered table table-md">
            <thead>
            <tr><td scope="col"><ul> <li>NUMBER</li></ul></td><td scope="col"><?php echo $row['announce_id'];?> </td></tr>
              <tr><td scope="col"><ul> <li>DAY</li></ul></td><td scope="col"><?php echo $row['day'];?> </td></tr>
              <tr><td scope="col"><ul> <li>DATE</li></ul></td><td scope="col"><?php echo $row['date1'];?> or <?php $on=substr($row['date1'],8,10); echo $on;?></td></tr>
              <tr><td scope="col"><ul> <li>ABOUT</li></ul></td><td scope="col"><?php echo $row['text'];?></td></tr>
             <tr><td colspan='2'><center><button class='btn btn-danger btn-sm' ><a href='deleteannounce.php?id=<?php echo $row['announce_id']; ?>'><i class='fa fa-trash-o'></i>&nbsp;DELETE</button></a></center></td><tr>
              <tr><td><hr></td><td><hr></td></tr>
               </thead>
              </table>
             </div>
             </div>
              <?php
          }
          // echo "</div>";

      ?>