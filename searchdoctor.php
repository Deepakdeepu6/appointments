<style>
#display .row:nth-child(even)
{background-color:#F38D8D ;
color:white;
font-size:30px;

}
#display .row:nth-child(odd)
{background-color:#DB8282  ;
    color:white;
font-size:30px;
}
@media only screen and (max-width:700px)
{
    #email{
        font-size:16px;
        letter-spacing:0px;
    }
}
</style>
<body>
  <div class="text-center"><?php if(isset($_GET['error'])) echo $_GET['error']; ?></div>
<?php
session_start();
include("process.php");
$category=$_POST['search'];
$sl="select * from doctor where category='$category'";
$result=mysqli_query($conn,$sl);
while($row=mysqli_fetch_array($result))
{
     ?>
    
     <div class="container">
       <div class="row p-3">
       <div class="col-12 col-sm-6">
        <span>Id:</span>&nbsp;<?php echo $row['id'];?>
       </div>
        <div class="col-12 col-sm-6">
        <span>Dr&nbsp;name:</span>&nbsp;<?php echo $row['name'];?>
       </div>
       </div>
       <div class="row p-3">
       <div class="col-12 col-sm-6">
       <span>Number:</span>&nbsp;<?php echo $row['number'];?>
       </div>
       <div class="col-12 col-sm-6">
       <span>Email:</span>&nbsp;<span  id="email"> <?php echo $row['email'];?></span>
       </div>
       </div>
       <div class="row p-3">
       <div class="col-12 col--sm-6">
       <span>Category:</span>&nbsp;<?php echo $row['category'];?>

       </div>
       </div>
       <div class="row p-3">
       <div class="col-12 col--sm-6">
     <center><a href='book.php?id=<?php echo $row['id'];?>'><button class='btn btn-info btn-sm' name='submit'>Book Apointment</button></a></center>
       <hr>
       </div>
       </div>
       

     
    </div>
    
    <?php
}







?>
</body>