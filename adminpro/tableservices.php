
<?php

session_start();
error_reporting(0);
unset($_SESSION['ok']);
unset($_SESSION['not']);
include '../config.php';

if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); }







if(isset($_GET['delid'])){
   $delid = $_GET['delid'];
  $delservice = "DELETE FROM `users_services` WHERE id = '$delid'";
  $delserviceq = mysqli_query($db,$delservice);
  if($delserviceq){
    $_SESSION['ok'] = $delid;
  }else{
    $_SESSION['not'] = $delid;
  }
}


if(isset($_GET['changetookid'])){
   $changetookid = $_GET['changetookid'];
  $changetookids = "UPDATE `users_services` SET `status`=1 WHERE id = '$changetookid'";
  $changetookidq = mysqli_query($db,$changetookids);
  if($changetookidq){
    $_SESSION['ok'] = $changetookid;
  }else{
    $_SESSION['not'] = $changetookid;
  }
}


if(isset($_GET['changetonotid'])){
   $changetonotid = $_GET['changetonotid'];
  $changetonotids = "UPDATE `users_services` SET `status`=0 WHERE id = '$changetonotid'";
  $changetonotidq = mysqli_query($db,$changetonotids);
  if($changetonotidq){
    $_SESSION['ok'] = $changetonotid;
  }else{
    $_SESSION['not'] = $changetonotid;
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
if(isset($_SESSION['ok'])){
  echo '<div class="alert alert-success" role="alert"> Action Success On Id: '.$_SESSION['ok'].' </div>';
}
if(isset($_SESSION['not'])){
  echo '<div class="alert alert-red" role="alert"> Try Again For id: '.$_SESSION['not'].' </div>';
}
?>


      <div class="align-self-end"><a class="navbar-brand" href="home.php">
          <?php echo $_SESSION['adminses']; ?>
          <i class="fas fa-user-tie text-info"> </i> 
         </a></div>
   </nav>
   







    <center>
      <h2  style="color:purple;font-size:2rem">
        Clients Orders </h2>
        </center><br>
  
  
  <form method="POST" class="">
    <button type="submit" name="vpendingserv" class="btn text-danger"> <i class="text-muted fa fa-eye"> </i> Remaining Services </button>
    <button type="submit" name="vprovidedserv" class="btn text-success"> <i class="text-muted fa fa-eye"> </i> Provided Services </button>
</form>
  <br>     
  
      
      <style>
        @media screen and (max-width:700px) {
         #forusersearchdiv{ width: 80%;
          margin-left: 20%;
         }
        }
  
        @media screen and (min-width:700px) {
          #forusersearchdiv{ 
               width: 40%;
         margin-left: 60%;
          }
        }
  
      </style>
    
  









    
  <!-- js  line no 1700 -->
      <div class="d-flex justify-content-between" id="forusersearchdiv">
      
      
        <form method="POST" class="input-group mb-1 align-self-center">
        <input type="text" name="seearchinpt" id="searchinpt" class="form-control" placeholder="Recipient's username" aria-label="Name OR Phone OR Email" aria-describedby="basic-addon2">
        <button type="submit" name="searchbtn" class="input-group-text btn-success fa fa-search searchclientsbtn" id="basic-addon2"> Search </button>
      </form>
      </div>
    
  
  
   <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">View</th>
            <th scope="col">Delete</th>
            <th scope="col">service Name</th>
            <th scope="col">Change</th>
            <th scope="col">paid BY</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Service Location</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>




        <!-- changetook
    changetonot -->


<?php

if(isset($_POST['vpendingserv'])){

  $userservices = "SELECT * FROM `users_services` WHERE status = 0 ORDER BY id DESC";
$userservicesq = mysqli_query($db,$userservices);
  while ($servicesf = mysqli_fetch_assoc($userservicesq)) {
    echo '<tr>
    <th scope="row">'.$servicesf['id'].'</th>
    <td> <a href="profiledetails.php?id='.$servicesf['id'].'" target="_blank" class="fa fa-eye text-success" style="text-decoration:none;"> VIEW </a> </td>
    <td> <a href="tableservices.php?delid='.$servicesf['id'].'" class="fa fa-trash text-danger"> Delete </a> </td>
    <td> '.$servicesf['service_name'].' </td>
    <td> <a href="tableservices.php?changetookid='.$servicesf['id'].'"> <button class="btn-warning fa fa-history"> </button> </a> </td>
    <td> '.$servicesf['paid'].' </td>
    <td> '.$servicesf['by_name'].' </td>
    <td> <a href="tel:'.$servicesf['by_phone'].'" style="text-decoration:none;" class="fa fa-phone"> </a> +971'.$servicesf['by_phone'].'..</td>
    <td> <a href="mailto:'.$servicesf['by_gmail'].'" style="text-decoration:none;" class="fa fa-envelope text-danger"> </a> '.$servicesf['by_gmail'].'..</td>
    <td> '.$servicesf['location'].' </td>
    <td> '.$servicesf['total'].' AED </td>
  </tr>';
  }

}else if(isset($_POST['vprovidedserv'])){
  $userservices = "SELECT * FROM `users_services` WHERE status=1 ORDER BY id DESC";
  $userservicesq = mysqli_query($db,$userservices);
    while ($servicesf = mysqli_fetch_assoc($userservicesq)) {
      echo '<tr>
      <th scope="row">'.$servicesf['id'].'</th>
      <td> <a href="profiledetails.php?id='.$servicesf['id'].'" target="_blank" class="fa fa-eye text-success" style="text-decoration:none;"> VIEW </a> </td>
      <td>  <a href="tableservices.php?delid='.$servicesf['id'].'" class="fa fa-trash text-danger"> Delete </a> </td>
      <td> '.$servicesf['service_name'].' </td>
      <td> <a href="tableservices.php?changetonotid='.$servicesf['id'].'"> <button class="btn-success fa fa-check"> </button> </a> </form> </td>
      <td> '.$servicesf['paid'].' </td>
      <td> '.$servicesf['by_name'].' </td>
      <td> <a href="tel:'.$servicesf['by_phone'].'" style="text-decoration:none;" class="fa fa-phone"> </a> +971'.$servicesf['by_phone'].'...</td>
      <td> <a href="mailto:'.$servicesf['by_gmail'].'" style="text-decoration:none;" class="fa fa-envelope text-danger"> </a> '.$servicesf['by_gmail'].'..</td>
      <td> '.$servicesf['location'].' </td>
      <td> '.$servicesf['total'].' AED </td>
    </tr>';
    }
  
}else if(isset($_POST['searchbtn'])){
  $seearchinpt = mysqli_real_escape_string($db, $_POST['seearchinpt']);
  $userservices = "SELECT * FROM `users_services` WHERE by_name LIKE '$seearchinpt' OR by_phone LIKE '$seearchinpt' OR by_gmail LIKE '$seearchinpt' ORDER BY id DESC";
  $userservicesq = mysqli_query($db,$userservices);
    while ($servicesf = mysqli_fetch_assoc($userservicesq)) {
      if($servicesf['status'] == 0){
        echo '<tr>
          <th scope="row">'.$servicesf['id'].'</th>
          <td> <a href="profiledetails.php?id='.$servicesf['id'].'" target="_blank" class="fa fa-eye text-success" style="text-decoration:none;"> VIEW </a> </td>
          <td>  <a href="tableservices.php?delid='.$servicesf['id'].'" class="fa fa-trash text-danger"> Delete </a> </td>
          <td> '.$servicesf['service_name'].' </td>
          <td> <a href="tableservices.php?changetookid='.$servicesf['id'].'"> <button class="btn-warning fa fa-history"> </button> </a></td>
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
            <td>  <a href="tableservices.php?delid='.$servicesf['id'].'" class="fa fa-trash text-danger"> Delete </a> </td>
            <td> '.$servicesf['service_name'].' </td>
            <td> <a href="tableservices.php?changetonotid='.$servicesf['id'].'"> <button class="btn-success fa fa-check"> </button> </a></td>
            <td> '.$servicesf['paid'].' </td>
            <td> '.$servicesf['by_name'].' </td>
            <td> <a href="tel:'.$servicesf['by_phone'].'" style="text-decoration:none;" class="fa fa-phone"> </a> +971'.$servicesf['by_phone'].'...</td>
            <td> <a href="mailto:'.$servicesf['by_gmail'].'" style="text-decoration:none;" class="fa fa-envelope text-danger"> </a> '.$servicesf['by_gmail'].'..</td>
            <td> '.$servicesf['location'].' </td>
            <td> '.$servicesf['total'].' AED </td>
          </tr>';
          }
    }
}else{
  
$userservices = "SELECT * FROM `users_services` ORDER BY id DESC";
$userservicesq = mysqli_query($db,$userservices);
  while ($servicesf = mysqli_fetch_assoc($userservicesq)) {

    if($servicesf['status'] == 0){
  echo '<tr>
    <th scope="row">'.$servicesf['id'].'</th>
    <td> <a href="profiledetails.php?id='.$servicesf['id'].'" target="_blank" class="fa fa-eye text-success" style="text-decoration:none;"> VIEW </a> </td>
    <td>  <a href="tableservices.php?delid='.$servicesf['id'].'" class="fa fa-trash text-danger"> Delete </a> </td>
    <td> '.$servicesf['service_name'].' </td>
    <td> <a href="tableservices.php?changetookid='.$servicesf['id'].'"> <button class="btn-warning fa fa-history"> </button> </a></td>
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
      <td>  <a href="tableservices.php?delid='.$servicesf['id'].'" class="fa fa-trash text-danger"> Delete </a> </td>
      <td> '.$servicesf['service_name'].' </td>
      <td> <a href="tableservices.php?changetonotid='.$servicesf['id'].'"> <button class="btn-success fa fa-check"> </button> </a></td>
      <td> '.$servicesf['paid'].' </td>
      <td> '.$servicesf['by_name'].' </td>
      <td> <a href="tel:'.$servicesf['by_phone'].'" style="text-decoration:none;" class="fa fa-phone"> </a> +971'.$servicesf['by_phone'].'...</td>
      <td> <a href="mailto:'.$servicesf['by_gmail'].'" style="text-decoration:none;" class="fa fa-envelope text-danger"> </a> '.$servicesf['by_gmail'].'..</td>
      <td> '.$servicesf['location'].' </td>
      <td> '.$servicesf['total'].' AED </td>
    </tr>';
    }

    } 
}

?>


        </tbody>
     </table>
     <br>
     <br>
   </div>
  
  
  













</body>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jqoffline3.6.0.js"></script>
 
</html>