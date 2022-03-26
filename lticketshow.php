<?php
session_start();
$triptype=$_POST['triptype'];
  $where=$_POST['where'];
  $destination=$_POST['destination'];
  $person=$_POST['person'];
  $class=$_POST['class'];
  $floor=$_POST['floor'];
  $ttype=$_POST['ttype'];
  $sdate=$_POST['sdate'];
  $rdate=$_POST['rdate'];
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img src="images/logo-default-450x37.png" alt="" width="225" height="18"/></a>
                  </div>
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                        <div class="unit-body">
                          <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                      </div>
                    </li>
                  </ul><a class="button button-md button-default-outline-2 button-ujarak" href="#">Get a Free Quote</a>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>


<!-- Code here-->


    <style>
     form{
       margin-top: 10px;
       background-color:cadetblue;
      border-radius: 10px;
      border: 5px solid rgb(129, 174, 175);
      text-align: center;
     }
      input[type=text] {
      width: 18%;
    padding: 5px;
    margin: 5px 0;
    border: 2px solid rgb(129, 174, 175);
    border-radius: 10px;
    box-sizing:border-box;
    font-family: 'Times New Roman', Times, serif;
    font-size: larger;
}
button{
    
    text-align: center;
    width: 50%;
    padding: 10px;
    background:darkslategrey;
    color: white;
    font-size: 17px;
    cursor: pointer;
  }
  button:hover {
    background: #259ee4;
  }
      </style>
</head>
  <body>
    
  
  <?php 

  

  
  $conn= mysqli_connect("localhost","root",""); 
$database= mysqli_select_db($conn,'go_travel');
 
 

  $sql="INSERT INTO `launch_ticket`(`fromm`, `too`, `journey_date`, `return_date`, `passenger`, `class`, `trip_type`, `ticket_type`, `floor`) VALUES ('$where','$destination','$sdate','$rdate','$person','$class','$triptype','$ttype','$floor')";
$sql1=  "SELECT * FROM launch WHERE ticket_type Like '$ttype' and journey_date='$sdate' and class like '$class' and floor ='$floor' and base like '$where'  and '$person' <= available_st  and dest like '$destination' ";

$query_run=(mysqli_query($conn,$sql));
$query_run=(mysqli_query($conn,$sql1));


if($query_run-> num_rows > 0){
       while($result=mysqli_fetch_array($query_run)){
           ?>
           <form action="" method="post">
           <input type="text" name="search" placeholder="name" value="<?php echo "Launch name: ".$result['name'] ?>" readonly>
           <input type="text" name="search" placeholder="seat" value="<?php echo "available seat: ".$result['available_st'] ?>" readonly>
           <input type="text" name="search" placeholder="base" value="<?php echo "Journey from: ".$result['base'] ?>" readonly>
           <input type="text" name="search" placeholder="destination" value="<?php echo "destination: " .$result['dest'] ?>" readonly>
           <input type="text" name="search" placeholder="journey date" value="<?php echo "Journey date: ".$result['journey_date'] ?>" readonly>
           <input type="text" name="search" placeholder="journey hour" value="<?php echo "Journey hour: ".$result['journey_hour'] ?>" readonly>
           <input type="text" name="search" placeholder="fare" value="<?php echo"fare: ". $result['fare'] ?>" readonly>
           <input type="text" name="search" placeholder="Ticket Type" value="<?php echo "Type: ".$result['ticket_type'] ?>" readonly>
           <input type="text" name="search" placeholder="Ticket cancel" value="<?php echo "Ticket cancellation fee: ".$result['ticket_cancellation_fee'] ?>"readonly>
           <input type="text" name="search" placeholder="class" value="<?php echo "class:".$result['class'] ?>" readonly>
           <input type="text" name="search" placeholder="floor" value="<?php echo "floor:".$result['floor'] ?>"  readonly>
           <br>
           <br>
           <button type="submit" id="b1" name="a" >BOOK Ticket</button> 
        <br>
        <br>
        <br>
           
       </form>
       <?php 
       }
      
       
      }
else{echo"Sorry!!!0 results found for one way ticket according to your requirement";}  ?>
<br> 
<br> 

<!-- end one way search result -->

    
   <?php 
      
  

if($rdate!="0000-00-00") {

$sql3="INSERT INTO `launch_ticket`(`fromm`, `too`, `journey_date`, `return_date`, `passenger`, `class`, `trip_type`, `ticket_type`, `floor`) VALUES ('$destination','$where','$rdate','0000-00-00','$person','$class','$triptype','$ttype','$floor')";  
$sql2=  "SELECT * FROM launch WHERE ticket_type Like '$ttype' and journey_date='$rdate' and class like '$class' and floor ='$floor' and base like '$destination'  and '$person' <= available_st  and dest like '$where' ";

$query_run=(mysqli_query($conn,$sql3));
$query_run=(mysqli_query($conn,$sql2));

if($query_run-> num_rows > 0){
       while($result=mysqli_fetch_array($query_run)){
           ?>
           <form action="" method="post">
           <input type="text" name="search" placeholder="name" value="<?php echo "Launch name: ".$result['name'] ?>" readonly>
           <input type="text" name="search" placeholder="seat" value="<?php echo "available seat: ".$result['available_st'] ?>"readonly>
           <input type="text" name="search" placeholder="base" value="<?php echo "Journey from: ".$result['base'] ?>" readonly>
           <input type="text" name="search" placeholder="destination" value="<?php echo "destination: " .$result['dest'] ?>" readonly>
           <input type="text" name="search" placeholder="journey date" value="<?php echo "Journey date: ".$result['journey_date'] ?>"readonly>
           <input type="text" name="search" placeholder="journey hour" value="<?php echo "Journey hour: ".$result['journey_hour'] ?>"readonly>
           <input type="text" name="search" placeholder="fare" value="<?php echo"fare: ". $result['fare'] ?>"readonly>
           <input type="text" name="search" placeholder="Ticket Type" value="<?php echo "Type: ".$result['ticket_type'] ?>"readonly>
           <input type="text" name="search" placeholder="Ticket cancel" value="<?php echo "Ticket cancellation fee: ".$result['ticket_cancellation_fee'] ?>"readonly>
           <input type="text" name="search" placeholder="class" value="<?php echo "class:".$result['class'] ?>" readonly>
           <input type="text" name="search" placeholder="floor" value="<?php echo "floor:".$result['floor'] ?>" readonly>
           <br>
           <br>
           <button type="submit" id="b1" name="a" >BOOK Ticket</button> 
           
        <br>
        <br>
        <br>
           
           
           
       </form>
       <?php 
       }
      }
      else{echo"0 results found for return ticket";} 
}     


?>

<!-- Code end-->
       <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
          <div class="container">
            <div class="row row-40 justify-content-lg-between">
              <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                    <ul class="footer-contacts d-inline-block d-sm-block">
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                          <div class="unit-body"><a class="link-aemail" href="mailto:#">info@demolink.org</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInDown" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Popular news</h6>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="#">Your Personal Guide to 5 Best Places to Visit on Earth</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">May 04, 2019</time>
                      </div>
                    </article>
                    <!-- Post Minimal 2-->
                    <article class="post post-minimal-2">
                      <p class="post-minimal-2-title"><a href="#">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a></p>
                      <div class="post-minimal-2-time">
                        <time datetime="2019-05-04">May 04, 2019</time>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                <div class="oh-desktop">
                  <div class="wow slideInLeft" data-wow-delay="0s">
                    <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                      <li><a href="about.html">About us</a></li>
                      <li><a href="#">Our Tours</a></li>
                      <li><a href="#">Our Team</a></li>
                      <li><a href="#">Gallery</a></li>
                      <li><a href="#">Blog</a></li>
                    </ul>
                    <div class="group-md group-middle justify-content-sm-start"><a class="button button-lg button-primary button-ujarak" href="#">Get in touch</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-corporate-bottom-panel">
          <div class="container">
            <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                <div>
                  <ul class="list-inline list-inline-sm footer-social-list-2">
                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 order-sm-first">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
              </div>
              <div class="col-sm-6 col-md-4 text-md-right">
                <p class="rights"><a href="#">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>