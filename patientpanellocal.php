<?php
session_start();

include("process.php");
  if(!isset($_SESSION['pid'])){
   
    header('location:index.html');
     exit;
  }
   else if(!isset($_SERVER['HTTP_REFERER'])){
   
    header('location:index.html');
    exit;
 }
 else{
$id=$_SESSION['pid'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Patient Login Page</title>
</head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="icon" href="patientfavicon.jpg">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
.navbar-custom .navbar-nav>li>a
{
  
    font-size:20px;
    
    margin-left:40px;
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
        font-size:12px;
        width:100%;
        font-weight:1;
       
        max-width:30px;
        letter-spacing:2px;
    }
    #third .table-responsive tr,td,th{
    font-size:10px;
   
  }
  #second #display .col-12{
    font-size:16px;
        
       
        
        letter-spacing:2px;
  }
}
 #second #display{
 box-shadow:3px 3px 3px 3px grey;

} 
#third table tr,#third table td,#third table th{
 color:#ffffff;
}
#fourth table tr,#third table td,#third table th{
 color:#ffffff;
}
#fifth th{
  color:#423B3B  ;
  background-color:#FBDADA;
 }
 #fifth th,#fifth td{
   padding:10px;
 }
#fifth tr
{
  background-color:#4790C3 ;
  color:#ffffff;

}
@media only screen and (max-width:700px)
{
  #third .table-responsive tr,td,th{
    font-size:10px;
   
  }
}
</style>

<body>
<div class="text-center"><?php if(isset($_GET['error'])) {
?>
<script>
$(document).ready(function(){
     swal({
       title:"Booking Details",
       text:"You Have Already Booked An Appointment With The Doctor",
       icon:"error",
     });

});
</script>
<?php
}
else 
if(isset($_GET['error2']))
{
  ?>
<script>
$(document).ready(function(){
     swal({
       title:"Booking Details",
       text:"Sorry There Are No Slots For Booking Appointments Today,Please Come Back Later!",
       icon:"error",
     });

});
</script>
<?php
}

?>

</div>

<nav class=" navbar navbar-expand-md  navbar navbar-dark navbar-custom bg-secondary justify-content-center">
<p class="navbar-brand" style="letter-spacing:10px;color:red;">APPOINT<span style="color:lime">MENT</span></p>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav nav nav-pills nav-fill ">
			 <li class="nav-item active">
			   <a class="nav-link" href="#first" data-toggle="tab"><i class="fa fa-user">&nbsp;Profile</i></a></li>
			   <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#second"><i class="fa fa-list">&nbsp;Doctor's List</i></a></li>
			   <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#fifth"><i class="fa fa-list-alt">&nbsp;Find Blood Donor's</i></a></li>
         <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#third"><i class="fa fa-info-circle">&nbsp;Appointment Details</i></a></li>
         <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#fourth"><i class="fa fa-info-circle">&nbsp;Appointment History</i></a></li>
			   <li class="nav-item active"><a class="nav-link"  href="logout.php"><i class='fa fa-sign-out'>&nbsp;Logout</i></a></li> 
			   </ul>
         </div>
			  </nav>
 <div class="tab-content">
     <!-- Start of Profile View -->
  <div class="container tab-pane <?php 
  if(isset($_GET['id'])) 
  {$_GET['id']==='search'?'fade':'active';}
  else
  echo "active";

  
  
  ?>" id="first">
   <div class="row">
      <div class="col-12">
        <?php
           $sl="select * from patient where id='$id'";
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
                 Blood Type:&nbsp;<?php echo $row['blood'];?></br></br>


               </form>


             </fieldset>
                 

               <?php
           }

        ?>

      </div>


   </div>
    
  </div> 
  <!-- End of Profile -->

  <!-- Doctor's List -->
  <div class="container tab-pane <?php echo $_GET['id']==='search'?'active':'fade'?> mt-5" id="second">
      <div class="input-group">
       <div class="input-group-prepend">
         <span class="input-group-text">Search</span>
        </div>
        <input type="text" name="search" id="search" list="list1" class="form-control" onfocus="this.value=''" placeholder="Search By Category"/>
        <datalist id="list1">
            <?php
            $sl="select distinct category from doctor ";
            $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
            while($row=mysqli_fetch_array($result))
            {

            
        
                echo "<option value='".$row['category']."'></option>";
          
            }
          ?>
        </datalist>
        </div>
        <div class="display mt-3" id="display"></div>
     <script>
       $(document).ready(function(){
          $("#search").keyup(function(){
              var search=$(this).val();
              if(search=='')
              {

              }
              else
              {
                  $.ajax({
                   url:"searchdoctor.php",
                   method:"post",   
                   data:{search:search},
                   dataType:"text",
                   success:function(response){
                     $("#display").html(response);
                   }          
 

                  });
              }
          });
       });


        </script>
</div>
<!-- End of Doctor's List -->
<!-- Patient Appointment Details -->
 <div class="container tab-pane <?php echo $_GET['id']==='delete'?'active':'fade'?> mt-4" id="third">
   <?php
      $sl="select * from appointments where patient_id='$id'";
      $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
      if(mysqli_num_rows($result)>0)
      {
      echo "<div class='table-responsive bg-secondary'>";
      echo "<table class='table table-striped table-bordered'>";
      echo "<tr><th>Appointment-Number</th><th>Category</th><th>Name</th><th>Dr:Name</th><th>Appointment Time</th><th>Dr:Email</th><th>Description</th></tr>";
      while($row=mysqli_fetch_array($result))
      {  
          ?>
          
          <tr><td><?php echo $row['a_id']?></td><td><?php echo $row['appointments_category']?></td><td><?php echo $row['patient_name']?></td><td><?php echo $row['doctor_name']?></td><td><?php echo $row['slot'];echo "&nbsp;"; echo substr($row['time'],0,11);?></td><td><?php echo $row['doctor_email']?></td><td><?php  $des=$row['description'];if(empty($des )) echo "--NA--"; else echo $des;?></td>
          <td><a href='deletepatientappointment.php?id=<?php echo $row['a_id'];?>'><button class='btn btn-danger btn-sm' name="delete" style='font-size:19px;'><i class='fa fa-trash-o fa-lg'>&nbsp;Delete</i></button></a></td>
          </tr>


          <?php
          
        
      }
      echo "</table>";
      echo "</div>";
    }
    else
   { echo "<div class='container text-center'>
    <h1>No Appointments List</h1>

    </div>";}
   ?>

 </div>

<!-- End Of Patient Appointment Details -->
<!-- Start of Appointment History -->
<div class="container tab-pane fade mt-4" id="fourth">
   <?php
   echo "<div class='table-responsive bg-secondary'>";
   echo "<table class='table table-striped table-bordered'>";
   echo "<tr><th>Category</th><th>Name</th><th>Dr:Name</th><th>Appointment Date</th><th>Dr:Email</th><th>Description</th></tr>";
      $sl="select * from patient_details where patient_id='$id' order by time desc";
      $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
      $count=mysqli_num_rows($result);
    
      while($row1=mysqli_fetch_array($result))
      { $pid=$row1['patient_id'];
         $did=$row1['doctor_id'];
         if($did!=0)
         {
       $sle="select doctor.name as dname,patient.name as pname,doctor.email as demail from patient,doctor where patient.id='$pid' and doctor.id='$did'";
       $result1=mysqli_query($conn,$sle) or die(mysqli_error($conn));
       
        while($row=mysqli_fetch_array($result1))
        {
             $pname=$row['pname'];
       
          ?>
          
          <tr><td><?php echo $row1['category']?></td><td><?php echo $row['pname']?></td><td><?php echo $row['dname']?></td><td><?php echo $row1['time']?></td><td><?php echo $row['demail']?></td><td><?php  $des=$row1['description1'];if(empty($des )) echo "--NA--"; else echo $des;?></td></tr>


          <?php
          
        
     
          }
        }
        else{
          $sle="select patient.name as pname from patient where patient.id='$pid' ";
          $result1=mysqli_query($conn,$sle) or die(mysqli_error($conn));   
           $row4=mysqli_fetch_array($result1)
          ?>
          
          <tr><td><?php echo $row1['category']?></td><td><?php echo $row4['pname'];?></td><td><?php echo "NA"?></td><td><?php echo $row1['time']?></td><td><?php echo "NA"?></td><td><?php  $des=$row1['description1'];if(empty($des )) echo "--NA--"; else echo $des;?></td>
          
          </tr>


          <?php
          
        
     
          }
        }
       
    
    
    echo "</table>";
    echo "</div>";
   ?>

 </div>


<!-- End of Appointment History -->

<!-- Start of Patient List -->
<div class="container tab-pane fade donor" id="fifth">
 
      <div class="input-group mt-4">
          <div class="input-group-prepend">
         <span class='input-group-text'>Search By Blood Type</span>
          </div>
          <input type="text" id="blood" name="blood" class="form-control">

      </div>
      <div class="display mt-3" id="display2"></div>
        

   </div>
   <script>
         $(document).ready(function(){
          $("#blood").keyup(function(){
              var search=$(this).val();
              if(search=='')
              {

              }
              else
              {
                  $.ajax({
                   url:"bloodsearch.php",
                   method:"post",   
                   data:{search:search},
                   dataType:"text",
                   success:function(response){
                     $("#display2").html(response);
                   }          
 

                  });
              }
          });
       });




        </script>
   <!-- End Of Patient's List -->



      <!-- End of Tab Div -->
    </div>

</body>
</html>