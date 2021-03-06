<?php
include("process.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>


    <title>HomePage</title>
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
   
    <link rel="stylesheet" href="index.css">
  

  </head>
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
            <a class="nav-link" href="#"><i class="fa fa-fw fa-phone icon-flipped"></i>Contact</a>
          </li>&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-fw fa-info"></i>About</a>
          </li>&nbsp;
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fa fa-fw fa-user"></i> Login</a>
          </li>&nbsp;
      </ul>
      </div>
  </nav>


    <!--Side nav  -->
    <div id="mySidenav" class="sidenav">
      <p id="profile"><a href="index.html" style="color: #000000;">Profile &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</a> <i class="fa fa-angle-double-right"></i></p>
      <p id="vision"><a href="#pinboard" style="color: #000000;">Pinboard&nbsp;&nbsp;&nbsp;&nbsp;</a> <i class="fa fa-angle-double-right"></i></p>
      <p id="faculty"><a href="facultyList.html" target="_blank" style="color: #000000;">Faculty &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</a> <i class="fa fa-angle-double-right"></i></p>
      <p id="results"><a href="Result.html" style="color: #000000;" >Results &nbsp; &nbsp; &nbsp; &nbsp;</a> <i class="fa fa-angle-double-right"></i></p>
      <p id="blank"><a href="iconics_reg.php" target="_blank" style="color: #000000;">Iconics&nbsp; &nbsp; &nbsp; &nbsp &nbsp;</a><i class="fa fa-angle-double-right"></i></p>
    </div>
    


    <div id="relative">
      <h2 style="text-align: center;" id="profile_head">PROFILE</h2>
      <div id="absolute">
        <p>The Computer Science and Engineering (CSE) program was started in the year 1984. The main focus of the department is to produce graduates & post graduates with strong fundamentals in Computer Science and Engineering domain. 
            The course is an outcome based structured to help students to achieve this goal. The course was accredited by National Board of Accreditation (NBA). The Rank holders from Common Entrance Test (conducted by Karnataka examination authority) and other aspirants prefer this program.</p>
        <p>The department has a total of 33 teaching faculty members with various specializations, out of which 7 are PhD holders and 14 are pursuing Ph.D. Faculties in the department have outstanding teaching experience. The department has maintained a student staff ratio of 15:1, 
            has excellent infrastructure with state of the art equipment and software tools. It is having computer center with over 200 computers catering to student needs. The department has a strong R & D culture.</p>
        <p>Our department has an outstanding placement statistics and our students have been placed in leading IT companies like INFOSYS, TCS, COGNIZANT, ORACLE, and many more. The department has the Memorandum of Understanding (MoU)
            with software companies like Global Edge, Tata ELEXI, K2 solutions, EMC2 and also Infosys Campus connect programme.</p>
            
        
          <br>
          <div>
            <p style="font-weight: bold; font-size: 1em;">HEAD OF THE DEPARTMENT</p>
              <table border="1" cellspacing="0" cellpadding="0">
                
                  <tr>
                    <td style="text-align: center;" width="15%" ><img class="hodimg" src="HOD.jpeg" alt="HOD CS" width="85%" ></td>
                    <td style="text-align: center;" width="17%">
                      Dr. M. C. PADMA 
                      <br> <br>
                      B.E. M.Sc(Tech), Ph.D
                      Professor & HOD
                      Department of Computer Science
                      <br>
                      <br>
                      <a href="Dr.MCPadma_18.pdf" class="btn btn-info">View Profile</a> 
                    </td>
                  </tr>
                
              </table>
            </div>
      
          <br>

          <p>The department is being run by well qualified and experienced faculty members with several years of exposure in Computer science & Engineering.
            The department activities are well supported qualified non teaching staff.We at the department of CS&E believe that learning is a continuous 
            process and does not end with the acquisition of a degree, especially because steady and rapid advances in computing technologies shorten the 
            life of tools and techniques prevalent today. Students are given a strong foundation in computer science and problem-solving techniques, and 
            are made adaptable to changes. We aim at offering the best quality education. CS&E offers doctoral, postgraduate, undergraduate programs that 
            owe their emergence to the relentlessly growing demand of professionals with expertise in various fields of Computer Science. These programs 
            have been planned to offer a blend of computers, communication technologies and other information retrieving/processing tools so as to provide 
            the student with the requisite know how for solving real life problems, thereby enabling them to enter the world of opportunities.</p>
            
            <br>
           <div class="container mt-5" style="height:400px;" id="pinboard">
              <div class="row">
                
                <div class="col-12 pt-5">
                  <h1 class="text-center">Notice Board</h1>
                       <?php
                        include("process.php");
                        $sl="select * from announcement";
                        $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
                        while($row=mysqli_fetch_array($result))
                        {
                              echo $row['day'];
                              echo substr($row['date1'],9,10);
                              echo $row['text'];

                        }


                       ?>
                </div>
              
          </br>
          <div class="col-12 pt-5">
            <h2 style="text-align: center;" id="profile_head">VISION &amp; MISSION </h2>
            <br><br>
            <h3>Vision</h3>

            <p>"The Department of Computer Science and Engineering shall create professionally competent and socially responsible engineers
               capable of working in global environment."</p>

            <h3>Mission</h3>
            <p>
              <li><b>DM1:</b> Enforce best practices in teaching-learning, with dedicated faculty and supportive infrastructure to impart the knowledge in emerging technologies.
                  {Required to create professionally competent engineers}</li>
              <li><b>DM2:</b> Improve Industry-Institute relationship for mutual benefit.
                {Required to create professionally competent engineers}</li>
              <li><b>DM3:</b> Inculcate ethical values, communication and entrepreneurial skills.
                {Required to create professionally competent and socially responsible engineers}</li>
              <li><b>DM4:</b> Sensitize social, legal, environmental and cultural diversity issues through professional training and balanced curriculum.
                {Required to create engineers capable of working in global environment}</li>
              </p>

              <h4>Program Educational Objectives (PEOs) of the UG in C S &amp; E:</h4>
              
              <p>
                Graduates of the program shall,
                <li>Have Successful computer professional career in IT industry and related areas.</li>
                <li>Pursue higher education in engineering or management with the focus on intensive research and developmental activities.</li>
                <li>Develop their career as entrepreneurs in a responsible, professional and ethical manner to serve the society.</li>
                <br>
                The Under Graduate (UG) of BE Computer Science & Engineering Program has defined Program Specific Outcomes (PSO) which are listed below.
                <br><br>
                The students shall have the,

                <li>Ability to design and develop network based systems in emerging technology environments like Cloud Computing, Security, Internet of Things and embedded systems.</li>
                <li>Ability to develop knowledge based data management system in the areas like data analytics, data mining, business intelligence, pattern recognition and knowledge discovery in solving engineering problems.</li>
                <br>
                <h4>Goals of the Department:</h4>
                <br>
                <h5>Short-term goals</h5>
                <li>Strengthening of Department Infrastructure</li>
                <li>Conducting Faculty development programmes</li>
                <li>Strengthening industry-institute interaction</li>
                <br>
                <h5>Mid-term goals</h5>
                <li>Conducting international conference</li>
                <li>To raise funds by submitting Project proposals</li>
                <li>To improve placements</li>
                <br>
                <h5>Long-term goals</h5>
                <li>Establishing new laboratories.</li>
                <li>Establishing centre of excellence</li>
                <li>Improve Research and Development</li>
              
              
              </p>
            

      


    <br>
    <footer>
      <div class="footer">
        <span class="copyrig" >
          <p> &copy; 2020 Infopedia </p>
        </span>
      </div>
    </footer>
             </div>
         </div>
</div> 

</div>
   
</body>
</html>
