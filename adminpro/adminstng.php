
<?php

session_start();
error_reporting(0);
unset($_SESSION['save']);
unset($_SESSION['notsave']);
include '../config.php';

if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); }



// ioshideval
// iosapplinkinpt
// androidapplinkinpt
// andhideval
// gmaplinkinpt
// gmaphideval
// 




/////// appslinkbtnform
if (isset($_POST['appslinkbtnform'])) {

  $iosapplinkinpt = mysqli_real_escape_string($db, $_POST['iosapplinkinpt']);
  $ioshideval = mysqli_real_escape_string($db, $_POST['ioshideval']);
  $androidapplinkinpt = mysqli_real_escape_string($db, $_POST['androidapplinkinpt']);
  $andhideval = mysqli_real_escape_string($db, $_POST['andhideval']);
  $gmaplinkinpt = mysqli_real_escape_string($db, $_POST['gmaplinkinpt']);
  $gmaphideval = mysqli_real_escape_string($db, $_POST['gmaphideval']);

    $appslinks = "UPDATE `settings` SET `iosapplink`='$iosapplinkinpt',`ioshide`='$ioshideval',`androidapplink`='$androidapplinkinpt',`androidhide`='$andhideval',`gmaplink`='$gmaplinkinpt',`gmaphide`='$gmaphideval'";
    $appslinksq= mysqli_query($db,$appslinks) or mysqli_errno($db) ;
    if($appslinksq){
        $_SESSION['save'] = ' Successfully Updated Apps Link And Google Map Data ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Updated Apps Link And Google Map Data ';
    }

}

//////////////////////////////


/////// 1
 if (isset($_POST['updatesite2linkbtn'])) {

    $sitehideval = mysqli_real_escape_string($db,$_POST['sitehideval']);
    $sitelinkinpt = mysqli_real_escape_string($db,$_POST['sitelinkinpt']);
    $adresdesc = mysqli_real_escape_string($db,$_POST['adresdesc']);

    $sitelink2 = "UPDATE `settings` SET `hideurl`='$sitehideval',`site2_url`='$sitelinkinpt'";
    $sitelink2q= mysqli_query($db,$sitelink2) or mysqli_errno($db) ;
    if($sitelink2q){
        $_SESSION['save'] = ' Successfully Updated New Site Previous Site Is Hidden';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Updated New Site';
    }

 }
//////

///////////////////////////////



/////// 1
 if (isset($_POST['adresbtn1'])) {

    $adresheading = mysqli_real_escape_string($db,$_POST['adresheading']);
    $adreshideval = mysqli_real_escape_string($db,$_POST['adreshideval']);
    $adresdesc = mysqli_real_escape_string($db,$_POST['adresdesc']);

    $adres1 = "UPDATE `settings` SET `adres1heading`='$adresheading',`adres1hide`='$adreshideval',`adres1desc`='$adresdesc'";
    $adres1q= mysqli_query($db,$adres1) or mysqli_errno($db) ;
    if($adres1q){
        $_SESSION['save'] = ' Successfully Updated Address 1 Data ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Updated Address 1 Data ';
    }

 }
//////

/////// 2
 if (isset($_POST['adresbtn2'])) {

    $adresheading = mysqli_real_escape_string($db,$_POST['adresheading']);
    $adreshideval = mysqli_real_escape_string($db,$_POST['adreshideval']);
    $adresdesc = mysqli_real_escape_string($db,$_POST['adresdesc']);

    $adres2 = "UPDATE `settings` SET `adres2heading`='$adresheading',`adres2hide`='$adreshideval',`adres2desc`='$adresdesc'";
    $adres2q= mysqli_query($db,$adres2) or mysqli_errno($db) ;
    if($adres2q){
        $_SESSION['save'] = ' Successfully Updated Address 2 Data ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Updated Address 2 Data ';
    }

 }
//////

/////// 3
 if (isset($_POST['adresbtn3'])) {

    $adresheading = mysqli_real_escape_string($db,$_POST['adresheading']);
    $adreshideval = mysqli_real_escape_string($db,$_POST['adreshideval']);
    $adresdesc = mysqli_real_escape_string($db,$_POST['adresdesc']);

    $adres3 = "UPDATE `settings` SET `adres3heading`='$adresheading',`adres3hide`='$adreshideval',`adres3desc`='$adresdesc'";
    $adres3q= mysqli_query($db,$adres3) or mysqli_errno($db) ;
    if($adres3q){
        $_SESSION['save'] = ' Successfully Updated Address 3 Data ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Updated Address 3 Data ';
    }

 }
//////

/////// 4
 if (isset($_POST['adresbtn4'])) {

    $adresheading = mysqli_real_escape_string($db,$_POST['adresheading']);
    $adreshideval = mysqli_real_escape_string($db,$_POST['adreshideval']);
    $adresdesc = mysqli_real_escape_string($db,$_POST['adresdesc']);

    $adres4 = "UPDATE `settings` SET `adres4heading`='$adresheading',`adres4hide`='$adreshideval',`adres4desc`='$adresdesc'";
    $adres4q= mysqli_query($db,$adres4) or mysqli_errno($db) ;
    if($adres4q){
        $_SESSION['save'] = ' Successfully Updated Address 4 Data ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Updated Address 4 Data ';
    }

 }
//////












   
////////

 if (isset($_POST['admnpassbtn'])) {

    $Name = mysqli_real_escape_string($db,$_POST['Name']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $upasssha1 = sha1($password);
    $upassmd = md5($upasssha1);
  

    $admnpass = "UPDATE `settings` SET `adminname`='$Name',`adminpass`='$upassmd'";
    $admnpassq= mysqli_query($db,$admnpass) or mysqli_errno($db) ;
    if($admnpassq){
        $_SESSION['save'] = ' Successfully Updated Admin Login Data ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Admin Login data ';
    }

 }



 if (isset($_POST['updatelinksbtn'])) {

    $emaillink = mysqli_real_escape_string($db,$_POST['emaillink']);
    $phonelink = mysqli_real_escape_string($db,$_POST['phonelink']);
    $facebooklink = mysqli_real_escape_string($db,$_POST['facebooklink']);
    $twitterlink = mysqli_real_escape_string($db,$_POST['twitterlink']);
    $instalink = mysqli_real_escape_string($db,$_POST['instalink']);
    $youtubelink = mysqli_real_escape_string($db,$_POST['youtubelink']);
    $whatsapplink = mysqli_real_escape_string($db,$_POST['whatsapplink']);

    $updatelinks = "UPDATE `settings` SET `gmail`='$emaillink',`phone`='$phonelink',`facebook`='$facebooklink',`twitter`='$twitterlink',`insta`='$instalink',`youtube`='$youtubelink',`whatsapp`='$whatsapplink'";
    $updatelinksq= mysqli_query($db,$updatelinks) or mysqli_errno($db) ;
    if($updatelinksq){
        $_SESSION['save'] = ' Successfully Updated Share able data ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Change Share able data ';
    }

 }



































if (isset($_POST['updatepaytypebtn'])) {
    $slctpage = $_POST['slctpage'];
if($slctpage == 0){
    $slctpage = "UPDATE `settings` SET `paybytype`= 0";
    $slctpageq= mysqli_query($db,$slctpage);
    if($slctpageq){
        $_SESSION['save'] = ' Pay Type Changed To Credit Card ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For  Change Pay Type ';
    }
}else if($slctpage == 1){
    $slctpage = "UPDATE `settings` SET `paybytype`= 1";
    $slctpageq= mysqli_query($db,$slctpage);
    if($slctpageq){
        $_SESSION['save'] = ' Pay Type Changed To Cash ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For  Change Pay Type ';
    }
}
}














  
  

if(isset($_POST['resetprojectbtn'])){
    $resetvalinput = $_POST['resetvalinput'];
   //  1
   if($resetvalinput == 1){
    $users_services = "DELETE FROM users_services";
    $users_servicesq= mysqli_query($db,$users_services);
    if($users_servicesq){
        $_SESSION['save'] = 'Booking Service List All Erased ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Booking Service';
    }
    }

    // 2
   if($resetvalinput == 2){
    $login_users = "DELETE FROM login_users";
    $login_usersq= mysqli_query($db,$login_users);
    if($login_usersq){
        $_SESSION['save'] = 'Login Service List All Erased ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Login Service';
    }
    }

    // 2
   if($resetvalinput == 3){
    $login_users = "DELETE FROM login_users";
    $login_usersq= mysqli_query($db,$login_users);
    $users_services = "DELETE FROM users_services";
    $users_servicesq= mysqli_query($db,$users_services);
    if($users_servicesq){
        $_SESSION['save'] = ' All Erased ';
    }
    else 
    {
        $_SESSION['notsave'] = 'Try again For Reset All Service';
    }
    }
}





$settingv = "SELECT * FROM `settings`";
$settingvq = mysqli_query($db,$settingv);
$settingf = mysqli_fetch_assoc($settingvq);




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


    <title> Admin Settings </title>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark d-flex justify-content-between" style="position:sticky; top:0; z-index:100;">
      <div class="align-self-start" style="margin-left:1rem;"><a href="home.php" style="text-decoration:none;" class="fas fa-arrow-left text-light"> back </a></div>
<?php
if(isset($_SESSION['save'])){
  echo '<div class="alert alert-success" role="alert">. '.$_SESSION['save'].' </div>';
}
if(isset($_SESSION['notsave'])){
  echo '<div class="alert alert-red" role="alert">. '.$_SESSION['notsave'].' </div>';
}
?>
      <div class="align-self-end"><a class="navbar-brand" href="index.php">
          <?php echo $_SESSION['adminses']; ?>
          <i class="fas fa-user-tie text-info"> </i> 
         </a></div>
   </nav>
   













   <style>
  @media screen and (max-width:700px) {
    .shareablestngdiv{ 
      width: 100%;
    }
    #payslctpages{ 
      width: 70%;
      margin-left: -1% !important;
    }
    .payupdatebtn{
      height: 3rem;
      margin-left:2rem;
    }
  }
  @media screen and (min-width:700px) {
    .shareablestngdiv{ 
      width: 70%;
margin-left: 15%;
    }
    #payslctpages{ 
      width: 40%;
margin-left: 30%;
    }
    .payupdatebtn{
      height: 3rem;
      margin-left:4rem;
    }
  }

.whenpaypagslctj{
    border:2px solid orange; box-shadow: 1px 1px 30px black; 
  }
  #payslctpages{
    display:flex;flex-direction:row;margin-left:30%;margin-top: 1rem;padding:1rem;
}
  
</style>
<!------ start of advance settings divs -------->


  <center>
<h2  style="color:purple;font-size:2rem">
  Admin Settings </h2>
  </center><br>


  <div class="d-flex justify-content-between">
    <h4 class="align-self-start text-muted"> 1. Reset Login Password</h4>
 </div>
 
 
 
 <!-- js on line n0 1200 -->

  <div class="container mt-2 pt-4 mb-2">
    <div class="row justify-content-center">
       <div class="col-md-6 col-lg-4 col-xl-4">
          <div class="card">
             <div class="card-body">
                <div class="text-center m-auto">
                   <h4 class="text-uppercase text-center  card-header">Reset Login</h4>
                </div>
                <form method="POST">
                   <input type="hidden" name="csrftoken" value="ea49375f43c7e6a59c77df1e4de562b3f1350124eeb70e5d5124e4ce3b5251c2b4d12e9aaf2a3ddc618c178c8dc4620b">
                   <div class="form-group mb-3">
                      <label for="emailaddress">Name </label>
                      <input type="text" name="Name" placeholder="Enter Name" class="form-control admnname" value="<?php echo $settingf['adminname']; ?>" required="">
                   </div>
                   <div class="form-group mb-3">
                      <label for="password">Password</label>
                      <div class="input-group bg-light" id="show_hide_password">
                         <input type="password" class="form-control admnpass" id="password" placeholder="****" name="password" required="">
                         <div class="input-group-addon">
                            <a href=""><i class="fa fa-lg fa-eye" style="padding-top: 10px; padding-left: 10px; padding-right: 10px;" aria-hidden="true"></i></a>
                         </div>
                      </div> 
                   </div>
                   <div class="form-group mb-3">
                      <div class="custom-control custom-checkbox checkbox-success">
                         <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                         <label class="custom-control-label" for="checkbox-signin"> With Secure </label>
                      </div>
                   </div>
                   <div class="form-group mb-0 text-center">
                      <button class="btn btn-primary btn-block" name="admnpassbtn" type="submit" name="submit"> Reset </button>
                   </div>
                   <script>
                      $(document).ready(function() {
                          $("#show_hide_password a").on('click', function(event) {
                              event.preventDefault();
                              if($('#show_hide_password input').attr("type") == "text"){
                                  $('#show_hide_password input').attr('type', 'password');
                                  $('#show_hide_password i').addClass( "fa-eye-slash" );
                                  $('#show_hide_password i').removeClass( "fa-eye" );
                              }else if($('#show_hide_password input').attr("type") == "password"){
                                  $('#show_hide_password input').attr('type', 'text');
                                  $('#show_hide_password i').removeClass( "fa-eye-slash" );
                                  $('#show_hide_password i').addClass( "fa-eye" );
                              }
                          });
                      });
                   </script>
                </form>
             </div>
          </div>
       </div>
    </div>
  </div>
  <!-- end of reset password  of admin -->




<center>
  <hr width="40%">
</center>
<br>


  <div class="d-flex justify-content-between">
    <h4 class="align-self-center text-muted"> 2. Shareable Settings </h4>
 </div>
<br>


<b style="color:rgb(173, 94, 108);">If No Want To Add Remaining Empty Feilds </b>
<br>
<br>
<div class="shareablestngdiv">
  <form method="POST" class="row g-3 card-header">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" name="emaillink" class="form-control" value="<?php echo $settingf['gmail']; ?>" id="emaillink" placeholder="Email">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Phone</label>
      <input type="number" name="phonelink" class="form-control" value="<?php echo $settingf['phone']; ?>" id="phonelink" placeholder="Phone No">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label"> Facebook </label>
      <input type="text" name="facebooklink" class="form-control" value="<?php echo $settingf['facebook']; ?>" id="facebooklink" placeholder="Facebook Link">
    </div>
    <div class="col-md-12">
      <label for="inputCity" class="form-label">twitter</label>
      <input type="text" name="twitterlink" class="form-control" value="<?php echo $settingf['twitter']; ?>" id="twitterlink" placeholder="Twitter Link">
    </div>
    <div class="col-6">
      <label for="inputAddress2" class="form-label">Instagaram</label>
      <input type="text" name="instalink" class="form-control" value="<?php echo $settingf['insta']; ?>" id="instalink" placeholder="Instagaram Link">
    </div>
    <div class="col-6">
      <label for="inputAddress2" class="form-label">Youtube</label>
      <input type="text" name="youtubelink" class="form-control" value="<?php echo $settingf['youtube']; ?>" id="youtubelink" placeholder="Youtube Link">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">WhatsApp</label>
      <input type="text" name="whatsapplink" class="form-control" value="<?php echo $settingf['whatsapp']; ?>" id="whatsapplink" placeholder="WhatsApp Link">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary" name="updatelinksbtn"> Update </button>
    </div>
  </form>


<br>
  <center> 
<h5> Advance Shareable Settings </h5>  <br>
</center>

    <form method="POST" class="row g-3 card-header">
      
      <div class="col-md-8">
        <label for="inputCity" class="form-label"> IOS App Link <i class="fa fa-mobile"> </i> </label>
        <input type="text" id="" placeholder="Enter IOS App Link" class="form-control" name="iosapplinkinpt" value="<?php echo $settingf['iosapplink']; ?>">
      </div>
  <div class="col-md-2">
  <label for="inputCity" class="form-label"> Hide <i class="fa fa-eye-slash"> </i> </label>
      <select id="inputState" name="ioshideval" class="form-select">
   <?php if($settingf['ioshide'] == 'no'){
     echo '<option selected value="no">No</option>
        <option value="yes">Yes</option>';
        }else{
          echo '<option value="no">No</option>
          <option selected value="yes">Yes</option>';
        } ?> 
      </select>
  </div>








 
      <div class="col-md-8">
        <label for="inputCity" class="form-label"> Android App Link <i class="fa fa-mobile"> </i> </label>
        <input type="text" id="" placeholder="Enter Android App Link" class="form-control" name="androidapplinkinpt" value="<?php echo $settingf['androidapplink']; ?>">
      </div>
  <div class="col-md-2">
  <label for="inputCity" class="form-label"> Hide <i class="fa fa-eye-slash"> </i> </label>
      <select id="inputState" name="andhideval" class="form-select">
   <?php if($settingf['androidhide'] == 'no'){
     echo '<option selected value="no">No</option>
        <option value="yes">Yes</option>';
        }else{
          echo '<option value="no">No</option>
          <option selected value="yes">Yes</option>';
        } ?> 
      </select>
  </div>

      <div class="col-md-8">
        <label for="inputCity" class="form-label"> Google Map Link <i class="fas fa-location"> </i> </label>
        <input type="text" id="" placeholder="Enter Google Map Link" class="form-control" name="gmaplinkinpt" value="<?php echo $settingf['gmaplink']; ?>">
      </div>
  <div class="col-md-2">
  <label for="inputCity" class="form-label"> Hide <i class="fa fa-eye-slash"> </i> </label>
      <select id="inputState" name="gmaphideval" class="form-select">
   <?php if($settingf['gmaphide'] == 'no'){
     echo '<option selected value="no">No</option>
        <option value="yes">Yes</option>';
        }else{
          echo '<option value="no">No</option>
          <option selected value="yes">Yes</option>';
        } ?> 
      </select>
  </div>



        <div class="col-12">
          <button type="submit" id="notifydesc" placeholder="Write Some Thing" name="appslinkbtnform" class="btn btn-primary"> Update IOS App Link </button>
        </div>
      </form>
</div>
<br>





<center>
  <hr width="40%">
</center>
<br>


  <div class="d-flex justify-content-between">
    <h4 class="align-self-center text-muted"> 3. Address From Contact Page Updates </h4>
 </div>
<br>


<b style="color:pink;">If No Want To Add Remaining Hides </b>
<br>
<br>
<div class="shareablestngdiv">



<!-- adres1heading adres1hide adres1desc -->
<center> 
<h5> Address 1 Details </h5>  <br>
</center>

    <form method="POST" class="row g-3 card-header">
        <div class="col-md-8">
          <label for="inputCity" class="form-label"> Address Heading  <i class="fa fa-map"> </i> </label>
          <input type="text" id="getphoneinptjs" placeholder="Enter Address Heading" class="form-control" name="adresheading" value="<?php echo $settingf['adres1heading']; ?>">
        </div>
    <div class="col-md-2">
    <label for="inputCity" class="form-label"> Hide <i class="fa fa-eye-slash"> </i> </label>
        <select id="inputState" name="adreshideval" class="form-select">
     <?php if($settingf['adres1hide'] == 'no'){
       echo '<option selected value="no">No</option>
          <option value="yes">Yes</option>';
          }else{
            echo '<option value="no">No</option>
            <option selected value="yes">Yes</option>';
          } ?> 
        </select>
    </div>

        <div class="mb-3">
        <label for="" class="form-label"></label>
        <textarea class="form-control" name="adresdesc" id="" rows="3" placeholder="Write Details OF Details"> <?php echo $settingf['adres1desc']; ?> </textarea>
        </div>
        <div class="col-12">
          <button type="submit" id="notifydesc" placeholder="Write Some Thing" name="adresbtn1" class="btn btn-primary"> Update Address 1 </button>
        </div>
    </form>

<br>
<center> 
<h5> Address 2 Details </h5>  <br>
</center>

    <form method="POST" class="row g-3 card-header">
        <div class="col-md-8">
          <label for="inputCity" class="form-label"> Address Heading  <i class="fa fa-map"> </i> </label>
          <input type="text" id="getphoneinptjs" placeholder="Enter Address Heading" class="form-control" name="adresheading" value="<?php echo $settingf['adres2heading']; ?>">
        </div>
    <div class="col-md-2">
    <label for="inputCity" class="form-label"> Hide <i class="fa fa-eye-slash"> </i> </label>
        <select id="inputState" name="adreshideval" class="form-select">
     <?php if($settingf['adres2hide'] == 'no'){
       echo '<option selected value="no">No</option>
          <option value="yes">Yes</option>';
          }else{
            echo '<option value="no">No</option>
            <option selected value="yes">Yes</option>';
          } ?> 
        </select>
    </div>

        <div class="mb-3">
        <label for="" class="form-label"></label>
        <textarea class="form-control" name="adresdesc" id="" rows="3" placeholder="Write Details OF Details"> <?php echo $settingf['adres2desc']; ?> </textarea>
        </div>
        <div class="col-12">
          <button type="submit" id="notifydesc" placeholder="Write Some Thing" name="adresbtn2" class="btn btn-primary"> Update Address 2 </button>
        </div>
    </form>

<br>
<center> 
<h5> Address 3 Details </h5>  <br>
</center>

    <form method="POST" class="row g-3 card-header">
        <div class="col-md-8">
          <label for="inputCity" class="form-label"> Address Heading  <i class="fa fa-map"> </i></label><input type="text" id="getphoneinptjs" placeholder="Enter Address Heading" class="form-control" name="adresheading" value="<?php echo $settingf['adres3heading']; ?>">
        </div>
    <div class="col-md-2">
    <label for="inputCity" class="form-label"> Hide <i class="fa fa-eye-slash"> </i> </label>
        <select id="inputState" name="adreshideval" class="form-select">
     <?php if($settingf['adres3hide'] == 'no'){
       echo '<option selected value="no">No</option>
          <option value="yes">Yes</option>';
          }else{
            echo '<option value="no">No</option>
            <option selected value="yes">Yes</option>';
          } ?> 
        </select>
    </div>

        <div class="mb-3">
        <label for="" class="form-label"></label>
        <textarea class="form-control" name="adresdesc" id="" rows="3" placeholder="Write Details OF Details"> <?php echo $settingf['adres3desc']; ?> </textarea>
        </div>
        <div class="col-12">
          <button type="submit" id="notifydesc" placeholder="Write Some Thing" name="adresbtn3" class="btn btn-primary"> Update Address 3 </button>
        </div>
    </form>

<br>
<center> 
<h5> Address 4 Details </h5>  <br>
</center>

    <form method="POST" class="row g-3 card-header">
        <div class="col-md-8">
          <label for="inputCity" class="form-label"> Address Heading  <i class="fa fa-map"> </i> </label>
          <input type="text" id="getphoneinptjs" placeholder="Enter Address Heading" class="form-control" name="adresheading" value="<?php echo $settingf['adres4heading']; ?>">
        </div>
    <div class="col-md-2">
    <label for="inputCity" class="form-label"> Hide <i class="fa fa-eye-slash"> </i> </label>
        <select id="inputState" name="adreshideval" class="form-select">
     <?php if($settingf['adres4hide'] == 'no'){
       echo '<option selected value="no">No</option>
          <option value="yes">Yes</option>';
          }else{
            echo '<option value="no">No</option>
            <option selected value="yes">Yes</option>';
          } ?> 
        </select>
    </div>

        <div class="mb-3">
        <label for="" class="form-label"></label>
        <textarea class="form-control" name="adresdesc" id="" rows="3" placeholder="Write Details OF Details"> <?php echo $settingf['adres4desc']; ?> </textarea>
        </div>
        <div class="col-12">
          <button type="submit" id="notifydesc" placeholder="Write Some Thing" name="adresbtn4" class="btn btn-primary"> Update Address 4 </button>
        </div>
    </form>

<br>

</div>
<br>






<!-- start payments selected pages -->
<!-- js line no: 1130 - 1170  -->

  <u class="fa fa-money text-muted" style="text-decoration:wavy;font-size:1.7rem;border-bottom:2px solid gold;" > 4. Select Payment Accepted Page </u>


<?php
if($settingf['paybytype'] == 0){
    echo '  
<form method="POST" id="payslctpages">
  
  <div class="whenpaypagslct1 whenpaypagslctj" style="width:48%;border-radius:10px;background: whitesmoke;box-shadow:1px 1px 20px gray;"> 
   <!-- <img src="assets/imgs/bydirectlyp.png" style="width:90%;margin:5%;border-radius:10px;"><br> -->
   <i class="fa fa-credit-card" style="font-size:8rem;"> </i><br>
  <div style="display:flex;flex-direction:row;">
      <input type="radio" name="slctpage" checked="" style="color:orange;text-shadow:1px 1px 1px black;background-color:rgb(37, 37, 124);font-size:2rem;margin-left:1rem;" id="radiobtn1j" value="0"> <b style="color:indigo;padding:2px;font-size:0.7rem"> Pay By Directly Getaway <u style="color:gray;"> show Page </u></b>
  </div>
  </div>


  <div class="whenpaypagslct2" style="width:48%;border-radius:10px;background: whitesmoke;box-shadow:1px 1px 20px gray; margin-left:1rem;"> 
   <!-- <img src="assets/imgs/bytrid.png" style="width:90%;margin:5%;border-radius:10px;"><br> -->
   <i class="fas fa-hand-holdding-dollar" style="font-size:8rem;"> </i><br>
  <div style="display:flex;flex-direction:row;">
      <input type="radio" name="slctpage" style="color:orange;text-shadow:1px 1px 1px black;background-color:rgb(37, 37, 124);font-size:2rem;margin-left:1rem;" id="radiobtn2j" value="1"> <b style="color:indigo;padding:2px;font-size:0.7rem"> Pay By Cash Only <u style="color:gray;"> show Page </u></b>
  </div>
  </div>

  <button type="submit" name="updatepaytypebtn" class="btn btn-warning payupdatebtn"> Update </button>
</form>
';
}else{
    echo '  
<form method="POST" id="payslctpages">
  
  <div class="whenpaypagslct1" style="width:48%;border-radius:10px;background: whitesmoke;box-shadow:1px 1px 20px gray;"> 
   <!-- <img src="assets/imgs/bydirectlyp.png" style="width:90%;margin:5%;border-radius:10px;"><br> -->
   <i class="fa fa-credit-card" style="font-size:8rem;"> </i><br>
  <div style="display:flex;flex-direction:row;">
      <input type="radio" name="slctpage" style="color:orange;text-shadow:1px 1px 1px black;background-color:rgb(37, 37, 124);font-size:2rem;margin-left:1rem;" id="radiobtn1j" value="0"> <b style="color:indigo;padding:2px;font-size:0.7rem"> Pay By Directly Getaway <u style="color:gray;"> show Page </u></b>
  </div>
  </div>


  <div class="whenpaypagslct2 whenpaypagslctj" style="width:48%;border-radius:10px;background: whitesmoke;box-shadow:1px 1px 20px gray; margin-left:1rem;"> 
   <!-- <img src="assets/imgs/bytrid.png" style="width:90%;margin:5%;border-radius:10px;"><br> -->
   <i class="fas fa-hand-holding-dollar" style="font-size:8rem;"> </i><br>
  <div style="display:flex;flex-direction:row;">
      <input type="radio" name="slctpage" checked="" style="color:orange;text-shadow:1px 1px 1px black;background-color:rgb(37, 37, 124);font-size:2rem;margin-left:1rem;" id="radiobtn2j" value="1"> <b style="color:indigo;padding:2px;font-size:0.7rem"> Pay By Cash Only <u style="color:gray;"> show Page </u></b>
  </div>
  </div>

  <button type="submit" name="updatepaytypebtn" class="btn btn-warning payupdatebtn"> Update </button>
</form>
';
}

?>
<br>
<br>
<br>
<br>


<u class="fa fa-link text-muted" style="text-decoration:wavy;font-size:1.7rem;border-bottom:2px solid gold;" > 5. Redirect To Site Link </u>
<br>
<br>
<form method="POST" class="row g-3 card-header shareablestngdiv">
      
      <div class="col-md-6">
        <label for="inputCity" class="form-label"> New WebSite Link <i class="fa fa-webite"> </i> </label>
        <input type="text" id="" placeholder="url OR wp/" class="form-control" name="sitelinkinpt" value="<?php echo $settingf['site2_url']; ?>">
      </div>
  <div class="col-md-2">
  <label for="inputCity" class="form-label"> Hide New Site<i class="fa fa-eye-slash"> </i> </label>
      <select id="inputState" name="sitehideval" class="form-select">
   <?php if($settingf['hideurl'] == 'no'){
     echo '<option selected value="no">No</option>
        <option value="yes">Yes</option>';
        }else{
          echo '<option value="no">No</option>
          <option selected value="yes">Yes</option>';
        } ?> 
      </select>
  </div>
  <div class="col-md-4"> <label for="inputCity" class="form-label"> Old Site Hide <i class="fa fa-warning"> </i> </label>
  <button type="submit" name="updatesite2linkbtn" class="btn btn-warning"> Update New Site Link </button></div>
</form>




<br>
<hr>
<br>




<div style="width:30%;margin:auto;">
<form method="POST" class="row g-3 bg-light" style="display:flex;flex-direction:row;">
      <center>
          <h2 style="color:red;"> Why You Reset All Projects ?</h2>
      </center>
      <div style="width:70%;">
        <select id="inputState" name="resetvalinput" class="form-select">
          <option selected value="0">No</option>
          <option value="1">Only Booking Services</option>
          <option value="2">Only All login_users</option>
          <option value="3">ALl Of The Project</option>
        </select>
      </div>

      <div style="width:30%;">
            <button type="submit" name="resetprojectbtn" class="btn btn-danger" style="background:indigo;color:white;">Reset Now</button>
      </div>
    </form>

</div>













<br>
<br>





















   




  </body>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jqoffline3.6.0.js"></script>
 <script>
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

 </script>
</html>