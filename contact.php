<!DOCTYPE html>
<html lang="zxx">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      $('#submit').click(function(){
       //alert("button clicked");
       var user = $("#inputName").val();
       var email = $("#inputEmail").val();
       var password = $("#inputpassword").val();
       var confirm_password = $("#Confirm_inputpassword").val();
       $.ajax({
                method:"post",
                url:"submit_form.php?",
                data:'name='+user+'&email='+email+'&password='+password+'&Confirm_password='+confirm_password,
                success:function(data)
                {
                  $("#inputName").val('');
                  $("#inputEmail").val('');
                  $("#inputpassword").val('');
                  $("#Confirm_inputpassword").val('');
                  $("#register_output").html(data);
                  console.log(url);
                }
       });
      });
  });   
</script>
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
<!-- Font Awesome Fonts-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!-- Google Fonts-->
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
                <li class="active"><a href="contact.php">Contact Us</a></li>
                <li class="btn_item">
				    <ul>
						<li>
						  <button class="btn_login" data-toggle="modal" data-target="#login">Guest Sign</button>
            </li>
            <!--
						<li>
						  <button class="btn_register" data-toggle="modal" data-target="#register">Register</button>
            </li>
            -->
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
          <h1>Contact Us</h1>
          <a href="index.html">Home</a> <i class="fa fa-circle"></i> <a href="contact.html"><span>Contact Us</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="vfx-product-inner-item">
  <div class="container">
    <div class="row">
      <div class="col-md-12 contact-heading-title text-center bt_heading_3">
        <h1>Contact <span>Us</span></h1>
        <div class="blind line_1"></div>
        <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
        <div class="blind line_2"></div>
      </div>
     
      <div class="from-list-lt">
        <div class="col-xs-12 col-lg-8 col-sm-12">
          <form class="form-float form-alt" method="POST">
            <div class="row">
              <div class="form-group col-xs-12 col-sm-6"> <span class="from-input-ic"><i class="fa fa-user"></i></span>
                <input class="form-control" required placeholder="Frist Name" type="text" name="First_Name">
              </div>
              <div class="form-group col-xs-12 col-sm-6"> <span class="from-input-ic"><i class="fa fa-user"></i></span>
                <input class="form-control" required placeholder="Last Name" type="text" name = "Last_Name">
              </div>
              <div class="form-group col-xs-12 col-sm-6"> <span class="from-input-ic"><i class="fa fa-envelope-o"></i></span>
                <input class="form-control" required placeholder="Email" type="text" name= "Email">
              </div>
              <div class="form-group col-xs-12 col-sm-6"> <span class="from-input-ic"><i class="fa fa-phone"></i></span>
                <input class="form-control" required placeholder="Contact Number" type="text" name="Phone_Number">
              </div>
              <div class="form-group col-xs-12"> <span class="from-input-ic"><i class="fa fa-comments"></i></span>
                <textarea class="form-control" required placeholder="Your Message" name="Message"></textarea>
              </div>
               <div class="form-group col-xs-12">
                <button class="btn pull-right" type="submit" name="Contact_submit">Submit</button>
              </div>
            </div>
          </form>
          <?php
                require_once('config.php');
                if (isset($_POST['Contact_submit'])) {
                    $DataBaseConnectionVariable = new  DataBaseConnection();
                    $DataBaseConnectionVariable->store_contact_details();                
                } else {
                   echo "error";
                }
                ?>
        </div>
        <div class="col-xs-12 col-lg-4 col-sm-12">
          <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <div class="media media-iconic">
              <div class="media-body">
                <div class="lt-co-icon"> <img src="images/ic-loc.png" alt="ic-loc"> </div>
                <div class="lt-co-blok-text">
                  <div class="lt-co-title">Location</div>
                  <hr class="lt-co-yellow-hr">
                  <p class="lt-bdr-one">India :
                    Plot No: 81, Arul Colony,
                    Dr ASRAO NAGAR, ECIL, Hyderabad.<br>
                    Pin : 500062</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <div class="media media-iconic">
              <div class="media-body">
                <div class="lt-co-icon"> <img src="images/ic-call.png" alt="ic-call"> </div>
                <div class="lt-co-blok-text">
                  <div class="lt-co-title">Phone | Email</div>
                  <hr class="lt-co-green-hr">
                  <p class="lt-bdr-two">
				    <b>IND</b> :-&nbsp; +91 990 802 8216<BR>
             <span style="margin-left: 45px;">+91 990 802 8126</span><br>
             <span style="margin-left: 45px;">+91 868 618 8133</span><br>
				    <b>USA</b> :-&nbsp; +1 813 804 6162<br>
                    <b>E-Mail</b> :-&nbsp;<a href="mailto:goudsinfo@gmail.com">goudsinfo@gmail.com</a><br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--
          <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <div class="media media-iconic">
              <div class="media-body">
                <div class="lt-co-icon"> <img src="images/ic-time.png" alt="ic-time"> </div>
                <div class="lt-co-blok-text">
                  <div class="lt-co-title">Working Hours</div>
                  <hr class="lt-bg-blue-hr">
                  <p class="lt-bdr-three"><b>Mon</b> - <b>Sat</b> :- 9am - 6pm</p>
                </div>
              </div>
            </div>
          </div>
          -->
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
          <a href="about.php" class="btn-primary-link more-detail"><i class="fa fa-hand-o-right"></i> Read More</a>
          <h2>Follow Us</h2>
          <hr>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
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
          <p class="text-xs-center"><a href="http://www.iconvix.com/" target="blank">Designed by Iconvix Business Solutions</a> </p>
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
          <form method = "POST">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="Email" />
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
              <input class="submit" type="submit" value="login" name="Login" />
            </div>
          </form>
          <?php
                if (isset($_POST['Login'])) {
                  $ConnectionString = mysqli_connect("localhost","root","","gouds_info");
                  $UserEmail           = $_POST['user_name'];
                  $UserPassword        = md5($_POST['user_pass']);
                 // echo $UserEmail,$UserPassword;
                  $UserRegisterQuery = "SELECT * from users where user_email ='$UserEmail' and 
                  user_password = '$UserPassword'";
                  $UserRegisterValidation = $ConnectionString->query($UserRegisterQuery);
                   if ($UserRegisterValidation->num_rows==0) {
                      echo  "<center>
                      <div class=\"alert alert-danger\">
                         <strong>Register first !</strong> 
                     </div>
                 </center>";;
                   } else {
                      
                     //header("Location:listing_submit.php");
                     echo "<script> window.location.assign('listings_submit.php'); </script>";
                     session_start();
                      $_SESSION['user_email'] =  $UserEmail  ;
                    
                                 
                   }
                }
               
          ?>
          <div class="bottom-links">
            <p>Not a Member? 
            <a href="#register" class="btn_register" data-toggle="modal" data-target="#register">Create Account</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="register">
    <div class="modal-dialog">
      <div class="modal-content" style="width: 430px;margin-left:95px">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Registration</h4>
      </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div id = "register_output"></div>
        <form method="post" class = "feedback">

                    <div class="listing-form-field"><i class = "fa fa-user blue-1"></i>
                        <input type="text" class="form-field bgwhite" id="inputName" required name ="name" placeholder="Username"/>
                    </div>
                    <div class="listing-form-field"><i class = "fa fa-envelope blue-1"></i>
                         <input type="email" class="form-field bgwhite" id="inputEmail" name = "email" placeholder="Enter your email"/>
                    </div>
                    <div class="listing-form-field"><i class = "fa fa-lock blue-1"></i>
                       <input type="password" class="form-field bgwhite" id="inputpassword" 
                        name = "password" placeholder="Enter your password"/>
                    </div>
                    <div class="listing-form-field"><i class = "fa fa-lock blue-1"></i>
                        <input type="password" class="form-field bgwhite" id="Confirm_inputpassword" 
                        name = "confirm password" placeholder="Confirm Password"/>
                    </div>
                </form>
              <div class="modal-footer">
              <div class="listing-form-field">
               <input class="submit" type="submit" id ="submit" value = "Create Account"/>
               </div>      
               </div>       
      </div>
    </div>
  </div>
<!-- registration form 
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Registration</h4>
      </div>
      <div class="modal-body">
        <div class="listing-register-form">
          <form  method="POST">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" required name="user_name" placeholder="Name"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-envelope blue-1"></i>
              <input class="form-field bgwhite" type="email" required name="user_email" placeholder="Email" />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" required name="user_password" placeholder="Password"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" required name="user_confirm_password" placeholder="Confirm Password" />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20 login_form_text_center">
              <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" />
              <label for="checkbox-1-2"></label>
              <label class="checkbox-lable">i agree with</label> &nbsp; <a href="#">Terms & Conditions</a> </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="create account" name="create_account" />
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

 Scripts --> 
<script src="js/jquery-2.2.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery_custom.js"></script> 
</body>
</html>