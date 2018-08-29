<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="utf-8">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });

</script>
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
  <div class="container">
   <div class="row">
     </div>
    </div>
    </div>
  
     <div id="logo-header" data-spy="affix" data-offset-top="500">
     
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-9">
       <!-- <div id="logo"> <a href="index.html">
          <img src="images/logo-goudInfo.png" alt="logo">-->
          </a> </div>
      </div>
      <div class="col-sm-9 text-right">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#thrift-1" aria-expanded="false"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="thrift-1"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
            <div id="nav_menu_list">
              <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="History.php">History</a></li>
                <!--<li><a href="GOPA.html" data-toggle="tooltip" data-placement="top"
                   title="Gouds officials & Professional Association">GOPA</a></li>-->
                <li><a href="categories.php">Categories</a></li>
                <li><a href="gallery.php">Gallery</a></li>
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

<div id="location-map-block">
  <div id="location-homemap-block"></div>  
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <div id="location-link-item">
          <button id="map_list"><i class="fa fa-angle-double-up"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div id="home-slider-item" style="padding-top: 0px;">
                <span class="helpyou_item">
                  <!--
                    <span>
                        Welcome</span>-->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                              </ol>       
                       
                              <div class="carousel-inner">
                                <div class="item active">
                                  <img src="images/home-banner-1.jpg" alt="Los Angeles" style="width:200%;">
                              </div>                              
                              <div class="item ">
                                <img src="images/home-banner-2.jpg" alt="Los Angeles" style="width:200%;">
                              </div>
                              <div class="item ">
                                  <img src="images/home-banner-3.jpg" alt="Los Angeles" style="width:200%;">
                              </div>
                              <div class="item ">
                                  <img src="images/home-banner-4.jpg" alt="Los Angeles" style="width:200%;">
                              </div>
                              <div class="item ">
                                  <img src="images/home-banner-5.jpg" alt="Los Angeles" style="width:200%;">
                              </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                        </div>                        
                    </span>            
               </span>                   
            </div>      
        </div>      
    </div>
</div>  

<div id="search-categorie-item">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="row">
          <div class="col-md-12 categories-heading bt_heading_3">
            <h1><span>Categories</span></h1>
            <div class="blind line_1"></div>
            <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
            <div class="blind line_2"></div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="Famous.php"/>
              <div class="cate_item_block hi-icon-effect-8">                  
                <div class="cate_item_social hi-icon"><i class="fa fa-history"></i></div>
                <h1><a href="Famous.php">Famous Gouds</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="Doctor.php"/>
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon">
                  <img src="images/Doctor.png" alt="political">
                  <!--<i class="fa fa-send"></i>-->
                  </div>
                <h1><a href="Doctor.php">Doctor</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="categories.php"/>
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon">
                    <img src="images/officials-3.png" alt="officials">
                 <!-- <i class="fa fa-suitcase"></i>-->
                </div>
                <h1><a href="categories.php">Officials</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="Politics.php"/>
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon">
                    <img src="images/political.png" alt="institutions">
                 <!-- <i class="fa fa-eye"></i>-->
                </div>
                <h1><a href="Politics.php">Politics</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="categories.php"/>
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon">
                    <img src="images/NRI.png" alt="Business">
                  <!--<i class="fa fa-heart"></i>-->
                </div>
                <h1><a href="categories.php">NRI</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="categories.php"/>
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon">
                 <!-- <i class="fa fa-female"></i>-->
                 <img src="images/entrepreneur.png" alt="Real Estate">
                </div>
                <h1><a href="categories.php">Entrepreneurs</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="categories.php"/>
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon">
                <!--  <i class="fa fa-gears"></i>-->
                <img src="images/business.png" alt="Computer">
                </div>
                <h1><a href="categories.php">Business</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="categories.php"/>
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon">
                <!--  <i class="fa fa-users"></i>-->
                <img src="images/advocate.png" alt="NRI">
                </div>
                <h1><a href="categories.php">Advocates</a></h1>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
                <a href="member-ship.php"/>
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon">
                  <!--<i class="fa fa-users"></i>-->
                  <img src="images/membeship-icon.png" alt="Media">
              </div>
                <h1><a href="member-ship.php">Members</a></h1>
              </div>              
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="categorie_item">
                  <a href="categories.php"/>
                <div class="cate_item_block hi-icon-effect-8">
                  <div class="cate_item_social hi-icon">
                    <!--<i class="fa fa-users"></i>-->
                    <img src="images/media.png" alt="Culture">
                </div>
                  <h1><a href="categories.php">Media</a></h1>
                </div>              
              </div>
            </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="categorie_item">
                      <a href="categories.php"/>
                    <div class="cate_item_block hi-icon-effect-8">
                      <div class="cate_item_social hi-icon">
                        <!--<i class="fa fa-users"></i>-->
                        <img src="images/mahila.png" alt="Socities">
                    </div>
                      <h1><a href="categories.php">Mahila</a></h1>
                    </div>              
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="categorie_item">
                        <a href="categories.php"/>
                      <div class="cate_item_block hi-icon-effect-8">
                        <div class="cate_item_social hi-icon">
                          <!--<i class="fa fa-users"></i>-->
                          <img src="images/culture-1.png" alt="Hostels">
                      </div>
                        <h1><a href="categories.php">Culture</a></h1>
                      </div>              
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="categorie_item">
                          <a href="categories.php"/>
                        <div class="cate_item_block hi-icon-effect-8">
                          <div class="cate_item_social hi-icon">
                            <!--<i class="fa fa-users"></i>-->
                            <img src="images/organization.png" alt="Entertainment">
                        </div>
                          <h1><a href="categories.php">Organization</a></h1>
                        </div>              
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="categorie_item">
                            <a href="categories.php"/>
                          <div class="cate_item_block hi-icon-effect-8">
                            <div class="cate_item_social hi-icon">
                              <!--<i class="fa fa-users"></i>-->
                              <img src="images/entertainment.png" alt="Matrimonial">
                          </div>
                            <h1><a href="categories.php">Entertainment</a></h1>
                          </div>              
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="categorie_item">
                              <a href="Matrimonial.php"/>
                            <div class="cate_item_block hi-icon-effect-8">
                              <div class="cate_item_social hi-icon">
                                <!--<i class="fa fa-users"></i>-->
                                <img src="images/matrimonial.png" alt="Magazines">
                            </div>
                              <h1><a href="Matrimonial.php">Matrimonial</a></h1>
                            </div>              
                          </div>
                        </div>                        
                          <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="categorie_item">
                                <a href="categories.php"/>
                              <div class="cate_item_block hi-icon-effect-8">
                                <div class="cate_item_social hi-icon">
                                  <!--<i class="fa fa-users"></i>-->
                                  <img src="images/news.png" alt="News & Events">
                              </div>
                                <h1><a href="categories.php">News</a></h1>
                              </div>              
                            </div>
                          </div>
                          </div>    </div>
      </div>
    </div>
  </div>
</div>


<div class="container" style="padding-bottom: 75px;">
  <div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
      <a href="https://www.goudsmatrimonial.com/"data-toggle="tooltip" data-placement="top"
      title="Click to navigate to  Matrimonial"  target="_blank">   
          <img src="images/matrimonial-banner.JPG" height="200px;" width="1280px;"/>         
        </a>
    </div>
  </div>
</div>

<br>
<div class="vfx-counter-block">
  <div class="vfx-item-container-slope vfx-item-bottom-slope vfx-item-left-slope"></div>
  <div class="container">
    <div class="vfx-item-counter-up">
      <div class="row">
        <div class="col-md-2 col-sm-6 col-xs-10">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-file"></i></div>
            <div id="count-1" class="vfx-coutter-item count_number vfx-item-count-up">496</div>
            <div class="counter_text">politicians</div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-10">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-users"></i></div>
            <div id="count-2" class="vfx-coutter-item count_number vfx-item-count-up">245</div>
            <div class="counter_text">Users</div>
          </div>
          <!--
          
            -->
        </div>
        <div class="col-md-2 col-sm-6 col-xs-10">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-th"></i></div>
            <div id="count-3" class="vfx-coutter-item count_number vfx-item-count-up">96</div>
            <div class="counter_text"> Users Visited</div>
           
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-10">
          <div class="vfx-item-countup last-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-th-list"></i></div>
            <div id="count-4" class="vfx-coutter-item count_number vfx-item-count-up">274</div>
            <div class="counter_text">Categories</div>
            
          </div>          
        </div>
        <div class="col-md-2 col-sm-6 col-xs-10">
            <div class="vfx-item-countup">
              <div class="vfx-item-black-top-arrow"><i class="fa fa-users"></i></div>
              <div id="count-2" class="vfx-coutter-item count_number vfx-item-count-up">345</div>
              <div class="counter_text">NRI</div>
              
            </div>
      </div>
    </div>
  </div>
</div>
<div id="recent-product-item-listing">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 recent-item-listing-heading bt_heading_3">
          <h1>Our <span style="color: #ff4300">Sponsors</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <marquee behavior="alternate">
                  <a href="http://www.iconvix.com/">
                    <img src="images/product/Iconvix Logo.PNG" alt="img1" height="150px" width="150px" data-toggle="tooltip" data-placement="top"
                    title="Iconvix Busines Solutions"  target="_blank"> 
                  </a>
                    <img src="images/product/img1.png" alt="img1" height="150px" width="150px"> 
                    <img src="images/product/img1.png" alt="img1" height="150px" width="150px"> 
                    <img src="images/product/img1.png" alt="img1" height="150px" width="150px"> 
                    <img src="images/product/img1.png" alt="img1" height="150px" width="150px"> 
                    <img src="images/product/img1.png" alt="img1" height="150px" width="150px"> 
                    <img src="images/product/img1.png" alt="img1" height="150px" width="150px"> 
                    <img src="images/product/img1.png" alt="img1" height="150px" width="150px"> 
                    </marquee>
            </div>
        </div>
       
      </div>
    </div>
  </div>
</div>
<div id="pricing-item-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 pricing-heading-title bt_heading_3">
          <h1>మా  <span style="color:#ff4300" >కథ</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block">
              <h1>వ్యాపారం</h1>
              <hr>
             
              <p>వ్యాపారం <span>గురించి</span> </p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <!--
              <div class="vfx-price-list-item">
                <h2>పరిమిత సంఖ్య</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>అన్ని కోసం ఒక ఏజెంట్</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది..</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>మెయిల్ కమ్యూనికేషన్</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది.</p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn"><i class="fa fa-unlock-alt"></i>ఇప్పుడు కొను</button>
              </div>-->
            </div> 
          </div>
         
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block active">
              <h1> రాజకీయాలు</h1>
              <hr>
              <p>రాజకీయాలు <span>గురించి</span></p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <!--
              <div class="vfx-price-list-item">
                <h2>అపరిమిత సంఖ్య</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>అన్ని కోసం ఒక ఏజెంట్</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>మెయిల్ కమ్యూనికేషన్</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది.</p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn"><i class="fa fa-unlock-alt"></i>ఇప్పుడు కొను</button>
              </div>-->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block">
              <h1>చదువు</h1>
              <hr>
              <p>విద్య <span>సంబంధిత</span> </p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <!--
              <div class="vfx-price-list-item">
                <h2> అపరిమిత సంఖ్య</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>అన్ని కోసం ఒక ఏజెంట్</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>వ్యక్తిగత శిక్షణ</h2>
                <p>మా కంపెనీ ఫీల్డ్ ఎజెంట్ మరియు కంపెనీల కోసం ఉత్తమ ధర ఎంపికలను అందిస్తుంది.</p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn"><i class="fa fa-unlock-alt"></i> ఇప్పుడు కొను</button>
              </div>-->
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
          <p class="about-lt">The aim of our adventure is to acquaint about the Goud community to the people around the world. 
            We are planning to bring this community people in one track.</p>
          <a href="about.html" class="btn-primary-link more-detail"><i class="fa fa-hand-o-right"></i> Read More</a>
          <h2>Follow Us</h2>
          <hr>
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            -->
          </ul>
        </div>
       
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Useful links</h2>
          <hr>
          <ul class="use-slt-link">
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Privacy & Policy</a></li>
           <!-- <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Payment Method</a></li>-->
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
          <p class="text-xs-center">Copyright © 2018 All Rights Reserved.</p>
          <p class="text-xs-center"><a href="http://www.iconvix.com/"  target="_blank">Designed by Iconvix Business Solutions</a> </p>
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
          <form method="post">
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
              <input class="submit" type="submit" value="login" name ="Login" />
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
               <a href="#register" class="btn_register" data-toggle="modal" data-target="#register">Create Account</a>
               </p>
           <!--<button class="btn_register" data-toggle="modal" data-target="#register">Register</button>-->
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
<div class="modal" id="register">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Registration</h4>
      </div>
      <div class="modal-body">
      
        <div class="listing-register-form">
        <div id = "register_output"></div>
          <form method="post">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" id="inputName" name="user_name" placeholder="Name"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-envelope blue-1"></i>
              <input class="form-field bgwhite" type="email" id="inputEmail" name="user_email" placeholder="Email" />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" id="inputpassword"  name="user_password" placeholder="Password"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" id="Confirm_inputpassword" name="user_confirm_password" placeholder="Confirm Password" />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20 login_form_text_center">
              <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" />
              <label for="checkbox-1-2"></label>
              <label class="checkbox-lable">i agree with</label> &nbsp; <a href="#">Terms & Conditions</a> </div>
            <div class="listing-form-field">
            <button  id ="submit"class="btn btn-primary submitBtn">SUBMIT</button>
            <!--<input class="submit" type="submit" value="create account" name = "create_account" />
            </div>
          </form>
         </div>
      </div>
    </div>
  </div>
</div>-->
<!-- Scripts --> 
<script src="js/jquery-2.2.4.min.js">
/*
$('#buttonId').on( 'click', function () {
   // either call do_save or embed the contents of do_save in here
   var myDataIsValid = true; // change to call validator function
   if (myDataIsValid) {
     $('#myModal').modal('hide');
   }
   return true; // value depends on whether you want stopPropagation or not.
});
</script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/jquery_counterup.js"></script> 
<script src="js/jquery_custom.js"></script> 
<script src="js/homemap_custom.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
</body>
</html>