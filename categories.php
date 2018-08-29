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
      <!--
      <div class="col-sm-3 col-xs-9">
        <div id="logo"> <a href="index.html"><img src="images/logo.png" alt="logo"></a>
      </div>-->
      </div>
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
                <li class="active"><a href="categories.php">Categories</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="page_error_404.html">Post</a></li>            
                <li><a href="contact.php">Contact Us</a></li>
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
          <h1>Categories</h1>
          <a href="index.php">Home</a> <i class="fa fa-circle"></i> <a href="#"><span>Categories</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="vfx-search-item-inner">
  <div class="container">
    <div class="row">
      <div class="col-md-12 vfx-search-categorie-title text-center bt_heading_3">
        <h1><span>Search Any Categories list</span> </h1>
        <div class="blind line_1"></div>
        <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
        <div class="blind line_2"></div>
      </div>
      <div class="col-md-12">
        <form id="search-form">
          <div class="col-sm-9 col-md-10 nopadding">
            <div id="vfx-search-box">
              <div class="col-sm-3 nopadding">
                <select id="search-location" class="form-control">
                  <option>All Categories</option>
                  <option>Business</option>
                  <option>Free Lancing</option>
                  <option>Web Development</option>
                  <option>Web Designing</option>
                </select>
              </div>
              <div class="col-sm-9 nopadding">
                <div class="form-group">
                  <input id="search-data" class="form-control" name="search" placeholder="Enter Keyword" required>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-2 text-right nopadding-right">
            <div id="vfx-search-btn">
              <button type="submit" id="search"><i class="fa fa-search"></i>Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="all-categorie-item-block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="col-md-12 all-categorie-list-title bt_heading_3">
          <h1><span>Categories</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="categorie-list-box">
                  <div class="search-categories-boxes">
                    <a href="Politics.php" style="color: black">
                     <h2>
                        <i class="fa fa-suitcase"></i> Politics 
                     </h2>
                    </a>
                  </div>
                  <div class="categories-list">
                    <ul>
                      <li><a href="listing_list.php"><i class="fa fa-hand-o-right"></i>Ministers</a><span>10</span></li>
                      <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i>MP/MLA</a><span>16</span></li>
                      <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i>Mayer</a><span>26</span></li>
                      <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i>Chairman/MC Chairman </a><span>24</span></li>
                      <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Corporater</a><span>05</span></li>
                      <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 	Councilor</a><span>05</span></li>
                      <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 		ZPTC</a><span>05</span></li> 
                      <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 			MPTC</a><span>05</span></li>
                      <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 				Sarpanch</a><span>05</span></li>                                         
                      <li><a href="listing_list.html" ><i class="fa fa-hand-o-right"></i>Our Leaders</a><span>05</span></li>
                    </ul>
                  </div>
                </div>
                
                <div class="search-categories-boxes">
                  <h2><i class="fa fa-suitcase"></i> Maheela</h2>
                  <br>
                   <h2><i class="fa fa-suitcase"></i> Magazine</h2>
                   <br>
                   <h2><i class="fa fa-suitcase"></i> Entertainment</h2>
                   <br>
               </div>
                
                <!--
                 <div class="categories-list">
                  <ul>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Africa</a><span>10</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 	Europe</a><span>16</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> North America</a><span>26</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 	South America</a><span>24</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Asia</a><span>05</span></li>
                  </ul>
              </div>-->
              </div>
         
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie-list-box">
              <div class="search-categories-boxes">
                <h2><i class="fa fa-suitcase"></i> Officials</h2>
              </div>
              <div class="categories-list">
                <ul>
                  <li><a href="Doctor.php"><i class="fa fa-hand-o-right"></i>Doctors</a><span>10</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i>Law</a><span>16</span></li>
                  <li><a href="Civil_Services.php"><i class="fa fa-hand-o-right"></i> Civil Services</a><span>26</span></li>
                  <li><a href="Police_Excise.php"><i class="fa fa-hand-o-right"></i>	Police & Excise </a><span>24</span></li>
                  <li><a href="Transport.php"><i class="fa fa-hand-o-right"></i> Transport Dept.</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 	Commercial Dept.</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i>	Revenue Dept.</a><span>05</span></li> 
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i>Municipal Dept.</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Secretariat</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 	Central Govt.</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 		Education</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 		Engineers & Private Executive</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 		Finance / Bank</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 		Scientist</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 		State Govt.</a><span>05</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 			Industrial</a><span>05</span></li>
                  <!-- <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 		Private Executive</a><span>05</span></li>-->
                </ul>
              </div>
            </div>
          </div>
          <!--
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie-list-box">
              <div class="search-categories-boxes">
                <h2><i class="fa fa-user-md"></i>Advocates</h2>
              </div>
              <div class="categories-list">
                <ul>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i>Automotive</a><span>10</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Food</a><span>16</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i>Property</a><span>26</span></li>
                  <!--<li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Police </a><span>24</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Others</a><span>05</span></li>
                </ul>
              </div>
            </div>
          </div>-->
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="categorie-list-box">
                <div class="search-categories-boxes">
                  <a href="Business.php">
                  <h2><i class="fa fa-female"></i>Business</h2>
                </a>
                </div>
                <div class="categories-list">
                  <ul>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Opticals </a><span>10</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Cable</a><span>16</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Mahalaxmi Travels</a><span>26</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> NDRA GARDEN</a><span>24</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Toddy </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Real-Estate </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Wine Shop </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Bar & Restaurant  </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Hostel  </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> GRG PAPER LAMINATION   </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Kanakadurga Cable TV  </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> RTA- AGENT  </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Ex-Councilor,  Business  </a><span>05</span></li>
                    <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Matrimonial  </a><span>05</span></li>
                  </ul>
                </div>
              </div>
            </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie-list-box">
              <div class="search-categories-boxes">
                <h2><i class="fa fa-coffee"></i>Institutions</h2>
              </div>
              <div class="categories-list">
                <ul>
                  <li><a href="Schools.php"><i class="fa fa-hand-o-right"></i> Schools</a><span>10</span></li>
                  <li><a href="Colleges.php"><i class="fa fa-hand-o-right"></i> College</a><span>16</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Insitutes</a><span>26</span></li>
                 <!-- <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Shopping</a><span>24</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Others</a><span>05</span></li>-->
                </ul>
              </div>  
                          
            </div>  
            <div class="search-categories-boxes">
              <h2><i class="fa fa-cutlery"></i>NRI</h2>
            </div>
            <div class="categories-list">
              <ul>
                <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Africa</a><span>10</span></li>
                <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 	Europe</a><span>16</span></li>
                <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> North America</a><span>26</span></li>
                <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> 	South America</a><span>24</span></li>
                <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Asia</a><span>05</span></li>
              </ul>
            </div>   
            <br>
            <div class="search-categories-boxes">
                <h2><i class="fa fa-car"></i>Culture</h2>
              </div>               
          </div>
          
          </div>
         
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie-list-box">
              <div class="search-categories-boxes">
                <h2><i class="fa fa-eye"></i>Media</h2>
              </div>
              <div class="categories-list">
                <ul>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Print Media</a><span>10</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Boardcast Media</a><span>16</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Shared Media</a><span>26</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> New Partner</a><span>24</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Others</a><span>05</span></li>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie-list-box">
              <div class="search-categories-boxes">
                <h2><i class="fa fa-glass"></i>Organization</h2>
              </div>
              <div class="categories-list">
                <ul>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Automotive</a><span>10</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Food</a><span>16</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Property</a><span>26</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Shopping</a><span>24</span></li>
                  <li><a href="listing_list.html"><i class="fa fa-hand-o-right"></i> Others</a><span>05</span></li>
                </ul>
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
          <a href="about.php" class="btn-primary-link more-detail"><i class="fa fa-hand-o-right"></i> Read More</a>
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
          <p class="text-xs-center">Copyright © 20178 All Rights Reserved.</p>
          <p class="text-xs-center"><a href="http://www.iconvix.com/">Designed by Iconvix Business Solutions</a> </p>
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
          <form method = "post">
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
              <input class="submit" type="submit" value="login" name = "Login" />
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
                     echo "<script> window.location.assign('listing_submit.php'); </script>";
                     session_start();
                      $_SESSION['user_email'] =  $UserEmail  ;
                    
                                 
                   }
                }
               
          ?>
          <div class="bottom-links">
            <p>Not a Member? 
            <a href="#register" class="btn_register" data-toggle="modal" data-target="#register">Create Account</a></p>
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
          <form method = "post">
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
              <input class="submit" type="submit" value="create account" name = "create_account" />
            </div>
          </form>
 
        </div>
      </div>
    </div>
  </div>
</div>-->

<!-- Scripts --> 
<script src="js/jquery-2.2.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery_custom.js"></script> 
</body>
</html>