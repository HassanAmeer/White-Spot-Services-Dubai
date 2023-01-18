
<?php
session_start();
error_reporting(0);
unset($_SESSION['ok']);
unset($_SESSION['not']);
include '../config.php';

if(!isset($_COOKIE['loginservice']))
{ header('location:index.php'); }




if(isset($_GET['del'])){
  $del = mysqli_real_escape_string($db, $_GET['del']);

  $delnotify = "DELETE FROM `notification` WHERE id = '$del'";
  $delnotifyq = mysqli_query($db,$delnotify);
  if($delnotifyq){
    $_SESSION['ok'] = $del;
  }else{
    $_SESSION['not'] = $del;
  }

}






$phone = $_COOKIE['loginservice'];


  $userservices = "SELECT * FROM `users_services` WHERE by_phone='$phone'";
  $userservicesq = mysqli_query($db,$userservices);


 

  $phone = $_COOKIE['loginservice'];
  $usrlogin = "SELECT * FROM `login_users` WHERE phone='$phone'";
  $usrloginq = mysqli_query($db,$usrlogin);
  $usrloginf = mysqli_fetch_assoc($usrloginq);
  $phone = $usrloginf['phone'];
  $firstname = $usrloginf['firstname'];

  $tpending = " SELECT COUNT(status) AS pendingservices FROM users_services WHERE by_phone='$phone' AND status=0";
  $tpendingq = mysqli_query($db,$tpending);
  $tpendingf = mysqli_fetch_assoc($tpendingq);
  $tpendingv = $tpendingf['pendingservices'];
  ///// start count total pending services
  $tprovided = " SELECT COUNT(status) AS providingservices FROM users_services WHERE by_phone='$phone' AND status=1";
  $tprovidedq = mysqli_query($db,$tprovided);
  $tprovidedf = mysqli_fetch_assoc($tprovidedq);
  $tprovidedv = $tprovidedf['providingservices'];
  ///// start count total pending services

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=0.6"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"/>
    <link rel="shortcut icon" type="image/x-icon" href="../img/icons/favicon.ico">

       <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyDOS8jkm5pyE_ZbsGf5sGO5nz7NxGXHM_8&amp;libraries=places'></script>
   
    <link rel="stylesheet" href="jscss/bootstrap.min.css"/>
    <link rel="stylesheet" href="jscss/locationpicker.jquery.js">
    <title> Service Profile </title>
  </head>
  <body style="background: white;">


    <nav class="navbar navbar-dark bg-dark d-flex justify-content-between" style="position:sticky;top:0;z-index:100;">
        <div class="align-self-start" style="margin-left:1rem;"><a href="#" onclick="history.back()" style="text-decoration:none;" class="fas fa-arrow-left text-light"> back </a></div>


<?php
if(isset($_SESSION['ok'])){
  echo '<div class="alert alert-success" role="alert"> Notification Deleted Id: '.$_SESSION['ok'].' </div>';
}else if(isset($_SESSION['not'])){
  echo '<div class="alert alert-red" role="alert"> Try Again For id: '.$_SESSION['not'].' </div>';
}else{
?>
<div class="align-self-end"><a class="navbar-brand" style="margin-right:2rem;" href="#"> 
<?php echo $phone; ?> <i class="fas fa-phone text-info"> </i> 
</a></div>
<?php
}
?>

<button id="bellvbtn" class="fa fa-bell text-warning" style="text-shadow:1px 1px 2px red; font-size:2rem;border: none; background: none;outline:none;margin-right:1rem;"> </button>

<button class="btn btn-secondary input-group-text rounded-pill logoutbtn fa fa-sign-out">
   Logout        
</button>
</nav>
     

<style>
  #bgimgdiv1{
    background: url('anual/images/04-ws_amcservice2-450x300.jpg');
    width: 100%;
    height: 40rem;
background-repeat: no-repeat;
background-size: cover;
  }
  #overlaydiv{
    width: 100%;
    height: 40rem;
    opacity: 0.8;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to top ,rgba(0, 0, 0, 0.908),  rgba(119, 119, 119, 0.727));
  }
</style>
     
     <div id="bgimgdiv1">
      <div id="overlaydiv">

   <h1 style="color: white; text-shadow: 1px 1px 5px black;"> <b class="text-muted"> Welcome Back </b> <?php echo $firstname; ?> <i class="fas fa-user-tie"> </i> </h1>

      </div>
     </div>
<center>
  <div style="position: relative; margin-top: -3rem; height: 6rem; width: 30%; z-index: 2;background: rgba(173, 173, 173, 0.546);">
    <h1 style="color:rgb(194, 108, 255);text-shadow: 1px 1px 10px black;"> My Services</h1>
  </div>
</center>














<div id="bellvdiv" style="display:none; width:90%;margin:5%;background:whitesmoke;box-shadow:1px 1px 20px silver;border-radius: 5px;">
   <br>

<?php
$notification = "SELECT * FROM `notification` WHERE phone='$phone'";
$notificationq = mysqli_query($db,$notification);
while($notificationv = mysqli_fetch_assoc($notificationq)){

?>

  <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="width:90%;margin-left:5%;">
    <div class="toast-header">
    <i class="fa fa-bell text-warning" style="text-shadow:1px 1px 1px black;"></i>
      <strong class="me-auto" style="margin-left:2%;"> Technical Services Providers </strong>
      <small class="text-muted"> <?php echo substr($notificationv['time'],0,11); ?> </small>
      <a href="profile.php?del=<?php echo $notificationv['id']; ?>" type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></a>
    </div>
    <div class="toast-body">
<?php echo $notificationv['msg']; ?>
    </div>
  </div><br>
<?php } ?>
  <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="width:90%;margin-left:5%;">
    <div class="toast-header">
    <i class="fa fa-bell text-warning" style="text-shadow:1px 1px 1px black;"></i>
      <strong class="me-auto" style="margin-left:2%;"> Technical Services Providers </strong>
      <small class="text-muted"> Remaining </small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
   Welcome | <small style="color:gray;" class="fa fa-user"> <?php echo substr($firstname,0,10). ' •••'; ?></small> Your Service Orders And All About Notificatins Here And On Your Emails
    </div>
  </div>


  <br>
</div>

















<h2 class="align-self-center text-muted fa fa-eye"> Last Orders </h2>
<br>    
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">View</th>
            <th scope="col">Status</th>
            <th scope="col">service</th>
            <th scope="col">paid</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Location</th>
            <th scope="col">Amounts</th>
          </tr>
        </thead>
        <tbody>

<?php
  while ($servicesf = mysqli_fetch_assoc($userservicesq)) {

    if($servicesf['status'] == 0){
  echo '<tr>
    <th scope="row">'.$servicesf['id'].'</th>
    <td> <a href="profiledetails.php?id='.$servicesf['id'].'" class="fa fa-eye text-success" style="text-decoration:none;"> VIEW </a> </td>
    <td> <i class="fa fa-history text-danger"> </i> </td>
    <td> '.$servicesf['service_name'].' </td>
    <td> '.$servicesf['paid'].' </td>
    <td> '.$servicesf['by_name'].' </td>
    <td> +971'.$servicesf['by_phone'].'...</td>
    <td> '.$servicesf['location'].' </td>
    <td> '.$servicesf['total'].' AED </td>
  </tr>';
    }else{
      echo '<tr>
      <th scope="row">'.$servicesf['id'].'</th>
      <td> <a href="profiledetails.php?id='.$servicesf['id'].'" class="fa fa-eye text-success" style="text-decoration:none;"> VIEW </a> </td>
      <td> <i class="fa fa-check text-success"> </i> </td>
      <td> '.$servicesf['service_name'].' </td>
      <td> '.$servicesf['paid'].' </td>
      <td> '.$servicesf['by_name'].' </td>
      <td> +971'.$servicesf['by_phone'].'...</td>
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




















































      <!-- single canvas node to render the chart -->
      <style>
        @media screen and (max-width:700px) {
          #myChart{ 
            width: 350px !important;
            
          }
        }
        @media screen and (min-width:700px) {
          #myChart{ 
            width: 500px;
          }
        }
      </style>

<div style="display: flex; max-width:600px;overflow-x: auto; margin: auto;   display: flex;
align-items: center;
justify-content: center;">
  <canvas
  id="myChart"
 
  aria-label="chart"
  role="img"
></canvas>
</div>















<?php 

$notification = "SELECT * FROM `notification` WHERE phone='$phone'";
$notificationq = mysqli_query($db,$notification);
$notificationv = mysqli_fetch_assoc($notificationq);

$tmsgs = " SELECT COUNT(msg) AS howmuchmsg FROM notification WHERE phone='$phone'";
$tmsgsq = mysqli_query($db,$tmsgs);
$tmsgsf = mysqli_fetch_assoc($tmsgsq);
$tmsgsv = $tmsgsf['howmuchmsg'];

 if($tmsgsv > 0){
?>
  <div style="position:sticky;bottom:20px; z-index:200;width:25rem;left:70%;" id="vnotifymsgpoup">
  <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" style="width:90%;margin-left:5%;">
    <div class="toast-header">
    <i class="fa fa-bell text-warning" style="text-shadow:1px 1px 1px black;"></i>
      <strong class="me-auto" style="margin-left:2%;"> Technical Services Providers </strong>
      <small class="text-muted"> <?php echo substr($notificationv['time'],0,11); ?> </small>
      <button type="button" class="btn-close hidenotifybtn" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
<?php echo $notificationv['msg']; ?>
    </div>
  </div>
  </div>
<?php
 }
 ?>





  <br>
 </body>

  <!-- java script here start  -->
  <script src="jscss/bootstrap.min.js"></script>
  <script src="jscss/jqoffline3.6.1.js"></script>
<script src="jscss/locationpicker.jquery.js"></script>
<script src="chart.js"></script>
<script>

var getuserinfostore = localStorage.getItem('userinfostore');
if(!getuserinfostore){
  window.location.href="index.php";
}

$(document).on('click','#bellvbtn', function(){
      $('#bellvdiv').slideToggle();
  });
  //////////////////////////////////
//////////////////////////////////
$('.hidenotifybtn').click(function(){
  $('#vnotifymsgpoup').hide();
});

$('.logoutbtn').click(function(){
  localStorage.removeItem('userinfostore');
  window.location.href="index.php";
});


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
  type: 'bar',
  data: {
    // Data Labels
    labels: [ "Compelete  Services", "Remianing Services",],

    datasets: [
      // Data Set 1
      {
        //  Chart Label
        label: "performance",

        // Actual Data
        data: [<?php echo $tprovidedv ?> , <?php echo $tpendingv ?> ],
        // data: [22 , 95],

        // Background Color
        backgroundColor: [
        "rgba(75, 192, 192, 0.2)",
        "rgba(255, 99, 132, 0.2)",
        ],

        // Border Color
        borderColor: [
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
        left: 0,
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
      fontSize: 20,
      fontFamily: "Comic Sans MS",
      fontColor: "green",
      fontStyle: "bold italic",
      padding: 10,
      lineHeight: 1,
    },

    // Legends Configuration
    legend: {
      display: true,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "navy",
        fontSize: 16,
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
</script>
</html>







