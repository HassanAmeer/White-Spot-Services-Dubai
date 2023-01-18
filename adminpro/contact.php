


<?php

session_start();
error_reporting(0);
unset($_SESSION['save']);
unset($_SESSION['notsave']);
include '../config.php';


if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); }



$settingv = "SELECT * FROM `settings`";
$settingvq = mysqli_query($db,$settingv);
$settingf = mysqli_fetch_assoc($settingvq);
$fromemail = $settingf['gmail'];






if (isset($_POST['sendmailbtn'])) {
  $mailto = mysqli_real_escape_string($db,$_POST['mailemailinpt']);
  $message = mysqli_real_escape_string($db,$_POST['maildesc']);

  // $subject = $_SERVER['HTTP_HOST'];
  $subject = 'Technical Services';
  $headers = "From: " . $fromemail;
  
   $result1 = mail($mailto,$subject, $message, $headers);
  if($result1){
      $_SESSION['save'] = ' Successfully Email Sended To: '.$mailto ;
  }
  else 
  {
      $_SESSION['notsave'] = 'Try again For Send Email To: '.$mailto;
  }
}







if (isset($_POST['sendnotificationbtn'])) {

  $notifyphone = mysqli_real_escape_string($db,$_POST['notifyphone']);
  $notifydesc = mysqli_real_escape_string($db,$_POST['notifydesc']);

  $notifyphones = "INSERT INTO `notification`(`phone`, `msg`) VALUES ('$notifyphone','$notifydesc')";
  $notifyphoneq= mysqli_query($db,$notifyphones) or mysqli_errno($db) ;
  if($notifyphoneq){
      $_SESSION['save'] = ' Successfully Notification Sended To: '.$notifyphone ;
  }
  else 
  {
      $_SESSION['notsave'] = 'Try again For Send Notification To: '.$notifyphone;
  }
}



if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
    $delid = $_GET['delid'];
    $delservice = "DELETE FROM `contactus` WHERE id = '$delid'";
    $delserviceq = mysqli_query($db,$delservice);
    if($delserviceq){
      $_SESSION['save'] =  'Successfully Messege Deleted BY Id:'. $delid;
    }else{
      $_SESSION['notsave'] = 'Message OF this ID: '.$delid.'can`t be deleted Try Again';
    }
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


    <title> Table Service </title>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark d-flex justify-content-between" style="position:sticky; top:0; z-index:100;">
      <div class="align-self-start" style="margin-left:1rem;"><a href="home.php" style="text-decoration:none;" class="fas fa-arrow-left text-light"> back </a></div>

      <?php
if(isset($_SESSION['save'])){
  echo '<div class="alert alert-success" role="alert"> '.$_SESSION['save'].' </div>';
}
if(isset($_SESSION['notsave'])){
  echo '<div class="alert alert-red" role="alert"> '.$_SESSION['notsave'].' </div>';
}
?>


      <div class="align-self-end"><a class="navbar-brand" href="index.php">
          <?php echo $_SESSION['adminses']; ?>
          <i class="fas fa-user-tie text-info"> </i> 
         </a></div>
   </nav>
   







   
   
   
   
   
   
   
   
  <style>
 @media screen and (max-width:700px) {
  #sendmaildiv{
      width:70%;
      margin: auto;
    }
 }
 @media screen and (min-width:700px) and (max-width:2000px) {
  #sendmaildiv{
      width:60%;
      margin: auto;
    }
 }
 @media screen and (min-width:2000px) {
  #sendmaildiv{
      width:50%;
      margin: auto;
    }
 }

   </style>
   
   <!-- emailtoinpt
   emailtodesc -->
   


   <!-- emailtoinpt
   notifydesc -->

     <center>
      <h2> Send Email To Person </h2>
     </center>

      <form method="POST" id="sendmaildiv" class="row g-3 card-header">
        <div class="col-md-12">
          <label for="inputCity" class="form-label"> Email Of CLient OR  <i class="fa fa-send"> </i> Choose</label>
          <input type="email" id="getemailinptjs" placeholder="Email Choose From List Or Enter" class="form-control" name="mailemailinpt">
        </div>
             <div class="mb-3">
        <label for="" class="form-label"></label>
        <textarea class="form-control" name="maildesc" id="" rows="3"></textarea>
        </div>
        <div class="col-12">
          <button type="submit" id="emailtodesc" placeholder="Write Some Thing" name="sendmailbtn" class="btn btn-primary"> Send Email </button>
        </div>
       </form>
<br>
<br>
     <center>
      <h2> Send Notification To Login Page Of User </h2>
     </center>

      <form method="POST" id="sendmaildiv" class="row g-3 card-header">
        <div class="col-md-12">
          <label for="inputCity" class="form-label"> Phone No From OR  <i class="fa fa-send"> </i> Choose</label>
          <input type="number" id="getphoneinptjs" placeholder="Enter Phone No OR Choose" class="form-control" name="notifyphone">
        </div>
             <div class="mb-3">
        <label for="" class="form-label"></label>
        <textarea class="form-control" name="notifydesc" id="" rows="3"></textarea>
        </div>
        <div class="col-12">
          <button type="submit" id="notifydesc" placeholder="Write Some Thing" name="sendnotificationbtn" class="btn btn-primary"> Send Notification </button>
        </div>
    </form>
<br>
<br>








<h2 class="align-self-center text-muted fa fa-eye"> Last Contact Messages </h2>
<br>    
<a class="" href="tableservices.php" target="_blank"> See Service Records </a>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Delete</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Messages</th>
            <th scope="col">Time</th>
          </tr>
        </thead>
        <tbody>

<?php

$contactv = "SELECT * FROM `contactus` ORDER BY id DESC ";
$contactvq = mysqli_query($db,$contactv);
while ($contactf = mysqli_fetch_assoc($contactvq)) {
?>
  <!-- echo '<tr>
  <th scope="row">'.$contactf['id'].'</th>
  <td> <a href="contact.php?delid='.$contactf['id'].'" class="fa fa-trash text-danger" style="text-decoration:none;"> </button> </td>
  <td> '.$contactf['name'].' </td>
  <td> <a href="mailto:'.$contactf['email'].'" class="btn-danger fa fa-envelop"> </a> '.$contactf['email'].'<button class="btn-warning fa fa-send" class="mailtoinptbtn" data-email="'.$contactf['email'].'"> </button> </td>
  <td> <a href="tel:'.$contactf['phone'].'" class="btn-primary fa fa-phone"> </a> '.$contactf['phone'].' <button class="btn-warning fa fa-send" class="phonenotoinptbtn" data-phone="'.$contactf['phone'].'"> </button> </td>
  <td> <details> '.$contactf['desc'].' </details> </td>
  <td> '.$contactf['time'].'</td>
</tr>'; -->


<tr>
  <th scope="row"><?php echo $contactf['id']; ?></th>
  <td> <a href="contact.php?delid=<?php echo $contactf['id']; ?>" class="fa fa-trash text-danger" style="text-decoration:none;"> </button> </td>
  <td> <?php echo $contactf['name']; ?> </td>
  <td> <a href="mailto:<?php echo $contactf['email']; ?>" class="btn-danger fa fa-envelope"> </a> <?php echo $contactf['email']; ?><button class="btn-warning fa fa-send mailtoinptbtn"  data-email="<?php echo $contactf['email']; ?>"> </button> </td>
  <td> <a href="tel:<?php echo $contactf['phone']; ?>" class="btn-primary fa fa-phone"> </a> <?php echo $contactf['phone']; ?> <button class="btn-warning fa fa-send phonenotoinptbtn"  data-phone="<?php echo $contactf['phone']; ?>"> </button> </td>
  <td> <details> <?php echo $contactf['desc']; ?> </details> </td>
  <td> <?php echo $contactf['desc']; ?></td>
</tr>




<?php
}
?>



        </tbody>
     </table>
   </div>

<br>
<br>

   <!-- end of contact div -->
   










































  </body>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jqoffline3.6.1.js"></script>
 <script>

$('document').ready(function(){ });

//
$('.mailtoinptbtn').click(function(){
    var val = $(this).data("email");
    $('#getemailinptjs').val(val);
  });
//
$('.phonenotoinptbtn').click(function(){
   var val = $(this).data("phone");
    $('#getphoneinptjs').val(val);
})
//















 </script>
</html>













