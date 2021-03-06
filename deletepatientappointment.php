<!DOCTYPE html>
<html lang="en">
<head></head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
<?php
include("process.php");

$fid=$_GET['id'];

$sl="select *  from appointments where a_id='$fid'";
$result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
while($row=mysqli_fetch_array($result))
{  $did=$row['doctor_id'];
    $pid=$row['patient_id'];
    $date=substr($row['time'],0,10);
    
    $sd="delete from appointments where a_id='$fid'";
    $rt=mysqli_query($conn,$sd) or die(mysqli_error($conn));
    if($rt)
    {
        $sd="delete from patient_details where doctor_id='$did' and patient_id='$pid' and time='$date'";
    $rt=mysqli_query($conn,$sd) or die(mysqli_error($conn));
            ?>
           <script>

              swal({
                   title:"Deleted",
                 text:"Successfully Cancelled The Appointment",
                 icon:"success"}).then(okay=>{
                    if(okay) 
                   {  
                         window.location.href="patientpanel.php?id=delete";
                     }
                 });
               </script>
         <?php
    }
    else
      {   
     
    ?>
            <script>
             swal({
              title:"Delete",
               text:"Not Deleted",
              icon:"warning"
               }).then(okay=>{
                   if(okay)
                 window.location.href="patientpanel.php?id=delete";
                    });
               </script>
          <?php
      }
        }

      ?>
</body>
</html>