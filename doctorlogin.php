<?php
session_start();
  include("process.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Login</title>

</head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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
    </style>
<body>
  <div class="container-fluid bg-primary">
    <center>
        <div class="row">
          <div class="col-12 justify-content-center">
           <div class="bg-primary">
          <fieldset style="border:2px solid black; box-shadow:0 0 8px #999;">
           <legend style="text-align: center;margin-top:-15px;"><img src="doctorlogo.png"></legend></br>
           <form action=" " method="post"> 
               <input type="text" placeholder="Doctor Username" name="username" class="form-control"></br>
                
               
               <input type="password" placeholder="Doctor Password" name="password" class="form-control">
               <button class="btn btn-primary btn-lg mt-2" name="submit" style="box-shadow:4px 4px 18px #999;">AUTENTICATE</button>
           </form>
          </fieldset>
       </div>
           </div>  
       </div>
    </center>
    <?php
   if(isset($_POST['submit']))
   {
       $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
       $sl="select * from doctor where name='$username' and password='$password'";
       $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
       $row=mysqli_fetch_array($result);
       if($row['name']==$username && $row['password']==$password)
       {
           $_SESSION['did']=$row['id'];
           header("location:doctorpanel.php");
       }
     else
     {
       echo "<script>alert('Not a Valid Username Or Password');</script>";
     }

   }


?>
  </div>

</body>
</html>