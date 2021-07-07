<?php
include 'connect.php';
$conn = OpenCon();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>My Web</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    
                   
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <h2 style="color:violet">INFINITI</h2>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone">Contact Us : <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">987-654-3210</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">mn@gmail.com</a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">Kanakpura ,Bengaluru</a></li>
                                <li class="button_user"><a class="button active" href="login.php">Login</a>
                                <li><img style="margin-right: 15px;" src="images/search_icon.png" alt="#"></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>WELCOME</h3><br>
                                                <h2 style="background-color:rgb(255, 99, 71);"> A Standout Clothing Retailer</h2>
                                                <p>For a one-of-a-kind shopping experience , stop by INFINITI. Founded in 2000 in Bengaluru , our business was built around styling our customers with season's greatest items.</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images/fashion1.jpg" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>WELCOME</h3><br>
                                                <h2 style="background-color:rgb(255, 99, 71);"> A Standout Clothing Retailer</h2>
                                                <p>For a one-of-a-kind shopping experience , stop by INFINITI. Founded in 2000 in Bengaluru , our business was built around styling our customers with season's greatest items.</p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="images/fashion1.jpg" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->






 






    <!-- section -->
    <section class="resip_section">
        <div class="container">
            <div class="row">
         <div class="col-md-12">
       <div class="ourheading">
    <h2>Our Products</h2>
  </div>
</div>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">

                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/mw.jpg" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Men wear</h3>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/ww.jpg" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Women wear</h3>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/k2w.jpg" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Accessories</h3>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/k4.jpg" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Kids wear</h3>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/bw.jpg" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Bags</h3>
                        
                    </div>
                </div>
               
                

            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<div class="bg_bg">
<!-- about -->
<div id="about" class="about">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
             <div class="title">
               
                <h2>About Us</h2>
                
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3>Best Place</h3>
                 <p>For a one-of-a-kind shopping experience , stop by INFINITI. Founded in 2000 in Bengaluru , our business was built around styling our customers with season's greatest items. </p>
                 <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                <figure><img src="images/cs.jpg" alt="#/"></figure>
             </div>
         </div>      
       </div> 
    </div>
</div>
<!-- end about -->

<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          
          <h2>Few of our customer's feedback</h2>
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
            <div class="blog_img_box">
            <figure><img src="images/jeans.jpg" alt="#"/>
             <span>02 FEB 2019</span>
            </figure>
          </div>
          <h3>Jeans</h3>
          <p>These are amazing!!!!! I am so glad I found you! I am going to order one or two more pairs as soon as I can. Thank you so much!!!! ~Ann </p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/shirt.jpg" alt="#"/>
             <span>20 May 2019</span>
            </figure>
          </div>
          <h3>Shirt</h3>
          <p>Just a note to say thank you for my friend who suggested this place. This shirt is simply perfect and amazing! ~Tracy</p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/earings.jpg" alt="#"/>
             <span>4 June 2019</span>
            </figure>
          </div>
          <h3>Earings</h3>
          <p>They are perfect!! . Thanks so much for wonderful assistance from the staff!! I'll be buying  another pair soon. ~Jamie</p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
    <!-- footer -->
    <fooetr>
        <div align="center"class="footer">
            <div align="center" class="container-fluid">
                <div align="center" class="row">
                  <!-- <div class=" col-md-12"> -->
                    <h2  text-align:center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank You!!<strong class="white" text-align:center>visit again </strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                       
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/fashion2.jpg" alt="img" /></figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="lik">
                            <li class="active"> <a href="#">Home</a></li>
                            <li> <a href="#about">About</a></li>
                            
                            
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="new">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    
                </div>
            </div>
        </div>
    </fooetr>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

</body>

</html>