<?php
error_reporting(0);
include 'config.php';

$settingv = "SELECT * FROM `settings`";
$settingvq = mysqli_query($db,$settingv);
$settingf = mysqli_fetch_assoc($settingvq);
?>




 

<title>404 Page not found</title>


<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:pages" content="141573409825720" />
    <meta name="google-site-verification" content="1HWBUcOPRJLxlcIKSX8VN_xFWsWwsF7JOQ88Fck7Jko" />

    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">

     <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" /> -->


    <!-- UI Kit Stylesheet -->
    <link rel="stylesheet" href="css/uikit.min.css">

    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/jquery.gray.min.js"></script> 
     <script src="js/uikit.min.js"></script> 
     <script src="js/uikit-icons.min.js"></script> 
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js"></script>-->
    <!-- <script src="https://getuikit.com/migrate.min.js"></script> -->

    <!-- Main Stylesheet & Script-->
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lora:400i&display=swap" rel="stylesheet">

    <script>
      window.dataLayer = window.dataLayer || [];
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TC9LV93');
    </script>
    <!-- End Google Tag Manager -->


    <script>
    //     document.onkeydown = function(e) {
    //         if (event.keyCode == 123) {
    //             return false;
    //         }
    //         if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
    //             return false;
    //         }
    //         if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
    //             return false;
    //         }
    //         if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
    //             return false;
    //         }
    //         if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
    //             return false;
    //         }
    //     }
    </script>





    
    </head>

<body class="page-server">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TC9LV93" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header class="page-header uk-width-1-1">
        <div class="uk-container uk-container-large">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="page-header-first uk-flex uk-flex-bottom">
                        <li class="logo">
                            <a href="https://a1sevices.xyz">
                                <img src="img/logo.png" alt="Cleaning Services Dubaia1services">
                            </a>
                        </li>

                        <!--<li class="header-info uk-visible@m">-->
                        <!--    <span class="wsc">800 A1SC</span>-->
                        <!--<a class="uk-visible@m uk-hidden@xl" href="mailto:<?php echo $settingf['gmail']; ?>" style="visibility:hidden">info@</a>-->
                        <!--    <a class="uk-visible@m ws_email" href="mailto:<?php echo $settingf['gmail']; ?>"><?php echo $settingf['gmail']; ?></a>-->

                        <!--</li>-->
                    </ul>
                </div>

                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav page-header-last uk-visible@l">
                        <li><a href="about" onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'About Us'})">About Us</a></li>
                        <li>
                            
                            <a href="services/home" onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential' , 'page_URL': 'https:'})">Our Services <span class="uk-margin-small-left" uk-icon="icon: chevron-down; ratio: 1"></span></a>

                            <div uk-dropdown="pos: bottom-left;offset: 30">
                                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Cleaning Services Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/cleaning-services-dubai">
                                            Cleaning Services Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Home Cleaning Services' , 'page_URL': 'https:'})">
                                        <a href="services/home-cleaning-services-dubai">
                                            Home Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Home Disinfection Service' , 'page_URL': 'https:'})">
                                        <a href="services/coronavirus-prevention-dubai">
                                            Home Disinfection Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Pest Control Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/pest-control-dubai">
                                            Pest Control Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Deep Cleaning Services' , 'page_URL': 'https:'})">
                                        <a href="services/deep-cleaning-services-dubai">
                                            Deep Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Maids in Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/maids-service-in-dubai">
                                            Maids in Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Home Sanitization Service Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/home-sanitization-service-dubai">
                                            Home Sanitization Service Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Move In Cleaning' , 'page_URL': 'https:'})">
                                        <a href="services/move-in-cleaning">
                                            Move In Cleaning
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Sofa Cleaning' , 'page_URL': 'https:'})">
                                        <a href="services/sofa-cleaning">
                                            Sofa Cleaning
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Handyman Services' , 'page_URL': 'https:'})">
                                        <a href="services/handyman-services">
                                            Handyman Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Housekeeping Services' , 'page_URL': 'https:'})">
                                        <a href="services/housekeeping-services-dubai">
                                            Housekeeping Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Babysitting Service' , 'page_URL': 'https:'})">
                                        <a href="services/babysitting-service">
                                            Babysitting Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Annual Maintenance Contract' , 'page_URL': 'https:'})">
                                        <a href="services/annual-maintenance-contract">
                                            Annual Maintenance Contract
                                        </a>
                                    </li>
                                                                    </ul>
                                                            </div>
                        </li>
                        
                        <li>
                            
                            <a href="#">Community <span class="uk-margin-small-left" uk-icon="icon: chevron-down; ratio: 1"></span></a>

                            <div uk-dropdown="pos: bottom-left;offset: 30">
                                
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Damac Hills' , 'page_URL': 'https:'})">
                                        <a href="damac-hills">
                                            Damac Hills
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Damac Hills 2' , 'page_URL': 'https:'})">
                                        <a href="damac-hills-2">
                                            Damac Hills 2
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Mudon' , 'page_URL': 'https:'})">
                                        <a href="mudon">
                                            Mudon
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Mira' , 'page_URL': 'https:'})">
                                        <a href="mira">
                                            Mira
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Town Square' , 'page_URL': 'https:'})">
                                        <a href="town-square">
                                            Town Square
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Sustainable City' , 'page_URL': 'https:'})">
                                        <a href="sustainable-city">
                                            Sustainable City
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Remraam' , 'page_URL': 'https:'})">
                                        <a href="remraam">
                                            Remraam
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Arabian Ranches' , 'page_URL': 'https:'})">
                                        <a href="arabian-ranches">
                                            Arabian Ranches
                                        </a>
                                    </li>
                                </ul>
                               
                            </div>
                        </li>
                        
                        <li>
                            <a href="blog" onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'Blog'})">Blog</a>
                        </li>

                        

                        <!--<li>-->
                        <!--    <a href="team">Our Team</a> -->
                        <!--</li>-->

                        <!--<li>-->
                        <!--    <a href="pricing">Pricing</a>-->
                        <!--</li>-->
                    </ul>
                    
                    <ul class="uk-margin-small-left uk-visible@l">
                        <li  onclick="data_Layer({'event': 'lead_journey','eventCategory': 'lead_journey','eventAction': 'step0.0_journey_stared','eventLabel':'book_now_header' , 'page_URL': 'https:'})">
                            
                             <a href="book-online" class="uk-button book-now-header">Book Now</a>
                        </li>
                    </ul>

                    <ul class="page-header-last uk-hidden@l">
                        <li>
                            <a href="#offcanvas-menu" uk-toggle>
                                <img src="img/hamburger.svg" height="32" width="32">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Off-canvas menu -->
<div id="offcanvas-menu" class="" uk-offcanvas="mode: slide; flip: true; overlay: true">
    <div class="uk-offcanvas-bar">
        <div class="uk-container uk-container-large uk-position-relative uk-height-1-1">
            <div class="offcanvas-header uk-flex uk-flex-between">
                <div class="offcanvas-logo uk-flex uk-flex-middle">
                    <a href="https://a1sevices.xyz">
                        <img src="img/logo.png" alt="a1services Cleaning">
                    </a>
                </div>

                <a class="uk-offcanvas-close page-header-last" type="button">
                    <span uk-icon="icon: close; ratio: 2"></span>
                </a>
            </div><!-- .offcanvas-header -->

            <ul class="uk-nav offcanvas-menu uk-margin-large-top" data-uk-nav='{"toggle": "> span"}'>

                <li class="uk-parent uk-position-relative">
                    <span class="offcanvas-chevron-right" uk-icon="icon: chevron-right; ratio: 1.5"></span>

                    <a href="services/home">Our Services</a>

                                        <ul class="uk-nav-sub">
                                                <li>
                            <a href="services/cleaning-services-dubai">
                                Cleaning Services Dubai
                            </a>
                        </li>
                                                <li>
                            <a href="services/home-cleaning-services-dubai">
                                Home Cleaning Services
                            </a>
                        </li>
                                                <li>
                            <a href="services/coronavirus-prevention-dubai">
                                Home Disinfection Service
                            </a>
                        </li>
                                                <li>
                            <a href="services/pest-control-dubai">
                                Pest Control Dubai
                            </a>
                        </li>
                                                <li>
                            <a href="services/deep-cleaning-services-dubai">
                                Deep Cleaning Services
                            </a>
                        </li>
                                                <li>
                            <a href="services/maids-service-in-dubai">
                                Maids in Dubai
                            </a>
                        </li>
                                                <li>
                            <a href="services/home-sanitization-service-dubai">
                                Home Sanitization Service Dubai
                            </a>
                        </li>
                                                <li>
                            <a href="services/move-in-cleaning">
                                Move In Cleaning
                            </a>
                        </li>
                                                <li>
                            <a href="services/sofa-cleaning">
                                Sofa Cleaning
                            </a>
                        </li>
                                                <li>
                            <a href="services/handyman-services">
                                Handyman Services
                            </a>
                        </li>
                                                <li>
                            <a href="services/housekeeping-services-dubai">
                                Housekeeping Services
                            </a>
                        </li>
                                                <li>
                            <a href="services/babysitting-service">
                                Babysitting Service
                            </a>
                        </li>
                                                <li>
                            <a href="services/annual-maintenance-contract">
                                Annual Maintenance Contract
                            </a>
                        </li>
                                            </ul>
                                    </li>

                <!--<li class="uk-parent uk-position-relative">-->
                <!--    <span class="offcanvas-chevron-right" uk-icon="icon: chevron-right; ratio: 1.5"></span>-->

                <!--    <a href="services/corporate">Corporate</a>-->

                <!--    -->
                <!--    <ul class="uk-nav-sub">-->
                <!--        -->
                <!--        <li>-->
                <!--            <a href="services/office-cleaning-services">-->
                <!--                Office Cleaning Services-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        -->
                <!--        <li>-->
                <!--            <a href="services/office-disinfection-services-dubai">-->
                <!--                Office Disinfection Services Dubai-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        -->
                <!--        <li>-->
                <!--            <a href="services/hotel-housekeeping-services-dubai">-->
                <!--                Hotel Housekeeping Services-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        -->
                <!--        <li>-->
                <!--            <a href="services/window-cleaning-service-dubai">-->
                <!--                Window Cleaning Service-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        -->
                <!--        <li>-->
                <!--            <a href="services/post-construction-cleaning">-->
                <!--                Post Construction Cleaning-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        -->
                <!--    </ul>-->
                <!--    -->
                <!--</li>-->
            </ul> 

            <div class="offcanvas-bottom">
                <ul>
                    <li>800 A1SC</li>
                    <li><a href="mailto:<?php echo $settingf['gmail']; ?>"><?php echo $settingf['gmail']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
        <section class="pagetitle uk-background-top-center uk-position-relative"></section>
    
    <section class="main services uk-position-relative">
        <div class="uk-container uk-container-medium">
            

            <div class="main-wrap">
                
                <h2 class="uk-text-center"><span>OOPS...</span></span></h2>
                <h5 style="text-align:center">Looks like something went wrong.<br>We're working on it.</h5>
                
                <div style="text-align:center">
                    <h5><a href='https://a1sevices.xyz'> Click here to go Homepage</a><br><a href='contact'>Click here to contact us</a></h5>
                </div>
                
                
             
            </div>
        </div>
    </section>

    <footer>
        <div class="uk-container uk-container-large">
            <div uk-grid>
                <!-- <div class="uk-width-1-4@xl uk-visible@l">
                     
                </div>  -->

                <div class="uk-width-1-1@xl uk-width-1-1@m">
                    <div uk-grid>
                        <div class="uk-width-1-4@s uk-width-1-2">
                            <div class="footer-box">
                                <h5>Residential</h5>

                                                                <ul>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Cleaning Services Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/cleaning-services-dubai">
                                            Cleaning Services Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Home Cleaning Services' , 'page_URL': 'https:'})">
                                        <a href="services/home-cleaning-services-dubai">
                                            Home Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Home Disinfection Service' , 'page_URL': 'https:'})">
                                        <a href="services/coronavirus-prevention-dubai">
                                            Home Disinfection Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Pest Control Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/pest-control-dubai">
                                            Pest Control Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Deep Cleaning Services' , 'page_URL': 'https:'})">
                                        <a href="services/deep-cleaning-services-dubai">
                                            Deep Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Maids in Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/maids-service-in-dubai">
                                            Maids in Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Home Sanitization Service Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/home-sanitization-service-dubai">
                                            Home Sanitization Service Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Move In Cleaning' , 'page_URL': 'https:'})">
                                        <a href="services/move-in-cleaning">
                                            Move In Cleaning
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Sofa Cleaning' , 'page_URL': 'https:'})">
                                        <a href="services/sofa-cleaning">
                                            Sofa Cleaning
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Handyman Services' , 'page_URL': 'https:'})">
                                        <a href="services/handyman-services">
                                            Handyman Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Housekeeping Services' , 'page_URL': 'https:'})">
                                        <a href="services/housekeeping-services-dubai">
                                            Housekeeping Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Babysitting Service' , 'page_URL': 'https:'})">
                                        <a href="services/babysitting-service">
                                            Babysitting Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Annual Maintenance Contract' , 'page_URL': 'https:'})">
                                        <a href="services/annual-maintenance-contract">
                                            Annual Maintenance Contract
                                        </a>
                                    </li>
                                                                    </ul>
                                                            </div>
                        </div>

                        <div class="uk-width-1-4@s uk-width-1-2">
                            <div class="footer-box">
                                <h5>Corporate</h5>

                                                                <ul>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Office Cleaning Services' , 'page_URL': 'https:'})">
                                        <a href="services/office-cleaning-services">
                                            Office Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Office Disinfection Services Dubai' , 'page_URL': 'https:'})">
                                        <a href="services/office-disinfection-services-dubai">
                                            Office Disinfection Services Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Hotel Housekeeping Services' , 'page_URL': 'https:'})">
                                        <a href="services/hotel-housekeeping-services-dubai">
                                            Hotel Housekeeping Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Window Cleaning Service' , 'page_URL': 'https:'})">
                                        <a href="services/window-cleaning-service-dubai">
                                            Window Cleaning Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Post Construction Cleaning' , 'page_URL': 'https:'})">
                                        <a href="services/post-construction-cleaning">
                                            Post Construction Cleaning
                                        </a>
                                    </li>
                                                                    </ul>
                                                            </div>
                        </div>

                        <div class="uk-width-1-4@s uk-width-1-2">
                            <div class="footer-box">
                                <h5>Useful Links</h5>
                                <ul>
                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'Cleaning Service JVC' , 'page_URL': 'https:'})">
                                        <a href="cleaning-services-jvc-dubai" target="_blank">Cleaning Service JVC</a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'Maids in Dubai Marina' , 'page_URL': 'https:'})">
                                        <a href="maids-in-dubai-marina" target="_blank">Maids in Dubai Marina</a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'How to book a Cleaning' , 'page_URL': 'https:'})">
                                        <a href="how-to-book-a-cleaning-with-whitespot" target="_blank">How to book a Cleaning</a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'Cleaning Service Silicon Oasis' , 'page_URL': 'https:'})">
                                        <a href="introducing-home-cleaning-services-in-dubai-silicon-oasis" target="_blank">Cleaning Service Silicon Oasis</a>
                                    </li>

                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'Deep Cleaning Service for Dubai Residents' , 'page_URL': 'https:'})">
                                        <a href="deep-cleaning-services-for-dubai-residents" target="_blank">Deep Cleaning Service for Dubai Residents</a>
                                    </li>

                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'House Cleaning Service Dubai' , 'page_URL': 'https:'})">
                                        <a href="house-cleaning-service-dubai" target="_blank">House Cleaning Service Dubai</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="uk-width-1-4@s uk-width-1-2">
                            <div class="footer-box">
                                <h5>About</h5>

                                <ul>


                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_about','eventLabel':'Contact Us' , 'page_URL': 'https:'})">
                                        <a href="contact">Contact Us</a>
                                    </li>

                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_about','eventLabel':'Blog' , 'page_URL': 'https:'})">
                                        <a href="blog">Blog</a>
                                    </li>

                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_about','eventLabel':'About Us' , 'page_URL': 'https:'})">
                                        <a href="about">About Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- <div class="uk-width-1-3@xl uk-width-1-2@m uk-flex-first@m">
                    <div class="uk-margin-medium-bottom">
                        <img src="img/footer-logo.png" alt="">
                    </div>

                    <div class="footer-info">
                        <p>a1services Cleaning is a professional cleaning  company based in Dubai. With our well trained and professional cleaners we ensure you get the highest standard of cleaning.</p>
                        
                        <p>800 A1SC (972)</p>
                        
                        <p><a href="mailto:<?php echo $settingf['gmail']; ?>"><?php echo $settingf['gmail']; ?></a></p>
                    </div>
                </div> -->
            </div>

            <div class="footer-bottom uk-visible@l">
                <div uk-grid>
                    <div class="uk-width-3-4@l">
                        <ul class="copyright uk-flex">
                            <li>2022 &copy; All rights reserved to Azhar Mushtaq Technical Services L.L.C.</li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Terms of Service' , 'page_URL': 'https:'})">
                                <a href="terms" target="_blank">Terms of Service</a>
                            </li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Privacy Policy' , 'page_URL': 'https:'})">
                                <a href="privacy" target="_blank">Privacy Policy</a>
                            </li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Sitemap' , 'page_URL': 'https:'})">
                                <a href="sitemap.xml" target="_blank">Sitemap</a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-width-1-4@l uk-flex uk-flex-right@m uk-flex-middle">
                        <ul class="social uk-flex uk-flex-left uk-flex-right@m">
                            
                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Facebook', 'page_URL': 'https:'})">
                                <a target="_blank" href="<?php echo $settingf['facebook']; ?>" uk-icon="icon: facebook"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Twitter', 'page_URL': 'https:'})">
                                <a target="_blank" href="<?php echo $settingf['twitter']; ?>" uk-icon="icon: twitter"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Instagram', 'page_URL': 'https:'})">
                                <a target="_blank" href="<?php echo $settingf['insta']; ?>" uk-icon="icon: instagram"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Youtube', 'page_URL': 'https:'})">
                                <a target="_blank" href="<?php echo $settingf['youtube']; ?>" uk-icon="icon: youtube"></a>
                            </li>
                        </ul>

                        <ul class="social-last uk-flex uk-flex-right uk-margin-left uk-position-z-index">
                            <li onclick="data_Layer({'event': 'whatsapp_clicked','eventCategory': 'whatsapp_clicked','eventAction': 'click_to_chat', 'page_URL': 'https:'})">
                                <a href="<?php echo $settingf['whatsapp']; ?>" class="whatsapp">
                                    <img src="img/whats-app.svg" height="50" width="50">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom uk-hidden@l">
                <div uk-grid>
                    <div class="uk-width-1-1 copyright">
                        <p>2022 &copy;</p>

                        <p>All rights reserved to Azhar Mushtaq Technical Services L.L.C.</p>

                        <ul class="uk-flex">
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Terms of Service' , 'page_URL': 'https:'})">
                                <a href="terms" target="_blank">Terms of Service</a>
                            </li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Privacy Policy' , 'page_URL': 'https:'})">
                                <a href="privacy" target="_blank">Privacy Policy</a>
                            </li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Sitemap' , 'page_URL': 'https:'})">
                                <a href="sitemap.xml" target="_blank">Sitemap</a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-width-1-1 uk-margin-xlarge-top">
                        <ul class="social uk-float-left uk-flex uk-margin-top">
                                                        <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Facebook', 'page_URL': 'https:'})">
                                <a target="_blank" href="<?php echo $settingf['facebook']; ?>" uk-icon="icon: facebook"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Twitter', 'page_URL': 'https:'})">
                                <a target="_blank" href="<?php echo $settingf['twitter']; ?>" uk-icon="icon: twitter"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Instagram', 'page_URL': 'https:'})">
                                <a target="_blank" href="<?php echo $settingf['insta']; ?>" uk-icon="icon: instagram"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Youtube', 'page_URL': 'https:'})">
                                <a target="_blank" href="<?php echo $settingf['youtube']; ?>" uk-icon="icon: youtube"></a>
                            </li>
                        </ul>

                        <ul class="social-last uk-float-right uk-margin-left uk-position-z-index">
                            <li onclick="data_Layer({'event': 'whatsapp_clicked','eventCategory': 'whatsapp_clicked','eventAction': 'click_to_chat', 'page_URL': 'https:'})">
                                <a href="<?php echo $settingf['whatsapp']; ?>" class="whatsapp">
                                    <img src="img/whats-app.svg" height="50" width="50">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script type="text/javascript">
        $(document).ready(function() {
            if (Cookies.get('g_campaign_id') == null || Cookies.get('g_campaign_id') == '' || Cookies.get('g_campaign_id') == 'undefined')
                {
                    var newURL = "<?php echo $settingf['whatsapp']; ?>";         
                    $(".whatsapp").attr("href", newURL);        
                }
                else 
                {
                    var newURL = "<?php echo $settingf['whatsapp']; ?>";             
                    $(".whatsapp").attr("href", newURL);
                }
        });
    </script>
        <script src="js/function.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
    <script>
        $('.wsc').hover(function() {

            var $this = $(this);
            $this.text("800 972");

        }, function() {
            var $this = $(this);
            $this.text("800 A1SC");
        });
    </script>
    
    <script>
        var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
          
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };    
        
        var par1 = getUrlParameter('campaign_id');
        
        if ((par1 == 'undefined') || (par1 == '') || (par1 == null)) {
            //if there is no parameter, do nothing
        }
        else {
            document.cookie = "g_campaign_id=" + par1 + ";path=/";
        }
        
        if (Cookies.get('g_campaign_id') == null || Cookies.get('g_campaign_id') == '' || Cookies.get('g_campaign_id') == 'undefined'){
                var newURL = "book-online"; 
                var newURLhome = "book-online?service_name=home-cleaning"; 
                var newURLdeep = "book-online?service_name=deep-cleaning"; 
                $(".book-now-header").attr("href", newURL);
                $(".book-now-service").attr("href", newURL);
                $(".book-now-menu-home").attr("href", newURLhome);
                $(".book-now-menu-deep").attr("href", newURLdeep);
        
            }
        else 
            {
                var newURL = "book-online?campaign_id=" + Cookies.get('g_campaign_id'); 
                var newURLhome = 'book-online?service_name=home-cleaning&amp;campaign_id=' + Cookies.get('g_campaign_id'); 
                var newURLdeep = 'book-online?service_name=deep-cleaning&amp;campaign_id=' + Cookies.get('g_campaign_id'); 
                newURLhome = newURLhome.replace("&amp;", "&");
                newURLdeep = newURLdeep.replace("&amp;", "&");
                $(".book-now-header").attr("href", newURL); 
                $(".book-now-service").attr("href", newURL);
                $(".book-now-menu-home").attr("href", newURLhome);
                $(".book-now-menu-deep").attr("href", newURLdeep);
        }
                
        function useTheCookie() {
          var valueOfCookie = Cookies.get('g_campaign_id');
        }
          
        window.onload = useTheCookie;
      
    </script>   
    
 
</body>

</html><script nitro-exclude>if (document.cookie.indexOf('nitroCache=HIT') == -1) {var nitroData = new FormData(); nitroData.append('nitroBeaconUrl', 'aHR0cHM6Ly93d3cud2hpdGVzcG90LmFlL2h0dHBzOg=='); nitroData.append('nitroBeaconCookies', 'W10='); nitroData.append('nitroBeaconHash', '9708e64435eec806351c2f6c5d4234d3c426a89f80406c10dc1a72f479f98d3b293bda448dd3c6aa9a305850954ff801cd15f34cbad24881949b90fc68b69196'); navigator.sendBeacon(location.href, nitroData);} document.cookie = 'nitroCache=HIT; expires=Thu, 01 Jan 1970 00:00:01 GMT;';</script>