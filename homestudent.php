<?php
//session_start();
  // if( $_SESSION['user']==''){
    //  header("location: index.php");
   //}
?>

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
      <title>SySchool - Student Home</title>
      <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
      <!-- ********************* CSS  LINKS ********************* -->
      <link href="styles/custom.css" rel="stylesheet">
      <link href="styles/mobile.css" rel="stylesheet">
      <link href="styles/bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="styles/font-awesome.css" rel="stylesheet">
      <!-- ********************* JS JQUERY LINKS ********************* -->
      <script src="js/jquery-1.11.1.min.js"></script>  
      <script src="js/general.js"></script>     
      <!-- *********************  JS LINKS ********************* -->
      <script src="js/slider.js"></script>   
      <script src="js/cycle.js"></script>      
      <script src="js/scroll.js"></script>    
   </head>
   <body class="bg">
      <div class="top top-bar-bg">
         <div class="logo">
            <a>Sy<span>S</span>chool</a>
         </div>
         <!--end of logo-->
         <div class="login">
            <form>
               <button><?php echo $_SESSION['uname']; ?></button>                       
            </form>
         </div>
         <!--end of login menu-->
         <div class="menu">
            <ul>
               <li class="selected"><a href="homestudent.php">HOME</a></li>
               <li><a href="downloads.php">DOWNLOADS</a></li>
               <li><a  href="logout.php">LOGOUT</a></li>
            </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->
      <div class="banner">
         <h1>STUDENT HOME</h1>
      </div>
      <!--end of banner-->
<div class="gallery">
         <div class="row">
            <div class="col-md-12 ">
               <div class="galley-container">
                  <div class="col-md-3">
                     <a href="timetablestudent.php" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/22.jpg" alt="gallery">
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p><button class="update" type="submit" onclick="window.location.href='timetablestudent.php'">VIEW TIME TABLE</button></p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="viewGrades.php" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/33.jpg" alt="gallery"  >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p><button class="update" type="submit" onclick="window.location.href='viewgrades.php'">VIEW MY GRADES</button></p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/3.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p><button class="update" type="submit" onclick="window.location.href='homelibrary.php'">LIBRARY FACILITIES</button></p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/4.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p><button class="update" type="submit" onclick="window.location.href='regsport.php'">JOIN A SPORT</button></p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="#" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/8.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p><button class="update" type="submit" onclick="window.location.href='regclub.php'">JOIN A CLUB</button></p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/9.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p><button class="update" type="submit" onclick="window.location.href='regclub.php'">REGISTER CLUB/SOCIETY</button></p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/10.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p><button class="update" type="submit" onclick="window.location.href='changepassword.php'">CHANGE PASSWORD</button></p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
                  <div class="col-md-3">
                     <a href="" id="show-project-a">
                        <div class="img-box">
                           <div class="img">
                              <img src="images/gal/11.jpg" alt="gallery" >
                           </div>
                           <div class="img-show">
                              <div class="center">
                                 <p><button class="update" type="submit" onclick="window.location.href='editstudentprofile.php'">EDIT PROFILE</button></p>
                              </div>
                           </div>
                        </div>
                        <!--end of img box-->
                     </a>
                  </div>
               </div>
            </div>
            <!--end of col-12-->
         </div>
      </div>

   </body>
</html>