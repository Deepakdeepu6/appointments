<!DOCTYPE html>
<html lang="en">
<head></head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
<?php
include("process.php");

$fid=$_GET['id'];

$sl="delete from patient where id='$fid'";
$result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
if($result)
{  




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
        
           window.location.href="adminpanel.php?id=patient";
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
       window.location.href="adminpanel.php?id=patient";
  });
  </script>


<?php

}

?>
</body>
</html>