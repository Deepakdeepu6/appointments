<!DOCTYPE html>
<html lang="en">
<head></head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
<?php
include("process.php");

$fid=$_GET['id'];

$sl="delete from doctor where id='$fid'";
$result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
if($result)
{   $inner="update patient_details set doctor_id=0 where doctor_id='$fid'";
  $innerresult=mysqli_query($conn,$inner) or die(mysqli_error($conn));





  ?>
<script>

// swal({
//        title:"Successfully Added",
//        text:"You Have Successfully Added a Doctor To Your Board",
//        icon:"success"}).then(okay=>{
//          if(okay){
//            window.location.href="adminpanel.php?Success=Updated";
//          }

//        });
   swal({
      title:"Deleted",
      text:"Successfully Deleted",
    icon:"success"}).then(okay=>{
     if(okay) 
       { 
         <?php 
         $sl="alter table doctor drop id";
        $result=mysqli_query($conn,$sl);
            if($result)
         {
                   $sl="alter table doctor add id int(255) not null primary key auto_increment";
                   $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
      //  deleting the doctor from appointments table
                    $sb="delete from appointments where doctor_id='$fid'";
                    $resb=mysqli_query($conn,$sb) or die(mysqli_error($conn));
     //  end of deleting the doctor from appointments table
                    $sl="select id as did1,email as demail from doctor";
                    $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
                  while($row=mysqli_fetch_array($result))
               {    $id=$row['did1'];
                    $email=$row['demail'];
        

          //  Updating the id column of doctor in appointment table
                     $sf="update appointments set doctor_id='$id' where doctor_email='$email' ";
                   $re=mysqli_query($conn,$sf) or die(mysqli_error($conn));
          // end of the Query
        // //  Updating the Doctor column in patient_details
                          $sre="update patient_details set doctor_id='$id' where patient_demail='$email'";
                     $resultsre=mysqli_query($conn,$sre) or die(mysqli_error($sre));
                     
           
        // // End Of the Query
  


            }
          }
       
         ?>  
           window.location.href="adminpanel.php?id=display";
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
       window.location.href="adminpanel.php?id=display";
  });
  </script>


<?php

}

?>
</body>
</html>