<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include("process.php");
 $id=$_GET['id'];
$sl="delete from announcement where announce_id='$id'";
$result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
if($result)

{
    $sd="alter table announcement drop column announce_id";
    $result2=mysqli_query($conn,$sd) or die(mysqli_error($conn));
    if($result2)
    {
          $sd1="alter table announcement add announce_id int(255) not null primary key auto_increment";
          $result3=mysqli_query($conn,$sd1) or die(mysqli_error($conn));
          if($result3)
          {
                    ?>
                   <script>
                  $(document).ready(function(){
                  swal({
                     title:"Deletion",
                        text:"Announcement Successfully Deleted",
                        icon:"success"

                     }).then(okay=>{
                           if(okay){
                         window.location.href='ad_noticeboard.php';
                          }
                          });
  
                             });

                            </script>

                     <?php
          }
    }
}


?>