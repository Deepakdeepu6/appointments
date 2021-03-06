<?php
session_start();
include("process.php");
if(!isset($_SESSION['did']))
{
    header("location:index.html");
    exit;
}
else if(!isset($_SERVER['HTTP_REFERER']))
{
    header("location:index.html");
    exit;
}
else
{
    $did=$_SESSION['did'];
}
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Doctor Login</title>
     </head>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="icon" href="doctorlogo.png">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .navbar-custom .navbar-nav>li>a
{
  
    font-size:20px;
    
    margin-left:80px;
    
   font-style:verdana;
   
    

}
.navbar-custom .navbar-nav>li>a:hover{
    background-color:black;
    color:white;
}
#first form{
    font-size:20px;
    font-weight:200;
    letter-spacing:10px;
    font-style:verdana;
    font-family:sans-serif;
}
@media only screen  and (max-width:700px)
{
    #first form{
        font-size:14px;
        width:100%;
        font-weight:1;
       
        max-width:30px;
        letter-spacing:2px;
    }
}
@media only screen and (max-width:700px)
{
  #third .table-responsive tr,td,th{
    font-size:10px;

   
  }
}
#second table{
    color:white;
}
#second input[type=text]
{
    width:200px;
    height:100px;
    font-size:30px;
    padding-left:40px;
}
</style>

<body>
<nav class=" navbar navbar-expand-md  navbar navbar-dark navbar-custom bg-primary justify-content-center">
<p class="navbar-brand" style="letter-spacing:10px;color:red;">APPOINT<span style="color:lime">MENT</span></p>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav nav nav-pills nav-fill ">
			 <li class="nav-item active">
			   <a class="nav-link" href="#first" data-toggle="tab"><i class="fa fa-user">&nbsp;Profile</i></a></li>
			   <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#second"><i class="fa fa-info-circle">&nbsp;Appointment's</i></a></li>
			   <li class="nav-item active"><a class="nav-link"  href="logout.php"><i class="fa fa-sign-out">&nbsp;Logout</i></a></li>
			   </ul>
         </div>
              </nav>
              
    <div class="tab-content">
     <!-- Start of Profile View -->
  <div class="container tab-pane <?php 
if(!empty($_GET['id']))
$_GET['id']==='write'?'fade':'active';
else
echo "active";
  
  ?>"  id="first">
   <div class="row">
      <div class="col-12">
        <?php
           $sl="select * from doctor where id='$did'";
           $result=mysqli_query($conn,$sl);
           while($row=mysqli_fetch_array($result))
           {
               ?>
                <fieldset style="border:2px solid black;box-shadow:0px 0px 8px 2px grey;margin-top:10px;"><legend class="text-center bg-secondary" style="color:white;letter-spacing:5px;" >Your Profile</legend>
                <form class="ml-5">
                 Name:&nbsp;<?php echo $row['name'];?></br></br>
                 Address:&nbsp;<address><?php echo $row['address'];?></address></br></br>
                 Email:&nbsp;</br><span ><?php echo $row['email'];?></span></br></br>
                 Contact Number:&nbsp;<?php echo $row['number'];?></br></br>
                 Department:&nbsp;<?php echo $row['category'];?></br></br>


               </form>


             </fieldset>
                 

               <?php
           }

        ?>

      </div>
   </div>

   </div>
   <!-- End Of Profile View -->

     <!-- Start of Doctor Appointment -->
    <div class="container-fluid tab-pane <?php  if(isset($_GET['id']))
    echo $_GET['id']==='write'?'active':'fade';
    else
    echo 'fade';?> mt-5" id="second">
    <?php
      $sl="select * from appointments where doctor_id='$did'";
      $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
      if(mysqli_num_rows($result)>0)
      {
      
      echo "<div class='table-responsive bg-primary'>";
      echo "<form action='' method='post'>";
      echo "<table class='table table-striped table-bordered'>";
      echo "<tr><th>Appointment-Number</th><th>Category</th><th>Patient:Name</th><th>Dr:Name</th><th>Appointment Time</th><th>Dr:Email</th><th><i class='fa fa-envelope-o'>&nbsp;Description</i></th></tr>";
      while($row=mysqli_fetch_array($result))
      {
          ?>
          
          <tr><td><?php echo $row['a_id']?></td><td><?php echo $row['appointments_category']?></td><td><?php echo $row['patient_name']?></td><td><?php echo $row['doctor_name']?></td><td><?php echo $row['slot']?></td><td><?php echo $row['doctor_email']?></td><td><center><textarea name="des_<?php echo $row['a_id'];?>"><?php  $des=$row['description'];if(empty($des )) echo "--NA--"; else echo $des;?></textarea></center></td>
          <td><button class='btn btn-success btn-sm' name="submit2"><i class='fa fa-plus'>ADD</i></button></td>
          </tr>


          <?php


      }
      echo "</table>";
      echo "</form>";
      echo "</div>";
    }
    else
    { echo "<div class='container text-center'>
     <h1>No Appointments List</h1>
 
     </div>";}
   ?>
    <?php
      if(isset($_POST['submit2']))
      {
          $sl="select a_id from appointments";
          $res=mysqli_query($conn,$sl) or die(mysqli_error($conn));
          while($row=mysqli_fetch_array($res))
          {
              $i=1;
              while($i<=$row['a_id'])
              {   
                  if(!empty($_POST["des_{$i}"]))
                  { 
                    $des=$_POST["des_{$i}"];
                  $des=mysqli_real_escape_string($conn,$des);
                     $update="update appointments set description='$des' where a_id='$i'";
                     $result234=mysqli_query($conn,$update) or die(mysqli_error($conn));
                     if($result234)
                     {
                         $fetch="select * from appointments where a_id='$i'";
                         $final=mysqli_query($conn,$fetch) or die(mysqli_error($conn));
                         while($row234=mysqli_fetch_array($final))
                         {   $dtime=substr($row234['time'],0,11);
                             $update12="update patient_details set description1='$des' where time='$dtime' and patient_id='".$row234['patient_id']."' and doctor_id='".$row234['doctor_id']."' and category='".$row234['appointments_category']."'";
                             $final12=mysqli_query($conn,$update12) or die(mysqli_error($conn));
                                   if($final12)
                                   {
                                       header("location:doctorpanel.php?id=write");
                                   }
                         }
                     }
                    }



                   $i++;
              }
          }
          




      }
    ?>
        </div>
    
    
     <!-- End of Tab Content -->
  </div> 
</body>
</html>