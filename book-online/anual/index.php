


<?php
// session_start();
// error_reporting(0);
include '../../config.php';

// if(!isset($_COOKIE['loginservice']))
// { header('location:index.php'); }
 


if(isset($_POST['submitform'])){

$name = mysqli_real_escape_string($db,$_POST['name']);
$phone = mysqli_real_escape_string($db,$_POST['phone']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$buildingtype = mysqli_real_escape_string($db,$_POST['buildingtype']);
$pkg = mysqli_real_escape_string($db,$_POST['pkg']);
$location = mysqli_real_escape_string($db,$_POST['location']);
$userlat = mysqli_real_escape_string($db,$_POST['userlat']);
$userlng = mysqli_real_escape_string($db,$_POST['userlng']);
$servino = 6;
$servicename = 'Annual Maintenance Contract';

  $setservices = "INSERT INTO `users_services`(`service_no`, `by_phone`, `by_name`, `by_gmail`, `location`,`lat`,`lng`,`service_name`, `building_type`, `pkg`) VALUES ('$servino','$phone','$name','$email','$location','$userlat','$userlng','$servicename','$buildingtype','$pkg')";

    $setserviceq = mysqli_query($db,$setservices);
    if($setserviceq){
      header('location:success.html');
    }else{
     // mysqli_error($db);
      header('location:fail.html');
    }
}


$check6a1 = "SELECT * FROM `anaulpkgs` WHERE id=1 ";
$check6a1q = mysqli_query($db,$check6a1);
$check6a1f = mysqli_fetch_assoc($check6a1q);
// $chk1 = $check6a1f['prices'];

$check6a2 = "SELECT * FROM `anaulpkgs` WHERE id=2 ";
$check6a2q = mysqli_query($db,$check6a2);
$check6a2f = mysqli_fetch_assoc($check6a2q);
// $chk2 = $check6a2f['prices'];

$check6a3 = "SELECT * FROM `anaulpkgs` WHERE id=3 ";
$check6a3q = mysqli_query($db,$check6a3);
$check6a3f = mysqli_fetch_assoc($check6a3q);
// $chk3 = $check6a3f['prices'];



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=0.6"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"/>
    <link rel="shortcut icon" type="image/x-icon" href="../../img/icons/favicon.ico">

       <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyDOS8jkm5pyE_ZbsGf5sGO5nz7NxGXHM_8&amp;libraries=places'></script>
   
    <link rel="stylesheet" href="../jscss/bootstrap.min.css"/>
    <link rel="stylesheet" href="../jscss/locationpicker.jquery.js">
    <title> Service Providing </title>
  </head>
  <body style="background: white;">



<style>
  #bgimgdiv1{
    background: url('images/04-ws_amcservice2-450x300.jpg');
    width: 100%;
    height: 65rem;
background-repeat: no-repeat;
background-size: cover;
  }
  #overlaydiv{
    width: 100%;
    height: 65rem;
    opacity: 0.8;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to top ,rgba(0, 0, 0, 0.908),  rgba(119, 119, 119, 0.727));
  }

.fa-angle-down{
    animation: 1s angle infinite alternate-reverse;
}
@keyframes angle{
    0%{
        margin-top:-2rem;
    }
    80%{
        margin-bottom:-2rem;
    }
}













a{
    text-decoration: none;
    margin-right:1rem;
    color:rgb(67, 67, 184);
    font-weight: 600;
  }


  @media screen and (max-width:700px) {
    
  #form1div{
    display: flex;
    flex-direction: column;
    width: 90%;
    margin: auto;
  }
  .form1divin1{
    width: 90%;
    margin: auto;
  }
  .form1divin2{
    width: 90%;
    margin: auto;
  }
  form{
    padding:1rem;
}

.pkgs3div{
        width: 90%;
        margin: auto;
        display: flex;
        flex-direction: column;
    }
    #plan1{
        width: 90%;
        height: auto;
        margin: 4% auto;
    }
    #plan2{
        width: 90%;
        margin: 4% auto;
    }
    #plan3{
        width: 90%;
        height: auto;
        margin: 4% auto;
    }
      #hideonmd{
    display:none !important;
  }
  .navbar-toggler{
    display: block;
  }
  }

  @media screen and (min-width:700px) and (max-width:2000px) {
    
  #form1div{
    display: flex;
    flex-direction: row;
    width: 85%;
    margin: auto;
  }
  .form1divin1{
    width: 60%;
    margin: auto;
  }
  .form1divin2{
    width: 40%;
    margin: auto;
  }
form{
    padding:5rem;
}
.pkgs3div{
        width: 90%;
        margin: auto;
        display: flex;
        flex-direction: row;
    }
    #plan1{
        width: 25%;
        height: auto;
        margin: 0 4%;
    }
    #plan2{
        width: 28%;
        margin: -4% 4%;
    }
    #plan3{
        width: 25%;
        margin:0 4%;
        height: auto;
    }
    #hideonmd{
    display:block;
  }
  .navbar-toggler{
    display: none;
  }
  }
  @media screen and (min-width:2000px){
    
  #form1div{
    display: flex;
    flex-direction: row;
    width: 60%;
    margin: auto;
  }
  .form1divin1{
    width: 60%;
    margin: auto;
  }
  .form1divin2{
    width: 40%;
    margin: auto;
  }
  form{
    padding:5rem;
}

.pkgs3div{
        width: 60%;
        margin: auto;
        display: flex;
        flex-direction: row;
    }
    #plan1{
        width: 25%;
        height: auto;
        margin-left: 4%;
    }
    #plan2{
        width: 28%;
        margin: -4% 4%;
    }
    #plan3{
        width: 25%;
        margin-left: 4%;
        height: auto;
    }
    #hideonmd{
    display:block;
  }
  .navbar-toggler{
    display: none;
  }
  }

</style>
     







<nav class="navbar bg-light fixed-top">
  <div class="container-fluid">
    <div class="navbar-brand">
      <!-- <div style="margin-left:1rem;"><a href="#" onclick="history.back()" style="text-decoration:none; color: cornflowerblue;" class="fas fa-arrow-left"> back </a></div> -->
      <a href="../index.php"><img src="../assets/images/logo.png"></a>
    </div>


    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>


<div id="hideonmd" style="display: flex;flex-direction: row;">
<a href="index.php">Home</a>
<a href="#contentpic">BENEFITS</a>
<a href="#plan1">OUR PACKAGES</a>
<a href="#contact">Contact</a>
</div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contentpic">BENEFITS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#plan1">OUR PACKAGES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
      
        </ul>
      </div>
    </div>



  </div>
</nav>





























     <div id="bgimgdiv1">
      <div id="overlaydiv">

<div id="form1div">
    <div class="form1divin1">
        <h1 class="text-white"> Annual Maintenance Contract </h1>
        <p class="text-white" style="letter-spacing: 1px;word-spacing: 5px;">You can take out an Annual Maintenance Contract to cover a variety of repairs and maintenance tasks in your home. This is a cost effective solution which saves time and money when signing up for an Annual Maintenance Contract with A1Services.</p>
    </div>

   <div class="form1divin2">
    <form method="POST" class="row g-3 bg-light">
        <center>
            <h2 style="color:navy;">Get Your Free Maintenance Inspection</h2>
        </center>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">First Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Phone</label>
          <input type="number" name="phone" class="form-control" id="inputAddress" placeholder="with Country Code +971" required>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="Email" required>
        </div>
        
        <div class="col-md-12">
          <label for="inputState" class="form-label">Building Type</label>
          <select id="inputState" name="buildingtype" class="form-select">
            <option selected value="Apartment">Apartment</option>
            <option value="Apartment">Apartment</option>
            <option value="Villa">Villa</option>
            <option value="Townhouse">Townhouse</option>
          </select>
        </div>
        <div class="col-md-12">
          <label for="inputState" class="form-label">Select AMC Package </label>
          <select id="inputState" name="pkg" class="form-select">
            <option selected value="silver">Silver (Starting from AED <?php echo $check6a1f['prices']; ?>/Annually)</option>
            <option value="silver">Silver (Starting from AED <?php echo $check6a1f['prices']; ?>/Annually)</option>
            <option value="gold">Gold (Starting from AED <?php echo $check6a2f['prices']; ?>/Annually)</option>
            <option value="platinium">Platinum (Starting from AED <?php echo $check6a3f['prices']; ?>/Annually)</option>
          </select>
        </div>
    
        <div class="col-12">
        <input type="hidden" id="loc" name="location">
        <input type="hidden" id="userlat" name="userlat">
        <input type="hidden" id="userlng" name="userlng">
        <center>
            <button type="submit" name="submitform" class="btn" style="background:indigo;color:white;">Enquire Now</button>
        </center>
        </div>
      </form>
   </div>
</div>





      </div>
     </div>
<center>
  <div style="position: relative; margin-top: -3rem; height: 6rem; width: 30%; z-index: 2;background: rgba(173, 173, 173, 0.546);">
    <h1 style="color:rgb(194, 108, 255);text-shadow: 1px 1px 10px black;"> BEST SELLER </h1>
    <h1 class="fa fa-angle-down fs-1"> </h1>
  </div>
</center>

<br>
<br>
<br>

<style>
  
</style>

<div class="pkgs3div">

  <div id="plan1" style="border:2px solid grey;border-radius:20px;">
      <div style="padding:1rem; background:grey;">
        <center>
            <h3> SILVER </h3>
            <b> Starting from AED <?php echo $check6a1f['prices']; ?> </b>
          </center>
      </div>
      <center>
        <div style="display: flex;flex-direction: column; border-radius: 20px 20px 0 0;">
            <p> 24/7 Helpdesk </p>
            <hr>
            <p> 10 X Call Outs (AC/ Plumbing/Electrical) </p>
            <hr>
            <p> 1120 Minutes Emergency Response Time </p>
            <hr>
            <p> 48 Hours Non-Emergency Response Time </p>
            <hr>
            <p> 1 X AC Service </p>
            <hr>
          </div>
      </center>
  </div>

  <div id="plan2" style="border:2px solid black;border-radius:20px;">
      <div style="padding:1rem; background:rgb(45, 45, 45);">
        <center>
            <h3 class="text-white"> Platinum </h3>
            <b class="text-muted"> Starting from AED <?php echo $check6a3f['prices']; ?> </b>
          </center>
      </div>
      <center>
        <div style="display: flex;flex-direction: column; border-radius: 20px 20px 0 0;">
            <p> 24/7 Helpdesk </p>
            <hr>
            <p> Unlimited Call Outs (AC/ Plumbing/ Electrical) </p>
            <hr>
            <p> 60 Minutes Emergency Response Time </p>
            <hr>
            <p> 12 Hours Non-Emergency Response Time </p>
            <hr>
            <p> 3 X AC Service </p>
            <hr>
            <p> 1 X Plumbing Service </p>
            <hr>
            <p> 1 X Electrical Service </p>
            <hr>
            <p> 3 X Carpentry & Masonry Call Outs </p>
            <hr>
            <p> 1 X Water Tank Cleaning </p>
            <hr>
          </div>
      </center>
  </div>

  <div id="plan3" style="border:2px solid gold;border-radius:20px;">
      <div style="padding:1rem; background:gold;">
        <center>
            <h3 class="text-white"> Gold </h3>
            <b class="text-muted"> Starting from AED <?php echo $check6a2f['prices']; ?> </b>
          </center>
      </div>
      <center>
        <div style="display: flex;flex-direction: column; border-radius: 20px 20px 0 0;">
            <p> 24/7 Helpdesk </p>
            <hr>
            <p> 20 X Call Outs (AC/ Plumbing/ Electrical) </p>
            <hr>
            <p> 120 Minutes Emergency Response Time </p>
            <hr>
            <p> 24 Hours Non-Emergency Response Time </p>
            <hr>
            <p> 2 X AC Service </p>
            <hr>
            <p> 1 X Plumbing Service </p>
            <hr>
            <p> 1 X Electrical Service </p>
            <hr>
          </div>
      </center>
  </div>

</div>

<br>
<br>
<br>
<br>
<!--  -->





<div id="bgimgdiv1" style="overflow: hidden;">
    <div id="overlaydiv">

<div id="form1div">
 
 <div class="form1divin2" id="contact">
  <form method="POST" class="row g-3 bg-light">
      <center>
          <h2 style="color:navy;">Get Your Free Maintenance Inspection</h2>
      </center>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">First Name</label>
        <input type="text" name="name"  class="form-control" id="inputEmail4" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Last Name</label>
        <input type="password" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Phone</label>
        <input type="number" name="phone" class="form-control" id="inputAddress" placeholder="with Country Code +971">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="Email">
      </div>
      
      <div class="col-md-12">
        <label for="inputState" class="form-label">Building Type</label>
        <select id="inputState" name="buildingtype" class="form-select">
          <option selected value="Apartment">Apartment</option>
          <option value="Apartment">Apartment</option>
          <option value="Villa">Villa</option>
          <option value="Townhouse">Townhouse</option>
        </select>
      </div>
      <div class="col-md-12">
        <label for="inputState" class="form-label">Select AMC Package </label>
        <select id="inputState" name="pkg" class="form-select">
            <option selected value="silver">Silver (Starting from AED <?php echo $check6a1f['prices']; ?>/Annually)</option>
            <option value="silver">Silver (Starting from AED <?php echo $check6a1f['prices']; ?>/Annually)</option>
            <option value="gold">Gold (Starting from AED <?php echo $check6a2f['prices']; ?>/Annually)</option>
            <option value="platinium">Platinum (Starting from AED <?php echo $check6a3f['prices']; ?>/Annually)</option>
          </select>
      </div>
  
      <div class="col-12">
      <input type="hidden" id="loc" name="location">
      <input type="hidden" id="userlat" name="userlat">
      <input type="hidden" id="userlng" name="userlng">
        <center>
            <button type="submit" name="submitform" class="btn" style="background:indigo;color:white;">Enquire Now</button>
        </center>
      </div>
    </form>
 </div>

<style>






  @media screen and (max-width:700px) {
.formdivintotext{
    width: 111% !important;
    height: auto;
    margin-left: -5% !important;
}
#contentpic{
  width:100%;
  margin: auto;
  display: flex;
  flex-direction: column;
}
#contentimg{
    width: 90%;
    margin: auto;
  }
  #contenttxt{
    width:90%;
    padding:1rem;
  }
}
  @media screen and (min-width:700px) and (max-width:2000px){
.formdivintotext{
    width: 90%;
    height: 65rem;
      margin-right: -10% !important;
      margin-left: 4%;
}
#contentpic{
  width:100%;
  margin: auto;
  display: flex;
  flex-direction: row;
}
#contentimg{
    width: 50%;
    margin: auto;
  }
  #contenttxt{
    width:50%;
    padding:1rem;
  }
}
  @media screen and (min-width:2000px){
.formdivintotext{
    width: 60%;
    height: 65rem;
      margin-right: -35% !important;
      margin-left: 4%;
}
#contentpic{
  width:60%;
  margin: auto;
  display: flex;
  flex-direction: row;
}
#contentimg{
    width: 50%;
    margin: auto;
  }
  #contenttxt{
    width:50%;
    padding:1rem;
  }
}
</style>

 <div class="form1divin1 formdivintotext" style="background:rgb(50, 50, 143);display: flex;align-items: center;justify-content: center;flex-direction: column;">
    <h3 class="text-white"> Your Trusted Maintenance Company in Dubai </h3>
    <br>
    <ul style="color:white;">
        <li>
            Customized Packages
        </li>
        <li>
            Quick Response
        </li>
        <li>
            Reputable
        </li>
        <li>
            Experienced
        </li>
        <li>
            Cost Saving
        </li>
        <li>
            Expert Technicians
        </li>
        <li>
            Peace Of Mind 
        </li>
    </ul>

</div>
</div>
</div>
</div>

<br>
<br>

<div id="contentpic">
  <img src="images/04-ws_amcservice2-450x300.jpg" id="contentimg">
  <div id="contenttxt" style="display: flex;flex-direction: column;align-items: center;justify-content: center;
  ">
<h1 style="color:rgb(34, 34, 208);">A1Services AMC Contract</h1>
<p>We at A1Services offer tailored Solution to Commercial, House and Villa Maintenance requirements. Our Annual Maintenance Packages ensure preventive maintenance, ac repair solutions and routine home maintenance repairs throughout the whole year.</p>
<h3>BENEFITS OF ANNUAL MAINTENANCE CONTRACT</h3>
<ul>
  <li>Availability of dedicated technicians and repairmen.</li>
  <li>Cost effective and economical solution when it comes to maintenance and emergency repairs</li>
  <li>Expert routine inspections and preventative maintenance reduces the occurrence and failure of equipment.</li>
  <li>Customers with Annual Maintenance Contracts are given priority during emergencies.</li>
  <li>Devoid of hidden charges and transparent in the services offered.</li>
</ul>
  </div>
</div>

<br>
<br>









<div style="width:100%;background:rgb(18, 40, 122);display: flex;align-items: center;justify-content: center;flex-direction: column;">
<img src="../../img/logo.png" style="width:16rem;">
<p style="color:white;">© A1Services AMC Service 2022</p>

</div>











<br>
</body>

 <!-- java script here start  -->
 <script src="../jscss/bootstrap.min.js"></script>
 <script src="../jscss/jqoffline3.6.1.js"></script>
<script src="../jscss/locationpicker.jquery.js"></script>
<script>
  $('document').ready(function(){

  });


var userlat = localStorage.getItem('userlat');
$('#userlat').val() = userlat;
var userlng = localStorage.getItem('userlng');
$('#userlng').val() = userlng;
var getuserinfostore = localStorage.getItem('userinfostore');
if(getuserinfostore){
$('#loc').val() = getuserinfostore;
}else{
  $('#loc').val() = 'Not Choose';
}

</script>
</html>