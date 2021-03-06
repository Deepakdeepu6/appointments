
<?php
include("process.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>

<title></title>

</head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
#text {
    padding-left:30px;
    font-size:40px;
    box-shadow:0px 0px 5px 4px grey;
}
.textareacol{
    box-shadow:2px 2px 2px 2px grey;
    padding:30px;
}
/* body{
    background-image: linear-gradient(to right, rgba(174, 214, 241), rgba(190, 240, 280));
} */
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
#show button >a:link{
  color:#ffffff;
  text-decoration:none;
}

</style>
 <!-- Display More Announcements -->
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
             <tr><td colspan='2'><center><button class='btn btn-danger btn-sm' ><a href='deleteannounce.php?id=<?php echo $row['announce_id']; ?>'><i class='fa fa-trash-o'></i>&nbsp;DELETE</button></a></center></td><tr>
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


</body>
</html>