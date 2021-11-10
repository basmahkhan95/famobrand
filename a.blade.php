<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Fourth & Goal - Registration</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/calendars/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/calendars/fullcalendar.min.css">
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        span.error {
            color: red;
        }

        #mylist::first-letter {
            font-weight: bold;
            color: red;
            text-transform: uppercase;
        }
        .container{
            border: 2px solid #6610f2;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0,0,0,0.5);
        }
        #map{
            width:100%;
            height: 400px;
        }
        .h2{
            color:#6f42c1;
        }
        #submit.pri_btn{
            background-color: #6f42c1;
        }
        .selcls {
            padding: 9px;
            border: solid 1px #517B97;
            outline: 0;
            background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #CAD9E3), to(#FFFFFF));
            background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px);
            box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
            -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
            -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
        }
    </style>
    <!-- END Custom CSS-->
</head>

<body data-url="<?=base_url()?>" class="vertical-layout vertical-menu 2-columns menu-expanded" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<!--register page start here-->

<section class="register new-register">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-12 offset-md-1">
                <div class="register-top">
                    <div class="heading">
                        <div class="row">
                            <div class="col-12">
                                <h1>register as</h1>
                            </div>
                        </div>
                    </div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-user-tab" data-toggle="tab" href="#nav-user" role="tab" aria-controls="nav-user" aria-selected="true">Investor</a> <a class="nav-item nav-link" id="nav-broker-tab" data-toggle="tab" href="#nav-broker" role="tab" aria-controls="nav-broker" aria-selected="false">broker</a><!--<a class="nav-item nav-link" id="nav-whole-tab" data-toggle="tab" href="#nav-whole" role="tab" aria-controls="nav-whole" aria-selected="false">whole seller</a> <a class="nav-item nav-link" id="nav-investor-tab" data-toggle="tab" href="#nav-investor" role="tab" aria-controls="nav-investor" aria-selected="false">investor</a>--> </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                            <div id='message'></div>
                            <div class="register-main">
                                <?php echo form_open_multipart(current_full_url(),['id'=>'register']);?>
                                <a href="<?=base_url('/')?>" class="home-link"><img src="images/logo.png" class="img-full" alt="logo"></a>
                                <div class="form-main">

                                    <!--fields start here-->

                                    <div class="fields">
                                        <div class="row">
                                            <div class="col-md-12"> <i class="fa fa-user"></i> <i class="fa fa-user"></i>
                                                <input type="text" name="username" onchange="namevalid(this)" value="<?php echo ((isset($user))?(($_POST)?set_value('username'):$user['name']):(($_POST)?set_value('name'):''));?>" placeholder="First Name " pattern="[A-Za-z]" class="form-control name" id="username">
                                                <span class="error"></span>
                                                <input hidden type="text"  name="usertype" value="<?php echo USER_CUSTOMER;?>"  class="form-control" id="usertype">
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-user"></i> <i class="fa fa-user"></i>
                                                <input type="text" onchange="namevalid(this)" name="lastname" value="<?php echo ((isset($user))?(($_POST)?set_value('lastname'):$user['lastname']):(($_POST)?set_value('lastname'):''));?>" placeholder="Last Name " pattern="[A-Za-z]" class="form-control name" id="lastname">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-envelope"></i> <i class="fa fa-envelope"></i>
                                                <input type="email" name="email" onchange="validatetext(this)" value="<?php echo ((isset($user))?(($_POST)?set_value('email'):$user['email']):(($_POST)?set_value('email'):''));?>" placeholder="Email " class="form-control email" id="email">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-phone"></i>
                                                <input type="text" name="phone_mobile" value="" onchange="validphone(this)" placeholder="Phone" class="form-control k-input-mask-phone-us" id="phone">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-key"></i> <i class="fa fa-key"></i>
                                                <input type="password" onchange="validatePassword(this)" name="password" value="" placeholder="<?php echo 'Password ';?>" class="form-control" id="password">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-key"></i> <i class="fa fa-key"></i>
                                                <input type="password" name="confirm_password" value="" placeholder="<?php echo 'Confirm Password ';?>" class="form-control" id="confirm_password">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-address-book"></i> <i class="fa fa-address-book"></i>
                                                <input  class="form-control address" placeholder="Address" name="address" autocomplete="off" type="search" id="location" onchange="doGeocode('location')" onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">
                                                <input hidden id="options" value="others">
                                                <span class="error"></span>
                                                <p style="color:red;" class="addresserror"></p>
                                            </div>

                                            <div class="col-md-12">
                                                <input type="text" hidden class="form-control address" placeholder="House Number" name="street_number" id="street_number"  readonly onFocus="geolocate()" value="">
                                                <span class="error"></span>
                                            </div>

                                            <div class="col-md-12">
                                                <input type="text" hidden class="form-control address" readonly placeholder="Street Address" name="route" id="route"  onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">
                                                <span class="error"></span>
                                            </div>



                                            <div class="col-md-12">
                                                <input type="text" class="form-control address" placeholder="State" readonly name="administrative_area_level_1" id="administrative_area_level_1"  onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">
                                                <span class="error"></span>


                                            </div>
                                            <div class="col-md-12">
                                                <input name="locality"  readonly id="locality" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('locality'):$user['city']):(($_POST)?set_value('locality'):''));?>" class="form-control name" pattern="[A-Za-z]" placeholder="City">
                                                <span class="error"></span>
                                            </div>

                                            <div class="col-md-12">


                                                <input name="country" hidden readonly id="country" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('country'):$user['country']):(($_POST)?set_value('country'):''));?>" class="form-control" readonly placeholder="Country">
                                                <span class="error"></span>
                                            </div>


                                            <div class="col-md-12">
                                                <input type="text" class="form-control address" hidden readonly placeholder="Zipcode" name="postal_code" id="postal_code"  onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">
                                                <span class="error"></span>
                                            </div>
                                            <div class="card mt-4 mb-2" hidden id="formatted-address"></div>
                                            <div class="card my-2" hidden id="geometry"></div>
                                            <div id="map"></div>
                                            <div id="editfields" hidden><div class="col-md-12">
                                                    <input name="unit_number"  readonly id="unit_number" type="text" value="" class="form-control"  placeholder="Does this place has a unit number?">
                                                </div>
                                                <button class="form-control" type="button" id='editbutton'  onclick="$('#location').attr('readonly',false); $('#editbutton').attr('hidden',true);" >Edit address</button>
                                            </div>
                                            <div class="card my-2" hidden id="address-components"></div>
                                        </div>
                                        <button type="button" onclick="validateuser()" class="form-control">Register</button>
                                    </div>
                                    <div class="new-user">
                                        <p>Already User</p>
                                        <a href="<?=base_url('login.html')?>" class="login form-control">Login</a>

                                        <a href="<?=base_url('/')?>" class="back-to-home"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Home</a> </div>

                                    <!--fields end here-->

                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-broker" role="tabpanel" aria-labelledby="nav-broker-tab">
                            <div class="register-main">
                                <?php echo form_open_multipart(current_full_url(),['id'=>'registerbroker']);?>
                                <a href="<?=base_url('/')?>" class="home-link"><img src="images/logo.png" class="img-full" alt="logo"></a>
                                <div class="form-main">

                                    <!--fields start here-->

                                    <div class="fields">
                                        <div class="row">
                                            <div class="col-md-12"> <i class="fa fa-user"></i> <i class="fa fa-user"></i>
                                                <input type="text" onchange="namevalid(this)" name="username" value="<?php echo ((isset($user))?(($_POST)?set_value('username'):$user['name']):(($_POST)?set_value('name'):''));?>" placeholder="First Name " pattern="[A-Za-z]" class="form-control name" id="username2">
                                                <span class='error'></span>
                                                <input hidden type="text" name="usertype" value="<?php echo USER_BROKER;?>"  class="form-control" id="usertype">

                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-user"></i> <i class="fa fa-user"></i>
                                                <input type="text" onchange="namevalid(this)" name="lastname" pattern="[A-Za-z]" value="<?php echo ((isset($user))?(($_POST)?set_value('lastname'):$user['lastname']):(($_POST)?set_value('lastname'):''));?>" placeholder="Last Name " class="form-control name" id="lastname2">
                                                <span class='error'></span>
                                            </div>

                                            <div class="col-md-12"> <i class="fa fa-building-o"></i> <i class="fa fa-user"></i>
                                                <input type="text" name="company" pattern="[A-Za-z]" value="" placeholder="Business/Company" class="form-control name" id="company2">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-envelope"></i> <i class="fa fa-envelope"></i>
                                                <input type="email" onchange="validatetext(this)" name="email" value="<?php echo ((isset($user))?(($_POST)?set_value('email'):$user['email']):(($_POST)?set_value('email'):''));?>" placeholder="Email " class="form-control email" id="email2">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-phone"></i>
                                                <input type="text" name="phone_mobile" onchange="validphone(this)" value="" placeholder="Phone" class="form-control k-input-mask-phone-us" id="phone2">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-key"></i> <i class="fa fa-key"></i>
                                                <input type="password" name="password"  onchange="validatePassword(this)" value="" placeholder="<?php echo 'Password ';?>" class="form-control" id="password2">
                                                <span class="error"></span>

                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-key"></i> <i class="fa fa-key"></i>
                                                <input type="password" name="confirm_password" value="" placeholder="<?php echo 'Confirm Password ';?>" class="form-control" id="confirm_password2">
                                                <span class="error"></span>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-address-book"></i> <i class="fa fa-address-book"></i>
                                                <input type="text" class="form-control address" placeholder="Address" name="address" id="autocomplete2" onchange="doGeocode('autocomplete2')" onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">
                                                <span class="error"></span>
                                                <p style="color:red;" id='brokeraddresserror'></p>
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-address-book"></i> <i class="fa fa-address-book"></i>
                                                <input type="text" class="form-control address" placeholder="House Number" name="street_number" id="street_number2"  readonly onFocus="geolocate()" value="">
                                                <span class="error"></span>
                                            </div>

                                            <div class="col-md-12"> <i class="fa fa-address-book"></i> <i class="fa fa-address-book"></i>
                                                <input type="text" class="form-control address" readonly placeholder="Street Address" name="route" id="route2"  onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">
                                                <span class="error"></span>
                                            </div>

                                            <div class="col-md-12"> <i class="fa fa-map-marker"></i>
                                                <input name="administrative_area_level_1" readonly id="administrative_area_level_12" type="text" value="" class="form-control" placeholder="State">
                                                <span class="error"></span>
                                            </div>

                                            <!--<select name='administrative_area_level_1' id='administrative_area_level_12' class="form-control address">
                  <option value="">Select a state</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select>
                                           -->
                                            <div class="col-md-12"> <i class="fa fa-map-marker"></i> <i class="fa fa-map-marker"></i>
                                                <input name="locality"  pattern="[A-Za-z]" readonly id="locality2" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('locality'):$user['city']):(($_POST)?set_value('locality'):''));?>" class="form-control name" pattern="^[a-zA-Z0-9-,/ \b]+$" placeholder="City">
                                                <span class="error"></span>
                                            </div>

                                            <div class="col-md-12"> <i class="fa fa-globe"></i> <i class="fa fa-globe"></i>
                                                <input name="country" id="country2" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('country'):$user['country']):(($_POST)?set_value('country'):''));?>" class="form-control" readonly placeholder="Country">
                                                <span class="error"></span>
                                            </div>

                                            <div class="col-md-12"> <i class="fa fa-address-book"></i> <i class="fa fa-address-book"></i>
                                                <input type="text" class="form-control address" readonly placeholder="Zipcode" name="postal_code" id="postal_code2"  onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                        <button type="button" onclick="validatebroker()" class="form-control">Register</button>

                                    </div>
                                    <div class="new-user">
                                        <p>Already User</p>
                                        <a href="<?=base_url('login.html')?>" class="login form-control">Login</a>

                                        <a href="<?=base_url('/')?>" class="back-to-home"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Home</a></div>
                                    <!--fields end here-->
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-whole" role="tabpanel" aria-labelledby="nav-whole-tab">
                            <div class="register-main">
                                <?php echo form_open_multipart(current_full_url(),['id'=>'registerwhole']);?>
                                <img src="images/logo.png" class="img-full" alt="logo">
                                <div class="form-main">

                                    <!--fields start here-->

                                    <div class="fields">
                                        <div class="row">
                                            <div class="col-md-12"> <i class="fa fa-user"></i> <i class="fa fa-user"></i>
                                                <input type="text" name="username" value="<?php echo ((isset($user))?(($_POST)?set_value('username'):$user['name']):(($_POST)?set_value('name'):''));?>" placeholder="First Name " class="form-control" id="username">
                                                <input hidden type="text" name="usertype" value="<?php echo WHOLE_SELLER;?>"  class="form-control" id="usertype">
                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-user"></i> <i class="fa fa-user"></i>
                                                <input type="text" name="lastname" value="<?php echo ((isset($user))?(($_POST)?set_value('lastname'):$user['lastname']):(($_POST)?set_value('lastname'):''));?>" placeholder="Last Name " class="form-control" id="lastname">

                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-envelope"></i> <i class="fa fa-envelope"></i>
                                                <input type="email" name="email" value="<?php echo ((isset($user))?(($_POST)?set_value('email'):$user['email']):(($_POST)?set_value('email'):''));?>" placeholder="Email " class="form-control" id="email">

                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-key"></i> <i class="fa fa-key"></i>
                                                <input type="password" name="password" value="" placeholder="<?php echo 'Password ';?>" class="form-control" id="password">

                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-key"></i> <i class="fa fa-key"></i>
                                                <input type="password" name="confirm_password" value="" placeholder="<?php echo 'Confirm Password ';?>" class="form-control" id="confirm_password">

                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-address-book"></i> <i class="fa fa-address-book"></i>
                                                <input type="text" class="form-control" placeholder="Address" name="address" id="autocomplete3"  onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">

                                            </div>


                                            <div class="col-md-12"> <i class="fa fa-map-marker"></i> <i class="fa fa-map-marker"></i>
                                                <input name="administrative_area_level_1"  id="administrative_area_level_13" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('administrative_area_level_1'):$user['state']):(($_POST)?set_value('administrative_area_level_1'):''));?>" class="form-control" placeholder="State">

                                            </div>
                                            <div class="col-md-12"> <i class="fa fa-map-marker"></i> <i class="fa fa-map-marker"></i>
                                                <input name="locality"  id="locality3" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('locality'):$user['city']):(($_POST)?set_value('locality'):''));?>" class="form-control name" placeholder="City">

                                            </div>

                                            <div class="col-md-12"> <i class="fa fa-globe"></i> <i class="fa fa-globe"></i>
                                                <input name="country" id="country3" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('country'):$user['country']):(($_POST)?set_value('country'):''));?>" class="form-control" placeholder="Country">

                                            </div>

                                        </div>
                                        <button type="button" onclick="javascript: submitForm('register.html','#registerwhole','#registerBtn');" class="form-control">Register</button>

                                    </div>
                                    <div class="new-user">
                                        <p>Already User</p>
                                        <a href="<?=base_url('manage/login.html')?>" class="login form-control">Login</a>  </div>

                                    <!--fields end here-->

                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-investor" role="tabpanel" aria-labelledby="nav-investor-tab">
                            <div class="register-main investor">
                                <!-- step form start here-->

                                <form id="regForm" method="POST" action="<?php echo base_url();?>user/createUser"  enctype="multipart/form-data">
                                    <div class="d-flex justify-content-between text-center" style="margin-top:90px;">
                                        <span class="text"><h4>Enter Detail</h4><span class="step"></span></span>
                                        <span class="text"><h4>Choose Package</h4><span class="step"></span></span>
                                        <span class="text"><h4>Payment Info</h4><span class="step"></span></span>
                                    </div>
                                    <!-- One "tab" for each step in the form: -->
                                    <div class="tab">

                                        <div class="fields">
                                            <div class="row">
                                                <div class="col-md-12"> <i class="fa fa-user"></i> <i class="fa fa-user"></i>
                                                    <input type="text" name="username" value="<?php echo ((isset($user))?(($_POST)?set_value('username'):$user['name']):(($_POST)?set_value('name'):''));?>" placeholder="First Name " class="form-control" id="username">
                                                    <input hidden type="text" name="usertype" value="<?php echo USER_INVESTOR;?>"  class="form-control" id="usertype">

                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-user"></i> <i class="fa fa-user"></i>
                                                    <input type="text" name="lastname" value="<?php echo ((isset($user))?(($_POST)?set_value('lastname'):$user['lastname']):(($_POST)?set_value('lastname'):''));?>" placeholder="Last Name " class="form-control" id="lastname">

                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-envelope"></i> <i class="fa fa-envelope"></i>
                                                    <input type="email" name="email" value="<?php echo ((isset($user))?(($_POST)?set_value('email'):$user['email']):(($_POST)?set_value('email'):''));?>" placeholder="Email " class="form-control" id="email">

                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-key"></i> <i class="fa fa-key"></i>
                                                    <input type="password" name="password" value="" placeholder="<?php echo 'Password ';?>" class="form-control" id="password">

                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-key"></i> <i class="fa fa-key"></i>
                                                    <input type="password" name="confirm_password" value="" placeholder="<?php echo 'Confirm Password ';?>" class="form-control" id="confirm_password">
                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-address-book"></i> <i class="fa fa-address-book"></i>
                                                    <input type="text" class="form-control" placeholder="Address" name="address" id="autocomplete4"  onFocus="geolocate()" value="<?php echo ((isset($user))?(($_POST)?set_value('address'):$user['address']):(($_POST)?set_value('address'):''));?>">

                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-map-marker"></i> <i class="fa fa-map-marker"></i>
                                                    <input name="administrative_area_level_1"  id="administrative_area_level_14" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('administrative_area_level_1'):$user['state']):(($_POST)?set_value('administrative_area_level_1'):''));?>" class="form-control" placeholder="State">

                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-map-marker"></i> <i class="fa fa-map-marker"></i>
                                                    <input name="locality"  id="locality4" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('locality'):$user['city']):(($_POST)?set_value('locality'):''));?>" class="form-control name" placeholder="City">

                                                </div>

                                                <div class="col-md-12"> <i class="fa fa-globe"></i> <i class="fa fa-globe"></i>
                                                    <input name="country" id="country4" type="text" value="<?php echo ((isset($user))?(($_POST)?set_value('country'):$user['country']):(($_POST)?set_value('country'):''));?>" spellcheck="true" class="form-control" placeholder="Country">

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <div class="packages">
                                            <div class="row">

                                                <?php foreach($package as $p){?>

                                                <div class="col-md-6 col-lg-4 col-12">
                                                    <div class="box">
                                                        <h2><?php echo $p['title'];?></h2>
                                                        <h3>$<?php echo $p['amount'];?></h3>
                                                        <div class="bottom">
                                                            <p><?php echo $p['description'];?></p>


                                                            <div class="text-center">
                                                                <button onclick="select(<?php echo $p['id'];?>)" type="button">select</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <div class="payment">
                                            <div class="row">

                                                <div class="col-md-12"> <i class="fa fa-credit-card"></i>
                                                    <input type="number" name="ccnumber" class="form-control" spellcheck="true" class="form-control" placeholder="Credit Card Number">
                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-user"></i>
                                                    <input type="text" name="ccname" class="form-control" spellcheck="true" class="form-control" placeholder="Card holder Name">
                                                </div>
                                                <div class="col-md-12">
                                                    <select name="ccmonth" id="ccmonth" class="form-control" data-stripe="exp-month">
                                                        <option value="" selected>Expiry Month</option>
                                                        <?php
                                                        for($i=1;$i<=12;$i++){
                                                            if(strlen($i)==1){
                                                                echo '<option value="0'.$i.'">0'.$i.'</option>';
                                                            }else{
                                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-12"> <i class="fa fa-key"></i>
                                                    <input type="number" name="cvv" class="form-control" spellcheck="true" class="form-control" placeholder="CVV">
                                                    <input type="number"  hidden value="" placeholder="Email " class="form-control" name='package' id="package">

                                                </div>
                                                <div class="col-md-12">
                                                    <select name="ccyear" id="ccyear" class="form-control" data-stripe="exp-year">
                                                        <option value="" selected>Expiry Year</option>
                                                        <?php
                                                        echo '<option value="'.date("Y").'">'.date("Y").'</option>';
                                                        for($i=1;$i<=10;$i++){
                                                            echo '<option value="'.date("Y", strtotime("+$i years")).'">'.date("Y", strtotime("+$i years")).'</option>';
                                                        }
                                                        ?>
                                                    </select></div>

                                            </div>

                                        </div>
                                    </div>


                                    <div style="overflow:auto;">
                                        <button type="button" id="prevBtn" class="form-control" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" id="nextBtn" class="form-control"  onclick="nextPrev(1)">Next</button>
                                    </div>
                                    <div class="new-user">
                                        <p>Already User</p>
                                        <a href="login.html" class="login form-control">Login</a> </div>

                                    <!-- Circles which indicates the steps of the form: -->

                                </form>
                            </div>
                            <!-- step form end here-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<a class="initialism basicPopup_open btn btn-success" href="#basicPopup2" id="basicPopupAnchor2" style="display: none;">Popup</a>
<a class="initialism basicPopup_open btn btn-success" href="#basicPopup" id="basicPopupAnchor" style="display: none;">Popup</a>
<div class="custo">
    <div class="modal fade  text-left" id="basicPopup2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"  aria-hidden="true">
        <div class="modal-dialog pack-popup-main" role="document">
            <div class="modal-content">
                <div class="modal-body slot-popup-body">

                    <div class="modal-body text-center">
                        <i class="fa fa-exclamation-circle"></i>
                        <h4 class="mt-1">You have successfully registered.</h4>

                        <p></p>

                        <button onclick='window.location.href="https://4thandgoalllc.com/"' data-dismiss="modal">OK</button>

                    </div>




                </div>
                <!--invice modal end-->

            </div>
        </div>
    </div></div>

<div class="custo">
    <div class="modal fade  text-left" id="basicPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"  aria-hidden="true">
        <div class="modal-dialog pack-popup-main" role="document">
            <div class="modal-content">
                <div class="modal-body slot-popup-body">

                    <div class="modal-body text-center">
                        <i class="fa fa-exclamation-circle"></i>
                        <h4 class="mt-1">User is inactive.</h4>

                        <p></p>

                        <button  data-dismiss="modal">OK</button>

                    </div>




                </div>
                <!--invice modal end-->

            </div>
        </div>
    </div></div>
<!--register page end here-->

<!-- BEGIN VENDOR JS-->
<script type="text/javascript" src="<?=base_url('assets')?>/js/address.js">
    <script type="text/javascript" src="<?=base_url('assets')?>/js/functions.js"></script>
<!--<script type="text/javascript" src="<?=base_url('assets')?>/js/script.js"></script>-->
<script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
<script src="app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="app-assets/vendors/js/extensions/moment.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/extensions/fullcalendar.min.js" type="text/javascript"></script>
<script src="app-assets/js/scripts/extensions/fullcalendar.js" type="text/javascript"></script>
<script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="app-assets/js/core/app.js" type="text/javascript"></script>
<script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<script src="app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script>
<!-- END STACK JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"
        type="text/javascript"></script>
<script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js"
        type="text/javascript"></script>
<script src="app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
<script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"
        type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL JS-->
<script src="app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>
<script src="assets/js/step-form.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>

<script>



    $('.k-input-mask-phone-us').mask('+1 000 000 0000');</script>
<script>
    $('.name').on('keypress', function (event) {
        var regex = /*new RegExp("^[a-zA-Z0-9]+$");*/  new RegExp("^[a-zA-Z \b]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });

    $('.address').on('keypress', function (event) {
        var regex = /*new RegExp("^[a-zA-Z0-9]+$");*/  new RegExp("^[a-zA-Z0-9-,/ \b]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });




    function select(id){
        $('#package').val(id);

        nextPrev(1);
    }
    function readURL(input) {

        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#tr-preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHPUufTlBkF5NfBT3uhS9K4BbW2N-mkb4&libraries=places&callback=initAutocomplete"
        async defer></script>-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjo7pjQZM3FVCjBpw1-5Yeddhl32ys6_o&callback=initMap&libraries=places&callback=activatePlacesSearch">
</script>
<script>
    var current_country = '';
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete, autocomplete2;
    var componentForm = {
        route: 'long_name',
        street_number: 'short_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };
    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete')), {
                types: ['geocode']
            });

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', function() {
            fillInAddress(autocomplete, "");
        });

        autocomplete2 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete2')), {
                types: ['geocode'],componentRestrictions: {country: 'us'}
            });
        autocomplete2.addListener('place_changed', function() {
            fillInAddress(autocomplete2, "2");
        });
        autocomplete3 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete3')), {
                types: ['geocode']
            });
        autocomplete3.addListener('place_changed', function() {
            fillInAddress(autocomplete3, "3");
        });

        autocomplete4 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete4')), {
                types: ['geocode']
            });
        autocomplete4.addListener('place_changed', function() {
            fillInAddress(autocomplete4, "4");
        });
    }
    function fillInAddress(autocomplete, unique) {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            if (!!document.getElementById(component + unique)) {
                document.getElementById(component + unique).value = '';
                document.getElementById(component + unique).disabled = false;
            }
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType] && document.getElementById(addressType + unique)) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType + unique).value = val;
            }
        }
    }

    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }


    window.onload = function(){
        google.maps.event.addDomListener(window, "load", initAutocomplete);
    }


    function doGeocode(id) {
        var addr = document.getElementById(id);
        // Get geocoder instance
        var geocoder = new google.maps.Geocoder();

        // Geocode the address
        geocoder.geocode({
            'address': addr.value
        }, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK && results.length > 0) {

                // set it to the correct, formatted address if it's valid
                //addr.value = results[0].formatted_address;;
                $('.addresserror').text('');
                // show an error if it's not
            } else {

                if(id=='location'){
                    $('.addresserror').text('Invalid Address');
                    $('#street_number').val('');
                    $('#route').val('');
                    $('#administrative_area_level_1').val('');
                    $('#locality').val('');
                    $('#country').val('');
                    $('#postal_code').val('');
                }else if(id=='autocomplete2'){
                    $('#brokeraddresserror').text('Invalid Address');
                    $('#street_number2').val('');
                    $('#route2').val('');
                    $('#administrative_area_level_12').val('');
                    $('#locality2').val('');
                    $('#country2').val('');
                    $('#postal_code2').val('');
                }

            }
        });
    };

    function validateuser(){
        if($('#username').val()==''){$('#username').next('span').text('First name is required');}
        if($('#lastname').val()==''){$('#lastname').next('span').text('last name is required');}
        if($('#email').val()==''){$('#email').next('span').text('Email is required');}
        if($('#phone').val()==''){$('#phone').next('span').text('Phone is required');}
        if($('#password').val()==''){$('#password').next('span').text('Password is required');}
        if($('#autocomplete').val()==''){$('#autocomplete').next('span').text('Address is required');}
        /*if($('#street_number').val()==''){$('#street_number').next('span').text('House Number  is required');}
        if($('#route').val()==''){$('#route').next('span').text('Street Address  is required');}
        if($('#administrative_area_level_1').val()==''){$('#administrative_area_level_1').next('span').text('State is required');}
        if($('#locality').val()==''){$('#locality').next('span').text('City is required');}
        if($('#country').val()==''){$('#country').next('span').text('Country is required');}
        if($('#postal_code').val()==''){$('#postal_code').next('span').text('Zipcode is required');}*/


        if($('#username').val()!='' && $('#lastname').val()!='' && $('#lastname').val()!=''&& $('#email').val()!='' && $('#password').val()!='' && $('#phone').val()!=''&& $('#autocomplete').val()!=''){
            submitForm('register.html','#register','#registerBtn');
        }

    }

    function validatebroker(){

        if($('#username2').val()==''){$('#username2').next('span').text('First name is required');}
        if($('#lastname2').val()==''){$('#lastname2').next('span').text('last name is required');}
        if($('#email2').val()==''){$('#email2').next('span').text('Email is required');}
        if($('#phone2').val()==''){$('#phone2').next('span').text('Phone is required');}
        if($('#company2').val()==''){$('#company2').next('span').text('Company is required');}
        if($('#password2').val()==''){$('#password2').next('span').text('Password is required');}
        if($('#autocomplete2').val()==''){$('#autocomplete2').next('span').text('Address is required');}
        if($('#street_number2').val()==''){$('#street_number2').next('span').text('House Number  is required');}
        if($('#route2').val()==''){$('#route2').next('span').text('Street Address is required');}
        if($('#administrative_area_level_12').val()==''){$('#administrative_area_level_12').next('span').text('State is required');}
        if($('#locality2').val()==''){$('#locality2').next('span').text('City is required');}
        if($('#country2').val()==''){$('#country2').next('span').text('Country is required');}
        if($('#postal_code2').val()==''){$('#postal_code2').next('span').text('Zipcode is required');}


        if($('#username2').val()!='' && $('#lastname2').val()!=''  && $('#company2').val()!=''&& $('#administrative_area_level_12').val()!=''&& $('#country2').val()!=''&& $('#postal_code2').val()!=''&& $('#locality2').val()!='' && $('#route2').val()!='' && $('#street_number2').val()!=''&& $('#email2').val()!='' && $('#password2').val()!='' && $('#phone2').val()!=''&& $('#autocomplete2').val()!=''){

            submitForm('register.html','#registerbroker','#registerBtn');}
    }
    function validatePassword(input){
        $.ajax({
            url: '/user/valid_password_ajax',
            type: 'post',
            data: { password : $(input).val()},
            dataType:'json',
            success: function(response){
                if(response.success)
                    $(input).next('span').text(response.message);
                else
                    $(input).next('span').text('');
            }
        })
    }

    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }


    function validatetext(input) {

        const email = $(input).val();

        if (validateEmail(email)) {
            $(input).next('span').text("");
        } else {
            $(input).next('span').text("Email is invalid");
        }
        return false;
    }

    function validatename(name) {
        const re = /^[a-zA-Z\s]+$/;
        return re.test(name);
    }

    function namevalid(input) {
        const name = $(input).val();
        if (validatename(name)) {
            $(input).next('span').text("");
        } else {
            $(input).next('span').text("This field must contain alphabets and spaces only");
        }
        return false;
    }

    function validphone(input){
        const phone = $(input).val();
        if(phone.length <15)
        {
            $(input).next('span').text("Phone number field must be 11 characters long");
        }else{
            $(input).next('span').text("");
        }
    }

    $('#password, #confirm_password').on('change', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#confirm_password').next('span').text("");
        } else
            $('#confirm_password').next('span').text("Confirm password does not match password");
    });
    $('#password2, #confirm_password2').on('change', function () {
        if ($('#password2').val() == $('#confirm_password2').val()) {
            $('#confirm_password2').next('span').text("");
        } else
            $('#confirm_password2').next('span').text("Confirm password does not match password");
    });
</script>
<script>




</script>
</body>
</html>






















