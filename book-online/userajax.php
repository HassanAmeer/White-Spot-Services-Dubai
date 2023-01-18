<?php
// session_start();
error_reporting(0);
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
// header("Content-Type: application/json");

  include '../config.php';


// ///////////////////////// start for fetch logins data

if (isset($_POST['loginphonevalj'])) {
    $loginphonevalj = mysqli_real_escape_string($db,$_POST['loginphonevalj']);
    $getloginarray = [];
    $getloginv = "SELECT * FROM `login_users` WHERE phone='$loginphonevalj' ";
    $getloginvq = mysqli_query($db,$getloginv);
    $getloginf = mysqli_fetch_assoc($getloginvq);
        array_push($getloginarray,
             $getloginf['id'],
             $getloginf['firstname'],
             $getloginf['lastname'],
             $getloginf['phone'],
             $getloginf['email'],
             $getloginf['gender'],
             $getloginf['lat'],
             $getloginf['lng'],
             $getloginf['location'],
             $getloginf['fulladress'],
        
        );
 
    if($getloginf){
        setcookie('loginservice',$loginphonevalj,time() + 800200);
        echo json_encode($getloginarray);
    }else{
        echo json_encode('error');
    }
};




/////////////////////////////////////////////// for registerd
if (isset($_POST['genderjs'])) {
    $latjs = mysqli_real_escape_string($db,$_POST['latjs']);
    $lngjs = mysqli_real_escape_string($db,$_POST['lngjs']);
    $picloc_inputjs = mysqli_real_escape_string($db,$_POST['picloc_inputjs']);
    $building_detailjs = mysqli_real_escape_string($db,$_POST['building_detailjs']);
    $genderjs = mysqli_real_escape_string($db,$_POST['genderjs']);
    $first_namejs = mysqli_real_escape_string($db,$_POST['first_namejs']);
    $last_namejs = mysqli_real_escape_string($db,$_POST['last_namejs']);
    $phone_nojs = mysqli_real_escape_string($db,$_POST['phone_nojs']);
    $emailjs = mysqli_real_escape_string($db,$_POST['emailjs']);


    $chklog = mysqli_query($db, "SELECT phone FROM `login_users` WHERE phone='$phone_nojs'");
    $chklogv = mysqli_fetch_array($chklog);
    $chkbylog = $chklogv['phonemysqli_real_escape_string($db,'];

    if ($chkbylog == $phone_nojs) {
        echo 0;
    } else {

        $setnewusrs = "INSERT INTO `login_users`(`firstname`, `lastname`, `phone`, `email`, `gender`, `lat`, `lng`, `location`, `fulladress`) VALUES ('$first_namejs','$last_namejs','$phone_nojs','$emailjs','$genderjs','$latjs','$lngjs','$picloc_inputjs','$building_detailjs')";
        $setnewusrsq = mysqli_query($db, $setnewusrs) or mysqli_error($db);

        if ($setnewusrsq) {
            $getloginarray = [];
            $getloginv = "SELECT * FROM `login_users` WHERE phone='$phone_nojs' ";
            $getloginvq = mysqli_query($db, $getloginv);
            $getloginf = mysqli_fetch_assoc($getloginvq);
            array_push(
                $getloginarray,
                $getloginf['id'],
                $getloginf['firstname'],
                $getloginf['lastname'],
                $getloginf['phone'],
                $getloginf['email'],
                $getloginf['gender'],
                $getloginf['lat'],
                $getloginf['lng'],
                $getloginf['location'],
                $getloginf['fulladress'],

            );
            if ($getloginf) {
                setcookie('loginservice',$phone_nojs,time() + 800200);
                echo json_encode($getloginarray);
                // $_SESSION['login'] = $phone_nojs;
            } else {
                echo json_encode('error2');
            }
        } else {
            echo json_encode('error1');
        }
    }


}













?>
