<?php

session_start();
//echo $_SESSION['user_email'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Goudsinfo</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon-1.png">
<!-- Style Sheets -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
<link rel="stylesheet" href="css/responsive_style.css" type="text/css">
<!-- Google Fonts-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="vfx_loader_block">
  <div class="vfx-loader-item"> <img src="images/loading.gif" alt="" /> </div>
</div>
<div class="banner-image">
    <img src="images/banner-1.jpg" height="100px" width="2500px" alt="Gouds Info banner image"/>
</div>
<div id="logo-header" data-spy="affix" data-offset-top="500">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-9 text-right">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#thrift-1" aria-expanded="false"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="thrift-1"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
            <div id="nav_menu_list">
              <ul>
              <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="History.php">History</a></li>
                <li><a href="categories.php">Categories</a></li>
               
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="page_error_404.html">Post</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="btn_item">
				    <ul>
					<!--	<li>
						  <button class="btn_login" data-toggle="modal" data-target="#login">Log out</button>
						</li>
            <!--
						<li>
						  <button class="btn_register" data-toggle="modal" data-target="#register">Register</button>
						</li>-->
				    </ul>	
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Submit Listing</h1>
          <a href="index.html">Home</a> <i class="fa fa-circle"></i> <a href="dashboard.html"><span>Submit Listing</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="col-md-12 all-categorie-list-title bt_heading_3">
          <h1>Submit <span>Listing</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-4 col-xs-12">
            <div id="leftcol_item">
              <div class="user_dashboard_pic"> <img alt="user photo" src="images/user-profile.png"> <span class="user-photo-action">Click here to Reupload</span> </div>
            </div>
            <div class="dashboard_nav_item">
              <ul>
                <li><a href="dashboard.html"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <li class="active"><a href="listing_submit.html"><i class="fa fa-pencil"></i> Submit Listing</a></li>
                <li><a href="edit_profile.html"><i class="fa fa-user"></i> Edit Profile</a></li>
                <li><a href="my_listing.html"><i class="fa fa-list-ul"></i> My Listing</a></li>
                <li><a href="change_password.html"><i class="fa fa-key"></i> Change Password</a></li>
                <li><a href="Logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12">
           
            <div class="submit_listing_box">
              <h3>Attributes</h3>
              <form class="form-alt">
                <div class="row">
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Property Type :-</label>
                    <select class="form-control selectcategory" name="parent-cateogry">
                      <option value="0">Select Category</option>
                      <option value="1">Property Type</option>
                      <option value="2">Automotive</option>
                      <option value="3">Food</option>
                      <option value="4">Shopping</option>
                      <option value="5">Other</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Contract :-</label>
                    <select class="form-control selectcategory" name="parent-cateogry">
                      <option value="0">Select Contract</option>
                      <option value="1">Lorem Ipsum</option>
                      <option value="2">Lorem Ipsum</option>
                      <option value="3">Lorem Ipsum</option>
                      <option value="4">Lorem Ipsum</option>
                      <option value="5">Other</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Location :-</label>
                    <select class="form-control selectcategory" name="parent-cateogry">
                      <option value="0">Select Location</option>
                      <option value="1">Lorem Ipsum</option>
                      <option value="2">Lorem Ipsum</option>
                      <option value="3">Lorem Ipsum</option>
                      <option value="4">Lorem Ipsum</option>
                      <option value="5">Other</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Price :-</label>
                    <input placeholder="Price" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Address :-</label>
                    <input placeholder="Address" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>City :-</label>
                    <input placeholder="City" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>Phone :-</label>
                    <input placeholder="Phone" class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <label>E-mail :-</label>
                    <input placeholder="Email" class="form-control" type="text">
                  </div>
                </div>
              </form>
            </div>
            <div class="submit_listing_box">
              <h3>Working Hours</h3>
              <form class="form-alt">
                <div class="row">
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Monday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Tuesday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Wednesday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Thursday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Friday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Saturday :-</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xs-6">
                    <label>Sunday :-</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
              </form>
            </div>
           
            <div class="submit_listing_box">
              <h3>Gallery</h3>
              <div class="fileupload_block">
                <input type="file" name="fileupload" id="fileupload">
                <div class="fileupload_img"> <img src="images/add_image.png" alt="add image" /> </div>
              </div>
              <div class="clearfix"></div>
            </div>
            </div>
            <div class="from-list-lt">
              <div class="form-group">
                <button class="btn" type="submit">Submit Listing</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="site-footer footer-map">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>About Us</h2>
          <hr>
          <p class="about-lt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer justo lectus, consectetur quis nisi vitae, Nunc eget ultrices ligula.</p>
          <a href="about.html" class="btn-primary-link more-detail"><i class="fa fa-hand-o-right"></i> Read More</a>
          <h2>Follow Us</h2>
          <hr>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Useful links</h2>
          <hr>
          <ul class="use-slt-link">
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Privacy & Policy</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Payment Method</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Sitemap</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Support</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Terms & Condition</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <p class="text-xs-center">Copyright © 2017 All Rights Reserved.</p>
        </div>
        <div><a href="#" class="scrollup">Scroll</a></div>
      </div>
    </div>
  </div>
</footer>
<!--================================ Login and Register Forms ===========================================--> 

<!-- login form -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"> Login</h4>
      </div>
      <div class="modal-body">
        <div class="listing-login-form">
          <form action="#">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="Username" />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_pass" placeholder="Password"  />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
              <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" />
              <label for="checkbox-1-1"></label>
              <label class="checkbox-lable">Remember Me</label>
              <a href="#">Forgot Password?</a> </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="login" />
            </div>
          </form>
          <div class="bottom-links">
            <p>Not a Member?<a href="#">Create Account</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- registration form -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Registration</h4>
      </div>
      <div class="modal-body">
        <div class="listing-register-form">
          <form action="#">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="Name"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-envelope blue-1"></i>
              <input class="form-field bgwhite" type="email" name="user_email" placeholder="Email" />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_password" placeholder="Password"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_confirm_password" placeholder="Confirm Password" />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20 login_form_text_center">
              <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" />
              <label for="checkbox-1-2"></label>
              <label class="checkbox-lable">i agree with</label> &nbsp; <a href="#">Terms & Conditions</a> </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="create account" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Scripts --> 
<script src="js/jquery-2.2.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery_custom.js"></script> 
</body>
</html>