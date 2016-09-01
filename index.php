<?php
$status_message = "";


$name = "";
$email = "";
$phone = "";
$subject = "";
$message = "";


if (isset($_POST['submit'])) {

    date_default_timezone_set('Asia/Colombo');

    $todayis = date("l, F j, Y, g:i a");

    $visitor_email = $_POST['email'];
    $subject = 'Website Enquiry - Contact Form';
    $from = 'info@sublime.lk'; // give from email address
    $replay = 'mahesh@sublime.lk';

    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $visitor_email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $html = "<table  style='border:solid 1px #AFAFAF; font-size: 15px; font-family: monospace; padding: 10px; color: #1B0080;'>";

    $html .= "<tr><td colspan='3' ><h3 style='color: black'>Contact Form Inquiry - www.sublime.lk</h3> </td> </tr>";

    $html .= "<tr><td style='border-bottom: solid 1px #AFAFAF; '><b>Name</b> </td><td style='border-bottom: solid 1px #AFAFAF; '> : </td><td style='border-bottom: solid 1px #AFAFAF; '>" . $_POST['name'] . "</td></tr>";

    $html .= "<tr><td style='border-bottom: solid 1px #AFAFAF; '><b>Email</b> </td><td style='border-bottom: solid 1px #AFAFAF; '> : </td><td style='border-bottom: solid 1px #AFAFAF; '>" . $_POST['email'] . "</td></tr>";

    $html .= "<tr><td style='border-bottom: solid 1px #AFAFAF; '><b>Phone</b> </td><td style='border-bottom: solid 1px #AFAFAF; '> : </td><td style='border-bottom: solid 1px #AFAFAF; '>" . $_POST['phone'] . "</td></tr>";

    $html .= "<tr><td style='border-bottom: solid 1px #AFAFAF; '><b>Subject</b> </td><td style='border-bottom: solid 1px #AFAFAF; '> : </td><td style='border-bottom: solid 1px #AFAFAF; '>" . $_POST['subject'] . "</td></tr>";

    $html .= "<tr><td style='border-bottom: solid 1px #AFAFAF; '><b>Message</b> </td><td style='border-bottom: solid 1px #AFAFAF; '> : </td><td style='border-bottom: solid 1px #AFAFAF; '>" . $_POST['message'] . "</td></tr>";

    $html .= "</table>";

    if (
            mail($replay, $subject, $html, $headers) && mail('mahesh@sublime.lk', $subject, $html, $headers) && mail('info@sublime.lk', $subject, $html, $headers)
    ) {
        $status_message = "Your message has been sent successfully";
    } else {
        $status_message = "Could nod be sent your message";
    }
}

if (isset($_POST['check'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
}
?>


<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from arwen.ideal-theme.com/html/arwen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 04:18:38 GMT -->
    <head>

        <meta charset="utf-8" />
        <title>Sublime IT Solutions and Security Systems</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="ICON" href="images/icon.png" type="image/ico" />

        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 


        <!-- CSS Files -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext">
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/animate.min.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <link rel="stylesheet" href="css/settings.css" />
        <link rel="stylesheet" href="css/prettyPhoto.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <link rel="stylesheet" href="css/player/YTPlayer.css" />

        <!-- End CSS Files -->

    </head>


    <body data-spy="scroll" data-target=".nav-menu" data-offset="50">

        <!-- Page Loader-->
        <div id="pageloader">   
            <div class="loader-item">
                <img src="images/loading.gif" alt='Loading...' />
            </div>
        </div>
        <!-- End Page Loader-->

        <!-- Home Section -->
        <section id="home">
            <!-- Top Bar Section -->
            <section id="pagetop">
                <!-- Content -->
                <div class="content pagetop">

                    <!-- Top Details-->
                    <div class="col-xs-9 left">                     
                        <div class="top_details">
                            <!-- Languages DropDown-->
                            <div class="languages drop">
                                <a href="#"><i class="fa fa-globe"></i> Languages</a>
                                <div class="languages-panel">
                                    <ul class="content">
                                        <li class="active"><a href="#">English <i class="fa fa-check lang_checked"></i></a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">German</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Languages DropDown-->
                            <span class="details-on-top hidden-in-mobile-a"><i class="fa fa-map-marker"></i>63739 street Morlem ipsum City, Country</span>
                            <span class="details-on-top"><i class="fa fa-mobile"></i>+ 356 836 2335</span>
                            <span class="details-on-top"><i class="fa fa-skype"></i>yourskype</span>
                        </div>
                    </div>
                    <!-- End Top Details-->  

                    <!-- Top Social Media-->             
                    <div class="col-xs-3 right">
                        <div class="top-social-media">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                    <!-- End Social Media--> 
                    <div class="clear"></div>
                </div>
                <!-- End Content -->
            </section>
            <!-- End Top Bar Section -->

            <!-- Navigation Section -->
            <section id="navigation" class="shadow">
                <!-- Content -->
                <div class="content navigation">
                    <!-- Logo -->
                    <div class="logo">
                        <a class="scroll" href="#home"><img src="images/logo.png" alt="Logo"/></a>
                    </div>
                    <!-- End Logo -->

                    <!-- Nav Menu -->
                    <div class="nav-menu">
                        <ul class="nav main-nav">
                            <li class="active"><a class="scroll" href="#home">Home</a></li>
                            <li><a class="scroll" href="#intro_section">About</a></li>
                            <li><a class="scroll" href="#history">History</a></li>
                            <li><a class="scroll" href="#team">Team</a></li>
                            <li><a class="scroll" href="#our-clients">Clients</a></li>
                            <li><a class="scroll" href="#services">Services</a></li>
                            <li><a class="scroll" href="#portfolio">Portfolio</a></li>
                            <li class="dropdown-toggle nav-toggle"><a class="scroll" href="#prices">Prices</a>
                                <!--                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Prices 1</a></li>
                                                                    <li><a href="#">Prices 2</a></li>
                                                                    <li><a href="#">Prices 3</a></li>
                                                                </ul>-->
                            </li>                    
                            <li><a class="scroll" href="#contact">Contact</a></li>				
                        </ul>
                    </div>
                    <!-- End Nav Menu -->

                    <!-- Dropdown Menu For Mobile Devices-->
                    <div class="dropdown mobile-drop">
                        <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                        <ul class="nav dropdown-menu fullwidth" role="menu" >
                            <li><a class="scroll" href="#home">Home</a></li>
                            <li><a class="scroll" href="#intro_section">About</a></li>
                            <li><a class="scroll" href="#history">History</a></li>
                            <li><a class="scroll" href="#team">Team</a></li>
                            <li><a class="scroll" href="#our-clients">Clients</a></li>
                            <li><a class="scroll" href="#services">Services</a></li>
                            <li><a class="scroll" href="#portfolio">Portfolio</a></li>                                               
                            <li><a class="scroll" href="#prices">Prices</a></li>                    
                            <li><a class="scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- End Dropdown Menu For Mobile Devices-->
                    <div class="clear"></div>
                </div>
                <!-- End Content -->
            </section>
            <!-- End Navigation Section -->


            <!-- Revolution Slider -->
            <section id="slider">
                <div class="tp-banner">
                    <ul>
                        <!-- Slide -->
                        <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800" >
                            <!-- MAIN IMAGE -->
                            <img src="images/rev-slider/slide3.jpg"  alt="slidebg3"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                            <!-- Layer 1 -->
                            <div class="tp-caption sfb customout"
                                 data-x="420"
                                 data-y="250"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="900"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="1300"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/badge.png" alt="earth" />
                            </div>

                            <!-- Layer 2 -->
                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="50"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h6 class="rev-text rev-title-f">Start your web site from <em>$100</em></h6>
                            </div>

                            <!-- Layer 3 -->
                            <div class="tp-caption sfl customout "
                                 data-x="0"
                                 data-y="130"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <p class="rev-text p5">super responsive, clean creative Website</p>
                            </div>


                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="180"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>



                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="220"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>


                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="260"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="300"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="340"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1900"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="380"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="420"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <!-- Layer 4 -->
                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="160"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">5 Web Pages Mobile Friendly Design</h2>
                            </div>


                            <!-- Layer 4 -->
                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="200"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Free .com , .net , .org Domain</h2>
                            </div>


                            <!-- Layer 4 -->
                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="240"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2400"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Free 200 MB Hosting Space</h2>
                            </div>

                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="280"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Free Email Your Website</h2>
                            </div>



                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="320"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="3000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Contact Form</h2>
                            </div>




                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="360"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="3300"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Location Map</h2>
                            </div>




                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="400"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="3600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Unlimited Bandwidth</h2>
                            </div>




                            <div class="tp-caption customin customout "
                                 data-x="700" 
                                 data-y="25" 
                                 data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/icons_blog.png" alt="">
                            </div>



                            <div class="tp-caption sft customout"
                                 data-x="830"
                                 data-y="80"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/icon/book.png" alt="">
                            </div>



                            <div class="tp-caption sft customout"
                                 data-x="970"
                                 data-y="80"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/icon/contact.png" alt="">
                            </div>



                            <div class="tp-caption sft customout"
                                 data-x="1050"
                                 data-y="170"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2300"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/icon/video.png" alt="">
                            </div>




                            <div class="tp-caption sft customout"
                                 data-x="1080"
                                 data-y="295"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/icon/chart.png" alt="">
                            </div>




                            <div class="tp-caption sft customout"
                                 data-x="750"
                                 data-y="220"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="3500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/icon/lap.png" alt="">
                            </div>




                            <div class="tp-caption sft customout"
                                 data-x="810"
                                 data-y="355"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="3300"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/icon/image.png" alt="">
                            </div>



                            <div class="tp-caption sft customout"
                                 data-x="970"
                                 data-y="375"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="3000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/icon/pencil.png" alt="">
                            </div>

                            <div class="tp-caption sft customout"
                                 data-x="905"
                                 data-y="215"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/icon/world.png" alt="">
                            </div>

                            <!-- Layer 8 -->
                            <div class="tp-caption customin customout hidden-in-mobile-b hidden-in-mobile-c"
                                 data-x="0" 
                                 data-y="470" 
                                 data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="3600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <a class="white-button" href="#">Read More</a>
                            </div>			
                        </li>

                        <!-- Slide -->
                        <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800" >
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/img-1.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                            <!-- Layer 1 -->

                            <div class="tp-caption sfb customout"
                                 data-x="220"
                                 data-y="160"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="900"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="1300"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/process.png" alt="earth" />
                            </div>


                            <div class="tp-caption sft customout"
                                 data-x="345"
                                 data-y="30"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1400"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/1.png" alt="earth" />
                            </div>

                            <!-- Layer 2 -->
                            <div class="tp-caption sft customout "
                                 data-x="453"
                                 data-y="120"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/2.png" alt="earth" />
                            </div>

                            <!-- Layer 3 -->
                            <div class="tp-caption sft customout "
                                 data-x="410"
                                 data-y="310"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/3.png" alt="earth" />
                            </div>



                            <div class="tp-caption sft customout"
                                 data-x="230"
                                 data-y="400"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2300"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/4.png" alt="earth" />
                            </div>

                            <!-- Layer 2 -->
                            <div class="tp-caption sft customout "
                                 data-x="93"
                                 data-y="320"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/5.png" alt="earth" />
                            </div>

                            <!-- Layer 3 -->
                            <div class="tp-caption sft customout "
                                 data-x="90"
                                 data-y="125"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2900"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/6.png" alt="earth" />
                            </div>

                            <div class="tp-caption sft customout "
                                 data-x="140"
                                 data-y="30"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="3200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/7.png" alt="earth" />
                            </div>



                            <div class="tp-caption sft customout "
                                 data-x="840"
                                 data-y="50"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="3200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <img src="images/slider/stick_figure.gif" width="300" height="500" alt="earth" />
                            </div>

                        </li>

                        <!-- Slide -->
                        <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800" >
                            <!-- MAIN IMAGE -->
                            <img src="images/slider/img-3.jpg"  alt="slidebg2"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">					




                            <!-- Layer 2 -->
                            <div class="tp-caption lft customout"
                                 data-x="0" 
                                 data-y="420" 
                                 data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/icon/chrome.png" alt="" />
                            </div>

                            <div class="tp-caption lft customout"
                                 data-x="110" 
                                 data-y="420" 
                                 data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/icon/edge.png" alt="" />
                            </div>
                            <div class="tp-caption lft customout"
                                 data-x="220" 
                                 data-y="420" 
                                 data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/icon/firfox.png" alt="" />
                            </div>

                            <div class="tp-caption lft customout"
                                 data-x="330" 
                                 data-y="420" 
                                 data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2400"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/icon/opera.png" alt="" />
                            </div>


                            <div class="tp-caption lft customout"
                                 data-x="440" 
                                 data-y="400" 
                                 data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/icon/safari.png" alt="" />
                            </div>


                            <div class="tp-caption lft customout"
                                 data-x="650" 
                                 data-y="20" 
                                 data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1200"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/pc.png" alt="">
                            </div>

                            <div class="tp-caption lfb customout"
                                 data-x="560" 
                                 data-y="200" 
                                 data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/lap.png" alt="" />
                            </div>


                            <div class="tp-caption customin customout "
                                 data-x="950" 
                                 data-y="220" 
                                 data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/tab.png" alt="" />
                            </div>

                            <div class="tp-caption customin customout "
                                 data-x="870" 
                                 data-y="320" 
                                 data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="1000"
                                 data-start="2100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 >
                                <img src="images/slider/mobile.png" alt="" />
                            </div>

                            <!-- Layer 3 -->




                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="80"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1500"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>



                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="120"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>


                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="160"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="200"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="240"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1900"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="280"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <div class="tp-caption sfl customout"
                                 data-x="0"
                                 data-y="320"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">

                                <img src="images/slider/icon/Web-Buttons.png" alt="sublime">

                            </div>

                            <!-- Layer 4 -->
                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="60"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Fresh, Clean, Professional and Unique Design</h2>
                            </div>


                            <!-- Layer 4 -->
                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="100"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2100"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Browser Compatible and Responsive Web Design</h2>
                            </div>


                            <!-- Layer 4 -->
                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="140"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2400"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Amazing Sliders, Gallery Pages, Navigation Menu, ect</h2>
                            </div>

                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="180"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="2700"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Including Attractive Multimedia on Your Website</h2>
                            </div>



                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="220"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="3000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Multi Language Support</h2>
                            </div>




                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="260"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="3300"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Social Media Integration</h2>
                            </div>




                            <div class="tp-caption sfb customout "
                                 data-x="40"
                                 data-y="300"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="900"
                                 data-start="3600"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="900"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on">
                                <h2 class="rev-text-b rev-title-b">Fast, Secure and Reliable Web Hostin</h2>
                            </div>
                        </li>


                    </ul>
                </div>
            </section>
            <!-- End Revolution Slider -->
        </section>
        <!-- End Home-->

        <!-- Intro Section -->
        <section id="intro_section" class="main-content">
            <!-- Content -->
            <div class="content intro_section">
                <div class="animated" data-animation="fadeInUp" data-animation-delay="300">
                    <h1>Sublime IT Solutions and Security Systems</h1><br>
                    <p class="welcome-note">
                        Sublime IT Solutions is a Sri Lankan IT solutions company and a Web / Internet services providers base in Galle, Sri Lanka. We offer top-quality professional Website Design, Application Development, Website Redesign, Graphic Design, Web Development, SEO Services, Social Media Marketing & Advertising, Domain Registration, Web Hosting, Business Email Services and other Web related solutions and services. Third Eye Vision will make your web surfers too clearly and we help you to move to the doorstep of your customers. 

                    </p>
                </div>
            </div>
            <!-- End Content -->
        </section>
        <!-- End Intro Section -->

        <!-- Important Links -->
        <section id="important_links" class="main-content">
            <!-- Content -->
            <div class="content important_links animated" data-animation="fadeInUp" data-animation-delay="300">
                <!-- Important Links Carousel-->
                <div id="carousel-example-generic" class="carousel slide important_links_slide" data-ride="carousel">
                    <!-- Slides Wrapper -->
                    <div class="carousel-inner welcome-banner">
                        <!-- Slide -->
                        <div class="item active">
                            <div class="welcome-banner-text">
                                <h1 class="main_title_a">
                                    Our Vision
                                </h1>
                                <p>Our vision is to constantly grow as a professional IT Solutions company and assist our clients become leaders in their industries</p>
                                <a href="about-us.php" class="more_a">Read More</a>
                            </div>
                        </div>	
                        <!-- End Slide -->

                        <!-- Slide -->
                        <div class="item">
                            <div class="welcome-banner-text">
                                <h1 class="main_title_a">Our Mission</h1>
                                <p>Our mission is to develop elegant and affordable web solutions that enable small to large businesses to establish visibility online, increase sales, and improve productivity.</p>
                                <a href="about-us.php" class="more_a">Read More</a>
                            </div>
                        </div>
                        <!-- End Slide -->				
                    </div>
                    <!-- End Slides Wrapper -->

                    <!-- Controls -->
                    <a class="left carousel-control s-controls" href="#carousel-example-generic" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control s-controls" href="#carousel-example-generic" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <!-- End Controls -->
                </div>
                <!-- End Important Links Carousel-->
            </div>
            <!-- End Content -->
        </section>
        <!-- End Important Links -->

        <!-- About Section -->
        <section id="about" class="main-content">
            <!-- Content -->
            <div class="content">

                <!-- Main Title -->
                <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                    <span>What </span>we do
                </h1>

                <!-- What We Do -->
                <ul class="about-contents slide-boxes">

                    <!-- Item -->
                    <li class="about box animated" data-animation="rotateInDownLeft" data-animation-delay="100">
                        <a href="#" class="about-logo">
                            <i class="fa fa-code"></i>
                        </a>
                        <h3>Software Development</h3>
                        <p>Manage your works simply  with the flexibility, agility and decisiveness to help you better secure your business through ICT innovation and get your business online to manage from any location</p>
                        <a href="#" class="more_b"><i class="fa fa-plus"></i></a>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="about box animated" data-animation="rotateInDownLeft" data-animation-delay="200">
                        <a href="#" class="about-logo">
                            <i class="fa fa-desktop"></i>
                        </a>
                        <h3>Web Design and Development</h3>
                        <p>Web site design, Website redesign, Website development, Website maintenance, CMS , E-Commerce development, Blog development and SEO Services and any kind of online promotions to your site.</p>
                        <a href="#" class="more_b"><i class="fa fa-plus"></i></a>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="about box animated" data-animation="rotateInDownLeft" data-animation-delay="300">
                        <a href="#" class="about-logo">
                            <i class="fa fa-users"></i>
                        </a>
                        <h3>Social Media Marketing</h3>
                        <p>We help to get more business from any leading social media and sale or promote your products for reasonable prices without website. Email, Facebook, Youtube, Booking.com and ect.</p>
                        <a href="#" class="more_b"><i class="fa fa-plus"></i></a>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="about box animated" data-animation="rotateInDownLeft" data-animation-delay="400">
                        <a href="#" class="about-logo">
                            <i class="fa fa-camera-retro"></i>
                        </a>
                        <h3>Graphic Design</h3>
                        <p>We promise to deliver the most outstanding graphic designs and to take your end results from good to great and we guarantee to ensure a powerful impression while generating effective results that you require.</p>
                        <a href="#" class="more_b"><i class="fa fa-plus"></i></a>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="about box animated" data-animation="rotateInDownLeft" data-animation-delay="500">
                        <a href="#" class="about-logo">
                            <i class="fa fa-video-camera"></i>
                        </a>
                        <h3>CCTV Installation</h3>
                        <p>We have over 04 years experience with  Security Camera Systems. Our DVR systems come standard with Live Remote Viewing which allows you to view your security system from the comfort of your home, or on the road.</p>
                        <a href="#" class="more_b"><i class="fa fa-plus"></i></a>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End What We Do -->
                <div class="clear"></div>

            </div>
            <!-- End Content -->
        </section>
        <!-- End About Section-->	

        <!-- Numbers Section -->
        <section id="numbers" class="parallax-section main-content">
            <!-- Balon -->
            <div id="balon" class="balon">
                <!-- Content -->
                <div class="content">

                    <!-- Main Title -->
                    <div class="section-title animated" data-animation="fadeInUp" data-animation-delay="0">
                        <h1 class="my_title_b">Our Numbers</h1>
                        <div class="seperator"><span class="black_line"></span></div>
                        <h4 class="subtitle">We are a small creative team, trying to enrich the lives of others</h4>
                    </div>

                    <!-- Numbers Blocks -->
                    <div class="numbers-blocks">

                        <!-- Item -->
                        <div class="col-md-3 col-sm-3 col-xs-6">          
                            <span class="counter animated hiding" data-animation="fadeInDown" data-animation-delay="300">
                                <i class="fa fa-group fa-4x"></i>
                                <span data-to="150" data-from="0" class="value">150</span>
                                <p>clients</p>
                            </span>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="col-md-3 col-sm-3 col-xs-6">          
                            <span class="counter animated hiding" data-animation="fadeInDown" data-animation-delay="600">
                                <i class="fa fa-trophy fa-4x"></i>
                                <span data-to="450" data-from="0" class="value">450</span>
                                <p>projects</p>
                            </span>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="col-md-3 col-sm-3 col-xs-6 numbers-item-margin">          
                            <span class="counter animated hiding" data-animation="fadeInDown" data-animation-delay="900">
                                <i class="fa fa-coffee fa-4x"></i>
                                <span data-to="380" data-from="0" class="value">380</span>
                                <p>coffee cups</p>
                            </span>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="col-md-3 col-sm-3 col-xs-6 numbers-item-margin last-in-mobile-a">          
                            <span class="counter animated hiding" data-animation="fadeInDown" data-animation-delay="1200">
                                <i class="fa fa-code fa-4x"></i>
                                <span data-to="888150" data-from="0" class="value">888150</span>
                                <p>lines of code</p>
                            </span>
                        </div>
                        <!-- End Item -->
                        <div class="clear"></div>
                    </div>
                    <!-- End Numbers Blocks -->

                </div>	
                <!-- End Content -->
            </div>
            <!-- End Balon -->
        </section>
        <!-- End Numbers Section -->

        <!-- Skills and Possibilities -->
        <section id="skills-and-possibilities">
            <!-- Content -->
            <div class="content">
                <!-- Tabs -->
                <div class="tabs animated" data-animation="fadeInLeft" data-animation-delay="300">

                    <h2 class="main_title">Our possibilities</h2>

                    <!-- Tabs Nav -->	
                    <ul class="nav nav-tabs" id="tab-menu">
                        <li class="active"><a href="#first" data-toggle="tab">Web Design</a></li>
                        <li><a href="#second" data-toggle="tab">Wordpress Theme</a></li>
                        <li><a href="#third" data-toggle="tab">HTML/CSS</a></li>
                    </ul>
                    <!-- End Tabs Nav -->

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Tab -->
                        <div class="tab-pane fade in active" id="first">
                            <div class="tab-image">
                                <img src="images/img-1.jpg" alt="" title="" />
                            </div>
                            <div class="tab-description">
                                <p>There are many variations of passages Lorem Ipsum available, but majority have suffered alteration in some form, injected humour, randomised words which don't look even slightly believable. If you are going to use a passage  em Ipsum, you need to sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend repeat predefined chunks necessary, making this the first true generator Internet. 
                                </p>
                            </div>
                        </div>
                        <!-- End Tab -->

                        <!-- Tab -->	
                        <div class="tab-pane fade" id="second">
                            <div class="tab-image">
                                <img src="images/img-1.jpg" alt="" title="" />
                            </div>
                            <div class="tab-description">
                                <p>If you are going to use a passage  em Ipsum, you need to sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend repeat predefined chunks necessary, making this the first true generator Internet. 
                                </p>
                            </div>
                        </div>
                        <!-- End Tab -->

                        <!-- Tab -->	
                        <div class="tab-pane fade" id="third">
                            <div class="tab-image">
                                <img src="images/img-1.jpg" alt="" title="" />
                            </div>
                            <div class="tab-description only">
                                <p>There are many variations of passages Lorem Ipsum available, but majority have suffered alteration in some form, injected humour, randomised words which don't look even slightly believable. If you are going to use a passage  em Ipsum, you need to sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend repeat predefined chunks necessary, making this the first true generator Internet. </p>

                                <p>Which don't look even slightly believable. If you are going use a passage of Ipsum, you need be sure there isn't anything embarrassing hidden in the predefined chunks as necessary.</p>
                            </div>
                        </div>	
                        <!-- End Tab -->

                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Tabs -->

                <!-- Progress -->
                <div class="progress-bars animated" data-animation="fadeInRight" data-animation-delay="600">


                    <h2 class="main_title">Our Skills</h2>
                    <p class="skills-description">Lorem ipsum dolor sit amet consectetur.</p>

                    <!-- Progress Content -->
                    <div class="progress-content">
                        <!-- Item -->
                        <div class="bars-item">
                            <div class="progress-texts">
                                <span class="progress-name">Graphic Design</span>
                                <span class="progress-value">65%</span>
                                <div class="clear"></div>
                            </div>

                            <div class="progress active">
                                <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="bars-item">
                            <div class="progress-texts">
                                <span class="progress-name">Photography</span>
                                <span class="progress-value">50%</span>
                                <div class="clear"></div>
                            </div>

                            <div class="progress active">
                                <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="bars-item">
                            <div class="progress-texts">
                                <span class="progress-name">HTML / CSS</span>
                                <span class="progress-value">75%</span>
                                <div class="clear"></div>
                            </div>

                            <div class="progress active">
                                <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="bars-item">
                            <div class="progress-texts">
                                <span class="progress-name">WordPress</span>
                                <span class="progress-value">70%</span>
                                <div class="clear"></div>
                            </div>

                            <div class="progress active">
                                <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="bars-item">
                            <div class="progress-texts">
                                <span class="progress-name">Web Design</span>
                                <span class="progress-value">30%</span>
                                <div class="clear"></div>
                            </div>

                            <div class="progress active">
                                <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                            </div>
                        </div>
                        <!-- End Item -->

                    </div>
                    <!-- End Progress Content -->
                </div>
                <!-- End Progress -->
                <div class="clear"></div>
            </div>
            <!-- End Content -->
        </section>
        <!-- End Skills and Possibilities -->

        <!-- History Section -->
        <section id="history" class="main-content">
            <!-- Parallax Overlay -->
            <div class="parallax-overlay">
                <!-- Toons -->
                <div class="toons toons2">
                    <!-- Content -->
                    <div class="content">

                        <!--White Title-->
                        <div class="section-title-white animated" data-animation="fadeInUp" data-animation-delay="300">
                            <h1>company history</h1>
                            <div class="seperator"><span class="white_line"></span></div>
                        </div>
                        <!--End White Title-->

                        <!-- History Timeline -->
                        <ul class="history-timeline list-unstyled pretty-lightbox-b">

                            <!-- History Year -->
                            <li class="year">2013</li>

                            <!-- Item -->
                            <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="50">
                                <div class="timeline-image">
                                    <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">
                                        <span class="image-overlay"></span>
                                        <span class="image-zoom"><i class="fa fa-search"></i></span>
                                        <img src="images/timeline/img1.jpg" title="" alt="" />
                                    </a>
                                </div>
                                <h4>Your Event Title Here</h4>
                                <div class="article">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <span class="date"><i class="fa fa-calendar-o"></i> 13 JUN 2013</span>
                                <a class="read-more" href="#">Read More</a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="50">
                                <div class="timeline-image">
                                    <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">
                                        <span class="image-overlay"></span>
                                        <span class="image-zoom"><i class="fa fa-search"></i></span>
                                        <img src="images/timeline/img2.jpg" title="" alt="" />
                                    </a>
                                </div>
                                <h4>Your Event Title Here</h4>
                                <div class="article">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <span class="date"><i class="fa fa-calendar-o"></i> 18 JUN 2013</span>
                                <a class="read-more" href="#">Read More</a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="100">
                                <div class="timeline-image">
                                    <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">
                                        <span class="image-overlay"></span>
                                        <span class="image-zoom"><i class="fa fa-search"></i></span>
                                        <img src="images/timeline/img3.jpg" title="" alt="" />
                                    </a>
                                </div>
                                <h4>Your Event Title Here</h4>
                                <div class="article">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <span class="date"><i class="fa fa-calendar-o"></i> 02 FEB 2013</span>
                                <a class="read-more" href="#">Read More</a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="100">
                                <div class="timeline-image">
                                    <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">
                                        <span class="image-overlay"></span>
                                        <span class="image-zoom"><i class="fa fa-search"></i></span>
                                        <img src="images/timeline/img4.jpg" title="" alt="" />
                                    </a>
                                </div>
                                <h4>Your Event Title Here</h4>
                                <div class="article">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <span class="date"><i class="fa fa-calendar-o"></i> 07 FEB 2013</span>
                                <a class="read-more" href="#">Read More</a>
                            </li>
                            <!-- End Item -->

                            <div class="clear"></div>

                            <!-- History Year -->
                            <li class="year">2014</li>


                            <!-- Item -->
                            <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="150">
                                <div class="timeline-image">
                                    <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">
                                        <span class="image-overlay"></span>
                                        <span class="image-zoom"><i class="fa fa-search"></i></span>
                                        <img src="images/timeline/img5.jpg" title="" alt="" />
                                    </a>
                                </div>
                                <h4>Your Event Title Here</h4>
                                <div class="article">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <span class="date"><i class="fa fa-calendar-o"></i> 16 AUG 2014</span>
                                <a class="read-more" href="#">Read More</a>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="150">
                                <div class="timeline-image">
                                    <a class="" href="images/big-image.jpg" data-rel="prettyPhoto[gallery]">
                                        <span class="image-overlay"></span>
                                        <span class="image-zoom"><i class="fa fa-search"></i></span>
                                        <img src="images/timeline/img6.jpg" title="" alt="" />
                                    </a>
                                </div>
                                <h4>Your Event Title Here</h4>
                                <div class="article">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                                <span class="date"><i class="fa fa-calendar-o"></i> 25 AUG 2014</span>
                                <a class="read-more" href="#">Read More</a>
                            </li>
                            <!-- End Item -->

                            <div class="clear"></div>
                            <a class="load-more" href="#">Load More</a>
                            <div class="clear"></div>

                        </ul>
                        <!-- End History Timeline -->

                    </div>
                    <!-- End Content -->
                    <span class="pattern1"></span>

                </div>
                <!-- End Toons -->
            </div>	
            <!-- End Parallax Overlay -->
        </section>
        <!-- End History Section -->

        <!-- Our Team Section -->
        <section id="team" class="main-content">
            <!-- Content -->
            <div class="content">

                <!-- Main Title -->
                <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                    <span>Our</span> creative team
                </h1>

                <!-- Team -->
                <div class="team-items slide-boxes">
                    <!-- Member -->
                    <div class="item animated" data-animation="rollIn" data-animation-delay="0">
                        <img src="images/team/1.jpg" alt="" class="img-circle" />
                        <h3>Jonh Doe</h3>
                        <h4>Photogropher</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <div class="socials">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <!-- End Member -->

                    <!-- Member -->
                    <div class="item animated" data-animation="rollIn" data-animation-delay="300">
                        <img src="images/team/2.jpg" alt="" class="img-circle" />
                        <h3>Tommy Horton</h3>
                        <h4>Web Designer</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <div class="socials">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <!-- End Member -->

                    <!-- Member -->
                    <div class="item animated" data-animation="rollIn" data-animation-delay="600">
                        <img src="images/team/3.jpg" alt="" class="img-circle" />
                        <h3>Nick Boris</h3>
                        <h4>Graphic Designer</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <div class="socials">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <!-- End Member -->

                    <!-- Member -->
                    <div class="item animated" data-animation="rollIn" data-animation-delay="900">
                        <img src="images/team/4.jpg" alt="" class="img-circle" />
                        <h3>Jane Smith</h3>
                        <h4>Photogropher</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <div class="socials">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <!-- End Member -->

                    <!-- Member -->
                    <div class="item animated" data-animation="rollIn" data-animation-delay="800">
                        <img src="images/team/1.jpg" alt="" class="img-circle" />
                        <h3>Jhon White</h3>
                        <h4>Graphic Designer</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <div class="socials">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <!-- End Member -->

                    <!-- Member -->
                    <div class="item animated" data-animation="rollIn" data-animation-delay="1000">
                        <img src="images/team/2.jpg" alt="" class="img-circle" />
                        <h3>Jack Smith</h3>
                        <h4>Web Designer</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                        <div class="socials">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <!-- End Member -->
                </div>
                <!-- End Team -->
            </div>
            <!-- End Content -->
        </section>
        <!-- End Our Team Section --> 

        <!-- Clients Section -->
        <section id="our-clients" class="main-content animated" data-animation="fadeInUp" data-animation-delay="500">
            <div class="content">
                <!-- Clients Carousel -->
                <div class="our-clients-carousel">
                    <div class="item"><a href="" target="blank"><img src="images/logo/1.png" alt=""></a></div>
                    <div class="item"><a href="http://www.flashback.lk/" target="blank"><img src="images/logo/2.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/3.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/4.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/5.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/6.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/7.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/8.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/9.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/10.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/11.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/12.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/13.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/14.png" alt=""></a></div>
                    <div class="item"><a href="" target="blank"><img src="images/logo/15.png" alt=""></a></div>
                </div>
                <!-- End Clients Carousel -->
            </div>
        </section>
        <!-- End Our Clients Section -->

        <!-- Client Say -->
        <section id="client-say">
            <div class="parallax-overlay">
                <!-- Content -->
                <div class="content">
                    <!-- White Title -->
                    <div class="section-title-white">
                        <h1>What our clients say</h1>
                        <div class="seperator"><span class="white_line"></span></div>
                    </div>

                    <!-- Client Say Carousel -->
                    <div class="client-say-carousel">
                        <div id="carousel-client-say" class="carousel slide">
                            <!-- slides Wrapper -->
                            <div class="carousel-inner">
                                <!-- Slide 1 -->
                                <div class="item active">
                                    <div class="clients-say-item">
                                        <img alt="Client Name" src="images/clients/clients-say/1.jpg" />
                                        <div class="client-comment-block">
                                            <p class="client-comment">"A designer knows he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away."
                                            </p>
                                            <h3 class="client-name-and-jop">
                                                <i class="fa fa-caret-right"></i>
                                                <span class="client-name">jone doe</span>  
                                                <i class="fa fa-angle-right"></i>
                                                <span class="client-jop">Social Group</span>
                                            </h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>	
                                <!-- End Slide 1 -->

                                <!-- Slide 2 -->
                                <div class="item">
                                    <div class="clients-say-item clearfix">
                                        <img alt="Client Name" src="images/clients/clients-say/2.jpg" />
                                        <div class="client-comment-block">
                                            <p class="client-comment">"A designer knows he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away."
                                            </p>
                                            <h3 class="client-name-and-jop">
                                                <i class="fa fa-caret-right"></i>
                                                <span class="client-name">Jane Smith</span>  
                                                <i class="fa fa-angle-right"></i>
                                                <span class="client-jop">General Manager</span>
                                            </h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>	
                                <!-- End Slide 2 -->

                                <!-- Slide 3 -->
                                <div class="item">
                                    <div class="clients-say-item clearfix">
                                        <img alt="Client Name" src="images/clients/clients-say/3.jpg" />
                                        <div class="client-comment-block">
                                            <p class="client-comment">"A designer knows he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away."
                                            </p>
                                            <h3 class="client-name-and-jop">
                                                <i class="fa fa-caret-right"></i>
                                                <span class="client-name">Nick Boris</span>  
                                                <i class="fa fa-angle-right"></i>
                                                <span class="client-jop">Virtual Inc</span>
                                            </h3>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>	
                                <!-- End Slide 3 -->

                            </div>
                            <!-- End slides Wrapper -->

                            <!-- Controls -->
                            <a class="left carousel-control s-controls" href="#carousel-client-say" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right carousel-control s-controls" href="#carousel-client-say" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <!-- End Controls -->
                        </div>
                    </div>
                    <!-- End Client Say Carousel -->

                </div>
                <!-- End Content -->
                <span class="pattern1"></span>
            </div>
            <!-- End parallax-overlay -->
        </section>
        <!-- End Client Say Section -->

        <!-- Services Section -->
        <section id="services" class="main-content">
            <!-- Content -->
            <div class="content">

                <!-- Main Title -->
                <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                    <span>Our</span> Services
                </h1>

                <!-- Icons Blocks -->
                <div class="col-md-4">
                    <!-- Item -->
                    <div class="services-box animated" data-animation-delay="700" data-animation="fadeInDown">
                        <h4><a href="#">Customer Support</a></h4>
                        <div class="services-box-icon">
                            <i class="fa  fa-comments-o"></i>
                        </div>
                        <div class="feature-box-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="services-box push-top animated" data-animation-delay="900" data-animation="fadeInDown">
                        <h4><a href="#">Web Design</a></h4>
                        <div class="services-box-icon">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="feature-box-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                    <!-- End Item -->
                </div>

                <div class="col-md-4">
                    <!-- Item -->
                    <div class="services-box animated" data-animation-delay="1100" data-animation="fadeInDown">
                        <h4><a href="#">Multimedia</a></h4>
                        <div class="services-box-icon">
                            <i class="fa fa-film"></i>
                        </div>
                        <div class="feature-box-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="services-box push-top animated" data-animation-delay="1300" data-animation="fadeInDown">
                        <h4><a href="#">Graphic Design</a></h4>
                        <div class="services-box-icon">
                            <i class="fa fa-puzzle-piece"></i>
                        </div>
                        <div class="feature-box-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                    <!-- End Item -->
                </div>

                <div class="col-md-4 clearfix">
                    <!-- Item -->
                    <div class="services-box animated" data-animation-delay="1500" data-animation="fadeInDown">
                        <h4><a href="#">Wordpress Themes</a></h4>
                        <div class="services-box-icon">
                            <i class="fa fa-link"></i>
                        </div>
                        <div class="feature-box-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="services-box push-top animated" data-animation-delay="1700" data-animation="fadeInDown">
                        <h4><a href="#">Photography</a></h4>
                        <div class="services-box-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="feature-box-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        </div>
                    </div>
                    <!-- End Item -->
                </div>
                <!-- End Icons Blocks -->
                <div class="clear"></div>
                <div class="welcome-banner-text">

                    <a href="servers.php" class="more_a">Read More</a>
                </div>
            </div>


            <!-- End Content -->
        </section>
        <!-- End Services Section -->       

        <!-- Features --> 
        <section id="features" class="parallax-section">
            <!-- Overlay1 -->
            <div class="overlay1">
                <!-- Toons -->
                <div class="toons toons1">
                    <!-- Content -->
                    <div class="content">

                        <!--White Title-->
                        <div class="section-title-white animated" data-animation="fadeInUp" data-animation-delay="300">
                            <h1>Arwen Is Awesome Design</h1>
                            <div class="seperator"><span class="white_line"></span></div>
                            <p data-animation="fadeInUp" data-animation-delay="0" class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <!--End White Title-->

                        <img data-animation="fadeInUp" data-animation-delay="500" class="animated" src="images/screenshots.png" alt="Awesome Design" title="Awesome Design" />

                    </div>
                    <!-- End Content -->
                </div>
                <!-- End toons -->
            </div>
            <!-- End overlay1 -->	
        </section>
        <!-- End Features --> 

        <!-- Portfolio --> 
        <section id="portfolio" class="main-content">
            <!-- Content -->
            <div class="content">

                <!-- Main Title -->
                <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                    <span>our</span> Portfolio
                </h1>

                <!-- Works -->
                <div class="works">

                    <!-- 
                    <div id="options" class="filter-menu inline animated" data-animation="fadeInUp" data-animation-delay="500">
                        <ul id="filters" class="filters option-set" data-option-key="filter">
                            <li><a href="#filter" data-option-value="*" class="selected">all</a></li>
                            <li><a href="#filter" data-option-value=".graphic">graphic</a></li>
                            <li><a href="#filter" data-option-value=".photography">photography</a></li>
                            <li><a href="#filter" data-option-value=".wordpress">wordpress</a></li>
                            <li><a href="#filter" data-option-value=".printing">printing</a></li>
                        </ul>
                    </div>
                    -->

                    <!-- Filter -->
                    <div class="items animated pretty-lightbox-a" data-animation="fadeInUp" data-animation-delay="700">




                        <!-- Item -->
                        <div class="work col-xs-4 photography graphic">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img src="images/portfolio/thumb/www_ananketravels_com.png" alt=""/>
                                    <div class="mask">
                                        <a class="button zoom" href="images/portfolio/www_ananketravels_com.png"  data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
                                        <a class="button detail" href="http://www.ananketravels.com/" target="blank"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="work-desc">
                                        <h4>Ananke Travels</h4>

                                    </div>									
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->


                        <!-- Item -->
                        <div class="work col-xs-4 graphic photography ">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img src="images/portfolio/thumb/www_flashback_lk.png" alt=""/>
                                    <div class="mask">
                                        <a class="button zoom" href="images/portfolio/www_flashback_lk.png" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
                                        <a class="button detail" href="http://www.flashback.lk/" target="blank"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="work-desc">
                                        <h4>Flashback Music Band</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="work col-xs-4 printing photography graphic">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img src="images/portfolio/thumb/www_hikkavillas_com.png" alt=""/>
                                    <div class="mask">
                                        <a class="button zoom" href="images/portfolio/www_hikkavillas_com.png" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
                                        <a class="button detail" href="http://hikkavillas.com/" target="blank"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="work-desc">
                                        <h4>Hikka Villas</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->








                        <!-- Item -->
                        <div class="work col-xs-4 printing photography">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img src="images/portfolio/thumb/www_riverstonehotels_com.png" alt=""/>
                                    <div class="mask">
                                        <a class="button zoom" href="images/portfolio/www_riverstonehotels_com.png" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
                                        <a class="button detail" href="http://www.riverstonehotels.com/" target="blank"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="work-desc">
                                        <h4>Rivers Tone Hotels</h4>

                                    </div>   									
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->





                        <!-- Item -->
                        <div class="work col-xs-4 graphic printing ">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img src="images/portfolio/thumb/www_rrtours_it.png" alt=""/>
                                    <div class="mask">
                                        <a class="button zoom" href="images/portfolio/www_rrtours_it.png" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
                                        <a class="button detail" href="http://www.rrtours.it/" target="blank"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="work-desc">
                                        <h4>RR Tours</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->



                        <!-- Item -->
                        <div class="work col-xs-4 printing wordpress ">
                            <div class="work-inner">
                                <div class="work-img">
                                    <img src="images/portfolio/thumb/www_shinyweddinghalls_shiny_lk.png" alt=""/>
                                    <div class="mask">
                                        <a class="button zoom" href="images/portfolio/www_shinyweddinghalls_shiny_lk.png" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
                                        <a class="button detail" href="http://www.shinyweddinghalls.shiny.lk/" target="blank"><i class="fa fa-link"></i></a>
                                    </div>
                                    <div class="work-desc">
                                        <h4>Shiny Wedding Halls</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                        <div class="clear"></div>



                    </div>
                    <!-- End Filter -->
                </div>
                <!-- End Works -->
                <div class="welcome-banner-text">

                    <a href="portfolio.php" class="more_a">Read More</a>
                </div>

            </div>	
            <!-- End Content -->
        </section>
        <!-- End Portfolio Section -->

        <!-- Video Background Section -->
        <section id="video" class="contain">
            <div class="overlay2">
                <div class="content">

                    <!--White Title-->
                    <div class="section-title-white animated" data-animation="fadeInUp" data-animation-delay="300">
                        <h1>Video Background</h1>
                        <div class="seperator"><span class="white_line"></span></div>
                        <p data-animation="fadeInUp" data-animation-delay="0" class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!--End White Title-->

                    <div class="align-center animated" data-animation="fadeInUp" data-animation-delay="300">
                        <a href="#" class="buy-button">Load More</a>
                    </div>  

                    <!-- Video Background -->
                    <div id="P2" class="player video-container" data-property="{videoURL:'0_jNjpVxUt0',containment:'#video',autoPlay:true, mute:true, startAt:0, opacity:1, showControls:true}"></div>
                    <!-- End Video Background -->                  

                </div>
                <!-- End Content -->			
            </div>
            <!-- End overlay2 -->
            <span class="pattern1"></span>
        </section>
        <!-- End Video Background Section -->

        <!-- Prices Section -->
        <section id="prices" class="main-content">
            <!-- Content -->
            <div class="content prices">

                <!-- Main Title -->
                <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
                    <span>Pricing</span> Tables
                </h1>

                <div class="plans-prices">
                    <!-- Pricing Table -->
                    <div class="plan-price no-margin-left animated" data-animation="rollIn" data-animation-delay="100">
                        <!-- Plan Header -->
                        <h1>Starter</h1>
                        <!-- Plan Price -->
                        <div class="circle-price">
                            <h2>$100<span class="other-price">.00</span></h2>
                            <span class="per">Simplest Package to Get you Started</span>
                        </div>
                        <!-- Pricing List -->
                        <ul>
                            <li><span></span>5 Web Pages </li>
                            <li><span> </span> Domain Name of Your Choice .com, .co, .net, .org, .info</li>
                            <li><span>1</span> Design Concepts</li>
                            <li><span>200MB</span> Hosting Space</li>
                            <li><span></span> Unlimited Bandwidth</li>
                            <li><span>3 </span> Email Accounts</li>
                            <li><span> </span> Contact Form + Location Map</li>
                        </ul>
                        <a href="package.php" class="buy-button">Read More</a>
                    </div>

                    <!-- Pricing Table -->
                    <div class="plan-price active animated" data-animation="rollIn" data-animation-delay="300">
                        <!-- Plan Header -->
                        <h1>Business</h1>
                        <!-- Plan Price -->
                        <div class="circle-price">
                            <h2>US $200.00<span class="other-price">.00</span></h2>
                            <span class="per">The Most Popular Package We Offer</span>
                        </div>
                        <!-- Pricing List -->
                        <ul>
                            <li><span>25</span> Web Pages</li>
                            <li>Domain Name of Your Choice .lk, .com, .co, .net, .org, .info</li>
                            <li><span>2 </span> Design Concepts</li>
                            <li><span>500 MB</span> Hosting Space</li>
                            <li><span>Unlimited</span>  Bandwidth</li>
                            <li><span>10 </span> Email Accounts</li>
                            <li>Contact Form + Location Map</li>
                            <li>Basic Search Engine Optimization</li>
                        </ul>
                        <a href="package.php" class="buy-button">Read More</a>
                    </div>

                    <!-- Pricing Table -->
                    <div class="plan-price animated plan-bootom" data-animation="rollIn" data-animation-delay="500">
                        <!-- Plan Header -->
                        <h1>Premium</h1>
                        <!-- Plan Price -->
                        <div class="circle-price">
                            <h2>$320 <span class="other-price">.00</span></h2>
                            <span class="per">The Perfect Package for Your Small Business</span>
                        </div>
                        <!-- Pricing List -->
                        <ul>
                            <li><span>Unlimited</span>  Web Pages + Control Panel</li>
                            <li>Domain Name of Your Choice .lk, .com, .co, .net, .org, .info</li>
                            <li><span>4</span> Design Concepts</li>
                            <li><span>Unlimited </span> Hosting Space</li>
                            <li><span>Unlimited</span> Bandwidth</li>
                            <li><span>Unlimited</span> Email Accounts</li>
                            <li>Contact Form + Location Map</li>
                            <li>Advance  Search Engine Optimization</li>
                        </ul>
                        <a href="package.php" class="buy-button">Read More</a>
                    </div>

                    <!-- Pricing Table -->
                    <div class="plan-price no-margin-right animated plan-bootom" data-animation="rollIn" data-animation-delay="700">
                        <!-- Plan Header -->
                        <h1>Gold</h1>
                        <!-- Plan Price -->
                        <div class="circle-price">
                            <h2>US$450<span class="other-price">.00</span></h2>
                            <span class="per">The Most Advanced & Complete Package </span>
                        </div>
                        <!-- Pricing List -->
                        <ul>
                            <li>Unlimited Web Pages + Control Panel + User Accounts + Add Manager</li>
                            <li>Any Domain Name of Your Choice</li>
                            <li><span>5</span> Design Concepts</li>
                            <li><span>Unlimited</span> Hosting Space</li>
                            <li><span>Unlimited</span> Bandwidth</li>
                            <li><span>Unlimited</span> Email Accounts</li>
                            <li>Contact Form + Location Map</li>
                            <li>Advance  Search Engine Optimization</li>
                        </ul>
                        <a href="package.php" class="buy-button">Read More</a>
                    </div>
                    <div class="clear"></div>

                </div>
                <!-- End Pricing plans -->
            </div>
            <!-- End Content -->
        </section>
        <!-- End Prices Section -->    

        <!-- Contact Section -->
        <section id="contact" class="main-content">
            <!-- Google Map --> 
            <style>
                .embed-container {
                    position: relative;
                    padding-bottom: 36.25%;
                    height: 0;
                    overflow: hidden;
                    max-width: 100%;
                    background-color: #00A8FF;
                }
                .embed-container iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height:100%;
                }
                .mapscroll-wrap {
                    position: static;
                }
            </style>
            <div class="embed-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7028591358753!2d80.21499041414866!3d6.035453130320217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bba6afd91b%3A0xcda70fa1ff5a2ced!2sThird+Eye+Vision!5e0!3m2!1sen!2slk!4v1472707167900" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <p><a id="btn-start" href="#">"Start Scroll Prevent"</a> <a id="btn-stop" href="#">"Stop Scroll Prevent"</a></p>
            <!-- End Google Map -->

            <!-- Content -->
            <div class="content">

                <!--Contact Info-->
                <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="300">

                    <!-- Main Title -->
                    <h1 class="main_title_a align-left">
                        <span>Contact </span> Information
                    </h1>

                    <!-- Address -->
                    <address>
                        <p><i class="fa fa-map-marker"></i><i class="fa fa-minus"></i> No 226/A, Wakwella Road, Galle, Sri Lanka.</p>
                        <p><i class="fa fa-phone"></i><i class="fa fa-minus"></i>+94 77 365 4141</p>
<!--                        <p><i class="fa fa-add1 fa-mobile"></i><i class="fa fa-minus"></i>+000 456 123 978</p>
                        <p><i class="fa fa-add2 fa-print"></i><i class="fa fa-minus"></i>+000 123 456 789</p>-->
                        <p><i class="fa fa-add3 fa-envelope"></i><i class="fa fa-minus"></i>info@sublime.lk</p>
                        <p><i class="fa fa-globe"></i><i class="fa fa-minus"></i>www.sublime.lk</p>
                    </address>
                    <!-- End Address -->

                    <!-- Social Media Icons -->
                    <div class="contact-social">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-rss"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </div>
                    <!-- End Social Media Icons -->

                </div>
                <!--End Contact Info-->

                <!--Contact Form-->
                <div class="col-md-6 animated" data-animation="fadeInRight" data-animation-delay="600">

                    <!-- Main Title -->
                    <h1 class="main_title_a align-left">
                        <span>Get </span> in touch
                    </h1>
                    <?php if (!empty($status_message)) { ?>
                        <div class="alert alert-success" role="alert" style="background-color: #8AFF5A;">
                            <strong>Success! <?php echo $status_message; ?></strong>.
                        </div>
                    <?php } ?>
                    <form method="post" id="contact-form" name="contact-form">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control " name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="email"  class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input type="tel" class="form-control" name="phone" id="tel" placeholder="Phone" required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" name="message" id="message" required placeholder="Message" rows="9"></textarea>
                            </div>
                        </div>
                        <p>
                            <button class="btn" id="submit" type="submit" name="submit" value="Submit">Submit</button>
                        </p>

                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        </div>

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Well done!</strong> Your message was sent succssfully!
                        </div>
                    </form>

                </div>	
                <!--End Contact Form-->
                <div class="clear"></div>
            </div>
            <!-- End Content -->              
        </section>
        <!-- End Contact Section -->

        <!-- Footer Section -->
        <section id="footer" class="main-content">
            <div class="content footer">
                <div class="col-xs-12 align-center">

                    <!-- Go To Top -->
                    <div id="go-top" class="animated" data-animation="fadeInUp" data-animation-delay="0">
                        <a href="#home" class="scroll"><i class="fa fa-chevron-up"></i></a>
                    </div><!-- End Go To Top -->

                    <span class="footer-logo animated" data-animation="fadeInUp" data-animation-delay="500">Arwen</span>
                    <!-- Site Copyright -->
                    <p class="footer-text copyright animated" data-animation="fadeInUp" data-animation-delay="700">
                        Copyright © 2014 - Arwen. All Rights Reserved.
                    </p><!-- End Site Copyright -->

                </div>						
                <div class="clear"></div>
            </div> 
            <!-- End Footer Content -->
        </section>
        <!-- End Footer Section -->

        <!-- JS Files -->

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <!--<script type="text/javascript" src="js/modernizr-latest.js"></script>-->
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.js"></script>
        <script type="text/javascript" src="js/rev-slider/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
        <script type="text/javascript" src="js/jquery.mapmarker.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>

        <script type="text/javascript" src="js/googlemaps-scrollprevent.min.js"></script>

        <script>
            (function () {
                $(function () {
                    $("#btn-start").click(function () {
                        return $("iframe[src*='google.com/maps']").scrollprevent({
                            printLog: true
                        }).start();
                    });
                    $("#btn-stop").click(function () {
                        return $("iframe[src*='google.com/maps']").scrollprevent().stop();
                    });
                    return $("#btn-start").trigger("click");
                });

            }).call(this);

        </script>

        <!-- End JS Files -->

    </body>


    <!-- Mirrored from arwen.ideal-theme.com/html/arwen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 04:20:38 GMT -->
</html>