<?php 
include "config.php";
if(isset($_POST['sendmail'])){
      require 'PHPMailerAutoload.php';
      require 'mailaction.php';

      $mail = new PHPMailer;

      $mail->SMTPDebug = 4;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = EMAIL;                 // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom(EMAIL, 'Shaimaa Test');
      $mail->addAddress($_POST['email']);     // Add a recipient
      $mail->addReplyTo(EMAIL);

     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = $_POST['subject'];
      $mail->Body    = '<div style="borger:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
      $mail->AltBody = $_POST['message'];

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message has been sent';
      }
}
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
   <link href="css/style2.css" rel="stylesheet">
   <link href="css/Rtlstyle.css" rel="stylesheet">
   <?php
}
else{
  ?>
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/strong.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">

<?php
   }?>
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
      
          <ul class="hasactivear">
                <li  data-scroll="intro"  class="active"><a style="cursor: pointer; "
         class="ulnavar" href="#"><?php echo $lang['Home'] ?></a></li>
 
        <li data-scroll="About_Us" ><a style="cursor: pointer; "class="ulnavar active" 
          href="#" data-scroll="About_Us" ><?php echo $lang['About_Us'] ?></a></li>
  
        <li  data-scroll="Services" ><a  style="cursor: pointer; " class="ulnavar"
          href="#"  data-scroll="Services" ><?php echo $lang['Services'] ?></a></li>
          
      <li data-scroll="myteam"><a style="cursor: pointer; "class="ulnavar" 
       href="#"  data-scroll="myteam" ><?php echo $lang['Team'] ?> </a></li>
       
      <li data-scroll="Contact_us" ><a style="cursor: pointer; "class="ulnavar"
      href="#"  data-scroll="Contact_us" ><?php echo $lang['Contact_us'] ?></a></li>
      <?php 
             if($_SESSION['lang'] =="ar"){
          ?>

          <li class=""><a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a></li>
          </ul>

          <?php
             }else{
               ?>
          <li class=""> <a href="index.php?lang=ar"><?php echo $lang['lang_ar'] ?></a></li>
          </ul>

          <?php
          }?>

      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix blk blkar">
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
    <div  id="About_Us" class="blk blkar" >      
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
</div>
    <!--==========================
      Services Section
    ============================-->
    <div id="Services"  class="blk blkar" >

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
              <p class="description"><?php echo $lang['programming_def']?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['programming_def2'] ?></span></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Smart phone.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Smart_phone_app'] ?></a></h4>
              <p class="description"><?php echo $lang['Smart_phone_app_def'] ?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['Smart_phone_app_def2'] ?></span></p>

            </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Company Design.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Company_Design'] ?></a></h4>
              <p class="description"><?php echo $lang['Company_Design_def'] ?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['Company_Design_def2'] ?></span></p>
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
              <p class="description"><?php echo $lang['VBS_def'] ?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['VBS_def2'] ?></span></p>
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
              <p class="description"><?php echo $lang['Smart_home_def'] ?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['Smart_home_def2'] ?></span></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Security Cameras.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Security_Cameras'] ?> </a></h4>
              <p class="description"><?php echo $lang['Security_Cameras_def'] ?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['Security_Cameras_def2'] ?></span></p>


            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/VOIP.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['VOIP'] ?>  </a></h4>
              <p class="description"><?php echo $lang['VOIP_def'] ?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['VOIP_def2'] ?></span></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Networks.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Networks_and_Communications'] ?> </a></h4>
              <p class="description"><?php echo $lang['Networks_and_Communications_def'] ?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['Networks_and_Communications_def2'] ?></span></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/Servers.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['Servers'] ?> </a></h4>
              <p class="description"><?php echo $lang['Servers_def'] ?>
              <button class="read">...</button>
              <span class="more"><?php echo $lang['Servers_def2'] ?></span></p>
            </div>
          </div>
      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
            <div class="box">
              <div class="icon"><img src="img/Services/firewall.png"></div>
              <h4 class="title"><a href="#none"><?php echo $lang['fire_wall']?> </a></h4>
              <p class="description"><?php echo $lang['fire_wall_def'] ?>
              <button class="read">...</button>
              <br class="br">
              <span class="more"><?php echo $lang['fire_wall_def2'] ?></span>
              </p>
            </div>
          </div>
         

        </div>

      </div>
    </section><!-- #services -->
</div>
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
    <div id="myteam"  class="blk blkar" >

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
                            <span> Web Desgin & Programing Engineer</span>
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
  </div>
  </main>

  <!--==========================
    Footer
  ============================-->
  <div id="Contact_us" class="blk blkar" >
              <div class="arlo_tm_footer_contact_wrapper_all">
                <div class="arlo_tm_contact_wrap_all">
                  <div class="container">
                  <h1 class="tesr"><?php echo $lang['Contact_us'] ?></h1>
                    <div class="leftbox">
                      <div class="arlo_tm_mini_title_holder contact">
                        <h4 class="whi whii"><?php echo $lang['Get_in_Touch'] ?></h4>
                      </div>
                      <div class="short_info_wrap">
                        <ul>
                          <li><p><label><?php echo $lang['address'] ?>:</label><span class="whi"><?php echo $lang['address1'] ?> - <?php echo $lang['address2'] ?> - <?php echo $lang['address3'] ?></span></p></li>
                          <li><p><label><?php echo $lang['Email_Address'] ?>:</label><span class="whi">M.Sleem@egynass.net</a></span></p></li>
                          <li><p><label><?php echo $lang['Phone'] ?>:</label><span class="whi">+201061112636</span></p></li>
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
                          <form action="mailaction.php" method="post" class="contact_form" id="contact_form">
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="wrap">
                              <input name="name" type="text" placeholder="<?php echo $lang['Name'] ?>">
                            </div>
                            <div class="wrap">
                              <input name="email" type="text" placeholder="<?php echo $lang['Email'] ?>">
                            </div>
                            <div class="wrap">
                              <input name="phone" type="phone" placeholder="<?php echo $lang['Phone'] ?>">
                            </div>
                            <div class="wrap">
                              <textarea name="message" placeholder="<?php echo $lang['Message'] ?>"></textarea>
                            </div>
                            <div class="arlo_tm_button">
                            <input type="submit"  name="submit" value="<?php echo $lang['Send_Message'] ?>">

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
 $(document).ready(function(){
  $(".read").click(function(){
    $(".br").show();
    $(".more").show();
    if($(this).text() =='...'){
      $(this).hide();

    }
    else{
      $(".read").show();
      $(".more").hide();
    }

  });
});
$(".ulnav").click(function(e) {
    e.preventDefault();
    $("html,body").animate({
        
        scrollTop: $("#" + $(this).data("scroll")).offset().top

    }, 1000);
     $(this).addClass("active");
});


$(".hasactive li").click(function() {
  
   
     $(this).addClass("active").siblings().removeClass("active");
});
  
  
  $(window).scroll(function(){

    var scrototop =  $("#scrototop")

    if($(window).scrollTop()>=900){
       scrototop.fadeIn(400);
    }else{
        scrototop.fadeOut(400);
    }
    
    $(".blk").each(function(){
    if($(window).scrollTop()> $(this).offset().top - 30 ){
        var blk = $(this).attr("id");
        $(".hasactive li").removeClass("active");
        $(".hasactive li[data-scroll='"+ blk +"']").addClass("active");
    }
});



});
$("#scrototop").click(function(e){
    e.preventDefault();
    $("html, body").animate({
        scrollTop:0
    })

});
$("#tophome").click(function(e){
    e.preventDefault();
    $("html, body").animate({
        scrollTop:0
    })

});

$(".ulnavar").click(function(a) {
    a.preventDefault();
    $("html,body").animate({
        
        scrollTop: $("#" + $(this).data("scroll")).offset().top

    }, 1000);
     $(this).addClass("active");
});


$(".hasactivear li").click(function() {
  
   
     $(this).addClass("active").siblings().removeClass("active");
});
  
  
  $(window).scroll(function(){

    var scrototop =  $("#scrototop")

    if($(window).scrollTop()>=900){
       scrototop.fadeIn(400);
    }else{
        scrototop.fadeOut(400);
    }
    
    $(".blkar").each(function(){
    if($(window).scrollTop()> $(this).offset().top - 30 ){
        var blkar = $(this).attr("id");
        $(".hasactivear li").removeClass("active");
        $(".hasactivear li[data-scroll='"+ blkar +"']").addClass("active");
    }
});
});
$("#scrototop").click(function(a){
    a.preventDefault();
    $("html, body").animate({
        scrollTop:0
    })

});
$("#tophome").click(function(a){
    a.preventDefault();
    $("html, body").animate({
        scrollTop:0
    })

});
</script>
