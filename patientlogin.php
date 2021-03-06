<?php
session_start();
include("process.php");

?>
<!DOCTYPE html>
<html>
  <head>
      <title>Patient Login</title>

</head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  function show(){
    document.getElementById("signup").classList.toggle('active');
   
  }
  function close1(){
    document.getElementById("signup").style.cssText="left:-1500px;transition:1s";
  }

  </script>
<style>
  legend img{
      border-radius:30px;
      width:50px;
      height:50px;
  }
 
  fieldset{
    max-width:500px;
      width:100%;
      height:250px;
      margin:auto;
  }
 
  .container-fluid{
      height:100vh;
  }
  .col-12{
      margin:150px auto;
    }
    span{
      color:blue;

    }
    #signup{
      position:absolute;
      width:100%;
      color:#ffffff;
      left:-1500px; 
    
    }
    .signup{
      border:1px solid black;
      position:absolute;
      top:0%;
      left:0%;
      
    }
     #signup.active{
      border:1px solid black;
      position:absolute;
      top:0%;
      left:0%;
      width:100%;
      margin:auto;
      transition:1s;
      max-width:400px;
      height:100vh;
      
    } 

  </style>
 
<body>
<div class="container-fluid bg-secondary">
  <center>
      <div class="row" >
        <div class="col-12 justify-content-center ">
         <div class="bg-secondary" id="row">
        <fieldset style="border:2px solid black; box-shadow:0 0 8px #999;">
         <legend style="text-align: center;margin-top:-15px;"><img src="patientlogo.png"></legend></br>
         <form action=" " method="post"> 
             <input type="text" placeholder="Patient Username" name="username" required class="form-control"></br>
              
             
             <input type="password" placeholder="Patient Password" name="password" required class="form-control">
             <span style="cursor:pointer;" onclick="show()" >Not Registered?<i style="color:lime;"><u>Sign Up</u></i></span></br>
             <button class="btn btn-secondary btn-lg mt-2"  name="submit" style="box-shadow:4px 4px 18px #999;">AUTENTICATE</button>
         </form>
        </fieldset>
     </div> 
       <!-- Login php -->
     <?php
              if(isset($_POST['submit']))
            {
             $username=mysqli_real_escape_string($conn,$_POST['username']);
              $password=mysqli_real_escape_string($conn,$_POST['password']);
            $sl="select * from patient where name='$username' and password='$password'";
            $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
             $row=mysqli_fetch_array($result);
              if($row['name']==$username && $row['password']==$password)
                {
                   $_SESSION['name']=$row['name'];
                   $_SESSION['pid']=$row['id'];
                   header("location:patientpanel.php");
                  
              }
             else{
               echo "<script>alert('Username or Password Does Not Match');</script>";
             }

              }


              ?>
         </div>  
     </div>
  </center>
           <div class="container signup bg-secondary" id="signup">
           <center><h3 style="font-size:30px;letter-spacing:5px;">Register Here</h3></center>
            <hr>
              <form action="" method="post"> 
             <label for="name">Name</label><input class="form-control" type="text" name="username" id="name" required>
            <label for="address">Address</label><input class="form-control" type="text" name="address" id="address"  required>
            <label for="no">Contact No</label><input class="form-control" type="number" name="no" id="no"  required>
            <label for="email">Email</label><input class="form-control" type="email" name="email" id="email"  required>
            <label for="id">Password</label><input class="form-control" type="number" name="password" id="password"  required></br>
            <label for="id">Blood Type</label><input class="form-control" type="text" name="blood" id="blood"  required></br>
            <button name="submit1" class="btn btn-success btn-lg btn-block">Register</button>
            </form>
            </br><center>
            <button id="signin" class="btn btn-primary btn-sm " onclick="close1()">Sign In</button></center>

            <?php 
    if(isset($_POST['submit1']))
    {   $name=$_POST['username'];
        $address=$_POST['address'];
        $no=$_POST['no'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $blood=$_POST['blood'];
        if(!empty($blood)){
         $sl="insert into patient(name,address,number,email,password,blood) values('$name','$address','$no','$email','$password','$blood')";
         $result=mysqli_query($conn,$sl)or die(mysqli_error($conn));
         if($result)
          {?>
            <script>
 

 swal({
       title:"Successfully Added",
       text:"You Have Successfully Registered",
       icon:"success"

       });

              
          
            
            </script>
            <?php
            }
         else 
         {?>
          <script>
         
            
              swal({
                title: "Fail",
                text: "Not Registered",
                icon:"warning" ,
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

</body>
</html>