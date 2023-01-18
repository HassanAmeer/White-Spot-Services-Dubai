



<?php
// for ($i=1; $i<=7; $i++)
// {
//    $loopt = $i * 84600;
//    $dayName = date("D", time() + $loopt);
//    $phpdate = date( "d-M-Y", time() + $loopt);
//    $phpday = date( "d", time() + $loopt);
//      echo '<div class="field">
//          <span class="day">.'.$dayName.'</span>
//          <button type="button" class="num days active" data-full="'.$dayName.', '.$phpdate.'" data-value="'.$dayName.'">'.$phpday.'</button>
//          </div>';
// }




?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"/> -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/icons/favicon.ico">
    <link rel="stylesheet" href="style.css"/>

       <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyDOS8jkm5pyE_ZbsGf5sGO5nz7NxGXHM_8&amp;libraries=places'></script>
   
    <link rel="stylesheet" href="jscss/bootstrap.min.css"/>
    <link rel="stylesheet" href="jscss/stylefromwhite.css">
    <link rel="stylesheet" href="jscss/intlTelInput.css">
    <link rel="stylesheet" href="jscss/locationpicker.jquery.js">
    <title> Service Providing </title>
  </head>
  <body>



   


















<nav class="navbar" style="display: flex;justify-content: space-between; width:100%; background:white;">
  <a class="navbar-brand" href="../index.php"><img src="assets/images/logo.png"></a>
<!-- Button trigger modal -->
<button type="button" class="p-4 mx-3 input-group-text rounded-pill loginbtn" id="basic-addon1" data-bs-toggle="modal" data-bs-target="#loginmodel" style="height:1.2rem !important; margin-top:0.5rem;">
  Login <i class="fa fa-user p-1"> </i>
</button>
<a type="button" href="profile.html" class="p-4 mx-3 input-group-text rounded-pill" id="dashboardbtn" style="height:1.2rem !important; margin-top:0.5rem; display:none; text-decoration:none;">
  Dashboard <i class="fa fa-dashboard p-1"> </i>
</a>

<!-- Modal -->
<div class="modal fade" id="loginmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Login </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="alert alert-success sucalert" style="display: none;" role="alert"></div>
      <div class="alert alert-danger redalert" style="display: none;" role="alert"></div>
      <div class="modal-body">
        <h3> You Mobile Number </h3>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><img src="assets/images/united-arab-emirates.png" style="width:1rem; background:none"> +971 </span>
          <input type="number" class="form-control" id="loginphoneinpt" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="phoneloginbtn"> Login </button>
      </div>
    </div>
  </div>
</div>
</nav>




<!-- start for only select map -->
<!-- start for only select map -->
<!-- start for only select map -->
<!-- start for only select map -->
<!-- start for only select map -->
<!-- start for only select map -->
<!-- start for only select map -->
<!-- start for only select map -->
<!-- start for only select map -->

 <!-- Button trigger modal -->
  <a type="button" data-bs-toggle="modal" id="getonlylocbtn" data-bs-target="#getonlyloc" style="margin-top:0.5rem; margin-left:0%; font-size:1.4rem; color: #00adea;">
   Dubai <i class="fa fa-map"> </i>
</a>

<!-- Modal -->
<div class="modal fade" id="getonlyloc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Name </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body g-3">
        <h5 class="modal-title" id="exampleModalLabel">Pick Location</h5>
        <div class="row">
          <div class="col-md-12 form-group view-map">
             <div class="mappicker" style="height: 250px; position: relative; overflow: hidden;">
          </div>
       </div>
 
     <input type="hidden" name="lat" class="lat" value="24.82475812443726">
       <input type="hidden" name="lng" class="lng" value="55.55414043389215">
       <div class="regsiter-form">
          <div class="row">
             <div class="col-md-12 form-group view-map">
                <div class="display-map-search">
                   <div class="content-display">
                      <i class="fa fa-map" aria-hidden="true"></i>
                      <input type="text" style="border: none;width: 100%;" placeholder="Search for your building or area" class="picklocinpt pac-target-input" autocomplete="off">
                   </div>
                </div>
             </div>
          </div>
          
             <div class="col-md-12 form-group">
                <label>Address Details</label>
                <input type="text" id="savfadresmodel" class="form-control" placeholder="Street / Building / Flat no.">
             </div>
         
          <!--row--->
       </div>
       <!--regsiter-form-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary savlocbtnmodel"  data-bs-dismiss="modal">Save Location</button>
      </div>
    </div>
  </div>
</div>
</div>





<!-- end for only select map -->
<!-- end for only select map -->
<!-- end for only select map -->
<!-- end for only select map -->
<!-- end for only select map -->
<!-- end for only select map -->
<!-- end for only select map -->
<!-- end for only select map -->
<!-- end for only select map -->

 


<!-- end here for registration model  -->
<!-- end here for registration model  -->
<!-- end here for registration model  -->
<!-- end here for registration model  -->
<!-- end here for registration model  -->
<!-- end here for registration model  -->



  <!-- Button trigger modal -->
<a type="button" data-bs-toggle="modal" id="getregmodelbtn" data-bs-target="#getregmodel" style="margin-top:0.5rem; margin-left:0%; font-size:1.4rem; color: #00adea;">
   Register <i class="fa fa-user-circle"> </i>
</a>


<!-- Modal -->
<div class="modal fade" id="getregmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Register </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="signup_success"></div>
      <div class="alert alert-success sucalertofreg" style="display: none;" role="alert">
        Success
       </div>
      <div class="modal-body g-3">
        <h5 class="modal-title" id="exampleModalLabel">Pick Location</h5>
        <div class="row">
          <div class="col-md-12 form-group view-map">
             <div class="mappicker" style="height: 250px; position: relative; overflow: hidden;">
          </div>
       </div>

     <input type="hidden" name="lat" class="lat" value="24.82475812443726">
       <input type="hidden" name="lng" class="lng" value="55.55414043389215">
       <div class="regsiter-form">
          <div class="row">
             <div class="col-md-12 form-group view-map">
                <div class="display-map-search">
                   <div class="content-display">
                      <i class="fa fa-map" aria-hidden="true"></i>
                      <input type="text" style="border: none;width: 100%;" placeholder="Search for your building or area" class="picklocinpt pac-target-input" autocomplete="off">
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-12 form-group">
                <label>Address Details</label>
                <input type="text" id="building_detail" class="form-control" placeholder="Street / Building / Flat no.">
             </div>
             
             <div class="col-md-6 form-group">
                <label>First Name</label>
                <input type="text" id="first_name" class="form-control" placeholder="Enter your first name">
             </div>
             <div class="col-md-6 form-group">
                <label>Last Name</label>
                <input type="text" id="last_name" class="form-control" placeholder="Enter your Last name">
             </div>
             
             <div class="col-md-6 form-group">
                <label>Gender</label>
                <select class="form-control" id="gender">
                   <option>Male</option>
                   <option>Female</option>
                   <option>Other</option>
                </select>
             </div>

             <div class="col-md-6 form-group loginOTPForm">
                <label>Phone No.</label>
                <div class="phone-input"><span class="flag"><img src="assets/images/united-arab-emirates.png">+971</span><input type="number" class="form-control" id="phone_no" placeholder="50 123 4567"></div>
             </div>

             <div class="col-md-12 form-group">
                <label>Email</label>
                <input type="text" id="email" class="form-control" placeholder="e.g. name@example.com">
             </div>

             <div class="col-md-12 form-group" style="display:none">
                <label>Company</label>
                <input type="text" id="company" class="form-control" placeholder="Company" value="NA">
             </div>

             <div class="col-md-12 form-group">
                <p class="note"> This helps us refer you to relevant Providing service</p>
             </div>

          </div>
          <!--row--->
       </div>
       <!--regsiter-form-->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Have Account? </button>
        <button type="button" class="btn btn-primary CreateCustomer">Sign_UP</button>
      </div>
    </div>
  </div>
</div>
</div>



<!-- end here for registration model  -->
<!-- end here for registration model  -->
<!-- end here for registration model  -->
<!-- end here for registration model  -->
<!-- end here for registration model  -->
<!-- end here for registration model  -->




<h3 class="text-dark"> <span id="sel_ser">Home Cleaning</span> in Dubai</h3>



<div class="progressbar">
  <div class="progressline" id="progress"></div>
  <div
    class="progress-step progress-step-active"
    data-title="Select_Service"
  ></div>
  <div class="progress-step" data-title="Service_Details"></div>
  <div class="progress-step whenanualhide" data-title="Date &amp; Time"></div>
  <div class="progress-step whenanualhide" data-title="Payment"></div>
</div>






<div class="alert alert-success alertstep3savedsuc" style="display: none;margin-top: 1rem;" role="alert"></div>
<div class="alert alert-danger alertstep3savedred" style="display: none;margin-top:1rem;" role="alert">Success
</div>






<br>
<br>

<div id="steperrowcss">
  
  <form action="#" class="form">
    <!-- Progress bar -->


    <!-- Steps -->
    <!-- step 1 -->
    <div class="form-step form-step-active">
     <!--Frequency-start--->
     <fieldset>
      <div class="form-card professional-materials-block">
         <h5 class="fs-title">Select a Service</h5>
         
         <!-- <div class="card-content"> -->

            <div class="field-block services">
               <div class="content-block" style="display: inline-block">
                  <div class="field mb">
                     <button type="button" class="ser selectService active">Home Cleaning</button>
                  </div>
                  <div class="field mb">
                     <button type="button" class="ser selectService">Deep Cleaning</button>
                  </div>
                  <div class="field mb">
                     <button type="button" class="ser selectService">Disinfection Service</button>
                  </div>
                  <div class="field mb">
                     <button type="button" class="ser selectService">AC Service</button>
                  </div>
                  <div class="field mb">
                     <button type="button" class="ser selectService">AC Duct Cleaning</button>
                  </div>
                  <div class="field mb">
                     <button type="button" class="ser selectService">Annual Maintenance Contract</button>
                  </div>
                  <div class="field mb">
                     <button type="button" class="ser selectService">Handyman</button>
                  </div>
                  <div class="field mb">
                     <button type="button" class="ser selectService">Pest Control</button>
                  </div>                                                
               </div>
               
            </div>                                         
   <!--card-content-->
</div>
<!---form-card---->
<div class="mbl-fix"><div class="content-fix">
</fieldset>
<!--Frequency-end--->
      <div class="">
        <a href="#" class="btns btn-next ml-auto step1btn" style="width:17%; padding:10px;">Next</a>
      </div>
    </div>

    <!-- step 2 -->
    <div class="form-step">


      
<!--payment-starts--->
<fieldset class="vonsavestep3" style="display: none; position: initial; z-index: 5;">
   <div class="form-card">
      <div class="field-block payment-block">
         <h2 class="title">Pay online and confirm your booking.</h2>
         <div class="content-block">

            <div class="col-md-12 form-group pay-with-credit">
              <label class="container-radio">
                  <p>Pay with credit / debit card <br> 
                  <!--<span>AED 1000 insurance when you pay online</span>-->
                  </p>
                  <!-- checked="" -->
                  <input type="radio" name="payment_type" class="selectpaymenttypes" value="bycc">
                  <span class="checkmark-radio"></span>
               </label>
               <div class="input-group mb-2" id="vontypecc" style="display:none;">
                 <span class="input-group-text fa fa-credit-card" id="basic-addon1">  </span>
                 <input type="number" class="form-control" id="creditcardnoinpt" placeholder=" Credit Card No." aria-label="cardno" aria-describedby="basic-addon1">
               </div>
            </div>
            
            <!--add-card-details-->
            <div class="col-md-12 form-group pay-with-cash" style="margin-top: 5px;">
              <label class="container-radio">
                  <p>Pay with cash</p>
                  <input type="radio" name="payment_type" checked=""  class="selectpaymenttypes" value="byhands">
                  <span class="checkmark-radio"></span>
               </label>
            </div>
                  
                  <div class="col-md-12 form-group add-voucher-block">
          
                  <div id="booking_message" class="booking_message"></div>
                  </div>
               </div>
               <!--content-block-->
            </div>
            <!--payment-block--->
         </div>
         <!--form-card-->
          
     </fieldset>
     <!--payment-ends--->



      <fieldset class="hideonsavestep3">
        <div class="form-card professional-materials-block">
           <div class="field-block hours type1" style="display: block">
              <h2 class="title">How many hours do you need your professional to stay?</h2>
              <div class="content-block normal" style="display: block">
                 <!--<div class="field">-->
                    <!--<button type="button" class="num professionalsHours ">1</button>-->
                    <!--</div>-->
                    <div class="field">
                       <button type="button" class="num professionalsHours">2</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours">3</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours active">4</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours">5</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours">6</button>
                    </div>
                 </div>

                 <div class="content-block handy" style="display: none">
                    <div class="field">
                       <button type="button" class="num professionalsHours">1</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours">2</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours">3</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours">4</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours">5</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsHours">6</button>
                    </div>
                 </div>
                 <!--content-block-->
              </div>
              
              <!---field-block---> 
              <div class="field-block professionals type1" style="display: block">
                 <h2 class="title">How many professionals do you need?</h2>
                 <div class="content-block">
                    <div class="field">
                       <button type="button" class="num professionalsNeed active">1</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsNeed">2</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsNeed">3</button>
                    </div>
                    <div class="field">
                       <button type="button" class="num professionalsNeed">4</button>
                    </div>
                 </div>
                 <!--content-block-->
              </div>

              <!---field-block---> 
              <div class="field-block materials type1">
                 <h2 class="title">Do you require cleaning materials?</h2>
                    <div class="content-block">
                       <div class="field">
                          <button type="button" class="num cleaningMaterial active">No</button>
                       </div>
                       <div class="field">
                          <button type="button" class="num cleaningMaterial">Yes</button>
                       </div>
                    </div>
                 <!--content-block-->
              </div>


              <div class="field-block building-type">
                 <h2 class="title">Building Type</h2>
                 <div class="content-block">
                    <div class="field">
                       <label class="container-radio">
                          <p class="title">Apartment</p>
                          <input type="radio" value="Apartment" name="buildingType" checked="">
                          <span class="checkmark-radio"></span>
                       </label>
                       <label class="container-radio">
                          <p class="title">Villa</p>
                          <input type="radio" value="Villa" name="buildingType">
                          <span class="checkmark-radio"></span>
                       </label>
                       <label class="container-radio town_house" style="display: none;">
                          <p class="title">Townhouse</p>
                          <input type="radio" value="Townhouse" name="buildingType">
                          <span class="checkmark-radio"></span>
                       </label>

                    </div>

                 </div>
                 <!--content-block-->
              </div>

              <div class="field-block no-beds type2" style="display: none">
                 <h2 class="title">No. of Bed Rooms</h2>
                 <div class="content-block">
                     <!-- <input type="text" id="bedroom" class="form-control" value="1"> -->
                     <select class="form-control bedroom apt" id="bedroom_apt">
                       <option value="Studio" class="apt" selected="">Studio</option>
                       <option value="1" class="apt">1</option>
                       <option value="2" class="apt">2</option>
                       <option value="3" class="apt">3</option>
                 </select> 

                 <select class="form-control bedroom villa" id="bedroom_villa" style="display: none">
                       <option value="2" class="villa" selected="">2</option>
                       <option value="3" class="villa">3</option>
                       <option value="4" class="villa">4</option>
                       <option value="5" class="villa">5</option>
                 </select> 
                 
                 <select class="form-control bedroom townhouse" id="bedroom_townhouse" style="display: none">
                       <option value="3" class="townhouse" selected="">3</option>
                       <option value="4" class="townhouse">4</option>
                       <option value="5" class="townhouse">5</option>
                       <option value="6" class="townhouse">6</option>    
                 </select>
                 </div>
              </div>
              
              <div class="field-block no-packages type2" style="display: none;margin-top:5px">
                 <h2 class="title">Select Package</h2>
                 <div class="content-block">
                     <!-- <input type="text" id="bedroom" class="form-control" value="1"> -->
                     <select class="form-control packages" id="packages">
                       <option value="Silver" class="package" selected="">Silver</option>
                       <option value="Gold" class="package">Gold</option>
                       <option value="Platinum" class="package">Platinum</option>
                    </select> 
               </div>
             </div>
             
              <!---field-block---> 
              <div class="field-block instructions">
                 <h2 class="title">Do you have any specific instructions?</h2>
                 <div class="content-block">
                    <div class="field">
                       <textarea class="form-control" id="fromdesctext" rows="6" name="instructions" placeholder="Example: Key under the mat, I have dogs etc."></textarea>
                    </div>
                 </div>
                 <!--content-block-->
              </div>
              <!---field-block---> 
              <span class="terms_text" style="display:none">Please note that AMC is subject to inspection of your home, and you will not be charged at this time. Click submit to express your interest, and someone from our team will be in touch with you.</span>
           </div>
           <!---form-card---->
          
       </fieldset>
       <!--Servic-details-end--->

      <div class="btns-group">
        <a href="#" class="btns btn-prev btn-secondary fa fa-long-arrow-left"> </a>
        <a href="#" class="btns btn-next step2btn" style="width:17%; padding:10px;">Next</a>
        <a href="#" class="btns anual2btnsubmit" style="width:17%; padding:10px; display: none !important;">Submit</a>
        <a href="#" class="btns vonanualpaybtn" style="width:17%; padding:10px; display: none !important;">Submit_Pay</a>
      </div>
    </div>

  





    <!-- step 3 -->
    <div class="form-step">
      
   <!--Date-time-starts--->
   <fieldset style="display: block; opacity: 1;">
      <div class="form-card like-service-block type3">

       <div class="field-block select-professional " style="display: none;">
         <h2 class="title">Which professional do you prefer?</h2>
         <p>Top-rated professionals in your area</p>
         <div class="content-block">
            <div class="select-professional-buttons">
               <div class="selectprofessionalNextBtn btn-new"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
               <div class="selectprofessionalPreviousBtn btn-new"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
            <div id="selectprofessional" class="owl-carousel owl-theme select-professional-carousel owl-loaded owl-drag">

            <div class="owl-stage-outer"><div class="owl-stage"></div></div></div>
            <!--owl-carousel-->
         </div>
         <!--content-block-->
      </div>
      <!---field-block---> 

      <div class="field-block hours" style="margin-bottom: 35px">
         <h2 class="title">Service Region</h2>
         <select class="form-control region" id="regionId" data-gtm-form-interact-field-id="0">
             <option disabled="" selected="">Please select your region</option>
            <option value="0010900000d9p0uAAA">Akoya Oxygen</option><option value="0010900000d9p1TAAQ">Al Barsha 1, 2, 3</option><option value="0010900000d9p1bAAA">Al Barsha South</option><option value="0010900000d9p1PAAQ">Al Furjan</option><option value="0010900000d9p11AAA">Al Khail Gate</option><option value="0010900000d9p10AAA">Al Khail Heights</option><option value="0010900000d9p14AAA">Al Manara</option><option value="0010900000d9p0zAAA">Al Safa 1, 2, 3</option><option value="0010900000d9p1JAAQ">Al Sufouh</option><option value="0010900000d9p16AAA">Al Sufu 1,2,3</option><option value="0010900000d9p15AAA">Al Wasl 1,2,3</option><option value="0010900000d9p1WAAQ">Arabian Ranches 1</option><option value="0010900000d9p0iAAA">Arabian Ranches 2</option><option value="0010900000d9p1jAAA">Arjan</option><option value="0010900000d9p13AAA">Bay Square</option><option value="0010900000d9p1YAAQ">Blue Water</option><option value="0010900000d9p0yAAA">Business Bay</option><option value="0010900000d9p1mAAA">Celestia</option><option value="0010900000d9p0lAAA">Damac Hills</option><option value="0010900000d9p12AAA">DIFC</option><option value="0010900000d9p1kAAA">DIP</option><option value="0010900000d9p0tAAA">Discovery Gardens</option><option value="0010900000d9p0xAAA">Downtown Dubai</option><option value="0010900000d9p1iAAA">Dubai Hills</option><option value="0010900000d9p1EAAQ">Dubai Internet City</option><option value="0010900000d9p1HAAQ">Dubai Marina</option><option value="0010900000d9p1cAAA">Dubai Media City</option><option value="0010900000d9p0wAAA">Dubai Silicon Oasis</option><option value="0010900000d9p0nAAA">Dubai South</option><option value="0010900000d9p1hAAA">Dubai Sports City</option><option value="0010900000d9p1gAAA">Dubai Studio City</option><option value="0010900000d9p1SAAQ">Dubailand</option><option value="0010900000d9p0sAAA">Emirates Hills 1, 2</option><option value="0010900000d9p1XAAQ">IBN Batutta</option><option value="0010900000d9p1fAAA">IMPZ</option><option value="0010900000d9p19AAA">Jumeirah 1, 2, 3</option><option value="0010900000d9p1aAAA">Jumeirah Beach Residence (JBR)</option><option value="0010900000d9p0rAAA">Jumeirah Golf Estate</option><option value="0010900000d9p1UAAQ">Jumeirah Golf Estate</option><option value="0010900000d9p0qAAA">Jumeirah Heights</option><option value="0010900000d9p1OAAQ">Jumeirah Island</option><option value="0010900000d9p1MAAQ">Jumeirah Lakes Towers</option><option value="0010900000d9p1KAAQ">Jumeirah Park</option><option value="0010900000d9p1RAAQ">Jumeirah Village Circle (JVC)</option><option value="0010900000d9p1NAAQ">Jumeirah Village Triangle (JVT)</option><option value="0010900000d9p1DAAQ">Knowledge Village</option><option value="0010900000d9p0mAAA">Layan Community</option><option value="0010900000d9p1VAAQ">Maeen</option><option value="0010900000d9p1IAAQ">Meadows 1, 2</option><option value="0015q000007p4HfAAI">Meydan</option><option value="0010900000d9p1eAAA">Mira</option><option value="0010900000d9p17AAA">Mirdiff</option><option value="0010900000d9p1dAAA">Motor City</option><option value="0010900000d9p0hAAA">Mudon</option><option value="0010900000d9p1ZAAQ">Palm Jumeirah</option><option value="0010900000d9p0jAAA">Remraam</option><option value="0010900000d9p0kAAA">Serena Community</option><option value="0010900000d9p0pAAA">Springs</option><option value="0010900000d9p1FAAQ">Subarbia</option><option value="0010900000d9p1lAAA">Tenora</option><option value="0010900000d9p1AAAQ">The Gardens</option><option value="0010900000d9p0oAAA">The Greens</option><option value="0010900000d9p1GAAQ">The Lakes</option><option value="0010900000d9p1CAAQ">The Views</option><option value="0010900000d9p0vAAA">Town Square</option><option value="0010900000d9p1BAAQ">Umm Al Sheif</option><option value="0010900000d9p18AAA">Umm Suqeim 1, 2, 3</option><option value="0010900000d9p1LAAQ">Victory Heights</option>                            </select>
    </div>



    


    <div class="field-block service-like">
      <h2 class="title">When would you like your service?</h2>
      <div class="content-block">
         <!-- <div class="like-service-buttons">
            <div class="likeserviceNextBtn btn-new"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="likeservicePreviousBtn btn-new"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
         </div> -->
         <div id="likeservice" class="owl-carousel owl-theme owl-loaded">

<style>
 @media screen and (max-width:700px) {
 .vscrolldatebyphp {
  width: 300px;
 }
 }
 @media screen and (min-width:700px){
 .vscrolldatebyphp {
  width: 100%;
 }
 }
 .vscrolldatebyphp{
  overflow-x: auto;
  overflow-y: hidden;
 }
</style>              


         <div class="owl-stage-outer"><div class="owl-stage vscrolldatebyphp">

<?php
for ($i=1; $i<=15; $i++)
{
   $loopt = $i * 84600;
   $dayName = date("D", time() + $loopt);
   $phpdate = date( "d-M-Y", time() + $loopt);
   $phpday = date( "d", time() + $loopt);

     echo '<div class="owl-item" style="width: auto; margin-right: 10px;">
     <div class="item"><div class="field">
         <span class="day">'.$dayName.'</span>
         <button type="button" class="num days" data-full="'.$dayName.', '.$phpdate.'" data-value="'.$dayName.'">'.$phpday.'</button>
         </div></div></div>';

}
?>   

            </div></div>
         <!--owl-carousel-->
      </div>
      <!--content-block-->
   </div>
   <!---field-block---> 
   <div class="field-block start-like">
      <h2 class="title">What time would you like us to start?</h2>
      <div class="content-block">
         <!-- <div class="start-like-buttons">
            <div class="likeusstartNextBtn btn-new"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="likeusstartPreviousBtn btn-new"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
         </div> -->
         <div id="likeusstart" class="appendTimeSlot"><div class="item"><div class="field"><button type="button" data-to="13:00" class="num time active" style="border-color: rgb(155, 155, 155);">9:00</button></div></div><div class="item"><div class="field"><button type="button" data-to="14:00" class="num time" style="border-color: rgb(155, 155, 155);">10:00</button></div></div><div class="item"><div class="field"><button type="button" data-to="15:00" class="num time" style="border-color: rgb(155, 155, 155);">11:00</button></div></div><div class="item"><div class="field"><button type="button" data-to="16:00" class="num time" style="border-color: rgb(155, 155, 155);">12:00</button></div></div><div class="item"><div class="field"><button type="button" data-to="17:00" class="num time" style="border-color: rgb(155, 155, 155);">13:00</button></div></div><div class="item"><div class="field"><button type="button" data-to="18:00" class="num time" style="border-color: rgb(155, 155, 155);">14:00</button></div></div></div>
      <!--owl-carousel-->
      <div class="appendTimeSlotError"></div>
   </div>
   <!--content-block-->
   <input type="hidden" id="professional_name" value="">
   <p class="note">Your professional will arrive between <span class="infoTime">9:00</span> - <span class="end_time">9:30</span></p>
</div>
<!---field-block---> 
</div>
<!---form-card---->

</fieldset>
<!--Date-time-ends--->


             
      <div class="btns-group">
        <a href="#" class="btns btn-prev btn-secondary fa fa-long-arrow-left"> </a>
        <a href="#" class="btns loginfirstbtn" style="width:17%; padding:10px; display:none;">Login_First</a>
        <a href="#" class="btns btn-next step3btn" style="width:17%; padding:10px;">Next</a>
      </div>
    </div>






    <!-- step 4 -->
    <div class="form-step">
        <!--payment-starts--->
        <fieldset>
          <div class="form-card type3">
             <div class="field-block payment-block">
                <h2 class="title">Pay online and confirm your booking.</h2>
                <div class="content-block">

                  <div class="col-md-12 form-group pay-with-credit">
                     <label class="container-radio">
                         <p>Pay with credit / debit card <br> 
                         <!--<span>AED 1000 insurance when you pay online</span>-->
                         </p>
                         <!-- checked="" -->
                         <input type="radio" name="payment_type" class="selectpaymenttypes" value="bycc">
                         <span class="checkmark-radio"></span>
                      </label>
                      <div class="input-group mb-2" id="vontypecc" style="display:none;">
                        <span class="input-group-text fa fa-credit-card" id="basic-addon1">  </span>
                        <input type="number" class="form-control" id="creditcardnoinpt" placeholder=" Credit Card No." aria-label="cardno" aria-describedby="basic-addon1">
                      </div>
                   </div>
                   
                   <!--add-card-details-->
                   <div class="col-md-12 form-group pay-with-cash" style="margin-top: 5px;">
                     <label class="container-radio">
                         <p>Pay with cash</p>
                         <input type="radio" name="payment_type" checked="" class="selectpaymenttypes" value="byhands">
                         <span class="checkmark-radio"></span>
                      </label>
                   </div>
                         

 
 


                         <div class="col-md-12 form-group add-voucher-block">
                            <!-- <a class="add-voucer-code" data-toggle="modal" data-target="#addvouchermodal">Add Voucher Code &gt;</a> -->
                            <!-- <p class="terms_text" style="display:none">Please note that AMC is subject to inspection of your home, and you will not be charged at this time. Click submit to express your interest, and someone from our team will be in touch with you.</p> -->
                         <div id="booking_message" class="booking_message"></div>
                         </div>
                      </div>
                      <!--content-block-->
                   </div>
                   <!--payment-block--->
                </div>
                <!--form-card-->
                 
            </fieldset>
            <!--payment-ends--->

      <div class="btns-group">
        <a href="#" class="btns btn-prev btn-secondary fa fa-long-arrow-left"> </a>
        <input type="button" value="Submit" class="btns step4btn" style="width:17%; padding:10px;" />
      </div>
    </div>
  </form>
<!-- info div start -->
  <infodiv style="padding:10px;background: white;box-shadow: 1px 1px 22px silver;">
   
             <!--content-left-block-->
             <div class="content-right-view-block" style="width:100%;">
               <div class="content">
                  <div class="field-block summary-block d-flex justify-content-between rightinfodivbar">
                        <p class="parent-head align-self-start text-dark">Booking Summary</p>
                        <p class="labeltext remove-right-content-block align-self-end"><i class="fa fa-times" aria-hidden="true"></i></p>
                     <!--field-flex-->
                  </div>
   


                  <div class="field-block city-block d-flex justify-content-between">
                 
                        <p class="parent-head align-self-start" style="color: #00adea">Service</p>
                        <p class="labeltext infoService align-self-end">Home Cleaning</p>
                   
                     <!--field-flex-->
                  </div>
                  <!--city-block-->
                  <div class="field-block service-block">
                     <h5 style="color: #00adea;">Service Details</h5>
                     <div class="type3 d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Frequency</p>
                        <p class="labeltext infoFrequency align-self-end">One-time</p>
                     </div>
                     <!---- flex-flex --> 
                     <div class="type1 durationinfoh d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Duration</p>
                        <p class="labeltext infoDuration align-self-end">4 Hours</p>
                     </div>
                     <!---- flex-flex -->
                     <div class="type1 nofprofinfohead d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Number of Professionals</p>
                        <p class="labeltext infoProfessionals align-self-end">1</p>
                     </div>
                     <!---- flex-flex -->
                     <div class="infomathead type1 d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Material</p>
                        <p class="labeltext infoMaterial align-self-end">No</p>
                     </div>
                     <!---- flex-flex --> 
                     <div class="type2 bldingtypinfoh d-flex justify-content-between" style="display: none !important;">
                        <p class="headlabel  align-self-start text-muted">Building Type</p>
                        <p class="labeltext infoBuilding align-self-end">Apartment</p>
                     </div>
                     <!---- flex-flex --> 
                     <div class="type2 bedromsinfoh no-beds d-flex justify-content-between" style="display: none !important;">
                        <p class="headlabel align-self-start text-muted">Bedrooms</p>
                        <p class="labeltext infoBedroom align-self-end"></p>
                     </div>
                     <!---- flex-flex -->
                 
                     <div class="type2 no-packages d-flex justify-content-between" style="display:none !important;">
                        <p class="headlabel align-self-start text-muted">Package Type</p>
                        <p class="labeltext infoUnits align-self-end">Silver</p>
                     </div>
                     <!---- flex-flex -->
                  </div>







                  <!--service-block-->
                  <div class="field-block date-time-block type3">
                     <h5 style="color: #00adea;">Date &amp; Time</h5>
                     <div class="d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Professional</p>
                        <p class="labeltext InfoProfessionals align-self-end">Auto assign</p>
                     </div>
                     <!---- flex-flex --> 
                     <div class="d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Date</p>
                        <p class="labeltext SelectedDate align-self-end"></p>
                     </div>
                     <!---- flex-flex -->
                     <div class="d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Start Time</p>
                        <p class="labeltext infoTime align-self-end"></p>
                     </div>
                     <!---- flex-flex -->
                  </div>
                  <!--date-time-block-->
                  <div class="field-block address-block">
                     <div class="d-flex justify-content-between">
                        <p class="parent-head align-self-start" style="color: #00adea;">Address</p>
                        <p class="labeltext infoAddress align-self-end">Dubai</p>
                     </div>
                     <!---- flex-flex -->
                  </div>
                  <!--address-block-->
                  <div class="field-block price-block">
                     <h5 style="color: #00adea;">Price Details</h5>
                     <div class="d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Price</p>
                        <p class="labeltext infoPrice align-self-end">AED 140</p>
                     </div>
   
                     <!---- flex-flex --> 
                     <div class="material-field d-flex justify-content-between" style="display:none !important;">
                        <p class="headlabel align-self-start text-muted">Material Charges</p>
                        <p class="labeltext infoMat align-self-end">AED 40</p>
                     </div>
                     
                     <!---- flex-flex --> 
                     <div class="discountDiv d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">Discount</p>
                        <p class="labeltext InfoDiscount align-self-end"></p>
                     </div>
   
                     <!---- flex-flex --> 
                     <div class="d-flex justify-content-between">
                        <p class="headlabel align-self-start text-muted">VAT</p>
                        <p class="labeltext infoVat align-self-end">AED 7.00</p>
                     </div>                  
   
                   
                     <!---- flex-flex -->
                     <div class="total-field d-flex justify-content-between card-footer" style="margin-top:-0.6rem;">
                        <p class="headlabel align-self-start text-muted">Total</p>
                        <p class="labeltext infoTotal align-self-end" style="color: #00adea;">AED 147.00</p>
                     </div>
                     <!---- flex-flex -->
                  </div>
                  <!--date-time-block-->
               </div>
               <!--content-->
            </div>
            <!--content-right-view-block-->
  </infodiv>
</div>













<div class="mbl-fix vpricardmd"><div class="content-fix">
   <div class="total enable-right-block-btn">
      <p>Total</p>
      <h5 class="infoTotal">AED 148.00 <span class="enable-right-block-btn"><img src="steperfiles/upload.png"></span></h5>
   </div>
</div></div>












<input type="hidden" id="service_name" value="Home Cleaning">
<input type="hidden" id="building_type" value="Apartment">
<input type="hidden" id="bedRooms" value="3">
<input type="hidden" id="profhours" value="4">
<input type="hidden" id="profneeds" value="1">
<input type="hidden" id="pkg" value="silver">
<input type="hidden" id="pricing_type" value="Hourly">
<input type="hidden" id="price" value="140">
<input type="hidden" id="vat" value="7.00">
<input type="hidden" id="usematerial" value="Yes">
<input type="hidden" id="materialpersent" value="">
<input type="hidden" id="materialAmount" value="">
<input type="hidden" id="discountAmount" value="0">
<input type="hidden" id="total" value="147.00">

<input type="hidden" id="payby" value="by Cash">


<input type="hidden" id="regionidval" value="dubai region">
<input type="hidden" id="getdays" value="day 7">
<input type="hidden" id="gettime" value="10">

<input type="hidden" id="picklocinpt" value="Dubai">
<input type="hidden" id="buildiginpt" value="dubai building">



























<br>
<br>
  </body>






<!-- for steperlink here -->
<script src="script.js"></script>
  <!-- java script here start  -->
  <script src="jscss/bootstrap.min.js"></script>
  <script src="jscss/jqoffline3.6.1.js"></script>
<script src="jscss/locationpicker.jquery.js"></script>

<script>

   // fecth services details 
$.post(
      "serviceajax.php",
     {servicesfromadminj:'randomtext'},
       function(respfromphpv){
         localStorage.setItem('servfromadmninfo',respfromphpv);
      });
   // end fecth services details 
   // end fecth services details 
   // end fecth services details 
   // end fecth services details 
   // end fecth services details 
   // end fecth services details 
   // end fecth services details 
   // end fecth services details 
   
   



   //  lacal cal functions
   $('.remove-right-content-block').click(function() {
   $('infodiv').hide(500);
  });

// 
$('.vpricardmd').click(function() {
   $('infodiv').slideToggle(100);
});

// check for login 
// localStorage.removeItem('userinfostore');
// localStorage.setItem('userinfostore', 1);

var getuserinfostore = localStorage.getItem('userinfostore');
if(getuserinfostore){
   $('#getonlylocbtn').show();
   $('#getregmodelbtn').hide();
   $('#dashboardbtn').show();
   $('.loginbtn').hide();

   $('.loginfirstbtn').hide();
   $('.step3btn').show();
}else{
   $('#getonlylocbtn').hide();
   $('#getregmodelbtn').show();
   $('#dashboardbtn').hide();
   $('.loginbtn').show();
   $('.loginfirstbtn').show();
   $('.step3btn').hide();
}

// end check for login 
//    end local call functions

// for login model
$('#phoneloginbtn').click(function() {
  var loginphoneval = $('#loginphoneinpt').val();
if(loginphoneval == ''){
   $('.redalert').show();
   $('.redalert').html('Plz Enter Phone Number');

}else{
   $('.redalert').hide();
   $.post(
      "userajax.php",
     {loginphonevalj:loginphoneval},
       function(respfromphp){
          var vloginjp = JSON.parse(respfromphp);
         if(vloginjp[3] == loginphoneval){
            localStorage.setItem('userinfostore',respfromphp);
            $('.redalert').hide();
            $('.sucalert').show();
            $('.sucalert').html(vloginjp[3] +' <i class="fa fa-mobile"> </i> : SuccesFully Login');
            $('#getonlylocbtn').show();
            $('#getregmodelbtn').hide();
            $('#dashboardbtn').show();
            $('.loginbtn').hide();
            $('.loginfirstbtn').hide();
            $('.step3btn').show();
         }else if(vloginjp[3] != loginphoneval){
            $('.sucalert').hide();
            $('.redalert').show();
            $('.redalert').html('Plz Correct Registerd Phone');
            // localStorage.removeItem('userinfostore');
            $('#getonlylocbtn').hide();
            $('#getregmodelbtn').show();
            $('#dashboardbtn').hide();
            $('.loginbtn').show();
         }

      });
    }
});
// end for login user model
//  get celected type payments
$('.selectpaymenttypes').change(function(){
   var chkpaytype = $(this).val();

 if(chkpaytype == 'bycc'){
   $('#payby').val('by Credit Card');
   $("#vontypecc").show();
 }else if(chkpaytype == 'byhands'){
   $("#vontypecc").hide();
   $('#payby').val('by Cash');
   
 }
    
// #creditcardnoinpt

 });
</script>



   

<script>
//  step1btn actions
  $('.step1btn').click(function() {
   var selectService  = $('.selectService.active').text();
   // localStorage.removeItem('slctdservicename');
   // localStorage.setItem('slctdservicename', selectService);
   $('#service_name').val(selectService);
   if(selectService == 'Annual Maintenance Contract'){
      $('.whenanualhide').hide();
      $('.progressline').hide();
      $('.step2btn').hide();
      $('.anual2btnsubmit').show();
     
      var getuserinfostore = localStorage.getItem('userinfostore');
      if(!getuserinfostore){
         $('#loginmodel').modal('show'); 
      }
   } 
      // $('.anual2btnsubmit').hide();
      $('.vonanualpaybtn').hide();
      $('.vonsavestep3').hide();
      $('.hideonsavestep3').show();
var vslctdsrvicstorage = localStorage.getItem('slctdservicename');

var getuserinfostore = localStorage.getItem('userinfostore');
if(getuserinfostore){
var chklocationval = $('#picklocinpt').val();
if(chklocationval == 'Dubai'){
   $('#getonlyloc').modal('show');
}
}else{
   $('#getregmodel').modal('show');
}

// var l = $('.lat').val();
// alert(l);
// var g = $('.lng').val();
// alert(g);
// 24.82475812443726
// 55.55414043389215
});
 
$('.btn-prev').click(function() {
  $('.whenanualhide').show();
      $('.progressline').show();
      $('.step2btn').show();
      $('.anual2btnsubmit').hide();
  });

// 

//  step 2 button click
// $('.step2btn').click(function() {
//    var getdesctextval = $('#fromdesctext').val();
//    $('#getdesctext').val(getdesctextval);
// });

//  end of step2 button data







$('.loginfirstbtn').click(function() {
   $('#loginmodel').modal('show');
});

//  step 3 button click

$('.step3btn').click(function() {

   var randtext1 = Math.random().toString(36).slice(2);
   var randtext2 = Math.random().toString(36).slice(2);
   localStorage.setItem('tokenid',randtext1+randtext2);

   var service_namev = $('#service_name').val();
   var building_typev = $('#building_type').val();
   var bedRoomsv = $('#bedRooms').val();
   var getdesctextv = $('#fromdesctext').val();
   var profhoursv = $('#profhours').val();
   var profneedsv = $('#profneeds').val();
   var pkgv = $('#pkg').val();
   var pricing_typev = $('#pricing_type').val();
   var pricev = $('#price').val();
   var vatv = $('#vat').val();
   var usematerialv = $('#usematerial').val();
   var materialAmountv = $('#materialAmount').val();
   var discountAmountv = $('#discountAmount').val();
   var totalv = $('#total').val();
   var regionidvalv = $('#regionidval').val();
   var getdaysv = $('#getdays').val();
   var gettimev = $('#gettime').val();

// get user details
   var getuserinfo = JSON.parse(getuserinfostore);
   var username = getuserinfo[1];
   var userphone = getuserinfo[3];
   var usergmail = getuserinfo[4];
   
   var userlat = $('.lat').val();
   var userlng = $('.lng').val();
   var userloc = $('.picklocinpt').val();

   var building_detail = $('#building_detail').val();
   var savfadresmodel = $('#savfadresmodel').val();
if(building_detail != ''){
   var useraddress = building_detail;
}else{
   var useraddress = savfadresmodel;
}


   

// set paid or not
   var checkpaid = $('#payby').val();

//  get selected services name
   // var vsrvnam = localStorage.getItem('slctdservicename');
   var vsrvnaminpt = $('#service_name').val();


   if(vsrvnaminpt == 'Home Cleaning'){
         var serviceno = 1;
      }else if(vsrvnaminpt == 'Handyman'){
         var serviceno = 7;
      }else if(vsrvnaminpt == 'Annual Maintenance Contract'){
         var  serviceno = 6;
      }else if(vsrvnaminpt == 'Deep Cleaning'){
      var serviceno = 2;
      }else if(vsrvnaminpt == 'Disinfection Service'){
      var serviceno = 3;
      }else if(vsrvnaminpt == 'AC Service'){
      var serviceno = 4;
      }else if(vsrvnaminpt == 'AC Duct Cleaning'){
      var serviceno = 5;
      }else if(vsrvnaminpt == 'Pest Control'){
      var serviceno = 8;
      }


      $.post(
      "serviceajax.php",
     {tokenidj:randtext1+randtext2,usernamej:username,userphonej:userphone,usergmailj:usergmail,userlatj:userlat,userlngj:userlng,userlocj:userloc,useraddressj:useraddress,servicenoj:serviceno,servicenamej:service_namev,freqj:'one time',durationj:profhoursv,profneedsj:profneedsv,usematerialj:usematerialv,materialAmountj:materialAmountv,building_typej:building_typev,getdesctextj:getdesctextv,regionidvalj:regionidvalv,getdaysj:getdaysv,gettimej:gettimev,pricing_typej:pricing_typev,pricej:pricev,vatj:vatv,discountAmountj:discountAmountv,totalvj:totalv,checkpaidj:checkpaid,bedRoomsj:bedRoomsv,pkgvj:pkgv},
       function(respfromphp){
         if(respfromphp == 1){
            $('.alertstep3savedred').hide();
            // $('.alertstep3savedsuc').show();
            // $('.alertstep3savedsuc').html(' Save into Login Continue On Payments');
            // $('.alertstep3savedsuc').fadeOut(5000);
         }else{
            $('.alertstep3savedsuc').hide();
            $('.alertstep3savedred').show();
            $('.alertstep3savedred').html(' try again');
            $('.alertstep3savedred').fadeOut(5000);
         }
      });

});

//  end of step3 button data


//  anual2btnsubmit button click
$('.anual2btnsubmit').click(function() {

var getuserinfostore = localStorage.getItem('userinfostore');
// if(!getuserinfostore){
// //   popup for login

// }else{
   var randtext1 = Math.random().toString(36).slice(2);
   var randtext2 = Math.random().toString(36).slice(2);
   localStorage.setItem('tokenid',randtext1+randtext2);

   var service_namev = $('#service_name').val();
   var building_typev = $('#building_type').val();
   var bedRoomsv = $('#bedRooms').val();
   var getdesctextv = $('#fromdesctext').val();
   var profhoursv = $('#profhours').val();
   var profneedsv = $('#profneeds').val();
   var pkgv = $('#pkg').val();
   var pricing_typev = $('#pricing_type').val();
   var pricev = $('#price').val();
   var vatv = $('#vat').val();
   var usematerialv = $('#usematerial').val();
   var materialAmountv = $('#materialAmount').val();
   var discountAmountv = $('#discountAmount').val();
   var totalv = $('#total').val();
   var regionidvalv = $('#regionidval').val();
   var getdaysv = $('#getdays').val();
   var gettimev = $('#gettime').val();

// get user details
   var getuserinfo = JSON.parse(getuserinfostore);
   var username = getuserinfo[1];
   var userphone = getuserinfo[3];
   var usergmail = getuserinfo[4];

   var userlat = $('.lat').val();
   var userlng = $('.lng').val();
   var userloc = $('.picklocinpt').val();

   var building_detail = $('#building_detail').val();
   var savfadresmodel = $('#savfadresmodel').val();
if(building_detail != ''){
   var useraddress = building_detail;
}else{
   var useraddress = savfadresmodel;
}


// set paid or not
   var checkpaid = $('#payby').val();

//  get selected services name
   // var vsrvnam = localStorage.getItem('slctdservicename');
   var vsrvnaminpt = $('#service_name').val();


   if(vsrvnaminpt == 'Home Cleaning'){
         var serviceno = 1;
      }else if(vsrvnaminpt == 'Handyman'){
         var serviceno = 7;
      }else if(vsrvnaminpt == 'Annual Maintenance Contract'){
         var  serviceno = 6;
      }else if(vsrvnaminpt == 'Deep Cleaning'){
      var serviceno = 2;
      }else if(vsrvnaminpt == 'Disinfection Service'){
      var serviceno = 3;
      }else if(vsrvnaminpt == 'AC Service'){
      var serviceno = 4;
      }else if(vsrvnaminpt == 'AC Duct Cleaning'){
      var serviceno = 5;
      }else if(vsrvnaminpt == 'Pest Control'){
      var serviceno = 8;
      }


      $.post(
      "serviceajax.php",
     {tokenidj:randtext1+randtext2,usernamej:username,userphonej:userphone,usergmailj:usergmail,userlatj:userlat,userlngj:userlng,userlocj:userloc,useraddressj:useraddress,servicenoj:serviceno,servicenamej:service_namev,freqj:'one time',durationj:profhoursv,profneedsj:profneedsv,usematerialj:usematerialv,materialAmountj:materialAmountv,building_typej:building_typev,getdesctextj:getdesctextv,regionidvalj:regionidvalv,getdaysj:getdaysv,gettimej:gettimev,pricing_typej:pricing_typev,pricej:pricev,vatj:vatv,discountAmountj:discountAmountv,totalvj:totalv,checkpaidj:checkpaid,bedRoomsj:bedRoomsv,pkgvj:pkgv},
       function(respfromphp){
         if(respfromphp == 1){
            $('.alertstep3savedred').hide();
            // $('.alertstep3savedsuc').show();
            // $('.alertstep3savedsuc').html(' Save into Login Continue On Payments');
            // $('.alertstep3savedsuc').fadeOut(5000);

            $('.anual2btnsubmit').hide();
            $('.vonanualpaybtn').show();
            $('.vonsavestep3').show();
            $('.hideonsavestep3').hide();
            
         }else{
            $('.alertstep3savedsuc').hide();
            $('.alertstep3savedred').show();
            $('.alertstep3savedred').html(' try again');
            $('.alertstep3savedred').fadeOut(5000);

            $('.anual2btnsubmit').show();
            $('.vonanualpaybtn').hide();
            $('.vonsavestep3').hide();
            $('.hideonsavestep3').show();
         }
      });

   
});

//  end of anual2btnsubmit button data







$('.vonanualpaybtn').click(function(){
   var gettokenid= localStorage.getItem('tokenid');
   var paybyinpt = $('#payby').val();
$.post(
      "serviceajax.php",
     {tokenidj:gettokenid,paybyinptj:paybyinpt},
       function(respfromphp){
         if(respfromphp == 1){
            $('.alertstep3savedred').hide();
            $('.alertstep3savedsuc').show();
            $('.alertstep3savedsuc').html(' Thanks For Booking A Services');
            $('.alertstep3savedsuc').fadeOut(5000);

         }else{
            $('.alertstep3savedsuc').hide();
            $('.alertstep3savedred').show();
            $('.alertstep3savedred').html(' try again');
            $('.alertstep3savedred').fadeOut(5000);

         }

     }
  );
});




$('.step4btn').click(function(){
   var gettokenid= localStorage.getItem('tokenid');
   var paybyinpt = $('#payby').val();
$.post(
      "serviceajax.php",
     {tokenidj:gettokenid,paybyinptj:paybyinpt},
       function(respfromphp){
         if(respfromphp == 1){
            $('.alertstep3savedred').hide();
            $('.alertstep3savedsuc').show();
            $('.alertstep3savedsuc').html(' Thanks For Booking A Services');
            $('.alertstep3savedsuc').fadeOut(5000);

         }else{
            $('.alertstep3savedsuc').hide();
            $('.alertstep3savedred').show();
            $('.alertstep3savedred').html(' try again');
            $('.alertstep3savedred').fadeOut(5000);

         }

     }
  );
});













// 
  $('#bedroom_apt').change(function(){
  var bedRooms = $(this).val();
  $('.infoBedroom').text(bedRooms);
  $('#bedRooms').val(bedRooms);
})

$('#bedroom_villa').change(function(){
  var bedRooms = $(this).val();
  $('.infoBedroom').text(bedRooms);
    $('#bedRooms').val(bedRooms);
})

$('#bedroom_townhouse').change(function(){
  var bedRooms = $(this).val();
  $('.infoBedroom').text(bedRooms);
   $('#bedRooms').val(bedRooms); 
})

$('#packages').change(function(){
  var packages = $(this).val();
  $('.infoUnits').text(packages);
   $('#pkg').val(packages);
});

// 


$('input[name="buildingType"]').change(function(){
   // var buildingType = $('input[name="buildingType"]:checked').val();
   var buildingType = $(this).val();
   $('#building_type').val(buildingType);
   if(buildingType == 'Apartment'){
          $('.apt').show();
          $('.villa').hide();
          $('.townhouse').hide();
          var bedRooms = $('#bedroom_apt').val();
      }
   if(buildingType == 'Villa'){
       $('.apt').hide();
       $('.villa').show();
       $('.townhouse').hide();
       var bedRooms = $('#bedroom_villa').val();
   }
   
   if(buildingType == 'Townhouse'){
       $('.apt').hide();
       $('.villa').hide();
       $('.townhouse').show();
       var bedRooms = $('#bedroom_townhouse').val();
   }
   
      
      $('.infoBuilding').text(buildingType);      
      $('.infoBedroom').text(bedRooms);
});






$('.required_cleaning').click(function() {
   $('.required_cleaning').removeClass('active');
   $(this).addClass('active');
 
});













// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 
// start step 3 proffesional hours and needs only 

$('.professionalsHours').click(function() {
         $('.professionalsHours').removeClass('active');
         $(this).addClass('active');
         var professional_hours = $('.professionalsHours.active').text();
         $('.infoDuration').text(professional_hours+' Hours');   
         $('#profhours').val(professional_hours);
         $('#pricing_type').val('hours');
      });




$('.professionalsNeed').click(function() {
         $('.professionalsNeed').removeClass('active');
         $(this).addClass('active');
         var professionalsNeed  = $('.professionalsNeed.active').text();
         $('.infoProfessionals').text(professionalsNeed);
         $('.select-professional').hide();
         $('#profneeds').val(professionalsNeed);
         // if(professionalsNeed > 1){
         //    $('.select-professional').hide();
         // }else{
         //    $('.select-professional').hide();
         // }

      });



   // start for days select
   $('.days').click(function() {
    
    $('.days').removeClass('active');
    $(this).addClass('active');
    $(this).parent().find('.owl-item').addClass('active');
    var selectDaysItem = $('#likeservice .days').index($('.days.active'));

   var date = $(this).attr('data-full');
   $('.SelectedDate').html(date);
   $("#getdays").val(date);
});
   // enf for days select code

   $('.time').click(function() {
         $('.time').removeClass('active');
         $(this).addClass('active');

         var time  = $('.time.active').text();
         $('.infoTime').text(time);

         var exploded_time = time.split(':');
         $('.end_time').html(exploded_time[0]+':30');
         $('#gettime').val(exploded_time);
      });

      $('#regionId').change(function() {
          var regionidvar = $(this).val();
          $('#regionidval').val(regionidvar);

          $('.service-like').show();
          $('.start-like').show();
          
         var date = $('.days.active').attr('data-full');
         $('#materialAmount').val(material_price)
         $('.SelectedDate').html(date);
         
         
});


// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 
// end of step 3 proffesional hours and needs only 

      
// 
  $('input[name="selected_Address"]').change(function(){
         var address = $(this).val();
         $('.infoAddress').html(address);
         $('#addressName').html(address);
         $('#customerProfile').modal('hide');
      })

// 

</script>

<script>
   // on selected services tow types
   // 1.
   $('.selectService').click(function() {
      $('.selectService').removeClass('active');
      $(this).addClass('active');
      var bedRooms = $("#bedRooms").val();	
      $('.infoBedroom').text(bedRooms);
   
      var selectService  = $('.selectService.active').text();

      if(selectService == 'Home Cleaning' || selectService == 'Handyman'){
         $('.type1').show();
         $('.type2').hide();
         $('.type3').show();
         $('.nofprofinfohead').removeClass('d-none');
         $('.bldingtypinfoh').removeClass('d-none');
         $('.bedromsinfoh').addClass('d-none');
         $('.durationinfoh').removeClass('d-none');
         $('.materials').show();
         $('.infomathead').removeClass('d-none');
         $('.terms_text').hide();
         $('.no-packages').hide();
         $('.no-packages').addClass('d-none');
         $('.town_house').hide();
       } else if (selectService == 'Annual Maintenance Contract'){
         $('.type1').hide();
         $('.type2').show();
         $('.type3').hide();
         $('.nofprofinfohead').addClass('d-none');
         $('.bldingtypinfoh').removeClass('d-none');
         $('.bedromsinfoh').removeClass('d-none');
         $('.durationinfoh').addClass('d-none');
         $('.no-beds').show();
         $('.no-packages').show();
         $('.no-packages').removeClass('d-none');
         var bedRooms = $('#bedroom_townhouse').val();
         $('.infoBedroom').text(bedRooms);
         $('.terms_text').show();
         $('.materials').hide();
         $('.infomathead').addClass('d-none');
         $('.town_house').show();
      } else if(selectService == 'Deep Cleaning' || selectService == 'Disinfection Service' || selectService == 'AC Service' || selectService == 'AC Duct Cleaning' || selectService == 'Pest Control') {
         $('.type1').hide();
         $('.type2').show();
         $('.type3').show();
         $('.nofprofinfohead').addClass('d-none');
         $('.bldingtypinfoh').removeClass('d-none');
         $('.bedromsinfoh').removeClass('d-none');
         $('.durationinfoh').addClass('d-none');
         $('.no-beds').show();
         $('.materials').hide();
         $('.infomathead').addClass('d-none');
         $('.terms_text').hide();
         $('.no-packages').hide();
         $('.no-packages').addClass('d-none');
         $("input[name='buildingType'][value='Apartment']").prop('checked', true);
         var buildingType = $('input[name="buildingType"]:checked').val();
         $('.infoBuilding').text(buildingType);
         $('.apt').show();
         $('.villa').hide();
         $('.townhouse').hide();
         $('.town_house').hide();
         var bedRooms = $('#bedroom_apt').val();
         $('.infoBedroom').text(bedRooms);
      }
   
   
      $('.infoService').text(selectService);
      $('#serviceType').val(selectService);
      $('#sel_ser').html(selectService);
   

      var jpsrvinfo = localStorage.getItem('servfromadmninfo');
      var vservinfostore = JSON.parse(jpsrvinfo);
      
      if(selectService == 'Home Cleaning'){
         $('#price').val(vservinfostore[0].price);
         $('#materialpersent').val(vservinfostore[0].materialprice);
         $('#discountAmount').val(vservinfostore[0].discount);

         $('.infoPrice').html(vservinfostore[0].price);
         $('.infoMat').html(vservinfostore[0].materialprice);
         $('.InfoDiscount').html(vservinfostore[0].discount);      

      }else if(selectService == 'Deep Cleaning'){
         $('#price').val(vservinfostore[1].price);
         $('#materialpersent').val(vservinfostore[1].materialprice);
         $('#discountAmount').val(vservinfostore[1].discount);

         $('.infoPrice').html(vservinfostore[1].price);
         $('.infoMat').html(vservinfostore[1].materialprice);
         $('.InfoDiscount').html(vservinfostore[1].discount); 
      }else if(selectService == 'Disinfection Service'){
         $('#price').val(vservinfostore[2].price);
         $('#materialpersent').val(vservinfostore[2].materialprice);
         $('#discountAmount').val(vservinfostore[2].discount);

         $('.infoPrice').html(vservinfostore[2].price);
         $('.infoMat').html(vservinfostore[2].materialprice);
         $('.InfoDiscount').html(vservinfostore[2].discount); 
      }else if(selectService == 'AC Service'){
         $('#price').val(vservinfostore[3].price);
         $('#materialpersent').val(vservinfostore[3].materialprice);
         $('#discountAmount').val(vservinfostore[3].discount);

         $('.infoPrice').html(vservinfostore[3].price);
         $('.infoMat').html(vservinfostore[3].materialprice);
         $('.InfoDiscount').html(vservinfostore[3].discount); 
      }else if(selectService == 'AC Duct Cleaning'){
         $('#price').val(vservinfostore[4].price);
         $('#materialpersent').val(vservinfostore[4].materialprice);
         $('#discountAmount').val(vservinfostore[4].discount);

         $('.infoPrice').html(vservinfostore[4].price);
         $('.infoMat').html(vservinfostore[4].materialprice);
         $('.InfoDiscount').html(vservinfostore[4].discount); 
      }else if(selectService == 'Annual Maintenance Contract'){
         $('#price').val(vservinfostore[5].price);
         $('#materialpersent').val(vservinfostore[5].materialprice);
         $('#discountAmount').val(vservinfostore[5].discount);

         $('.infoPrice').html(vservinfostore[5].price);
         $('.infoMat').html(vservinfostore[5].materialprice);
         $('.InfoDiscount').html(vservinfostore[5].discount); 
      }else if(selectService == 'Handyman'){
         $('#price').val(vservinfostore[6].price);
         $('#materialpersent').val(vservinfostore[6].materialprice);
         $('#discountAmount').val(vservinfostore[6].discount);

         $('.infoPrice').html(vservinfostore[6].price);
         $('.infoMat').html(vservinfostore[6].materialprice);
         $('.InfoDiscount').html(vservinfostore[6].discount); 
      }else if(selectService == 'Pest Control'){
         $('#price').val(vservinfostore[7].price);
         $('#materialpersent').val(vservinfostore[7].materialprice);
         $('#discountAmount').val(vservinfostore[7].discount);

         $('.infoPrice').html(vservinfostore[7].price);
         $('.infoMat').html(vservinfostore[7].materialprice);
         $('.InfoDiscount').html(vservinfostore[7].discount); 
      }
   

   var checkdiscountnone = $('#discountAmount').val();        
   if(checkdiscountnone==0){
      $('.discountDiv').addClass('d-none');
   }

buildvatprice();


   });


   // // 2.
   var sel_ser = 'Home Cleaning';
   
           if( sel_ser !=''){
           var selectService  = $('.selectService.active').text();
           $('.selectService').removeClass('active');
           $('.selectService:contains('+sel_ser+')').addClass('active');
           var bedRooms = $("#bedRooms").val();
           $('.infoBedroom').text(bedRooms);
            
            
      if(sel_ser == 'Home Cleaning' || sel_ser == 'Handyman'){
         $('.type1').show();
         $('.type2').hide();
         $('.type3').show();
         $('.nofprofinfohead').removeClass('d-none');
         $('.bldingtypinfoh').removeClass('d-none');
         $('.bedromsinfoh').addClass('d-none');
         $('.durationinfoh').removeClass('d-none');
         $('.materials').show();
         $('.infomathead').removeClass('d-none');
         $('.terms_text').hide();
         $('.no-packages').hide();
         $('.no-packages').addClass('d-none');
         $('.town_house').hide();
       } else if (sel_ser == 'Annual Maintenance Contract'){
         $('.type1').hide();
         $('.type2').show();
         $('.type3').hide();
         $('.nofprofinfohead').addClass('d-none');
         $('.bldingtypinfoh').removeClass('d-none');
         $('.bedromsinfoh').removeClass('d-none');
         $('.durationinfoh').addClass('d-none');
         $('.no-beds').show();
         $('.no-packages').show();
         $('.no-packages').removeClass('d-none');
         var bedRooms = $('#bedroom_townhouse').val();
         $('.infoBedroom').text(bedRooms);
         $('.terms_text').show();
         $('.materials').hide();
         $('.infomathead').addClass('d-none');
         $('.town_house').show();
      } else if(sel_ser == 'Deep Cleaning' || sel_ser == 'Disinfection Service' || sel_ser == 'AC Service' || sel_ser == 'AC Duct Cleaning' || sel_ser == 'Pest Control') {
         $('.type1').hide();
         $('.type2').show();
         $('.type3').show();
         $('.nofprofinfohead').addClass('d-none');
         $('.bldingtypinfoh').removeClass('d-none');
         $('.bedromsinfoh').removeClass('d-none');
         $('.durationinfoh').addClass('d-none');
         $('.no-beds').show();
         $('.materials').hide();
         $('.infomathead').addClass('d-none');
         $('.terms_text').hide();
         $('.no-packages').hide();
         $('.no-packages').addClass('d-none');
         $("input[name='buildingType'][value='Apartment']").prop('checked', true);
         var buildingType = $('input[name="buildingType"]:checked').val();
         $('.infoBuilding').text(buildingType);
         $('.apt').show();
         $('.villa').hide();
         $('.townhouse').hide();
         $('.town_house').hide();
         var bedRooms = $('#bedroom_apt').val();
         $('.infoBedroom').text(bedRooms);
      }
  
   
            $('.infoService').text(sel_ser);
            $('#serviceType').val(sel_ser);
            $('#sel_ser').html(sel_ser);

         var jpsrvinfo = localStorage.getItem('servfromadmninfo');
         var vservinfostore = JSON.parse(jpsrvinfo);
      
      if(sel_ser == 'Home Cleaning'){
         $('#price').val(vservinfostore[0].price);
         $('#materialpersent').val(vservinfostore[0].materialprice);
         $('#discountAmount').val(vservinfostore[0].discount);

         $('.infoPrice').html(vservinfostore[0].price);
         $('.infoMat').html(vservinfostore[0].materialprice);
         $('.InfoDiscount').html(vservinfostore[0].discount);      

      }
}
   var checkdiscountnone = $('#discountAmount').val();        
   if(checkdiscountnone==0){
      $('.discountDiv').addClass('d-none');
   }
buildvatprice();
// 
function buildvatprice(){
   var professional_hours = $(".professionalsHours.active").text();
      var professional_needs = $(".professionalsNeed.active").text();
      var material_price = $('#materialpersent').val() * professional_hours * professional_needs;

      var price = $('#price').val();
      var new_price = parseInt(price) + parseInt(material_price);
      var vat = parseInt(new_price) * ( 5/100 );
      vat = parseFloat(vat).toFixed( 2 );
      $('.infoVat').html('AED '+vat);
      $('#vat').val(vat);

      var new_total = parseFloat(price) + parseFloat(vat);

      var getdiscountinpt = $('#discountAmount').val();
      var withdiscount = new_total/100 * getdiscountinpt;
      var finaldiscountval = parseInt(new_total) - parseInt(withdiscount);

      $('.InfoDiscount').html(getdiscountinpt +'%');
      $('#total').val(finaldiscountval);
      $('.infoTotal').html('AED '+finaldiscountval);
}

   </script>

<script>

// var jpsrvinfo = localStorage.getItem('servfromadmninfo');
//          var vservinfostore = JSON.parse(jpsrvinfo);
// 
   $('.cleaningMaterial').click(function() {
   $('.cleaningMaterial').removeClass('active');
   $(this).addClass('active');

   var cleaningMaterial  = $('.cleaningMaterial.active').text();
   $('.infoMaterial').text(cleaningMaterial);
   $('#usematerial').val(cleaningMaterial);
   
   if(cleaningMaterial == 'Yes'){
      $('.material-field').show();
      var professional_hours = $(".professionalsHours.active").text();
      var professional_needs = $(".professionalsNeed.active").text();
      var material_price = $('#materialpersent').val() * professional_hours * professional_needs;
      $('#materialAmount').val(material_price);
      $('.infoMat').html('AED '+material_price);
      $('.infoMat').show();

      // var getdiscinpt = $('#discountAmount').val();
      // $('.InfoDiscount').html(getdiscinpt +'%');

      var price = $('#price').val();
      var new_price = parseInt(price) + parseInt(material_price);
      var vat = parseInt(new_price) * ( 5/100 );
      vat = parseFloat(vat).toFixed( 2 );
      $('.infoVat').html('AED '+vat);
      $('#vat').val(vat);

      var new_total = parseInt(price) + parseInt(vat) + parseInt(material_price);

      var getdiscountinpt = $('#discountAmount').val();
      var withdiscount = new_total/100 * getdiscountinpt;
      var finaldiscountval = parseInt(new_total) - parseInt(withdiscount);

      $('.InfoDiscount').html(getdiscountinpt +'%');
      $('#total').val(finaldiscountval);
      $('.infoTotal').html('AED '+finaldiscountval);
   }else{
      $('.material-field').hide();
      $('.infoMat').html('AED '+ 0);
      $('.infoMat').hide();

      var materialAmount = $('#materialAmount').val();     
      var total = $('#total').val();
      var totaln =  parseInt(total) - parseInt(materialAmount);

      
      var getdiscountinpt = $('#discountAmount').val();
      var withdiscount = totaln/100 * getdiscountinpt;
      var finaldiscountval = parseInt(totaln) - parseInt(withdiscount);

      $('.InfoDiscount').html(getdiscountinpt +'%');
      $('#total').val(finaldiscountval);
      $('.infoTotal').html('AED '+finaldiscountval);

   }

});


$('input[name="service_name"]').click(function() {
   $('input[name="service_name"]').prop('checked',false);
   $(this).prop('checked',true);
});

$('#selectprofessional .item').click(function() {
   $('.item').removeClass('active');
   $(this).addClass('active-people');
});
$('#likeservice .item').click(function() {
   $('#likeservice .owl-item').removeClass('active');
   $(this).parent().addClass('active');
});

</script>
<script>
   // start location picker from only logins
   
   $('.savlocbtnmodel').click(function() {
      var savfadresmodelv  = $("#savfadresmodel").val();
      $('#buildiginpt').val(savfadresmodelv);
      var savpickonlymapv  = $(".picklocinpt").val();
      $('.infoAddress').text(savpickonlymapv);
      $('#picklocinpt').val(savpickonlymapv);
      
   });

   // end location picker from only logins
</script>
<script>
  //  for sign up form
  
$('.CreateCustomer').click(function(){
var lat                = $(".lat").val();
var lng                = $(".lng").val();
var building_detail    = $("#building_detail").val();
var pac_input          = $(".picklocinpt").val();
var gender             = $("#gender").val();
var first_name         = $("#first_name").val();
var last_name          = $("#last_name").val();
var phone_no           = $("#phone_no").val();
var email              = $("#email").val();
var company            = $("#company").val();
var Emailcheck         = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
$('.infoAddress').text(pac_input);
$('#picklocinpt').val(pac_input);
$('#buildiginpt').val(building_detail);

if(building_detail == ''){
   $('#signup_success').html('<div class="alert alert-danger">Please Enter Building Detail.</div>');
   return false;
}
if(pac_input == ''){
   $('#signup_success').html('<div class="alert alert-danger">Please enter Address Detail.</div>');
   return false;
}
if(first_name == ''){
   $('#signup_success').html('<div class="alert alert-danger">Please enter first name.</div>');
   return false;
}
if(last_name == ''){
   $('#signup_success').html('<div class="alert alert-danger">Please enter last name.</div>');
   return false;
}
if(phone_no == ''){
   $('#signup_success').html('<div class="alert alert-danger">Please enter Phone No.</div>');
   return false;
}
if(email == ''){
   $('#signup_success').html('<div class="alert alert-danger">Please enter email.</div>');
   return false;
}
if(Emailcheck.test(email)){}else{
   $('#signup_success').html('<div class="alert alert-danger">Please enter a valid email.</div>');
   return false; 
}
$('#signup_success').html('');

$.post(
      "userajax.php",
     {latjs:lat,lngjs:lng,building_detailjs:building_detail,picloc_inputjs:pac_input,genderjs:gender,first_namejs:first_name,last_namejs:last_name,phone_nojs:phone_no,emailjs:email},
       function(respfromphp){
      if(respfromphp == 0){
         $('#signup_success').html('<div class="alert alert-danger"> Already Exist Try Other Phone Number .</div>');
      }else{
         var vregjp = JSON.parse(respfromphp);
               if(vregjp[3] == phone_no){
                  localStorage.setItem('userinfostore',respfromphp);
                  $('.sucalertofreg').show();
                  $('.sucalertofreg').html(vregjp[3] +' <i class="fa fa-mobile"> </i> : SuccesFully Registerd');
                  $('#getonlylocbtn').show();
                  $('#getregmodelbtn').hide();
                  $('#dashboardbtn').show();
                  $('.loginbtn').hide();
                  $('.loginfirstbtn').hide();
                  $('.step3btn').show();
               }else if(vregjp[3] != phone_no){
                  $('.sucalertofreg').hide();
                  $('#signup_success').html('<div class="alert alert-danger">Some Thing Went Wrong.</div>');
                  $('#getonlylocbtn').hide();
                  $('#getregmodelbtn').show();
                  $('#dashboardbtn').hide();
                  $('.loginbtn').show();
               }
       }
    });
});
// end get reg form data

</script>

<script> 
    $('.mappicker').locationpicker({
enableAutocomplete: true,
    enableReverseGeocode: true,
  radius: 200,
  inputBinding: {
    latitudeInput: $('.lat'),
    longitudeInput: $('.lng'),
    radiusInput: $('#us2-radius'),
    locationNameInput: $('.picklocinpt')
 
  },
  onchanged: function (currentLocation, radius, isMarkerDropped) {
        var addressComponents = $(this).locationpicker('map').location.addressComponents;
        // alert(currentLocation);
    // console.log(currentLocation);  //latlon  
    updateControls(addressComponents); //Data
    }
});

function updateControls(addressComponents) {
  console.log(addressComponents);
  //  alert(addressComponents);
}
</script>
</html>
