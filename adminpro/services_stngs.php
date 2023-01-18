

<?php

error_reporting(0);
session_start();
unset($_SESSION['save']);
unset($_SESSION['notsave']);

include '../config.php';

if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); }


   
// ///////////////////////// start for paybyinptj
// 1
if (isset($_POST['homecleanbtn'])) {
  $materialprice = mysqli_real_escape_string($db,$_POST['materialprice']);
  $price = mysqli_real_escape_string($db,$_POST['price']);
  $discounts = mysqli_real_escape_string($db,$_POST['discounts']);
  echo $price;
  $homecleanbtn = "UPDATE `admin_services_stngs` SET `material_price`='$materialprice',`price`='$price',`discount`='$discounts' WHERE id = 0";
  $homecleanbtnq = mysqli_query($db,$homecleanbtn);
   if($homecleanbtnq){
    $_SESSION['save'] = 'Home Cleaning';
   }else{
    $_SESSION['notsave'] = 'Home Cleaning';
   }
};


// 7
if (isset($_POST['handymanbtn'])) {
  $materialprice = mysqli_real_escape_string($db,$_POST['materialprice']);
  $price = mysqli_real_escape_string($db,$_POST['price']);
  $discounts = mysqli_real_escape_string($db,$_POST['discounts']);

  $handymanbtn = "UPDATE `admin_services_stngs` SET `material_price`='$materialprice',`price`='$price',`discount`='$discounts' WHERE id = 6";
  $handymanbtnq = mysqli_query($db,$handymanbtn);
   if($handymanbtnq){
       $_SESSION['save'] = 'HandyMan';
   }else{
      $_SESSION['notsave'] = 'HandyMan';
   }
};

////////////////////
// 6 // plan 1
if (isset($_POST['anualplan1btn'])) {
  $price = mysqli_real_escape_string($db,$_POST['price']);

  $anualplan1btn = "UPDATE `admin_services_stngs` SET `price`='$price' WHERE id = 5";
  $anualplan1btnq = mysqli_query($db,$anualplan1btn);
   if($anualplan1btnq){
       $_SESSION['save'] = 'Anual Plan 1';
   }else{
      $_SESSION['notsave'] = 'Anual Plan 1';
   }

  $anualplan1 = "UPDATE `anaulpkgs` SET `prices`='$price' WHERE id=1";
  $anualplan1q = mysqli_query($db,$anualplan1);
   if($anualplan1q){
       $_SESSION['save'] = 'Anual Plan 1';
   }else{
      $_SESSION['notsave'] = 'Anual Plan 1';
   }
};

// 6 // plan 2
if (isset($_POST['anualplan2btn'])) {
  $price = mysqli_real_escape_string($db,$_POST['price']);

  $anualplan2btn = "UPDATE `anaulpkgs` SET `prices`='$price' WHERE id=2";
  $anualplan2btnq = mysqli_query($db,$anualplan2btn);
   if($anualplan2btnq){
       $_SESSION['save'] = 'Anual PLan 2';
   }else{
      $_SESSION['notsave'] = 'Anual Plan 2';
   }
};

// 6 // plan 3
if (isset($_POST['anualplan3btn'])) {
  $price = mysqli_real_escape_string($db,$_POST['price']);

  $anualplan3btn = "UPDATE `anaulpkgs` SET `prices`='$price' WHERE id=3";
  $anualplan3btnq = mysqli_query($db,$anualplan3btn);
   if($anualplan3btnq){
       $_SESSION['save'] = 'Anual PLan 3';
   }else{
      $_SESSION['notsave'] = 'Anual Plan 2';
   }
};
////////////////////
// 2
if (isset($_POST['deepcleanbtn'])) {
  $price = mysqli_real_escape_string($db,$_POST['price']);
  $discounts = mysqli_real_escape_string($db,$_POST['discounts']);

  $deepcleanbtn = "UPDATE `admin_services_stngs` SET `price`='$price',`discount`='$discounts' WHERE id = 1";
  $deepcleanbtnq = mysqli_query($db,$deepcleanbtn);
   if($deepcleanbtnq){
       $_SESSION['save'] = 'Deep Cleaning';
   }else{
      $_SESSION['notsave'] = 'Deep Cleaning';
   }
};

// 3
if (isset($_POST['disinficationbtn'])) {
  $price = mysqli_real_escape_string($db,$_POST['price']);
  $discounts = mysqli_real_escape_string($db,$_POST['discounts']);

  $disinficationbtn = "UPDATE `admin_services_stngs` SET `price`='$price',`discount`='$discounts' WHERE id = 2";
  $disinficationbtnq = mysqli_query($db,$disinficationbtn);
   if($disinficationbtnq){
       $_SESSION['save'] = 'Disinfication Cleaning';
   }else{
      $_SESSION['notsave'] = 'Disinfication Cleaning';
   }
};

// 4
if (isset($_POST['acservicebtn'])) {
  $price = mysqli_real_escape_string($db,$_POST['price']);
  $discounts = mysqli_real_escape_string($db,$_POST['discounts']);

  $acservicebtn = "UPDATE `admin_services_stngs` SET `price`='$price',`discount`='$discounts' WHERE id = 3";
  $acservicebtnq = mysqli_query($db,$acservicebtn);
   if($acservicebtnq){
       $_SESSION['save'] = 'Ac Services';
   }else{
      $_SESSION['notsave'] = 'Ac Services';
   }
};

// 5
if (isset($_POST['acductservicebtn'])) {
  $price = mysqli_real_escape_string($db,$_POST['price']);
  $discounts = mysqli_real_escape_string($db,$_POST['discounts']);

  $acductservicebtn = "UPDATE `admin_services_stngs` SET `price`='$price',`discount`='$discounts' WHERE id = 4";
  $acductservicebtnq = mysqli_query($db,$acductservicebtn);
   if($acductservicebtnq){
       $_SESSION['save'] = 'Ac Duct Services';
   }else{
      $_SESSION['notsave'] = 'Ac Duct Services';
   }
};

// 7
if (isset($_POST['pestcontrolbtn'])) {
  $price = mysqli_real_escape_string($db,$_POST['price']);
  $discounts = mysqli_real_escape_string($db,$_POST['discounts']);

  $pestcontrolbtn = "UPDATE `admin_services_stngs` SET `price`='$price',`discount`='$discounts' WHERE id = 7";
  $pestcontrolbtnq = mysqli_query($db,$pestcontrolbtn);
   if($pestcontrolbtnq){
       $_SESSION['save'] = 'Pest Control';
   }else{
      $_SESSION['notsave'] = 'Pest Control';
   }
};

















// materialprice
// price
// discounts


//      homecleanbtn
//      deepcleanbtn
//     disinficationbtn
//     acservicebtn
// acductservicebtn
// anualplan1btn
// handymanbtn
// pestcontrolbtn









// //////////////////////////////////////////////////////

$check1 = "SELECT * FROM `admin_services_stngs` WHERE id=0 ";
$check1q = mysqli_query($db,$check1);
$check1f = mysqli_fetch_assoc($check1q);
// $chk1 = $check1f['material_price'];
// $chk1 = $check1f['price'];
// $chk1 = $check1f['discount'];


$check2 = "SELECT * FROM `admin_services_stngs` WHERE id=1 ";
$check2q = mysqli_query($db,$check2);
$check2f = mysqli_fetch_assoc($check2q);
// $chk1 = $check2f['price'];
// $chk1 = $check2f['discount'];


$check3 = "SELECT * FROM `admin_services_stngs` WHERE id=2 ";
$check3q = mysqli_query($db,$check3);
$check3f = mysqli_fetch_assoc($check3q);
// $chk1 = $check3f['price'];
// $chk1 = $check3f['discount'];


$check4 = "SELECT * FROM `admin_services_stngs` WHERE id=3 ";
$check4q = mysqli_query($db,$check4);
$check4f = mysqli_fetch_assoc($check4q);
// $chk1 = $check4f['price'];
// $chk1 = $check4f['discount'];


$check5 = "SELECT * FROM `admin_services_stngs` WHERE id=4 ";
$check5q = mysqli_query($db,$check5);
$check5f = mysqli_fetch_assoc($check5q);
// $chk1 = $check5f['price'];
// $chk1 = $check5f['discount'];


$check7 = "SELECT * FROM `admin_services_stngs` WHERE id=6 ";
$check7q = mysqli_query($db,$check7);
$check7f = mysqli_fetch_assoc($check7q);
// $chk1 = $check7f['price'];
// $chk1 = $check7f['discount'];


$check8 = "SELECT * FROM `admin_services_stngs` WHERE id=7 ";
$check8q = mysqli_query($db,$check8);
$check8f = mysqli_fetch_assoc($check8q);
// $chk1 = $check8f['price'];
// $chk1 = $check8f['discount'];







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




















<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="js/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Service Settings </title>
  </head>
<body>
<!--content start-->

<nav class="navbar navbar-dark bg-dark d-flex justify-content-between">
   <div class="align-self-start" style="margin-left:1rem;"><a href="home.php" style="text-decoration:none;" class="fas fa-arrow-left text-light"> back </a></div>
   <div class="align-self-end"><a class="navbar-brand" href="home.php">
       <?php echo $_SESSION['adminses']; ?>
       <i class="fas fa-user-tie text-info"> </i> 
      </a></div>
</nav>


<style>
  @media screen and (max-width:700px) {
    #shareablestngdiv{ 
      width: 100%;
    }
    #payslctpages{ 
      width: 70%;
      margin-left: 10%;
    }
  }
  @media screen and (min-width:700px) {
    #shareablestngdiv{ 
      width: 70%;
margin-left: 15%;
    }
    #payslctpages{ 
      width: 40%;
margin-left: 30%;
    }
  }
  </style>


<!--- its for details page -->
<nav id="navbar-example2" class="navbar bg-light px-3 mb-3" style="position:sticky !important;z-index:400 !important; top:0;">
    <a class="navbar-brand" href="#"> Services Settings </a>
   
<?php
if(isset($_SESSION['save'])){
  echo '<div class="alert alert-success" role="alert"> Updated '.$_SESSION['save'].' </div>';
}
if(isset($_SESSION['notsave'])){
  echo '<div class="alert alert-red" role="alert"> Try Again For '.$_SESSION['notsave'].' </div>';
}
?>
   

    


    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="#scrollspyHeading1"> 1. </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#scrollspyHeading2"> 2. </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#scrollspyHeading3"> 3. </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#scrollspyHeading4"> 4. </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#scrollspyHeading5"> 5. AC Duct </a></li>
          <li><a class="dropdown-item" href="#scrollspyHeading6"> 6. Anual Maintinance</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#scrollspyHeading7"> 7. Handy Man</a></li>
          <li><a class="dropdown-item" href="#scrollspyHeading8"> 8. Pest Control</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">

       <center>
    <h2  style="color:purple;font-size:2rem">
      Service Providing Settings</h2>
       </center><br>
   <!-- 1 -->
    <div class="d-flex justify-content-between">
        <h4 class="align-self-center text-muted" id="scrollspyHeading1"> 1. Home Cleaning </h4>
     </div>
    <br>     

      <div id="shareablestngdiv">
        <form method="POST" class="row g-3 card-header">
      
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Material Price</label>
            <input type="number" value="<?php echo $check1f['material_price']; ?>" class="form-control" name="materialprice">
          </div>
          <div class="col-md-6">
            <label for="inputState" class="form-label">Price</label>
            <input type="text" value="<?php echo $check1f['price']; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">Discounts</label>
            <input type="text" value="<?php echo $check1f['discount']; ?>" class="form-control" name="discounts">
          </div>

          <div class="col-12">
            <button type="submit" name="homecleanbtn" class="btn btn-primary"> Update </button>
          </div>
        </form>
      </div>
      <br>
      <br>


      <!-- 2 -->
   <!-- 2 -->
    <div class="d-flex justify-content-between">
        <h4 class="align-self-center text-muted" id="scrollspyHeading2"> 2. Deep Cleaning </h4>
     </div>
    <br>     

      <div id="shareablestngdiv">
        <form method="POST" class="row g-3 card-header">
          <div class="col-md-12">
            <label for="inputState" class="form-label">Price</label>
            <input type="text" value="<?php echo $check2f['price']; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">Discounts</label>
            <input type="text" value="<?php echo $check2f['discount']; ?>" class="form-control" name="discounts">
          </div>
         
          <div class="col-12">
            <button type="submit" name="deepcleanbtn" class="btn btn-primary"> Update </button>
          </div>
        </form>
      </div>
      <br>
      <br>

      <!-- 2 -->

   <!-- 3 -->
    <div class="d-flex justify-content-between">
        <h4 class="align-self-center text-muted" id="scrollspyHeading3"> 3. Disinfication Services </h4>
     </div>
    <br>     

      <div id="shareablestngdiv">
        <form method="POST" class="row g-3 card-header">
              
        <div class="col-md-12">
            <label for="inputState" class="form-label">Price</label>
            <input type="text" value="<?php echo $check3f['price']; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">Discounts</label>
            <input type="text" value="<?php echo $check3f['discount']; ?>" class="form-control" name="discounts">
          </div>
          <div class="col-12">
            <button type="submit" name="disinficationbtn" class="btn btn-primary"> Update </button>
          </div>
        </form>
      </div>
      <br>
      <br>

      <!-- 3 -->
   <!-- 4 -->
    <div class="d-flex justify-content-between">
        <h4 class="align-self-center text-muted" id="scrollspyHeading4"> 4. AC Services </h4>
     </div>
    <br>     

      <div id="shareablestngdiv">
        <form method="POST" class="row g-3 card-header">     
        <div class="col-md-12">
            <label for="inputState" class="form-label">Price</label>
            <input type="text" value="<?php echo $check4f['price']; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">Discounts</label>
            <input type="text" value="<?php echo $check4f['discount']; ?>" class="form-control" name="discounts">
          </div>
          <div class="col-12">
            <button type="submit" name="acservicebtn" class="btn btn-primary"> Update </button>
          </div>
        </form>
      </div>
      <br>
      <br>

      <!-- 4 -->
   <!-- 5 -->
    <div class="d-flex justify-content-between">
        <h4 class="align-self-center text-muted" id="scrollspyHeading5"> 5. AC Duct Services </h4>
     </div>
    <br>     

      <div id="shareablestngdiv">
        <form method="POST" class="row g-3 card-header">
        <div class="col-md-12">
            <label for="inputState" class="form-label">Price</label>
            <input type="text" value="<?php echo $check5f['price']; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">Discounts</label>
            <input type="text" value="<?php echo $check5f['discount']; ?>" class="form-control" name="discounts">
          </div>
          <div class="col-12">
            <button type="submit" name="acductservicebtn" class="btn btn-primary"> Update </button>
          </div>
        </form>
      </div>
      <br>
      <br>

      <!-- 4 -->
   <!-- 6 -->
    <div class="d-flex justify-content-between">
        <h4 class="align-self-center text-muted" id="scrollspyHeading6"> 6. Anual Maintinance </h4>
     </div>
    <br>     

      <div id="shareablestngdiv">


        <h2> Plan 1</h2>
        <form method="POST" class="row g-3 card-header">
              
          <div class="col-md-6">
            <label for="inputState" class="form-label">Starting Price From</label>
            <input type="text" value="<?php echo $check6a1f['prices'];
            ; ?>" class="form-control" name="price">
          </div>

          <div class="col-md-6">
            <button type="submit" name="anualplan1btn" class="btn btn-primary"> Update </button>
          </div>
        </form>

        <h2> Plan 2</h2>
        <form method="POST" class="row g-3 card-header">
                
          <div class="col-md-6">
            <label for="inputState" class="form-label">Starting Price From</label>
            <input type="text" value="<?php echo $check6a2f['prices'];
            ; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-6">
            <button type="submit" name="anualplan2btn" class="btn btn-primary"> Update </button>
          </div>
        </form>
        <h2> Plan 3</h2>
        <form method="POST" class="row g-3 card-header">
          <div class="col-md-6">
            <label for="inputState" class="form-label">Starting Price From</label>
            <input type="text" value="<?php echo $check6a3f['prices'];
            ; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-6">
            <button type="submit" name="anualplan3btn" class="btn btn-primary"> Update </button>
          </div>
        </form>
      </div>
      <br>
      <br>

      <!-- 6 -->
   <!-- 7 -->
    <div class="d-flex justify-content-between">
        <h4 class="align-self-center text-muted" id="scrollspyHeading7"> 7.HandyMan Services </h4>
     </div>
    <br>     

      <div id="shareablestngdiv">
        <form method="POST" class="row g-3 card-header">
               
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Material Price</label>
            <input type="number" value="<?php echo $check7f['material_price']; ?>" class="form-control" name="materialprice">
          </div>
          <div class="col-md-6">
            <label for="inputState" class="form-label">Price</label>
            <input type="text" value="<?php echo $check7f['price']; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">Discounts</label>
            <input type="text" value="<?php echo $check7f['discount']; ?>" class="form-control" name="discounts">
          </div>
          <div class="col-12">
            <button type="submit" name="handymanbtn" class="btn btn-primary"> Update </button>
          </div>
        </form>
      </div>
      <br>
      <br>

      <!-- 7 -->
   <!-- 8 -->
    <div class="d-flex justify-content-between">
        <h4 class="align-self-center text-muted" id="scrollspyHeading8"> 8.Pest Control Services </h4>
     </div>
    <br>     

      <div id="shareablestngdiv">
        <form method="POST" class="row g-3 card-header">
              
        <div class="col-md-12">
            <label for="inputState" class="form-label">Price</label>
            <input type="text" value="<?php echo $check8f['price']; ?>" class="form-control" name="price">
          </div>
          <div class="col-md-12">
            <label for="inputState" class="form-label">Discounts</label>
            <input type="text" value="<?php echo $check8f['discount']; ?>" class="form-control" name="discounts">
          </div>
          <div class="col-12">
            <button type="submit" name="pestcontrolbtn" class="btn btn-primary"> Update </button>
          </div>
        </form>
      </div>
      <br>
      <br>

      <!-- 8 -->




  </div>




















<!--content end-->
<!-- JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jqoffline3.6.1.js"></script>
<script>

</script>
</body>
</html>