<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 
session_start();
include("process.php");
$did=$_GET['id'];

$pid=$_SESSION['pid'];
$top="select * from appointments where doctor_id='$did'";
$re=mysqli_query($conn,$top) or die(mysqli_error($conn));
$ccount=mysqli_num_rows($re);
if($ccount<5)
{
    $ti="select at from timings WHERE at not in (
        select slot from appointments where doctor_id='$did'
        )  and at not in(
            select slot from appointments where patient_id='$pid'
            ) and at>TIME(Now()) limit 1";
    $tires=mysqli_query($conn,$ti) or die(mysqli_error($conn));
      while($row1=mysqli_fetch_array($tires))
        {   if(!empty($row1['at'])) 
           $slot=$row1['at'];
           else
           $slot=null;
         }
         if($slot==null){
            echo "<script>
             window.location.href='patientpanel.php?error2=Not Available';
            
            </script>";
         }

$sf="select * from appointments where patient_id='$pid' and doctor_id='$did'";
$de=mysqli_query($conn,$sf) or die(mysqli_error($conn));
$count=mysqli_num_rows($de);
  

     if($count>0)
     {  
        echo "<script>window.location.href='patientpanel.php?error=Your Appointment has Already  been Booked'</script>";
        
     }
     else {
        $sl="select doctor.category as cat,doctor.name as dname,patient.name as pname,doctor.number as dnum,patient.number as pnum,doctor.email as demail,patient.email as pemail from doctor,patient where doctor.id='$did' and patient.id='$pid' ";
        $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
           while($rows=mysqli_fetch_array($result))
            {
                $dname=$rows['dname'];
                $pname=$rows['pname'];
                $dnum=$rows['dnum'];
                $pnum=$rows['pnum'];
                $demail=$rows['demail'];
                $pemail=$rows['pemail'];
                $category=$rows['cat'];
                
                 if($pname!='' && $slot!=null){
                 $sq="insert into appointments(doctor_id,patient_id,doctor_name,patient_name,doctor_email,patient_email,appointments_category,doctor_number,patient_number,slot) values('$did','$pid','$dname','$pname','$demail','$pemail','$category','$dnum','$pnum','$slot')";
                $resu23=mysqli_query($conn,$sq) or die(mysqli_error($conn));
                if($resu23)
                {   
                  //   ADD Into Patient Details
                  $time= date('Y-m-d');
                  $sd1="insert into patient_details(patient_id,doctor_id,category,time,patient_demail) values('$pid','$did','$category','$time','$demail')";
                  $result1=mysqli_query($conn,$sd1) or die(mysqli_error($conn));

                 if($result1)
                    {   


                    ?>
                      <script>
         
                          $(document).ready(function(){
                           swal({
                        text:"Successfully Booked,Your Appointment  At-<?php echo $slot ?>-AM On-<?php echo date('Y-m-d');?> Under <?php $sr=strlen($category); echo strtoupper(substr($category,0,1)).substr($category,1,$sr);?> Department",
                        title:"Booking Details",
                        icon:"success"}).then(okay=>{
                           if(okay)
                             window.location.href="patientpanel.php?id=search";
                                   
        
                                });
                            });
        
                        
        
        
                   </script>
                    <?php
                          
                  }
                  
               }
                  
               }
            }
    
}
}
else{
    echo "<script>alert('Sorry Patient Seats Are Filled');</script>";
}
// else

//     echo "Error in the Line 5";


?>

