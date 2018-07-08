<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="rating" content="General" >
      <meta name="viewport" content="width=device-width, initial-scale:1.0, user-scale:0"/>
      <meta name="robots" content="index, follow" >
      <meta name="googlebot" content="noodp" >
      <meta name="slurp" content="noydir">
      <title>SySchool - Submit Marks </title>
      <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
      <!-- ********************* CSS  LINKS ********************* -->
      <link href="styles/custom.css" rel="stylesheet">
      <link href="styles/mobile.css" rel="stylesheet">
      <link href="styles/bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="styles/font-awesome.css" rel="stylesheet">
      <!-- ********************* JS JQUERY LINKS ********************* -->
      <script src="js/jquery-1.11.1.min.js"></script>   
      <!-- *********************  JS LINKS ********************* -->
      <script src="js/slider.js"></script>   
      <script src="js/cycle.js"></script>  
      <script src="js/general.js"></script>   
      <script src="js/scroll.js"></script>    
   </head>
   <body class="bg">

<div class="top top-bar-bg">
         <div class="logo">
            <a href="index.php">Sy<span>S</span>chool</a>
         </div>
         <!--end of logo-->
         <div class="login">
            <form>
               <button>H V S De Silva</button>                           
            </form>
         </div>
         <!--end of login menu-->
         <div class="menu">
            <ul>
               <li class="selected"><a href="hometeacher.php">HOME</a></li>
               <li><a href="services.php">DOWNLOADS</a></li>
               <li><a href="about.php">ABOUT</a></li>
               <!--<li><a href="services.php">SERVICES</a></li>
               <li><a href="works.php">WORKS</a></li>
               <li ><a href="pricing.php"  >PRICING</a></li>-->
               <li><a  href="signup.php">LOGOUT</a></li>
            </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->

      <div class="banner">
         <h1>MARKS SUBMISSION</h1>
      </div>
      <!--end of banner-->  
      <div class="col-md-12">
         <div class="address">
            <form action="submitMarks.php" method="POST"> 
               <fieldset>
                  <ul>
                  <li class="col-md-2">Class</li>
                  <li><input class="col-md-9" type="text" name="class" placeholder="Class"></li>
                  <li class="col-md-2">Subject</li>
                  <li><input class="col-md-9" type="text" name="subject" placeholder="Subject"></li>

                  <div class="timetable" style="overflow-x:auto;">
                     <table>
                        <tr>
                           <th>Admission Number</th>
                           <th>Student Name</th>
                           <th>Marks</th>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                           <td><input class="col-md-12" type="text" name="marks"></td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                           <td><input class="col-md-12" type="text" name="marks"></td>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                           <td><input class="col-md-12" type="text" name="marks"></td>
                        </tr>
                     </table>
                  </div>                  
               <div class="col-md-2"><button>PRINT</button></div>
               <button type="submit">SUBMIT</button></div>   
   </form>
            </form>
         </div>
         <!--end of address-->
      </div>
      <!--end of col-md-12-->

      <?php 
         require_once 'footer.php';
      ?>
   </body>
</html>