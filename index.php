<!DOCTYPE html>
<html>
<head>
     <title>Appoint-ments</title>
</head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<style>
    .doctor,.patient,.admin{
        
        width:100%;
         
        margin:30px auto;
        max-width:400px;
     
    }
    .btn{
        max-width:400px;
        width:100%;
        height:200px; 
       
       
    }
    a{
        max-width:400px;
        width:100%;
      


    }
  
    .col-sm-12{
        text-align:center;
        margin-top:0px;
        
        
    }
    .row{
        margin:20px auto;

    }
body{
    background-color:#88B04B;
}
p{
    font-size:20px;
    color:#FFFFFF;
    letter-spacing:5px;
}
#sticky-footer
{
    font-size:30px;
    font-weight:40;
    letter-spacing:10px;
    margin:auto;
}
footer table{

    font-size:20px;
    width:100%;
    
}
@media only screen and (max-width:700px)
{   footer table
    {
        font-size:16px;
        font-weight:0;
    letter-spacing:0px;
    }
}
</style>
<body>
   <div class="container">
       <div class="row doctor ">
           <a href="doctorlogin.php">
        <button class="btn btn-outline-primary">
           <div class="col-sm-12 ">
               <p style="margin-top:10%;">DOCTOR</p> 
           </div>
           </button>
           </a>
        </div>
        <div class="row patient ">
            <a href="patientlogin.php">
            <button class="btn btn-outline-secondary">
               <div class="col-sm-12 ">
                   <p style="margin-top:10%;">PATIENT</p> 
               </div>
               </button>
            </a>
            </div>
            <div class="row admin ">
                <a href="adminlogin.php">
                <button class="btn btn-outline-danger">
                   <div class="col-sm-12 ">
                       <p style="margin-top:10%;">ADMIN</p> 
                   </div>
                   </button>
                   </a>
                </div>
   </div>
   <footer id="sticky-footer" class="py-4 bg-info text-white-50">
    <div class="container">
     



            <div class="row">
             <div class='col-12'>
                <small><table class='table table-xs'> <center><u>Contact Details</u> </center>
    
             <tr><th>Number&nbsp;:</th><td>1234</td></tr>
              <tr><th>Email&nbsp;&nbsp;&nbsp;:</th><td>@gmail.com</td></tr>
              </table> </small> 
           </div>
        </div>
        <div class='col-12'>
        <center> <small><?php echo date('Y');?> Copyright &copy;<span style="color:lime;" class="text-right">APPOINTMENT</span></small></br>
       <small >Created By Deepak.C</small></center>
         </div>
     </div>
    </div>
  </footer>
</body>
</html>