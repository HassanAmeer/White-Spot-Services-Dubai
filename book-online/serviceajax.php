<?php
// session_start();
error_reporting(0);
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
// header("Content-Type: application/json");

  include '../config.php';


// ///////////////////////// start for fetch



if (isset($_POST['servicesfromadminj'])) {
    $slctservice1 = "SELECT * FROM `admin_services_stngs` ORDER BY id ";
    $slctservice1q = mysqli_query($db,$slctservice1);
    $allserviceresp = array();
    while ($vservice1 = mysqli_fetch_assoc($slctservice1q)) {
        
        array_push($allserviceresp,array(
            'id' => $vservice1['id'],
            'servicename' => $vservice1['name'],
            'frequency' => $vservice1['frequency'],
            'materialprice' => $vservice1['material_price'],
            'price' => $vservice1['price'],
            'discount' => $vservice1['discount'],
           
        ));

    } 
    echo json_encode($allserviceresp);
};

































//////////////////////////// start for get data of selected services
if (isset($_POST['servicenoj'])) {

    $tokenidj = mysqli_real_escape_string($db,$_POST['tokenidj']);
    $usernamej = mysqli_real_escape_string($db,$_POST['usernamej']);
    $userphonej = mysqli_real_escape_string($db,$_POST['userphonej']);
    $usergmailj = mysqli_real_escape_string($db,$_POST['usergmailj']);
    $userlatj = mysqli_real_escape_string($db,$_POST['userlatj']);
    $userlngj = mysqli_real_escape_string($db,$_POST['userlngj']);
    $userlocj = mysqli_real_escape_string($db,$_POST['userlocj']);
    $useraddressj = mysqli_real_escape_string($db,$_POST['useraddressj']);
    $servicenoj = mysqli_real_escape_string($db,$_POST['servicenoj']);
    $servicenamej = mysqli_real_escape_string($db,$_POST['servicenamej']);
    $freqj = mysqli_real_escape_string($db,$_POST['freqj']);


    $building_typej = mysqli_real_escape_string($db,$_POST['building_typej']);
    $getdesctextj = mysqli_real_escape_string($db,$_POST['getdesctextj']);
    
    $pricej = mysqli_real_escape_string($db,$_POST['pricej']);
    $vatj = mysqli_real_escape_string($db,$_POST['vatj']);
    $discountAmountj = mysqli_real_escape_string($db,$_POST['discountAmountj']);
    $totalvj = mysqli_real_escape_string($db,$_POST['totalvj']);
    $checkpaidj = mysqli_real_escape_string($db,$_POST['checkpaidj']);


// 
    if(isset($_POST['regionidvalj'])){
        $regionidvalj = mysqli_real_escape_string($db,$_POST['regionidvalj']);
    }else{
        $regionidvalj = '';
    }
// 
    if(isset($_POST['getdaysj'])){
        $getdaysj = mysqli_real_escape_string($db,$_POST['getdaysj']);
    }else{
        $getdaysj = '';
    }
// 
    if(isset($_POST['gettimej'])){
        $gettimej = mysqli_real_escape_string($db,$_POST['gettimej']);
    }else{
        $gettimej = '';
    }
// 
    if(isset($_POST['durationj'])){
        $durationj = mysqli_real_escape_string($db,$_POST['durationj']);
    }else{
        $durationj = '';
    }
// 
    if(isset($_POST['profneedsj'])){
        $profneedsj = mysqli_real_escape_string($db,$_POST['profneedsj']);
    }else{
        $profneedsj = '';
    }
// 
    if(isset($_POST['bedRoomsj'])){
        $bedroomsj = mysqli_real_escape_string($db,$_POST['bedRoomsj']);
    }else{
        $bedroomsj = '';
    }
// 
    if(isset($_POST['pkgvj'])){
        $pkgvj = mysqli_real_escape_string($db,$_POST['pkgvj']);
    }else{
        $pkgvj = '';
    }
// 
    if(isset($_POST['pricing_typej'])){
        $pricing_typej = mysqli_real_escape_string($db,$_POST['pricing_typej']);
    }else{
        $pricing_typej = '';
    }
// 
    if(isset($_POST['usematerialj'])){
        $usematerialj = mysqli_real_escape_string($db,$_POST['usematerialj']);
    }else{
        $usematerialj = '';
    }
// 
    if(isset($_POST['materialAmountj'])){
        $materialAmountj = mysqli_real_escape_string($db,$_POST['materialAmountj']);
    }else{
        $materialAmountj = '';
    }
// 


    $setservice = "INSERT INTO `users_services`(`tokenid`, `service_no`, `by_phone`, `by_name`,`by_gmail`, `lat`, `lng`, `location`, `full_adress`, `service_name`, `building_type`, `bedrooms`, `user_desc`, `no_of_prof`, `prof_needs`, `pkg`, `pricing_type`, `region_id`, `selected_days`, `selected_time`, `use_material`, `meterial_price`, `price`, `vat`, `discount`, `total`, `paid`) VALUES ('$tokenidj','$servicenoj','$userphonej','$usernamej','$usergmailj','$userlatj','$userlngj','$userlocj','$useraddressj','$servicenamej','$building_typej','$bedroomsj','$getdesctextj','$durationj','$profneedsj','$pkgvj','$pricing_typej','$regionidvalj','$getdaysj','$gettimej','$usematerialj','$materialAmountj','$pricej','$vatj','$discountAmountj','$totalvj','$checkpaidj')";
    
    $setserviceq = mysqli_query($db,$setservice);
    if($setserviceq){
      echo 1;
    }else{
        echo mysqli_error($db);
    }
};




// ///////////////////////// start for paybyinptj

if (isset($_POST['paybyinptj'])) {
    $paybyinptj = mysqli_real_escape_string($db,$_POST['paybyinptj']);
    $tokenidj = mysqli_real_escape_string($db,$_POST['tokenidj']);

    $updatepaytype = "UPDATE `users_services` SET `paid`='$paybyinptj' WHERE tokenid='$tokenidj' ";
    $updatepaytypeq = mysqli_query($db,$updatepaytype);
     if($updatepaytypeq){
        echo 1;
     }else{
        echo 0;
     }
};








?>
