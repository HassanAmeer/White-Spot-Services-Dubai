
<?php
// session_start();
// error_reporting(0);
include '../config.php';

if(!isset($_COOKIE['loginservice']))
{ header('location:index.php'); }

if(isset($_COOKIE['loginservice'])){
   $phone = $_COOKIE['loginservice'];
}

$phone = $_COOKIE['loginservice'];
$usrlogin = "SELECT * FROM `login_users` WHERE phone='$phone'";
$usrloginq = mysqli_query($db,$usrlogin);
$usrloginf = mysqli_fetch_assoc($usrloginq);
$phone = $usrloginf['phone'];
$firstname = $usrloginf['firstname'];


$getid = $_GET['id'];

  $usrservices = "SELECT * FROM `users_services` WHERE id=$getid";
  $usrservicesq = mysqli_query($db,$usrservices);
  $vservices = mysqli_fetch_assoc($usrservicesq);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"/> -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/icons/favicon.ico">

       <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyDOS8jkm5pyE_ZbsGf5sGO5nz7NxGXHM_8&amp;libraries=places'></script>
   
    <link rel="stylesheet" href="jscss/bootstrap.min.css"/>
    <link rel="stylesheet" href="jscss/locationpicker.jquery.js">
    <title> Service Providing Details </title>
  </head>
  <body style="background: white;">


    <nav class="navbar navbar-dark bg-dark d-flex justify-content-between" style="position:sticky;top:0;z-index:100;">
        <div class="align-self-start" style="margin-left:1rem;"><a href="#" onclick="history.back()" style="text-decoration:none;" class="fas fa-arrow-left text-light"> back </a></div>
        <div class="align-self-end"><a class="navbar-brand" style="margin-right:2rem;" href="#">
        <?php echo $firstname; ?>
            <i class="fas fa-user-tie text-info"> </i> 
           </a></div>
     </nav>
     
<style>

:root {
  --primary-color: #00adea;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  font-family: Montserrat, "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  /* min-height: 100vh; */
}




/* Progressbar */
.progressbar {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  counter-reset: step;
  margin: 5rem 0 0 0;
}

.progressbar::before,
.progressline {
  content: "";
  position: absolute;
  top: 40%;
  left:50%;
  transform: translateY(-50%);
  height: 100%;
  width: 5px;
  background-color: #dcdcdc;
  z-index: -1;
  color: #00adea;
}

.progressline {
  background-color: var(--primary-color);
  width: 0%;
  height:100%;
  transition: 0.3s;
}

.progress-step {
  margin-bottom: 32rem;
  width: 2.1875rem;
  height: 2.1875rem;
  background-color: #dcdcdc;
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.progress-step::before {
  margin-top:1rem;
  counter-increment: step;
  align-items:center;
  content: counter(step);
}

.progress-step::after {
  content: attr(data-title);
  position: relative;
  top: calc(20% + 1.5rem);
  font-size: 0.85rem;
  /* color: rgb(38, 56, 69); */
}


.progress-step-active {
  background-color: var(--primary-color);
  color: #f3f3f3;
}


/*  */
  #stepercard{
    display:flex;flex-direction: row;
    width:90%;
    margin:auto;
  }
  #progressbar{
width: 10%;
overflow: hidden;
  }


/* start of right side car styles */

.txtcontents{
  display: flex;
  justify-content: space-between;
  padding: 0 10%;

}

.cardsinfoin{
  margin-top:2rem;
  box-shadow: 1px 1px 10px silver;
}
.cardheadingcolor{
  color: #00adea;
}

/*  */
@media screen and (max-width:700px) {
  #stepercard{
    width:98%;
  }
  #cardsinfo{
    width: 90%;
    margin: 2rem auto;
    display:flex;flex-direction:column;
  }
  .progress-step::after {
  content: attr(data-title);
  position: relative;
  top: calc(20% + 1.3rem);
  font-size: 0.6rem;
  margin-left:0.1rem;
  /* color: rgb(38, 56, 69); */
}
}
@media screen and (min-width:700px) and (max-width:2000px) {
  #stepercard{
    width:80%;
  }
  #cardsinfo{
    width: 70%;
    margin: 2rem auto;
    display:flex;flex-direction:column;
  }
}
@media screen and  (min-width:2000px) {
  #stepercard{
    width:60%;
  }
  #cardsinfo{
    width: 60%;
    margin: 2rem auto;
    display:flex;flex-direction:column;
  }
}

/*  */

</style>
<!--  -->
<br>
<br>
<center>
  <h2> Service Details </h2>
</center>


<div id="stepercard">
  <!-- start of progress lines -->
  <div class="progressbar">
    <div class="progressline" id="progress"></div>
    <div class="progress-step progress-step-active stp1" data-title="Client"></div>
    <div class="progress-step stp2" data-title="Service"></div>
    <div class="progress-step stp3 whenanualhide" data-title="Status"></div>
  </div>
<!-- end of progress lines -->







<!-- start of right side cards -->

<div id="cardsinfo">
<div class="cardsinfoin cd1" style="background:rgba(244, 244, 244, 0.519);">
  <h4 class="card-header ch1"> Client Details </h4>
 
 <?php

   echo '<div class="txtcontents">
 <h4> Name </h4>
 <p> '.$vservices['by_name'].' </p>
</div>
<div class="txtcontents">
 <h4> Email </h4>
 <p> '.$vservices['by_gmail'].' </p>
</div>
<div class="txtcontents">
 <h4> Phone </h4>
 <p> '.$vservices['by_phone'].' </p>
</div>
<div class="txtcontents">
 <h4> Location </h4>
 <p> '.$vservices['location'].' </p>
</div>
<div class="txtcontents">
 <h4> Address </h4>
 <p> '.$vservices['full_adress'].' </p>
</div>';
  
?>
  
 </div>
 <!-- 2 -->
 <div class="cardsinfoin cd2" style="background:rgba(244, 244, 244, 0.519);">
  <h4 class="card-header ch2"> Services Details </h4>
  <?php
if($vservices['service_no'] == 1 || $vservices['service_no'] == 7){
  
echo '<div class="txtcontents">
    <h4> Service Name </h4>
    <p> '.$vservices['service_name'].' </p>
  </div>
  <div class="txtcontents">
    <h4> NOs. Proffessionals <u style="font-size:1rem" class="text-muted"> Duration </u> </h4>
    <p> '.$vservices['no_of_prof'].' </p>
  </div>
  <div class="txtcontents">
    <h4> Proffessionals Needs </h4>
    <p> '.$vservices['prof_needs'].' </p>
  </div>
  <div class="txtcontents">
    <h4> Material </h4>
    <p> '.$vservices['use_material'].' </p>
  </div>
  <div class="txtcontents">
    <h4> Building type
     </h4>
    <p> '.$vservices['building_type'].' </p>
  </div>
  <div class="txtcontents">
  <h4> Pricing type
   </h4>
  <p> '.$vservices['pricing_type'].' </p>
</div>
  <div class="txtcontents">
    <h4> Date
     </h4>
    <p> '.$vservices['selected_days'].' </p>
  </div>
  <div class="txtcontents">
    <h4> Time
     </h4>
    <p> '.$vservices['selected_time'].' </p>
  </div>
  <div class="txtcontents">
  <h4> Service Location </h4>
  <p> '.$vservices['location'].'  </p>
  </div>
  <div class="txtcontents">
  <h4> Service Address </h4>
  <p> '.$vservices['full_adress'].' s </p>
  </div>
  <div class="txtcontents">
 <h4> Booking Date </h4>
 <p> '.$vservices['time'].' </p>
</div>
  <div class="txtcontents">
    <p> Description: '.$vservices['user_desc'].'</p>
  </div>
  
  <hr style="width:85%; margin:auto;">
  <div class="txtcontents">
  <h6 class="text-muted"> Payment Type </h3>
  <p class="text-muted"> '.$vservices['paid'].' </p>
 </div>
  <div class="txtcontents">
 <h6> Price </h6>
 <p> '.$vservices['price'].' </p>
</div>
  <div class="txtcontents">
 <h6> material Charges </h6>
 <p> '.$vservices['meterial_price'].' </p>
</div>
  <div class="txtcontents">
 <h6> Vat </h6>
 <p> '.$vservices['vat'].' </p>
</div>
  <div class="txtcontents">
 <h6> Discount </h6>
 <p> '.$vservices['discount'].' </p>
</div>
  
  <div class="txtcontents">
 <h3> Total Price </h3>
 <b> '.$vservices['total'].' AED </b>
</div>';

}else if($vservices['service_no'] == 6){
  echo '<div class="txtcontents">
  <h4> Service Name </h4>
  <p> '.$vservices['service_name'].' </p>
</div>
<div class="txtcontents">
  <h4> Building type
   </h4>
  <p> '.$vservices['building_type'].' </p>
</div>
<div class="txtcontents">
  <h4> Bedrooms
   </h4>
  <p> '.$vservices['bedrooms'].' </p>
</div>
<div class="txtcontents">
  <h4> Packege type
   </h4>
  <p> '.$vservices['pkg'].' </p>
</div>
<div class="txtcontents">
<h4> Service Location </h4>
<p> '.$vservices['location'].'  </p>
</div>
<div class="txtcontents">
<h4> Service Address </h4>
<p> '.$vservices['full_adress'].' s </p>
</div>
<div class="txtcontents">
<h4> Booking Date </h4>
<p> '.$vservices['time'].' </p>
</div>
<div class="txtcontents">
  <p> Description: '.$vservices['user_desc'].'</p>
</div>
<hr style="width:85%; margin:auto;">
<div class="txtcontents">
<h6 class="text-muted"> Payment Type </h3>
<p class="text-muted"> '.$vservices['paid'].' </p>
</div>
<div class="txtcontents">
<h6> Price </h6>
<p> '.$vservices['price'].' </p>
</div>
<div class="txtcontents">
<h6> Vat </h6>
<p> '.$vservices['vat'].' </p>
</div>
<div class="txtcontents">
<h6> Discount </h6>
<p> '.$vservices['discount'].' </p>
</div>

<div class="txtcontents">
<h3> Total Price </h3>
<b> '.$vservices['total'].' AED </b>
</div>
';
}else{
  echo '<div class="txtcontents">
  <h4> Service Name </h4>
  <p> '.$vservices['service_name'].' </p>
</div>
<div class="txtcontents">
  <h4> Building type
   </h4>
  <p> '.$vservices['building_type'].' </p>
</div>
<div class="txtcontents">
  <h4> Bedrooms
   </h4>
  <p> '.$vservices['bedrooms'].' </p>
</div>
<div class="txtcontents">
<h4> Date
 </h4>
<p> '.$vservices['selected_days'].' </p>
</div>
<div class="txtcontents">
<h4> Time
 </h4>
<p> '.$vservices['selected_time'].' </p>
</div>
<div class="txtcontents">
<h4> Service Location </h4>
<p> '.$vservices['location'].'  </p>
</div>
<div class="txtcontents">
<h4> Service Address </h4>
<p> '.$vservices['full_adress'].' s </p>
</div>
<div class="txtcontents">
<h4> Booking Date </h4>
<p> '.$vservices['time'].' </p>
</div>
<div class="txtcontents">
  <p> Description: '.$vservices['user_desc'].'</p>
</div>
<hr style="width:85%; margin:auto;">
<div class="txtcontents">
<h6 class="text-muted"> Payment Type </h3>
<p class="text-muted"> '.$vservices['paid'].' </p>
</div>
<div class="txtcontents">
<h6> Price </h6>
<p> '.$vservices['price'].' </p>
</div>
<div class="txtcontents">
<h6> Vat </h6>
<p> '.$vservices['vat'].' </p>
</div>
<div class="txtcontents">
<h6> Discount </h6>
<p> '.$vservices['discount'].' </p>
</div>

<div class="txtcontents">
<h3> Total Price </h3>
<b> '.$vservices['total'].' AED </b>
</div>
';
}

?>

 </div>
<!-- 3 -->

<?php


if($vservices['status'] == 0){
  echo '<h1 class="text-danger" style="margin-top:5rem;"> Service
  Pending <i class="fa fa-history"> </i>
  </h1>';
}else{
  echo '<h1 class="text-success" style="margin-top:5rem;">
   Service Provided <i class="fa fa-check"> </i>
  </h1>';
}

?>

</div>
<!-- end of right side cards -->
</div>







<div class="card-header" style="position:sticky;bottom:0;z-index:100; display:flex; flex-direction:row;justify-content:space-evenly">

    <h6>Region Id: <?php echo $vservices['region_id']; ?></h6>
    <h6>Latitude: <?php echo $vservices['lat']; ?></h6>
    <h6>Longnitud: <?php echo $vservices['lng']; ?></h6>

</div>














  </body>
  <!-- java script here start  -->
  <script src="jscss/bootstrap.min.js"></script>
  <script src="jscss/jqoffline3.6.1.js"></script>
<script src="jscss/locationpicker.jquery.js"></script>
<script src="chart.js"></script>
<script>
  $('document').ready(function(){
  });

  $('.cd1').hover(function(){
     $('.progress-step').removeClass('progress-step-active');
     $('.stp1').addClass('progress-step-active');
     $('.card-header').removeClass('cardheadingcolor');
     $('.ch1').addClass('cardheadingcolor');
  });
  $('.cd2').hover(function(){
     $('.progress-step').removeClass('progress-step-active');
     $('.stp2').addClass('progress-step-active');
     $('.card-header').removeClass('cardheadingcolor');
     $('.ch2').addClass('cardheadingcolor');
    //  $('.stp2').data('title').css({'color':'red'});
  });


</script>
</html>