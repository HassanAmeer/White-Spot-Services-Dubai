<?php
error_reporting(0);
include 'config.php';

$settingv = "SELECT * FROM `settings`";
$settingvq = mysqli_query($db,$settingv);
$settingf = mysqli_fetch_assoc($settingvq);
?>

 

 


<meta name="title" content="Blogs |A1Services Cleaning Services Dubai">
<meta name="keywords" content="A1Services blog, A1Services blog dubai, A1Services cleaning blog, A1Services cleaning services blog, white spot blog, white spot blog dubai">
<meta name="description" content="Checkout latest blogs on Home Cleaning, Sofa Cleaning, Carpet Cleaning, Office Cleaning and more. Call 800WSC for more info!">

<title>Community |A1Services Cleaning Services Dubai</title>



<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:pages" content="141573409825720">
    <meta name="google-site-verification" content="1HWBUcOPRJLxlcIKSX8VN_xFWsWwsF7JOQ88Fck7Jko">

    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">

     <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" /> -->


    <!-- UI Kit Stylesheet -->
    <link rel="stylesheet" href="css/uikit.min.css">

    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

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

    <link href="css-1?family=Lora:400i&display=swap" rel="stylesheet">

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
    <noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-TC9LV93" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header class="page-header uk-width-1-1">
        <div class="uk-container uk-container-large">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar="">
                <div class="uk-navbar-left">
                    <ul class="page-header-first uk-flex uk-flex-bottom">
                        <li class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="Cleaning Services DubaiA1Services">
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
                        <li><a href="about.php" onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'About Us'})">About Us</a></li>
                        <li>
                            
                            <a href="services/home.php" onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential' , 'page_URL': ''})">Our Services <span class="uk-margin-small-left" uk-icon="icon: chevron-down; ratio: 1"></span></a>

                            <div uk-dropdown="pos: bottom-left;offset: 30">
                                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Cleaning Services Dubai' , 'page_URL': ''})">
                                        <a href="services/cleaning-services-dubai.php">
                                            Cleaning Services Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Home Cleaning Services' , 'page_URL': ''})">
                                        <a href="services/home-cleaning-services-dubai.php">
                                            Home Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Home Disinfection Service' , 'page_URL': ''})">
                                        <a href="services/coronavirus-prevention-dubai.php">
                                            Home Disinfection Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Pest Control Dubai' , 'page_URL': ''})">
                                        <a href="services/pest-control-dubai.php">
                                            Pest Control Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Deep Cleaning Services' , 'page_URL': ''})">
                                        <a href="services/deep-cleaning-services-dubai.php">
                                            Deep Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Maids in Dubai' , 'page_URL': ''})">
                                        <a href="services/maids-service-in-dubai.php">
                                            Maids in Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Home Sanitization Service Dubai' , 'page_URL': ''})">
                                        <a href="services/home-sanitization-service-dubai.php">
                                            Home Sanitization Service Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Move In Cleaning' , 'page_URL': ''})">
                                        <a href="services/move-in-cleaning.php">
                                            Move In Cleaning
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Sofa Cleaning' , 'page_URL': ''})">
                                        <a href="services/sofa-cleaning.php">
                                            Sofa Cleaning
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Handyman Services' , 'page_URL': ''})">
                                        <a href="services/handyman-services.php">
                                            Handyman Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Housekeeping Services' , 'page_URL': ''})">
                                        <a href="services/housekeeping-services-dubai.php">
                                            Housekeeping Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Babysitting Service' , 'page_URL': ''})">
                                        <a href="services/babysitting-service.php">
                                            Babysitting Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Annual Maintenance Contract' , 'page_URL': ''})">
                                        <a href="services/annual-maintenance-contract.php">
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
                                    
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Damac Hills' , 'page_URL': ''})">
                                        <a href="damac-hills.php">
                                            Damac Hills
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Damac Hills 2' , 'page_URL': ''})">
                                        <a href="damac-hills-2.php">
                                            Damac Hills 2
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Mudon' , 'page_URL': ''})">
                                        <a href="mudon.php">
                                            Mudon
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Mira' , 'page_URL': ''})">
                                        <a href="mira.php">
                                            Mira
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Town Square' , 'page_URL': ''})">
                                        <a href="town-square.php">
                                            Town Square
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Sustainable City' , 'page_URL': ''})">
                                        <a href="sustainable-city.php">
                                            Sustainable City
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Remraam' , 'page_URL': ''})">
                                        <a href="remraam.php">
                                            Remraam
                                        </a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'header_residential','eventLabel':'Arabian Ranches' , 'page_URL': ''})">
                                        <a href="arabian-ranches.php">
                                            Arabian Ranches
                                        </a>
                                    </li>
                                </ul>
                               
                            </div>
                        </li>
                        
                        <li>
                            <a href="blog.php" onclick="data_Layer({'event': 'top_navigation','eventCategory': 'top_navigation','eventAction': 'Blog'})">Blog</a>
                        </li>

                        

                        <!--<li>-->
                        <!--    <a href="https://a1sevices.xyz/team">Our Team</a>-->
                        <!--</li>-->

                        <!--<li>-->
                        <!--    <a href="https://a1sevices.xyz/pricing">Pricing</a>-->
                        <!--</li>-->
                    </ul>
                    
                    <ul class="uk-margin-small-left uk-visible@l">
                        <li onclick="data_Layer({'event': 'lead_journey','eventCategory': 'lead_journey','eventAction': 'step0.0_journey_stared','eventLabel':'book_now_header' , 'page_URL': ''})">
                            
                             <a href="book-online/index.php" class="uk-button book-now-header">Book_Now</a>
                        </li>
                    </ul>

                    <ul class="page-header-last uk-hidden@l">
                        <li>
                            <a href="#offcanvas-menu" uk-toggle="">
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
                    <a href="index.php">
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

                    <a href="services/home.php">Our Services</a>

                                        <ul class="uk-nav-sub">
                                                <li>
                            <a href="services/cleaning-services-dubai.php">
                                Cleaning Services Dubai
                            </a>
                        </li>
                                                <li>
                            <a href="services/home-cleaning-services-dubai.php">
                                Home Cleaning Services
                            </a>
                        </li>
                                                <li>
                            <a href="services/coronavirus-prevention-dubai.php">
                                Home Disinfection Service
                            </a>
                        </li>
                                                <li>
                            <a href="services/pest-control-dubai.php">
                                Pest Control Dubai
                            </a>
                        </li>
                                                <li>
                            <a href="services/deep-cleaning-services-dubai.php">
                                Deep Cleaning Services
                            </a>
                        </li>
                                                <li>
                            <a href="services/maids-service-in-dubai.php">
                                Maids in Dubai
                            </a>
                        </li>
                                                <li>
                            <a href="services/home-sanitization-service-dubai.php">
                                Home Sanitization Service Dubai
                            </a>
                        </li>
                                                <li>
                            <a href="services/move-in-cleaning.php">
                                Move In Cleaning
                            </a>
                        </li>
                                                <li>
                            <a href="services/sofa-cleaning.php">
                                Sofa Cleaning
                            </a>
                        </li>
                                                <li>
                            <a href="services/handyman-services.php">
                                Handyman Services
                            </a>
                        </li>
                                                <li>
                            <a href="services/housekeeping-services-dubai.php">
                                Housekeeping Services
                            </a>
                        </li>
                                                <li>
                            <a href="services/babysitting-service.php">
                                Babysitting Service
                            </a>
                        </li>
                                                <li>
                            <a href="services/annual-maintenance-contract.php">
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
    
    <section class="services uk-position-relative uk-text-center">
        <div class="uk-container">
            <h1><span>Arabian Ranches</span></h1>
            <br>

            <div class="uk-grid-small uk-child-width-1-2@l uk-flex-center" uk-grid="" uk-margin="margin: uk-margin-small-top" uk-height-match="target: .service-box p;row: false">
                                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Cleaning</h2>

                                        <p>AtA1Services, we provide a wide array of cleaning services for clients throughout Dubai. Since the company&#39;s inception, we have established ourselves as a premier provider of cleaning services in the Emirate. Over the years, we have added several new services to our portfolio, including carpet cleaning and air duct cleaning. This page is dedicated to all the cleaning services provided byA1Services in Arabian Ranches.</p>

                                        <a href="arabian-ranches/cleaning-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Home Cleaning</h2>

                                        <p>Your home is your Shangri-la, the place where you find peace!A1Services Cleaning can help you maintain it.</p>

                                        <a href="arabian-ranches/home-cleaning-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Home Disinfection</h2>

                                        <p>We recommend getting your home surfaces disinfected and sanitized.A1Services Cleaning&#39;s limited time home disinfection and sanitization service in Arabian Ranches is designed to remove all bacterial and viral germs from the surfaces of your home.</p>

                                        <a href="arabian-ranches/coronavirus-prevention-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Pest Control</h2>

                                        <p>Bed bugs, rodents, and other pests infestations have no boundaries. They can enter your home and start laying down the groundwork for their future generations within weeks or even days. Before you know it they have expanded their horizons to your bedroom, your bed and even your pillows. Before it reaches critical levels, it is always a good idea to hire a professional pest control service in Arabian Ranches.</p>

                                        <a href="arabian-ranches/pest-control-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Deep Cleaning</h2>

                                        <p>The Dubai Heat seriously affects the condition of your apartment. Dirt can gather in your home, creating a breeding ground for bacteria and germs. Deep cleaning goes beyond regular home cleaning and leaves your apartment spotless.A1Services Cleaning recommends deep cleaning at least once a month to keep your home in good condition; our vetted professionals provide good Deep Cleaning with equipment.</p>

                                        <a href="arabian-ranches/deep-cleaning-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Maids</h2>

                                        <p>Deep cleaning your home is a perfect way to ensure that your home environment remains a safe and comfortable space for the entire family. If you have kids and are worried about using chemicals to sanitize the home, then deep cleaning Arabian Ranches is the answer. You can even askA1Services to sanitize baby cribs and toys using steam cleaning equipment.</p>

                                        <a href="arabian-ranches/maids-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Home Sanitization</h2>

                                        <p>We have successfully provided disinfection services in Arabian Ranches, Jumeirah Lakes Towers (JLT), Jumeirah Village Circle (JVC), Arabian Ranches, Akoya Oxygen and Business Bay.</p>

                                        <a href="arabian-ranches/home-sanitization-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Move In Cleaning</h2>

                                        <p>Moving to a new house is always exciting but it can also bring stress and changes to your routines. The last thing you need to worry about, over everything else, is cleaning. Let&rsquo;s take a closer look at how the move-in cleaning service can help you feel at home when moving to a new house.</p>

                                        <a href="arabian-ranches/move-in-cleaning-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Sofa Cleaning</h2>

                                        <p>Finding the right sofa cleaning service in Arabian Ranches can be tough with so many options and so many companies &ldquo;claiming&rdquo; to be the best. AtA1Services, we have specialized sofa cleaners with more than 6 years of experience and training.</p>

                                        <a href="arabian-ranches/sofa-cleaning-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Handyman</h2>

                                        <p>As residents of Dubai, we all live very busy lives per our schedules while looking after families, hanging out with friends and spending time loved ones. In between we encounter problems like a broken window or a leaking pipe which take up a lot of time to fix and completely ruins our schedule. Desperation makes us try attempt fixing complex problems ourselves and if despite several attempts we aren&#39;t able to fix it ourselves, it is always better to hire a handyman to fix our homes.</p>

                                        <a href="arabian-ranches/handyman-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Housekeeping</h2>

                                        <p>If you are thinking about getting some help with your cleaning chores, don&#39;t put off that decision. The following reasons can help you make a case for hiring housekeeping services Arabian Ranches.</p>

                                        <a href="arabian-ranches/housekeeping-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            <div>
                            <div class="service-box home-service-box uk-text-left@s">
                                <div uk-grid="">
                                    <div class="uk-width-auto@s">
                                        <div class="services-img">
                                                                                    </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <h5>Exclusive for Arabian Ranches Community</h5>
                                        <h2 style="font-weight: 500;">Babysitting</h2>

                                        <p>When parents are busy with other matters, it is important to have a babysitter available to take care of children. Our expert babysitters near you are experienced, dependable, and available every day of the week to keep your children company.</p>

                                        <a href="arabian-ranches/babysitting-services.php" class="uk-button uk-button-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                </div>
        </div>
    </section>

    <footer>
        <div class="uk-container uk-container-large">
            <div uk-grid="">
                <!-- <div class="uk-width-1-4@xl uk-visible@l">
                     
                </div>  -->

                <div class="uk-width-1-1@xl uk-width-1-1@m">
                    <div uk-grid="">
                        <div class="uk-width-1-4@s uk-width-1-2">
                            <div class="footer-box">
                                <h5>Residential</h5>

                                                                <ul>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Cleaning Services Dubai' , 'page_URL': ''})">
                                        <a href="services/cleaning-services-dubai.php">
                                            Cleaning Services Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Home Cleaning Services' , 'page_URL': ''})">
                                        <a href="services/home-cleaning-services-dubai.php">
                                            Home Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Home Disinfection Service' , 'page_URL': ''})">
                                        <a href="services/coronavirus-prevention-dubai.php">
                                            Home Disinfection Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Pest Control Dubai' , 'page_URL': ''})">
                                        <a href="services/pest-control-dubai.php">
                                            Pest Control Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Deep Cleaning Services' , 'page_URL': ''})">
                                        <a href="services/deep-cleaning-services-dubai.php">
                                            Deep Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Maids in Dubai' , 'page_URL': ''})">
                                        <a href="services/maids-service-in-dubai.php">
                                            Maids in Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Home Sanitization Service Dubai' , 'page_URL': ''})">
                                        <a href="services/home-sanitization-service-dubai.php">
                                            Home Sanitization Service Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Move In Cleaning' , 'page_URL': ''})">
                                        <a href="services/move-in-cleaning.php">
                                            Move In Cleaning
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Sofa Cleaning' , 'page_URL': ''})">
                                        <a href="services/sofa-cleaning.php">
                                            Sofa Cleaning
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Handyman Services' , 'page_URL': ''})">
                                        <a href="services/handyman-services.php">
                                            Handyman Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Housekeeping Services' , 'page_URL': ''})">
                                        <a href="services/housekeeping-services-dubai.php">
                                            Housekeeping Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Babysitting Service' , 'page_URL': ''})">
                                        <a href="services/babysitting-service.php">
                                            Babysitting Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_residential','eventLabel':'Annual Maintenance Contract' , 'page_URL': ''})">
                                        <a href="services/annual-maintenance-contract.php">
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
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Office Cleaning Services' , 'page_URL': ''})">
                                        <a href="services/office-cleaning-services.php">
                                            Office Cleaning Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Office Disinfection Services Dubai' , 'page_URL': ''})">
                                        <a href="services/office-disinfection-services-dubai.php">
                                            Office Disinfection Services Dubai
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Hotel Housekeeping Services' , 'page_URL': ''})">
                                        <a href="services/hotel-housekeeping-services-dubai.php">
                                            Hotel Housekeeping Services
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Window Cleaning Service' , 'page_URL': ''})">
                                        <a href="services/window-cleaning-service-dubai.php">
                                            Window Cleaning Service
                                        </a>
                                    </li>
                                                                                                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_corporate','eventLabel':'Post Construction Cleaning' , 'page_URL': ''})">
                                        <a href="services/post-construction-cleaning.php">
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
                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'Cleaning Service JVC' , 'page_URL': ''})">
                                        <a href="cleaning-services-jvc-dubai.php" target="_blank">Cleaning Service JVC</a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'Maids in Dubai Marina' , 'page_URL': ''})">
                                        <a href="maids-in-dubai-marina.php" target="_blank">Maids in Dubai Marina</a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'How to book a Cleaning' , 'page_URL': ''})">
                                        <a href="how-to-book-a-cleaning-with-whitespot.php" target="_blank">How to book a Cleaning</a>
                                    </li>
                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'Cleaning Service Silicon Oasis' , 'page_URL': ''})">
                                        <a href="introducing-home-cleaning-services-in-dubai-silicon-oasis.php" target="_blank">Cleaning Service Silicon Oasis</a>
                                    </li>

                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'Deep Cleaning Service for Dubai Residents' , 'page_URL': ''})">
                                        <a href="deep-cleaning-services-for-dubai-residents.php" target="_blank">Deep Cleaning Service for Dubai Residents</a>
                                    </li>

                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_useful_links','eventLabel':'House Cleaning Service Dubai' , 'page_URL': ''})">
                                        <a href="house-cleaning-service-dubai.php" target="_blank">House Cleaning Service Dubai</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="uk-width-1-4@s uk-width-1-2">
                            <div class="footer-box">
                                <h5>About</h5>

                                <ul>


                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_about','eventLabel':'Contact Us' , 'page_URL': ''})">
                                        <a href="contact.php">Contact Us</a>
                                    </li>

                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_about','eventLabel':'Blog' , 'page_URL': ''})">
                                        <a href="blog.php">Blog</a>
                                    </li>

                                    <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_about','eventLabel':'About Us' , 'page_URL': ''})">
                                        <a href="about.php">About Us</a>
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
                <div uk-grid="">
                    <div class="uk-width-3-4@l">
                        <ul class="copyright uk-flex">
                            <li>2022 &copy; All rights reserved Azhar Mushtaq Technical Services L.L.C.</li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Terms of Service' , 'page_URL': ''})">
                                <a href="terms.php" target="_blank">Terms of Service</a>
                            </li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Privacy Policy' , 'page_URL': ''})">
                                <a href="privacy.php" target="_blank">Privacy Policy</a>
                            </li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Sitemap' , 'page_URL': ''})">
                                <a href="sitemap.xml" target="_blank">Sitemap</a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-width-1-4@l uk-flex uk-flex-right@m uk-flex-middle">
                        <ul class="social uk-flex uk-flex-left uk-flex-right@m">
                            
                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Facebook', 'page_URL': ''})">
                                <a target="_blank" href="<?php echo $settingf['facebook']; ?>" uk-icon="icon: facebook"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Twitter', 'page_URL': ''})">
                                <a target="_blank" href="<?php echo $settingf['twitter']; ?>" uk-icon="icon: twitter"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Instagram', 'page_URL': ''})">
                                <a target="_blank" href="<?php echo $settingf['insta']; ?>" uk-icon="icon: instagram"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Youtube', 'page_URL': ''})">
                                <a target="_blank" href="<?php echo $settingf['youtube']; ?>" uk-icon="icon: youtube"></a>
                            </li>
                        </ul>

                        <ul class="social-last uk-flex uk-flex-right uk-margin-left uk-position-z-index">
                            <li onclick="data_Layer({'event': 'whatsapp_clicked','eventCategory': 'whatsapp_clicked','eventAction': 'click_to_chat', 'page_URL': ''})">
                                <a href="" class="whatsapp">
                                    <img src="img/whats-app.svg" height="50" width="50">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom uk-hidden@l">
                <div uk-grid="">
                    <div class="uk-width-1-1 copyright">
                        <p>2022 &copy;</p>

                        <p>All rights reserved Azhar Mushtaq Technical Services L.L.C.</p>

                        <ul class="uk-flex">
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Terms of Service' , 'page_URL': ''})">
                                <a href="terms.php" target="_blank">Terms of Service</a>
                            </li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Privacy Policy' , 'page_URL': ''})">
                                <a href="privacy.php" target="_blank">Privacy Policy</a>
                            </li>
                            <li onclick="data_Layer({'event': 'footer_navigation','eventCategory': 'footer_navigation','eventAction': 'footer_bottom','eventLabel':'Sitemap' , 'page_URL': ''})">
                                <a href="sitemap.xml" target="_blank">Sitemap</a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-width-1-1 uk-margin-xlarge-top">
                        <ul class="social uk-float-left uk-flex uk-margin-top">
                                                        <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Facebook', 'page_URL': ''})">
                                <a target="_blank" href="<?php echo $settingf['facebook']; ?>" uk-icon="icon: facebook"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Twitter', 'page_URL': ''})">
                                <a target="_blank" href="<?php echo $settingf['twitter']; ?>" uk-icon="icon: twitter"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Instagram', 'page_URL': ''})">
                                <a target="_blank" href="<?php echo $settingf['insta']; ?>" uk-icon="icon: instagram"></a>
                            </li>

                            <li onclick="data_Layer({'event': 'footer','eventCategory': 'social_icons_clicked','eventAction': 'Youtube', 'page_URL': ''})">
                                <a target="_blank" href="<?php echo $settingf['youtube']; ?>" uk-icon="icon: youtube"></a>
                            </li>
                        </ul>

                        <ul class="social-last uk-float-right uk-margin-left uk-position-z-index">
                            <li onclick="data_Layer({'event': 'whatsapp_clicked','eventCategory': 'whatsapp_clicked','eventAction': 'click_to_chat', 'page_URL': ''})">
                                <a href="" class="whatsapp">
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
                    var newURL = "<?php echo $settingf['whatsapp']; ?>?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services";             
                    $(".whatsapp").attr("href", newURL);
                }
        });
    </script>
        <script src="js/function.js"></script>
    <script src="npm/js-cookie%403.0.1/dist/js.cookie.min.js"></script>
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

</html><script nitro-exclude="">if (document.cookie.indexOf('nitroCache=HIT') == -1) {var nitroData = new FormData(); nitroData.append('nitroBeaconUrl', 'aHR0cHM6Ly93d3cud2hpdGVzcG90LmFlL2FyYWJpYW4tcmFuY2hlcw=='); nitroData.append('nitroBeaconCookies', 'W10='); nitroData.append('nitroBeaconHash', '1fc20f8863184aa87b9e7563c9900de02c26032e870732f63bc3357b1be0f451550a4682198fb51ec414443423a1386b4c2be750a4d48ce4a9c9d967df28ad21'); navigator.sendBeacon(location.href, nitroData);} document.cookie = 'nitroCache=HIT; expires=Thu, 01 Jan 1970 00:00:01 GMT;';</script>