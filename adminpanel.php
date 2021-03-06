<?php
include("process.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
     <title>Admin Login Page</title>
</head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="icon" href="adminfavicon.png">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar-custom .navbar-nav>li>a
{

    font-size:20px;

    margin-left:60px;
   font-style:verdana;



}
.navbar-custom .navbar-nav>li>a:hover{
    background-color:black;
    color:white;
}
#first .col-12{
    border:1px solid red;
    border-radius:5px;
    background-color:#F3F5F6;
    box-shadow:1px 1px 2px 2px grey;
    margin-top:0px;

}
#first .firstsecond{
    max-width:300px;
    width:100%;
    margin:auto;
}
#first label{
  font-size:20px;
}
#first h6{
    letter-spacing:5px;
    cursor:pointer;
    color:white;
    padding:10px 0px;
    margin:0px;
    height:50px;
    border-radius:5px;

}
#first .form-control
 {
   max-height:40px;
 }
 #first .firstfirs{
     transform:scale(0.9);
    margin-top:0px;
 }

 /* End of first link */
 #second tr,th,td{
   font-size:20px;
   color:#ffffff;

 }
 #second th{
  color:#423B3B  ;
  background-color:#FBDADA;
 }
 #second th,#second td{
   padding:10px;
 }
#second tr:nth-child(even)
{
  background-color:#E48585;
}
#second tr:nth-child(odd)
{
background-color:#E48585 ;
}
@media only screen and (max-width:700px)
{
  #third .table-responsive tr,td,th{
    font-size:10px;
   
  }
}
#fourth th{
  color:#423B3B  ;
  background-color:#FBDADA;
 }
 #fourth th,#fourth td{
   padding:10px;
 }
#fourth tr
{
  background-color:#4790C3 ;

}
@media only screen and (max-width:700px)
{
  #third .table-responsive tr,td,th{
    font-size:10px;
   
  }
}
 </style>
<body>
<nav class=" navbar navbar-expand-md  navbar navbar-dark navbar-custom bg-danger justify-content-center">
<p class="navbar-brand" style="letter-spacing:10px;color:green;">APPOINT<span style="color:lime">MENT</span></p>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav nav nav-pills nav-fill ">
			 <li class="nav-item active">
			   <a class="nav-link" href="#first" data-toggle="tab"><i class="fa fa-plus">&nbsp;Add</i></a></li>
			   <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#second"><i class="fa fa-list fa-1x">&nbsp;Doctor's List</i></a></li>
			   <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#fourth"><i class="fa fa-list fa-1x">&nbsp;Patient's List</i></a></li>
			   <li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#third"><i class="fa fa-info-circle">&nbsp;Appointment Details</i></a></li>
			   <li class="nav-item active"><a class="nav-link" id="reset"  style="cursor:pointer;" onclick="return confirm()"><i class="fa fa-edit">&nbsp;Reset Appointments</i></a></li>
			   <li class="nav-item active"><a class="nav-link"  href="logout.php"><i class="fa fa-sign-out">&nbsp;Logout</i></a></li>
			   </ul>
         </div>
			  </nav>
<script>
function confirm()
{
   $(document).ready(function(){
    swal({
      title:"Confirmation",
      text:"Are You Sure You Want To Reset The Appointments",
      icon:"warning"}).then(okay=>{
    if(okay){
      window.location.href="resetappointment.php";
    }

    });

   });

}

</script>
 <div class="tab-content">
   <!-- start of Add /delete  -->
  <div class="container tab-pane <?php 
  if(!empty($_GET['id']))
     $_GET['id']===('display'||'patient')?'fade':'active';
     else
     echo "active";?>  " id="first">
        <div class="row ">
          <div class="col-12 col-sm-12 firstfirs mt-2 ">
          <form action="" method="post">
          <h6 class="text-center bg-danger" > ADD DOCTOR'S</h6></br>
            <label for="name">Name</label><input class="form-control" type="text" name="username" id="name" required>
            <label for="address">Address</label><input class="form-control" type="text" name="address" id="address"  required>
            <label for="no">Contact No</label><input class="form-control" type="number" name="no" id="no"  required>
            <label for="email">Email</label><input class="form-control" type="email" name="email" id="email"  required>
            <label for="id">Password</label><input class="form-control" type="text" name="password" id="password"  required></br>
            <select id="select" name="select" required class="form-control">
              <option value="0" disabled selected  >Category</option>`
              <option value="heart">Heart</option>
              <option value="bone">Bone</option>
              <option value="dentist">Dentist</option>
              <option value="surgery">Surgery</option>
              <option value="mental Health">Mental Health</option>

            </select></br>
            <center><button class="btn btn-info btn-lg" name="submit1">ADD </button></center>
            </form>
          </div>

        </div>
  <?php
    if(isset($_POST['submit1']))
    {   $name=$_POST['username'];
        $address=$_POST['address'];
        $no=$_POST['no'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $category=$_POST['select'];
        if(!empty($category))
        {
         $sl="insert into doctor(name,address,number,email,password,category) values('$name','$address','$no','$email','$password','$category')";
         $result=mysqli_query($conn,$sl)or die(mysqli_error($conn));
         if($result)
          {


            $sl="select * from doctor where email='$email'";
            $result=mysqli_query($conn,$sl);
            while($row=mysqli_fetch_array($result))
            {    $name=$row['name'];
                 $id=$row['id'];
                 $category=$row['category'];
                 $email=$row['email'];
                $si="insert into appointments(doctor_id,doctor_name,appointments_category,doctor_email)values ('$id','$name','$category','$email')";
                $resu=mysqli_query($conn,$si) or die(mysqli_error($conn));
                if($resu)
                { ?>
                      <script>


                swal({
                     title:"Successfully Added",
                   text:"You Have Successfully Added a Doctor To Your Board",
                  icon:"success"}).then(okay=>{
                  if(okay){
                      window.location.href="adminpanel.php?Success=Updated";
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
                        title: "Fail",
                        text: "No  Doctor Added To Your Board",
                        icon:"warning" }).then(okay=>
                         {
                           if(okay)
                             window.location.href="adminpanel.php?Success=Sorry Not Updated";

                            });


                  </script>
                  <?php

                }
            }
          }



         else
         {?>
          <script>


              swal({
                title: "Fail",
                text: "No  Doctor Added To Your Board",
                icon:"warning" }).then(okay=>
                 {
                   if(okay)
                     window.location.href="adminpanel.php?Success=Sorry Not Updated";

                    });


          </script>
          <?php
          }
        }

        else
        echo "<script>alert('Enter all the fields Properly');</script>";
    }
   ?>
   </div>

   <!-- End of Add Delete  -->
    <!-- Doctor's List -->
   <div class="container tab-pane <?php
    
    if(isset($_GET['id']))
    echo $_GET['id']==='display'?'active':'fade';
    else
    echo 'fade';
    
    ?> " id="second">
        <?php
        $sl="select * from doctor";
        $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
        echo "<div class='table-responsive mt-4'>";
         echo "<table class='table table-striped table-bordered table table-sm'>";
         echo "<tr><th>Id</th><th>Name</th><th>Contact Number</th><th>Email </th><th>Address</th><th >Category</th><th>&darr;</th></tr>";
        while($row=mysqli_fetch_array($result))
        {
          ?>
           <tr > <td><?php echo $row['id']?></td><td><?php echo $row['name']?></td><td><?php echo $row['number']?></td><td><?php echo $row['email']?></td><td><?php echo $row['address']?></td><td><?php echo $row['category']?></td>
           <td><a href='delete.php?id=<?php echo $row['id'];?>'><button class='btn btn-danger btn-sm' name="delete" style='font-size:19px;'><i class='fa fa-trash-o fa-lg'>&nbsp;Delete</i></button></a></td>
           </tr>

          <?php
        }
        echo "</table>";
      echo "</div>";

      ?>



   </div>
    <!-- End Of Doctor's List -->
     <!-- Patient Appointment Details -->
 <div class="container tab-pane fade mt-4" id="third">
   <?php
      $sl="select * from appointments ";
      $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
      if(mysqli_num_rows($result)>0)
      {
      echo "<div class='table-responsive bg-danger'>";
      echo "<table class='table table-striped table-bordered'>";
      echo "<tr><th>Appointment-Number</th><th>Category</th><th>Name</th><th>Dr:Name</th><th>Appointment Time</th><th>Dr:Email</th><th>Description</th></tr>";
      while($row=mysqli_fetch_array($result))
      {
          ?>

          <tr><td><?php echo $row['a_id']?></td><td><?php echo $row['appointments_category']?></td><td><?php echo $row['patient_name']?></td><td><?php echo $row['doctor_name']?></td><td><?php echo $row['slot']?></td><td><?php echo $row['doctor_email']?></td><td><?php  $des=$row['description'];if(empty($des )) echo "--NA--"; else echo $des;?></td></tr>


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
   <!-- Start of Patient List -->
   <div class="container tab-pane  if(isset($_GET['id']))
    echo $_GET['id']==='patient'?'active':'fade';
    else
    echo 'fade';?> " id="fourth">
        <?php
        $sl="select * from patient";
        $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
        echo "<div class='table-responsive mt-4'>";
         echo "<table class='table table-striped table-bordered table table-sm'>";
         echo "<tr><th>Id</th><th>Name</th><th>Contact Number</th><th>Email </th><th>Address</th><th >Blood Type</th><th>&darr;</th></tr>";
        while($row=mysqli_fetch_array($result))
        {
          ?>
           <tr > <td><?php echo $row['id']?></td><td><?php echo $row['name']?></td><td><?php echo $row['number']?></td><td><?php echo $row['email']?></td><td><?php echo $row['address']?></td><td><?php echo $row['blood']?></td>
           <td><a href='deletepatient.php?id=<?php echo $row['id'];?>'><button class='btn btn-danger btn-sm' name="delete" style='font-size:19px;'><i class='fa fa-trash-o fa-lg'>&nbsp;Delete</i></button></a></td>
           </tr>

          <?php
        }
        echo "</table>";
      echo "</div>";

      ?>



   </div>
   <!-- End Of Patient's List -->
  
</div>
</body>
</html>