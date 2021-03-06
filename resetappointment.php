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
$sl="truncate table appointments";
$result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
if($result){
$dr="alter table appointments drop column a_id";
$drresult=mysqli_query($conn,$dr) or die(mysqli_error($conn));
if($drresult){
$in="alter table appointments add a_id int(255) not null primary key auto_increment";
$inresult=mysqli_query($conn,$in) or die(mysqli_error($in));
if($inresult){
?>
<script>
$(document).ready(function(){
swal({
   title:"Success",
   text:"Successfully Deleted All the Appointments",
   icon:"success"}).then(okay=>{
    if(okay){
        window.location.href="adminpanel.php";
    }
   });
});

</script>

<?php
}
}
}

?>