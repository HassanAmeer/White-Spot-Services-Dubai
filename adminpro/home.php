
<?php
include '../config.php';
session_start();
//  error_reporting(0);
if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); }



/*
if(isset($_POST['loginbtnbymail']))
{
  $loginmail = $_POST['loginmailnam'];
   setcookie('coklog',$loginmail,time() + 84600 ,'/');
  header('location:../home.php');
}
*/





if(isset($_POST['logoutbtn']))
{
  unset($_SESSION['adminses']);
  header('location:../index.php');
}
/////////////////////////////////
/**********************************/
$thistime = date('d/m/Y H:i:s a', time());





$tpending = "SELECT COUNT(status) AS pendingservices FROM users_services WHERE status=0";
$tpendingq = mysqli_query($db,$tpending);
$tpendingf = mysqli_fetch_assoc($tpendingq);
$tpendingv = $tpendingf['pendingservices'];
///// start count total pending services
$tprovided = " SELECT COUNT(status) AS providingservices FROM users_services WHERE status=1";
$tprovidedq = mysqli_query($db,$tprovided);
$tprovidedf = mysqli_fetch_assoc($tprovidedq);
$tprovidedv = $tprovidedf['providingservices'];
///// start count total pending services





if(isset($_POST['typechartbtn'])){
   $typechartval = $_POST['typechartval'];
   if($typechartval == 'pie'){
    $chartnameval = 'pie';
   }else if($typechartval == 'bar'){
    $chartnameval = 'bar';
   }else if($typechartval == 'line'){
    $chartnameval = 'line';
   }else{
    $chartnameval = 'radar';
   }
}else{
  $chartnameval = 'radar';
}




?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href="js/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<script src="js/jqoffline3.6.1.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title> Admin Panel </title>
  </head>
  <body>


<style>
.navadscolor{
  color:navy;background: rgb(227,190,254); letter-spacing:1px; font-style: bold;
}
.navbitcoin{
  animation: navbitcoin 4s infinite;
}
@keyframes navbitcoin
{
  10%{
   opacity: 0.2; margin-left: 1em;
  }
  80%{
   opacity: 1; margin-left: 0em;
  }
}

  /* for table golden star and silver */
      
      
 table.edTable { width: 100%; font: 17px calibri; } table, table.edTable th, table.edTable td { border: solid px #9b58b5; border-collapse: collapse; padding: 3px; text-align: center; } table.edTable td { background-color: #5c0e80; color: #ffffff; font-size: 14px; } table.edTable th { background-color : #b02875; color: #ffffff; } tr:hover td { background-color:navy; color: #dddddd; }
 
      
/*  own */
.silTable{
  width: 100%;

  
}
.sthead{
  background: silver;
  border:2px solid gray;
  border-radius: 10%;
  box-shadow: 2px 3px 14px 2px black;
}
.sthead th{
  color:green;
  font-size: 1em;
}
.gthead{
  background:rgb(203,149,6);
  border:2px solid gray;
  border-radius: 10%;
  box-shadow: 2px 3px 14px 2px black;
}
.gthead th{
  color:indigo;
  font-size: 1em;
}
.strowdata td{
  font-size: 0.8em;
  
}
.strowdata:hover { letter-spacing:1px; }
.strowdata:hover td i{ color:#05cecd; }
.strowdata td i{
  width: 1em;
  color:indigo;
}
/* end of golden star table */
#listtable{
    width: 100%;
    height: 80%;
    overflow-x: auto; 
    overflow-y: auto; 
    height: 82em;
 }      

</style>



<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
     <i class="fas fa-user-tie text-info"> </i> 
      <?php echo $_SESSION['adminses']; ?>
      </a>
      <button class="float-end bg-dark navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>







<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
   <i class="fas fa-user-tie text-info"> </i> 
    <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel"><?php echo $_SESSION['adminses']; ?></h5>
    <button type="button" class=" btn-close btn-close-white text-light" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
  </div>
  <div class="offcanvas-body">
    <div class="text-light">
      Technical Services Managements
    </div>
    <hr class="bg-light">
    <div class="dropdown mt-3">
      <a href="adminstng.php" target="_blank" class="btn btn-dark dropdown-toggle" type="button" id="resetprojcbtn" data-bs-toggle="dropdown">
        <i class="fa fa-recycle text-white"> </i> Reset Projects
</a>
    </div>
   <br>
   <br>
   <br>
   <br>
   <br>
    
<div class="d-grid gap-2">
  <button class="btn btn-success navbtns navdboardbtn" type="button"><i class="fa fa-dashboard text-white"> </i> Dashboard</button>
  <a href="tableservices.php" target="_blank" class="btn btn-success navbtns"><i class="fa fa-user text-white navbitcoin"> </i> Clients Orders </a>
  <a href="services_stngs.php" target="_blank" class="btn btn-success navbtns"><i class="fa fa-gear text-warning"> </i> Service Settings </a>
  <a href="adminstng.php" target="_blank" class="btn btn-success navbtns"><i class="fa fa-gear text-white"> </i> Admin Settings </a>
  <a href="contact.php" target="_blank" class="btn btn-success navbtns"><i class="fa fa-bell text-white"> </i> Contacts </a>
</div>


<style>
 #google_translate_element select{
 background:#f6edfd;
 color:#383ffa;
 border: none;
 font-size :1rem;
 border-radius:3px;
 }
 .goog-logo-link{
   display:none!important;
  }
 .goog-te-gadget{
 color:transparent!important;
 } 
 .goog-te-banner-frame{
 display:none !important;
 }
 
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}

/**********************/
#google_translate_element select{
   background-color:#f6edfd;
   color:#383ffa;
   border: none;
   border-radius:3px;

 }
/**********************/
 .goog-logo-link{
    display:none !important;
   }
 .goog-te-gadget{
  color:transparent!important;
  }
 .goog-te-gadget-icon{
  background:none !important;
  }
  

/**********************/
/**********************/
/**********************
#google_translate_element { height:10px !important; width: 15px !important; overflow: hidden !important; }
/**********************/
/**********************/
/**********************/
  .goog-te-banner-frame{
 display:none !important;
 }
  /**********************/
/**********************/
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}
</style>






<script type="text/javascript">// <![CDATA[
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: "ru,en,ur,ar,tr,hi"}, 'google_translate_element');
}
// ]]></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>



 <div><i class="fa fa-globe"></i></div>  <div id="google_translate_element"></div>

  <form method="post">
 <div class="d-grid gap-2" style="position:absolute; bottom:0;width:90%;text-align:center;">
  <button type="submit" name="logoutbtn" class="btn btn-danger"> Logout  <i class="fa fa-arrow-right text-white"></i> </button>
   </div>
</form>


  </div>
</div>
   <br>
   <br>
  <!----------------------------------------------------------------------------------------------------- start js divs ----------------------------------------------------------------------------------------------------->
  
  
<div id="errors" class="alert notifycross" style="display:none;background:#fdb0b0f0; color:red; border-radius:20px; border:1px solid red; box-shadow:2px 2px 14px 2px black;font-size:2em; position:fixed;z-index:100;top:500px;" role="alert">
   </div>
 
 <!---------------------------------->
 <!---------------------------------->

 <div id="successrs" class="alert alert-success notifycross" style="display:none;color:green;border-radius:20px; border:1px solid green;font-size:2em; box-shadow:2px 2px 14px 2px black;position:fixed;z-index:100;top:350px;" role="alert">
</div>
 <!---------------------------------->
  

  
  <center>
   <div id="dashboarddiv">
     
    <div style="display:flex;flex-direction:row; width:90%">
     
      <div class="bg-primary p-2" style="width:50%;box-shadow:2px 2px 20px black;">
        <u class="text-white"> <i class="fa fa-history text-warning"> </i> Login Time</u>
        <hr class="p-1">
         <h3 class="text-white"> <?php echo $thistime; ?></h3>
    <p class="text-warning"> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
       </div>
       
      <div class="bg-warning p-2" style="width:50%;">
        <u class="text-white"> <i class="fa fa-history text-primary">  </i> Pending Services </u>
        <hr class="p-1">
         <h3 class="text-white">  <i class="fa fa-history text-primary"> : <?php echo $tpendingv; ?></i></h3>
       <p class="text-muted"> remaining Services </p>
       </div>
     </div>
     
    <br>
    <br>
    <br>
   <div class="container">



    
      <!-- single canvas node to render the chart -->
      <style>
        @media screen and (max-width:700px) {
          #myChart{ 
            width: 400px;
            
          }
        }
        @media screen and (min-width:700px) {
          #myChart{ 
            width: 800px;
    
          }
        }
      </style>
      <canvas
        id="myChart"
       
        aria-label="chart"
        role="img"
      ></canvas>
    </div>    
    
   
  <div class="d-flex justify-content-between">
  <form method="post" class="align-self-center">
  <div class="input-group mb-3">
   <select name="typechartval" id="" style="background:rgb(141, 0, 0);color:white;">
    <option value="pie"> Pie </option>
    <option value="bar"> Bar </option>
    <option value="line"> Line </option>
    <option value="radar"> Radar </option>
  </select>
   <button name="typechartbtn" class="btn-light">Change Chart Type</button>
  </div>
  </form>
</div>

<hr style="width:20%;">




<h2 class="align-self-center text-muted fa fa-eye"> Last Orders </h2>
<br>    
<a class="" href="tableservices.php" target="_blank"> See All Records </a>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">View</th>
            <th scope="col">service Name</th>
            <th scope="col">paid BY</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Service Location</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>

<?php
$userservices = "SELECT * FROM `users_services` ORDER BY id DESC";
$userservicesq = mysqli_query($db,$userservices);
  while ($servicesf = mysqli_fetch_assoc($userservicesq)) {

    if($servicesf['status'] == 0){
  echo '<tr>
    <th scope="row">'.$servicesf['id'].'</th>
    <td> <a href="profiledetails.php?id='.$servicesf['id'].'" target="_blank" class="fa fa-eye text-success" style="text-decoration:none;"> VIEW </a> </td>
    <td> '.$servicesf['service_name'].' </td>
    <td> '.$servicesf['paid'].' </td>
    <td> '.$servicesf['by_name'].' </td>
    <td> <a href="tel:'.$servicesf['by_phone'].'" style="text-decoration:none;" class="fa fa-phone"> </a> +971'.$servicesf['by_phone'].'..</td>
    <td> <a href="mailto:'.$servicesf['by_gmail'].'" style="text-decoration:none;" class="fa fa-envelope text-danger"> </a> '.$servicesf['by_gmail'].'..</td>
    <td> '.$servicesf['location'].' </td>
    <td> '.$servicesf['total'].' AED </td>
  </tr>';
    }else{
      echo '<tr>
      <th scope="row">'.$servicesf['id'].'</th>
      <td> <a href="profiledetails.php?id='.$servicesf['id'].'" target="_blank" class="fa fa-eye text-success" style="text-decoration:none;"> VIEW </a> </td>
      <td> '.$servicesf['service_name'].' </td>
      <td> '.$servicesf['paid'].' </td>
      <td> '.$servicesf['by_name'].' </td>
      <td> <a href="tel:'.$servicesf['by_phone'].'" style="text-decoration:none;" class="fa fa-phone"> </a> +971'.$servicesf['by_phone'].'...</td>
      <td> <a href="mailto:'.$servicesf['by_gmail'].'" style="text-decoration:none;" class="fa fa-envelope text-danger"> </a> '.$servicesf['by_gmail'].'..</td>
      <td> '.$servicesf['location'].' </td>
      <td> '.$servicesf['total'].' AED </td>
    </tr>';
    }

    } 

?>

 
    
        
        </tbody>
     </table>
   </div>


    
    
    
    
    
    
    <br>
    <br>
<div style="width:10rem;border-radius:0 30px 30x 0; box-shadow:1px 1px 10px navy;border-left:15px solid navy;background:silver;" class="float-start">
  <a href="adminstng.php" target="_blank" style="color:orange;font-size:1.1rem; text-shadow:1px 1px 2px black;"> Advanced <i class="fa fa-gear"> </i> </a>
</div>
    
<center>
 <h3 class=" text-success" style="border:1px solid green;box-shadow:1px 1px 15px black; border-radius:10px; background:#c0fcadb2; text-align:center;"> Login Settings </h3> 
</center>
   </div>
  </center>





<!-----1.2.------------------------------------------------------------------------------------------------>













<!-----2.------------------------------------------------------------------------------------------------>
   
<!-----3.------------------------------------------------------------------------------------------------>

<!-----4.------------------------------------------------------------------------------------------------>
<!----end of setting div--->
<div id="usrslistdiv_changename" style="display:none;">

</div>
<!------ end of list div1 ------->

<!-----5.------------------------------------------------------------------------------------------------>















<!-----5.------------------------------------------------------------------------------------------------>

   
   
   

   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
 <script src="js/chart.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jqoffline3.6.0.js"></script>

  <script>
///////////////// start admin login reset
$(document).on('click','.admnpassbtn',function(){
  var admnname = $('.admnname').val();
  var admnpass = $('.admnpass').val();
      $.post(
      "byajax.php",
    {adminamjs:admnname, adminpassjs:admnpass},
       function(admnsetsf){
       if(admnsetsf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       }else if(admnsetsf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// end admin login reset

 //////////// Start Payments Page Selected ///////////////////
 $(document).on('click','#radiobtn1j',function(){
  var radiobtn1j = $('#radiobtn1j:checked').val();
$('.whenpaypagslct2').removeClass('whenpaypagslctj');
$('.whenpaypagslct1').addClass('whenpaypagslctj');
  //$('.whenpaypagslct').siblings
   $.post(
      "datajaxo.php",
      {radiobtn1js:radiobtn1j},
       function(radiobtn1jf){
       if(radiobtn1jf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Update ');
        }else if(radiobtn1jf == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      }  
       }); // end post
});
$(document).on('click','#radiobtn2j',function(){
  var radiobtn2j = $('#radiobtn2j:checked').val();
$('.whenpaypagslct1').removeClass('whenpaypagslctj');
$('.whenpaypagslct2').addClass('whenpaypagslctj');
   $.post(
      "datajaxo.php",
      {radiobtn2js:radiobtn2j},
       function(radiobtn2jf){
       if(radiobtn2jf == 1){
       $(".grnalrt").fadeIn();
       $(".grnalrt").html('√  successfully Update ');
        }else if(radiobtn2jf == 0){
          $('.redalrt').fadeIn();
          $(".redalrt").html('× Something Went Wrong');
      }  
       }); // end post
});
/////////////////end payments page selected

///////////// Reset Project Button ///////////////
$(document).on('click','#resetprojcbtn',function(){

$.post(
"byajax.php",
{allpkgresetj:'ueuejfj'},
 function(allpkgrstf){
 if(allpkgrstf == 1){
 $("#successrs").fadeIn();
 $("#successrs").html('√ Reset Projects');
}else if(allpkgrstf == 0){
 $('#errors').fadeIn();
 $("#errors").html('× try again');
}  }); // end post
})
////////////// end Reset Project Button ///////////
//////////////////////////////
$(document).on('click','.searchclientsbtn',function(){
  var serchusrinpt = $('.searchinpt').val();
      $.post(
      "byajax.php",
    {serchusrinptjs:serchusrinpt},
       function(serchusrinptf){
      //  $('.tablesvserch').html(serchusrinptf);    
       }); // end post
  }),
////////////////// 


    





































  $(document).on('click','.vbelltobtn', function(){
    $('.vbelltodiv').slideToggle();
  });
  $(document).on('click','.vbelltoclsbtn', function(){
    $('.vbelltodiv').hide(10);
  });
 /////////
 $(document).on('click','.vbelltobtn', function(){
 var vbelliddatajs = $(this).data('usrbyno');
 $('.vusrbynodata').html(vbelliddatajs);
 $('.vusrbynodinpt').val(vbelliddatajs);
 })
  
  
 ///////// get data 
function sociallinks(){
    $.post(
      "byajax.php",
      {sociallinkjs:'jxdjjdk'},
      function(socialvf){
      $("#vlinks").html(socialvf);
      }
    ); // end post
}    
//////////////////
function vusrstblf(){
    $.post(
      "byajax.php",
      {vusrstbljs:'icidu'},
      function(vusrstblfj){
      $(".tablesvall").html(vusrstblfj);
      }
    ); // end post
}    
//////////////////
//////////////////
function voferdatef(){
    $.post(
      "byajax.php",
      {voferdatjs:'jfjrdj'},
      function(voferdatf){
      $("#voferdate").html(voferdatf);
      }
    ); // end post
}    
//////////////////
//////////////////
function contactdivff(){
    $.post(
      "byajax.php",
      {contactdivjs:'dijdjd'},
      function(contactdivf){
      $("#contactdiv").html(contactdivf);
      }
    ); // end post
}    
//////////////////
//////////////////
//////////////////
function mininvesttrxdivff(){
    $.post(
      "byajax.php",
      {mininvesttrxdivjs:'dijjsdjd'},
      function(mininvesttrxdivf){
      $("#mininvesttrxdiv").html(mininvesttrxdivf);
      }
    ); // end post
}    
//////////////////
//////////////////
function vusrsreqoutbl(){
    $.post(
      "byajax.php",
      {vusrsreqj:'bdhdh'},
      function(vusrsreqf){
     $(".vreqwithdrawal").html(vusrsreqf);
      }
    ); // end post
}    

 ///////// get data 
function minespeeddivff(){
    $.post(
      "byajax.php",
      {minespeeddivjs:'hdjdjfufu'},
      function(minespeeddivjs){
  $("#minespeeddiv").html(minespeeddivjs);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function staticsvff(){
    $.post(
      "byajax.php",
      {staticsvjs:'djjdjdjsj'},
      function(staticsvjs){
  $("#vstaticdiv").html(staticsvjs);
      }
    ); // end post
}    
//////////////////
//////////////////
 ///////// get data 
function vbelltxtdivff(){
    $.post(
      "byajax.php",
      {vbelltxtdivfjs:'peoenek'},
      function(vbelltxtdivf){
  $("#vbelltxtdiv").html(vbelltxtdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function regbonustrxdivff(){
    $.post(
      "byajax.php",
      {regbonustrxdivjs:'aiksjeiie'},
      function(regbonustrxdivf){
  $("#regbonustrxdiv").html(regbonustrxdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vminsumoutdivff(){
    $.post(
      "byajax.php",
      {vminsumoutdivffjs:'owowkekkw'},
      function(vminsumoutdivf){
  $("#vminsumoutdiv").html(vminsumoutdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vsitenamedivff(){
    $.post(
      "byajax.php",
      {vsitenamedivffj:'oqoeoie'},
      function(vsitenamedivf){
  $("#vsitenamediv").html(vsitenamedivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vytlinkdivff(){
    $.post(
      "byajax.php",
      {vytlinkdivffj:'pqmswj'},
      function(vytlinkdivf){
  $("#vytlinkdiv").html(vytlinkdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function contactdiv2(){
    $.post(
      "byajax.php",
      {vblogdivfjs:'qoow'},
      function(vblogdivf){
  $("#vblogdiv").html(vblogdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function soutfeesdivf(){
    $.post(
      "byajax.php",
      {soutfeesdivjs:'qllwlka'},
      function(soutfeesdivf){
  $("#soutfeesdiv").html(soutfeesdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vfreewbalff(){
    $.post(
      "byajax.php",
      {vfreewbalonofjs:'djjdje'},
      function(vfwbalonof){
      var onofwbal = vfwbalonof;
  if(vfwbalonof==0){
$("#freewbalidonofv option[value='0']").prop('selected',true);}else{
$("#freewbalidonofv option[value='1']").prop('selected',true);
}
      }
    ); // end post
}    
//////////////////
 function freewbalonoff(value)
  {   var freewvalonoff = value;
      $.post(
      "byajax.php",
      {freewvaluejs:freewvalonoff},
      function(freesoutonof){
       if(freesoutonof == 1){
        $("#successrs").fadeIn();
          $("#successrs").html('√  successfully updated'); 
            vfreewbalonoff();
        }else if(freesoutonof == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  }
/////////////////////////////////////
 ///////// get data 
function vwbalonoff(){
    $.post(
      "byajax.php",
      {vwbalonofjs:'djjdje'},
      function(vwbalonof){
      var onofwbal = vwbalonof;

  if(vwbalonof==0){
$("#wbalidonofv option[value='0']").prop('selected',true);}else{
$("#wbalidonofv option[value='1']").prop('selected',true);
}
      }
    ); // end post
}    
//////////////////
 function allsmoutonoff(value)
  {   var valonoff = value;
      $.post(
      "byajax.php",
      {valuejs:valonoff},
      function(smoutonof){
       if(smoutonof == 1){
        $("#successrs").fadeIn();
          $("#successrs").html('√  successfully updated'); 
            vwbalonoff();
        }else if(smoutonof == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  }
/////////////////////////////////////
/////////////start for links update
//////////////////////////////
 $(document).on('click','.setlinksbtn',function(){
  var tglink = $('#tglink').val();
   var gmalink = $('#gmaillink').val();
   var phone1 = $('#phone1').val();
      $.post(
      "byajax.php",
      {tglinkjs:tglink,gmalinkjs:gmalink,phone1js:phone1},
       function(updatlnks){
       if(updatlnks == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Update ');
      
      $('#gmaillink').val("");
      $('#tglink').val("");
      $('#phone1').val("");
       
        sociallinks();
        }else if(updatlnks == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.mininvesttrxbtn',function(){
  var mininvesttrxinpt = $('#mininvesttrxinpt').val();
      $.post(
      "byajax.php",
    {mininvesttrxinptjs:mininvesttrxinpt},
       function(mininvesttrxinptf){
       if(mininvesttrxinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#mininvesttrxinpt').val("");
        mininvesttrxdivff();
       }else if(mininvesttrxinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
//////////////////////////////
 $(document).on('click','.minespeedbtn',function(){
  var minespeedinpt = $('#minespeedinpt').val();
      $.post(
      "byajax.php",
    {minespeedinptjs:minespeedinpt},
       function(minespeedinptf){
       if(minespeedinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#minespeedinpt').val("");
        minespeeddivff();
       }else if(minespeedinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.soutfeesbtn',function(){
  var soutfeesinpt = $('#soutfeesinpt').val();
      $.post(
      "byajax.php",
    {soutfeesinptjs:soutfeesinpt},
       function(soutfeesinptf){
       if(soutfeesinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#minespeedinpt').val("");
        soutfeesdivf();
       }else if(soutfeesinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.sendbeloftblsbtn',function(){
  var sendbeloftblsinpt = $('.sendbeloftblsinpt').val();
  var vusrbynodinpt = $('.vusrbynodinpt').val();
      $.post(
      "byajax.php",
  {sendbeloftblsinptjs:sendbeloftblsinpt,vusrbynodinptjs:vusrbynodinpt},
       function(sendbeloftblsinptf){
       if(sendbeloftblsinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Send Your Message in Notification ');
       $('.sendbeloftblsinpt').val("");
        vbysurtobelltblsdivff();
       }else if(sendbeloftblsinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.staticbtn',function(){
  var profitinpt = $('#profitinpt').val();
  var membrshipinpt = $('#membrshipinpt').val();
      $.post(
      "byajax.php",
    {profitinptjs:profitinpt,membrshipinptjs:membrshipinpt},
       function(profitinptf){
       if(profitinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#winrateinpt').val("");
        staticsvff();
       }else if(profitinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.nextdrawbtn',function(){
  var nextdrawinpt = $('#nextdrawinpt').val();
      $.post(
      "byajax.php",
    {nextdrawinptjs:nextdrawinpt},
       function(nextdrawinptf){
       if(nextdrawinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#winrateinpt').val("");
        nextdrawff();
       }else if(nextdrawinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 

//////////////////////////////
 $(document).on('click','.regbonustrxbtn',function(){
  var regbonustrxinpt = $('#regbonustrxinpt').val();
      $.post(
      "byajax.php",
    {regbonustrxinptjs:regbonustrxinpt},
       function(regbonustrxinptf){
       if(regbonustrxinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#setoferdays').val("");
        regbonustrxdivff();
       }else if(regbonustrxinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 

  
/////////////single person mail ///////////////
 $(document).on('click','.sndmail1btn',function(){
   var mailto = $('#mailto').val();
   var sbjctmail = $('#sbjctmail').val();
   var msgmail = $('#msgmail').val();
      $.post(
      "byajax.php",
      {mailtoj:mailto,sbjctmailj:sbjctmail,msgmailj:msgmail},
       function(sndmail1btnf){
       if(sndmail1btnf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ mail send successfully to this ' + mailto);
     }else if(sndmail1btnf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Mail not send try again');
      }  }); // end post
  })
///////////////////////////////
  
/////////////single person mail ///////////////
 $(document).on('click','.sndmailallbtn',function(){
   var sbjctmail = $('#sbjctmail1').val();
   var msgmail = $('#msgmail1').val();
      $.post(
      "byajax.php",
      {sbjctmailall:sbjctmail,msgmailall:msgmail},
       function(sndmailallf){
       if(sndmailallf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ mail send successfully');
     }else if(sndmailallf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Mail not send try again');
      }  }); // end post
  })
///////////////////////////////

// /////////////single person mail ///////////////
//  $(document).on('click','#fulresetbtn',function(){
//       $.post(
//       "byajax.php",
//       {fulresetjs:'dhueuw8'},
//        function(fulrstgamf){
//        if(fulrstgamf == 1){
//        $("#successrs").fadeIn();
//        $("#successrs").html('√ successfully Reset All user details but hidden details you can see');
//      }else if(fulrstgamf == 0){
//        $('#errors').fadeIn();
//        $("#errors").html('× try again');
//       }  }); // end post
//   })

 
$(document).on('click','.slctbanjs',function()
{
  var usrbanval = $(this).data("usrbanval");
  var usrtblid = $(this).data("usrtblid");

 $.post(
      "byajax.php",
      {usrbanvaljs:usrbanval,usrtblidjs:usrtblid},
       function(usrbanf){
       if(usrbanf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
         vusrstblf();
     }else if(usrbanf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.belltxtbtn',function()
{
  var vbelltxtinpt = $('#vbelltxtinpt').val();

 $.post(
      "byajax.php",
      {vbelltxtinptjs:vbelltxtinpt},
       function(vbelltxtinptf){
       if(vbelltxtinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
       $('#vbelltxtinpt').val("");
         vbelltxtdivff();
     }else if(vbelltxtinptf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
  
  
///////////////////////////////
 
$(document).on('click','.reqchangbtn',function()
{
  var reqid = $(this).data("reqid");
  var reqstatus = $(this).data("reqstatus");

 $.post(
      "byajax.php",
      {reqidjs:reqid,reqstatusjs:reqstatus},
       function(reqchangf){
       if(reqchangf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
         vusrsreqoutbl();
     }else if(reqchangf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

})
///////////////////////////////
 
$(document).on('click','.delmsgsbydtacls',function()
{
  var delmsgsid = $(this).data("delmsgsid");

 $.post(
      "byajax.php",
      {delmsgsidjs:delmsgsid},
       function(delmsgsidf){
       if(delmsgsidf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Removed');
         contactdivff();
     }else if(delmsgsidf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

})
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.delpostidbtn',function()
{
var delpostid = $(this).data("delpostid");
 $.post(
      "byajax.php",
      {delpostidjs:delpostid},
       function(delpostidf){
       if(delpostidf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Removed');
         contactdiv2();
     }else if(delpostidf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 
})
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.delreqsoutbtn',function()
{
var delreqsoutbyid = $(this).data("delreqsoutbyid");
var delreqstatus = $(this).data("delreqstatus");
 $.post(
      "byajax.php",
      {delreqsoutbyidjs:delreqsoutbyid,delreqstatusjs:delreqstatus},
       function(delreqsoutbyidf){
       if(delreqsoutbyidf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Removed');
         vusrsreqoutbl();
     }else if(delreqsoutbyidf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
     }else if(delreqsoutbyidf == 2){
       $('#errors').fadeIn();
       $("#errors").html("× status Not Paid Can't be deleted");
      }  }); // 
})
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
/////////////////////////////////
/////////////////////////////////
$(document).on('click','.navbtns',function(){
$(this).siblings().removeClass('navadscolor');
$(this).addClass('navadscolor');

});
//////////////////////////////////
   /////////////////////////////////////
  $(document).on('click','.notifycross',function(){
      $('#errors').hide(100);
      $('#successrs').hide(100);
    })
//////////////////////////////////
/////////////////////////////////////////
 
/////////////////////////////////////////
  $(document).on('click','.advacstngbtn', function(){
  $('.advancstnddiv').show();
  $('#dashboarddiv').hide();
  $('#presalediv').hide();
  $('#usrslistdiv').hide();
  $('#reqwithdrawdiv').hide();
  $('#blogdivhide').hide();
  vfreewbalff();
  soutfeesdivf();
});
/////////
  $(document).on('click','.navdboardbtn', function(){
    $('#dashboarddiv').show();
    $('#presalediv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navmailbtn', function(){
    $('#dashboarddiv').hide();
    $('#presalediv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navpresbtn', function(){
    $('#presalediv').show();
    $('#dashboarddiv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navusrslistbtn', function(){
    $('#presalediv').hide();
    $('#usrslistdiv').show();
    $('#dashboarddiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navreqwithdrawbtn', function(){
    $('#presalediv').hide();
    $('#reqwithdrawdiv').show();
    $('#usrslistdiv').hide();
    $('#dashboarddiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navblogbtn', function(){
    $('#presalediv').hide();
    $('#blogdivhide').show();
    $('#reqwithdrawdiv').hide();
    $('#usrslistdiv').hide();
    $('#dashboarddiv').hide();
    $('.advancstnddiv').hide();
  }) 
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//// chart 
var ctx = document.getElementById("myChart").getContext("2d");

var myChart = new Chart(ctx, {
  type: '<?php echo $chartnameval; ?>',
  data: {
    // Data Labels
    labels: ["Total Visitor", "Compelete  Services", "Remianing Services",],

    datasets: [
      // Data Set 1
      {
        //  Chart Label
        label: "performance",
 
        // Actual Data
        data: [<?php echo $tprovidedv + $tpendingv ?> , <?php echo $tprovidedv ?>, <?php echo $tpendingv ?>],
        // data: [60, 22 , 45],

        // Background Color
        backgroundColor: [
        "rgba(54, 162, 235, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(255, 99, 132, 0.2)",
        ],

        // Border Color
        borderColor: [
          "rgba(54, 162, 235, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(255, 99, 132, 1)",
           ],

        // Border Width
        borderWidth: 1,
      },

    ],
  },

  options: {
 
    responsive: false,

    layout: {
      padding: {
        left: 50,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },

    tooltips: {
      enabled: true,
      backgroundColor: "black", // 
      titleFontFamily: "Comic Sans MS",
      titleFontSize: 30, // Set Tooltip Font Size
      titleFontStyle: "bold italic",
      titleFontColor: "yellow",
      titleAlign: "center",
      titleSpacing: 3,
      titleMarginBottom: 50,
      bodyFontFamily: "Comic Sans MS",
      bodyFontSize: 20,
      bodyFontStyle: "italic",
      bodyFontColor: "silver",
      bodyAlign: "center",
      bodySpacing: 3,
    },

    // Custom Chart Title
    title: {
      display: true,
      text: " Services Providing And Remainings",
      position: "bottom",
      fontSize: 25,
      fontFamily: "Comic Sans MS",
      fontColor: "green",
      fontStyle: "bold italic",
      padding: 5,
      lineHeight: 1,
    },

    // Legends Configuration
    legend: {
      display: true,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "navy",
        fontSize: 10,
        boxWidth: 5,
      },
    },

    animation: {
      duration: 7000,
      easing: "easeInOutBounce",
    },
  },
});
//////////////////////////////////
window.onload = sociallinks();
window.onload = vwbalonoff();
window.onload = vusrstblf();
window.onload = vusrsreqoutbl();
window.onload = contactdivff();
window.onload = contactdiv2();







//window.onload = vminsumoutdivff();




  </script>
    
    
    
    
  </body>
</html>

