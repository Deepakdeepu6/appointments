<?php

session_start();
include("process.php")
// if(!isset($_SESSION['name'])) {
//   header('Location: login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Announcement</title>

    <!--Title icons-->
    <link rel="shortcut icon" type="image/x-icon" href="icons/icon1.ico" />
    <link rel="icon" type="image/x-icon" href="icons/icon2.png" />
    <!-- Global Favicon -->
    <link rel="icon" type="image/png" href="icons/icon3.png" />
    <!-- Opera Speed Dial Favicon -->
    <link rel="icon" type="image/png" href="icons/icon4.png" />
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icons/icon5.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icons/icon6.png">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="icons/icon7.png">

    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script name="font-awesome" src="https://kit.fontawesome.com/8550e015d6.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <!--<link rel="stylesheet" href="collapse_func.css">-->
   

</head>
<style>
#text {
    padding-left:30px;
    font-size:40px;
    box-shadow:0px 0px 5px 4px grey;
}
.textareacol{
    box-shadow:2px 2px 8px 2px grey;
    padding:30px;
    
    
}
.announce table{
  background-color:#F3F5F6;
  font-size:20px;
  font-weight:50;
  font-family:sans-serif;
}
.inside{
    max-width:500px;
    font-size:20px;
    width:100%;
}
.insidecontainer{
    background-color:#F3F5F6;
    transform:scale(0.9);
    box-shadow:0px 0px 5px 4px grey;
}
a{
  color:#ffffff;
  text-decoration:none;
  }
#show button >a:link
{
  color:#ffffff;
  text-decoration:none;
}
@media only screen and (max-width:700px)
{  .announce table{
  font-size:16px;
  font-weight:0;
}

}
</style>
<script>
          $(document).ready(function(){
	          var commentsCount = 3;
              $("#display").click(function(){
		          commentsCount=commentsCount+3;
            $("#show").load("displayannouncement.php",{
         commentsNewCount:commentsCount
	             });

	         }); 
            });


</script>
<body>

  <a id="home" href="index.html"><img class="img-fluid mx-auto d-block" src="pes__logo.png" alt="Pes logo"></a>
  <div class="top-div">
    <marquee><p class="menu_para">Autonomous Institution affiliated to Visvesvaraya Technological University, Belagavi / Approved By AICTE, New Delhi / Accredited By NBA and NAAC, New Delhi.</p></marquee>
  </div>
  <div class="top-add-div">
    <p style="color: #2f2879;" class="menu_para">Department of Computer Science and Engineering, Mandya.</p>
  </div>
  <!--Nav Bar-->
  <nav class="navbar navbar-expand-md bg-warning navbar-light sticky-top">



      <button class="navbar navbar-toggler"  data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="text-decoration-none font-weight-bold text" href=""></a>

      <div class="collapse navbar-collapse text-center justify-content-center" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.html"><i class="fa fa-fw fa-home"></i>Home</a>
          </li>&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-fw fa-image "></i>Gallery</a>
          </li>&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-fw fa-phone"></i>Contact</a>
          </li>&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-fw fa-info"></i>About</a>
          </li>&nbsp;
          <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href=""> <i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['name']; ?></a>
                <span class="dropdown-menu">
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </span>    
          </li>
      </ul>
      </div>
  </nav>


    <!--Side nav 
    <div id="mySidenav" class="sidenav">
      <p id="profile"><a href="index.html" target="_blank" style="color: #000000;">Profile &nbsp;&nbsp; &nbsp; &nbsp;</a> <i class="fa fa-angle-double-right"></i></p>
      <p id="vision"><a href="#" target="_blank" style="color: #000000;">Vision &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</a> <i class="fa fa-angle-double-right"></i></p>
      <p id="faculty"><a href="facultyList.html" target="_blank" style="color: #000000;">Faculty &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</a> <i class="fa fa-angle-double-right"></i></p>
      <p id="results"><a href="Result.html" style="color: #000000;" >Results &nbsp; &nbsp; &nbsp; &nbsp;</a> <i class="fa fa-angle-double-right"></i></p>
      <p id="blank"><a href="iconics_reg.php" target="_blank" style="color: #000000;">Iconics &nbsp; &nbsp; &nbsp; &nbsp &nbsp;</a><i class="fa fa-angle-double-right"></i></p>
    </div> -->


    <!--/////////////////////////////////////////////Add main content here/////////////////////////////-->
    <!-- Start of Announcement -->
    <div class="container-fluid whole">
<div class="container mt-4">
  <!-- Textarea to Add announcement -->
  <div class="row">
    <div class="col-12 textareacol" style=" background-color:#F3F5F6;">
    <form action='' method='post'>
     <textarea class="form-control mt-4" name="textarea1"  id="text"></textarea></br>
     <center><button class="btn btn-outline-success btn-lg" name="submit">ANNOUNCE</button></center>
     </form>
       </div>
       <?php 
            if(isset($_POST['submit']))
        {
            $text=$_POST['textarea1'];
            $day=date('l');
            $date1=date('Y-m-d');
            

            $sl="insert into announcement(day,date1,text) values('$day','$date1','$text')";
            $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
            if($result)
            {  
                ?>
                   <script> 
                   $(document).ready(function(){
                    swal({
                        title:"Success",
                        text:"Successfully Announced",
                        icon:"success",

                    });
                });

                   </script>
 

                 <?php


            }
        }


      ?>
   
       </div>
     </div>
     <!-- End of Text Area -->
     <!-- Start of Announcement Display -->
     <center><h2  style="letter-spacing:10px;">Announcement History</h2></center>
     <div class="row announce"> 
    
       <div class="col-12 mt-3" id="show">
       
        <?php
          $sl="select * from announcement order by announce_id desc limit 3";
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
             <tr><td colspan='2'><center><a href='deleteannounce.php?id=<?php echo $row['announce_id']; ?>'><button class='btn btn-danger btn-sm' ><i class='fa fa-trash-o'></i>&nbsp;DELETE</button></a></center></td><tr>
              <tr><td><hr></td><td><hr></td></tr>
               </thead>
              </table>
             </div>
             </div>
              <?php
          }
          // echo "</div>";

      ?>

       </div>
   <div class="col-12 mt-3 mb-3" ><center><button id="display" class='btn btn-info btn-block'>Show More</button></center></div>
   
     </div>
     <!-- End of Announcement Display -->
  </div>
</div>





<br>
<footer>
  <div class="footer">
    <span class="copyrig" >
      <p class="col-sm-12"> &copy; 2020 Infopedia </p>
    </span>
  </div>
</footer>

</body>
</html>
