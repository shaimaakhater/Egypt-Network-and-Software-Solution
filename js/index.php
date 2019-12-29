<?php 
include "config.php";
?>

<html lang="en"><head>
  <meta charset="utf-8">
  <title> <?php echo $lang['title'] ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="img/4.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <?php
   if($_SESSION['lang'] =="ar"){
    ?>
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/strong.css" rel="stylesheet">
   <link href="css/Rtlstyle.css" rel="stylesheet">
   <link href="css/style2.css" rel="stylesheet">
   <?php
}
else{
  ?>
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/strong.css" rel="stylesheet">
  <link href="css/plugins.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">

<?php
   }?>
   <style>
#more {display: none;}
</style>

</head>

<body>
  <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <a href="#intro" class="scrollto"><img src="img/4.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro"><?php echo $lang['Home'] ?></a></li>
          <li class=""><a href="#about"> <?php echo $lang['About_Us'] ?></a></li>
          <li class=""><a href="#services"><?php echo $lang['Services'] ?></a></li>
          <li class=""><a href="#team"><?php echo $lang['Team'] ?></a></li>
          <li class=""><a href="#Contact_us"><?php echo $lang['Contact_us'] ?></a></li>
          <?php 
             if($_SESSION['lang'] =="ar"){
          ?>
          <li class=""><a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a></li>
          <?php
             }else{
               ?>
          <li class=""> <a href="index.php?lang=ar"><?php echo $lang['lang_ar'] ?></a></li>

          <?php
          }?>

                </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/Untitled-3.png" alt="" class="img-fluid eimg">
      </div>

      <div class="intro-info">
        <br>
        <h2> <?php echo $lang['title'] ?></h2>
        <div>
          <a href="#services" class="btn-services scrollto"> <?php echo $lang['OurServices'] ?></a>
                </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3><?php echo $lang['About_Us'] ?></h3>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
          <h1 style="color:#007bff"> <?php echo $lang['title'] ?></h1>
            <p> <?php echo $lang['Definition_of_company'] ?></p>
            <h1 style="color:#007bff"> <?php echo $lang['the_future_vision'] ?></h1>
            <p> <?php echo $lang['Definition_future_vision'] ?></p>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <img src="img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>


      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 style="margin-left:60px"><?php echo $lang['Services'] ?></h3>
          
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/programming.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['programming'] ?></a></h4>
              <p class="description"><?php echo $lang['programming_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Smart phone.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Smart_phone_app'] ?></a></h4>
              <p class="description"><?php echo $lang['Smart_phone_app_def'] ?><?php echo "<span id='dots'>...</span><span id='more'>";?><?php echo $lang['Smart_phone_app_def2'] ?>
            </p>
            <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Company Design.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Company_Design'] ?></a></h4>
              <p class="description"><?php echo $lang['Company_Design_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Hosting.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Hosting'] ?></a></h4>
              <p class="description"><?php echo $lang['Hosting_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/VBS.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['VBS'] ?></a></h4>
              <p class="description"><?php echo $lang['VBS_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/cloud server.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Full_server'] ?>  </a></h4>
              <p class="description"><?php echo $lang['Full_server_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Smart_home.png"></div>
              <h4 class="title"><a href="#none"> <?php echo $lang['Smart_home'] ?></a></h4>
              <p class="description"><?php echo $lang['Smart_home_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Security Cameras.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Security_Cameras'] ?> </a></h4>
              <p class="description"><?php echo $lang['Security_Cameras_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/VOIP.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['VOIP'] ?>  </a></h4>
              <p class="description"><?php echo $lang['VOIP_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Networks.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Networks_and_Communications'] ?> </a></h4>
              <p class="description"><?php echo $lang['Networks_and_Communications_def'] ?></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Servers.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Servers'] ?> </a></h4>
              <p class="description"><?php echo $lang['Servers_def'] ?></p>
            </div>
          </div>
      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/firewall.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['fire_wall'] ?> </a></h4>
              <p class="description"><?php echo $lang['fire_wall_def'] ?></p>
            </div>
          </div>
         

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
      <div class="container">
        <header class="section-header">
          <h3><?php echo $lang['Why_choose_us'] ?></h3>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-3 mb-4">
            <div class="card wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
                <i class="fa fa-handshake-o"></i>
              <div class="card-body">
                <h5 class="card-title"><?php echo $lang['Safe_handling'] ?></h5>
                <p class="card-text"><?php echo $lang['Safe_handling_def'] ?></p>

              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-4">
            <div class="card wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
                <i class="fa fa-star"></i>
              <div class="card-body">
                <h5 class="card-title"><?php echo $lang['90_days_warranty'] ?></h5>
                <p class="card-text"><?php echo $lang['90_days_warranty_def'] ?></p>

              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-4">
            <div class="card wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
                <i class="fa fa-support"></i>
              <div class="card-body">
                  <h5 class="card-title"><?php echo $lang['technical_support'] ?></h5>
                  <p class="card-text"><?php echo $lang['technical_support_def'] ?></p>
  
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 mb-4">
            <div class="card wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
                <i class="fa fa-bell"></i>
              <div class="card-body">
                  <h5 class="card-title"><?php echo $lang['Phone_notifications'] ?></h5>
                  <p class="card-text"><?php echo $lang['Phone_notifications_def'] ?></p>
  
              </div>
            </div>
          </div>

        </div>



      </div>
    </section>
    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3><?php echo $lang['Team'] ?></h3>
        </div>

        <div class="row">

            <div class="col-lg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;" >      
                <div class="member">
                    <img src="img/3.jpg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>MAHMOUD SLEEM</h4>
                            <span> Server Engineer</span>
                        </div>
                      </div>
            </div>
            </div>
            <div class="col-lg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;" >      
                <div class="member">
                    <img src="img/2.jpeg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>SHIMAA KHATER</h4>
                            <span> Programing Engineer</span>
                        </div>
                      </div>
            </div>
            </div>     
            <div class="col-lg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;" >      
                <div class="member">
                <img src="img/1.jpg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                            <h4>RAMY ELSSIFY</h4>
                            <span> Network Engineer
                              </span>
                        </div>
                      </div>
            </div>
            </div>
            <div class="col-lg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;" >      
                <div class="member">
                    <img src="img/4f.jpeg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>FATMA ALI </h4>
                            <span> 
                                Marketing & Voice over
                              </span>
                        </div>
                      </div>
            </div>
            </div>     
            <div class="col-lg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;" >      
                <div class="member">   
                 <img src="img/4.jpg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>
                          MAHMOUD KHALED</h4>
                            <span> Security Engineer
                              </span>
                        </div>
                      </div>
            </div>
            </div>


        </div>
  </div></section>
  
  </main>

  <!--==========================
    Footer
  ============================-->
  <div id="Contact_us">
              <div class="arlo_tm_footer_contact_wrapper_all">
                <div class="arlo_tm_contact_wrap_all">
                  <div class="container">
                  <h1 class="tesr"><?php echo $lang['Contact_us'] ?></h1>
                    <div class="leftbox">
                      <div class="arlo_tm_mini_title_holder contact">
                        <h4 class="whi whii">Get in Touch</h4>
                      </div>
                      <div class="short_info_wrap">
                        <ul>
                          <li><p><label>Address:</label><span class="whi"><?php echo $lang['address1'] ?></span></p></li>
                          <li><p><span class="whi"><?php echo $lang['address2'] ?></span></p></li>
                          <li><p><span class="whi"><?php echo $lang['address3'] ?></span></p></li>
                          <li><p><span><a href="M.Sleem@egynass.net">example@gmail.com</a></span></p></li>
                          <li><p><label>Phone:</label><span class="whi">+201061112636</span></p></li>
                        </ul>
                      </div>
                      <div class="footer blue">
          <div class="container">

           <ul>
              <li><a href="https://www.facebook.com/Egypt.NASS/" target="_blank" ><i class="fa fa-facebook-square fa-lg"></i></a></li>  
              <li><a href="https://twitter.com/egynass" target="_blank" ><i class="fa fa-twitter-square fa-lg"></i></a></li>  
              <li><a href="https://www.facebook.com/Egypt.NASS/" target="_blank" ><i class="fa fa-linkedin-square fa-lg"></i></a></li>  
              <li><a href="https://www.instagram.com/egypt_network_solutions/" target="_blank" ><i class="fa fa-instagram fa-lg"></i></a></li>
            </ul>
  </div>
  </div>
                    </div>
                    <div class="rightbox">
                      <div class="arlo_tm_contact_wrap">
                        <div class="main_input_wrap">
                          <form action="test.php" method="post" class="contact_form" id="contact_form">
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="wrap">
                              <input name="name" type="text" placeholder="Your Name">
                            </div>
                            <div class="wrap">
                              <input name="email" type="text" placeholder="Your Email">
                            </div>
                            <div class="wrap">
                              <input name="phone" type="phone" placeholder="Your Phone">
                            </div>
                            <div class="wrap">
                              <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="arlo_tm_button">
                            <input type="submit"  name="submit" value="Send Message">

                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>      
      <!--end footer-->
  </footer><!-- #footer -->

  <a href="#" class="back-to-top" style="display: none;"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script><nav class="mobile-nav d-lg-none">
        <ul>
          <li class="active"><a href="#intro"><?php echo $lang['Home'] ?></a></li>
          <li class=""><a href="#about"><?php echo $lang['About_Us'] ?> </a></li>
          <li class=""><a href="#services"><?php echo $lang['Services'] ?></a></li>
          <li class=""><a href="#team"><?php echo $lang['Team'] ?></a></li>
          <li class=""><a href="#Contact_us"><?php echo $lang['Contact_us'] ?> </a></li>
          <?php 
             if($_SESSION['lang'] =="ar"){
          ?>
          <li class=""><a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a></li>
          <?php
             }else{
               ?>
          <li class=""> <a href="index.php?lang=ar"><?php echo $lang['lang_ar'] ?></a></li>

          <?php
          }?>

                </ul>
      </nav><div class="mobile-nav-overly"></div>
      <script src="lib/wow/wow.min.js"></script>


  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>




