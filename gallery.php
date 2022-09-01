<!DOCTYPE html>

<html lang="en">

<?php 
    include_once("./admin/database/connect.php");
    include_once("./admin/database/endpoint.php");

    $object = new query();

    $gallery = $object->RetrieveDataWithLimit("gallery_image",9);
?>


<!-- Mirrored from thewebmax.com/spa/gallery-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 10:12:23 GMT -->
<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Spa | Gallery</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/switcher.css">    

    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    
 
</head>

<body id="bg">
	
    <div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <header class="site-header header-style-1 ">
        
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                    	<div class="wt-topbar-left clearfix">
                        	<ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i>mail@startuprr.com</li>
                                <li><i class="fa fa-phone"></i>(888) 123-4567</li>
                            </ul>
                        </div>
                        <div class="wt-topbar-right clearfix">
                        	<ul class="social-bx list-inline pull-right">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Link -->

<!-- Search Form -->

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <a href="index.php">
                                <img src="images/logo.png" width="216" height="37" alt="" />
                            </a>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                        
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                            
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                
                                <li >
                                    <a href="services.php">Services</a>
                                </li>
                            
                                <li>
                                    <a href="clients.php">Clients</a>
                                </li>
                                
                                <li class="active">
                                    <a href="gallery.php">Galary</a>
                                </li>

                                <li >
                                    <a href="contact.php">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/gallery-banner.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Gallery Grid 2</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>Gallery Grid 2</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                
                    <!-- PAGINATION TOP START -->
                    <!-- <div class="filter-wrap p-tb15">
                        <ul class="masonry-filter link-style  text-uppercase">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".cat-1" href="#">Spa</a></li>
                            <li><a data-filter=".cat-2" href="#">Hair Makeup</a></li>
                            <li><a data-filter=".cat-3" href="#">Waxing</a></li>
                            <li><a data-filter=".cat-4" href="#">Facial</a></li>
                            <li><a data-filter=".cat-5" href="#">Massage</a></li>
                        </ul>
                    </div> -->
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                    <div class="row">
                        <div class="portfolio-wrap mfp-gallery no-col-gap">
                        
                        <?php foreach($gallery as $item) {?>
                    		<!-- COLUMNS 1 -->
                            <div class="masonry-item cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx p-a15">
                                    <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                        <a href="javascript:void(0);">
                                            <img src="./admin/content/assets/img/gallery/<?php echo $item['image'] ?>"  alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <!-- <a href="javascript:void(0);">
                                                    <i class="fa fa-external-link wt-icon-box-xs"></i>
                                                </a> -->
                                                <a href="./admin/content/assets/img/gallery/<?php echo $item['image'] ?>" class="mfp-link">
                                                    <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }  ?>

                    
                    </div>
                    <!-- GALLERY CONTENT END -->
                    
                    <!-- PAGINATION START -->
                    <!-- <div class="pagination-bx  clearfix ">
                        <ul class = "custom-pagination pagination">
                           <li><a href = "#">&laquo;</a></li>
                           <li class = "active"><a href = "#">1</a></li>
                           <li><a href = "#">2</a></li>
                           <li><a href = "#">3</a></li>
                           <li><a href = "#">4</a></li>
                           <li><a href = "#">5</a></li>
                           <li><a href = "#">&raquo;</a></li>
                        </ul>
                    </div> -->
                    <!-- PAGINATION END -->                    
                    
                </div>
            </div>
            <!-- SECTION CONTENT END -->
        
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <footer class="site-footer footer-dark">
            <!-- COLL-TO ACTION START -->
            <div class="call-to-action-wrap call-to-action-skew bg-primary bg-no-repeat" style="background-image:url(images/background/bg-4.html);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="call-to-action-left p-tb20 p-r50">
                                <h4 class="text-uppercase m-b10">We are ready to build your dream tell us more about your project</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="call-to-action-right p-tb30">
                                <a href="contact.php" class="site-button-secondry radius-sm text-uppercase font-weight-600">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-md-3 col-sm-6">  
                            <div class="widget widget_about">
                                <h4 class="widget-title">About Company</h4>
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.php"><img src="images/footer-logo.png" width="230" height="67" alt=""/></a>
                                </div>
                                <p>Thewebmax ipsum dolor sit amet, consectetuer adipiscing elit,
                                      sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat .   
                                      wisi enim ad minim veniam, quis tation. sit amet, consec tetuer.
                                      ipsum dolor sit amet, consectetuer adipiscing.ipsum dolor sit .
                                </p>  
                            </div>
                        </div> 
                        <!-- RESENT POST -->
                        <!-- <div class="col-md-3 col-sm-6">
                            <div class="widget recent-posts-entry-date">
                                <h4 class="widget-title">Resent Post</h4>
                                <div class="widget-post-bx">
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                            <strong>20</strong>
                                            <span>Mar</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                            <strong>30</strong>
                                            <span>Mar</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 29</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                            <strong>31</strong>
                                            <span>Mar</span>
                                        </div>
                                        <div class="wt-post-info">
                                            <div class="wt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                            </div>
                                            <div class="wt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 30</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>       -->
                        <!-- USEFUL LINKS -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title">Useful links</h4>
                                <ul>
                                    <li><a href="about-1.html">About</a></li>
                                    <li><a href="faq-1.html">FAQ</a></li>
                                    <li><a href="career.html">Career</a></li>
                                    <li><a href="our-team.html">Our Team</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="gallery-grid-1.html">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- NEWSLETTER -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_newsletter">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="newsletter-bx">
                                    <form role="search" method="post" id="news_letter">
                                        <div class="input-group">
                                        <input name="news-letter" id="phone2" class="form-control" placeholder="ENTER YOUR Mobible Number" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button">Submit</button>
                                        </span>
                                    </div>
                                     </form>
                                </div>
                            </div>
                            <!-- SOCIAL LINKS -->
                            <div class="widget widget_social_inks">
                                <h4 class="widget-title">Social Links</h4>
                                <ul class="social-icons social-square social-darkest">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    
                       <div class="col-md-3 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-primary">
                                    <span class="iconmoon-travel"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Address</h5>
                                    <p>No.123 Chalingt Gates, Supper market New York</p>
                                </div>
                           </div>
                        </div>
                       <div class="col-md-3 col-sm-6  p-tb20 ">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                <div class="icon-md text-primary">
                                    <span class="iconmoon-smartphone-1"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
                                    <p class="m-b0">+41 555 888 9585</p>
                                    <p>+41 555 888 9585</p>
                                </div>
                           </div>
                       </div>
                       <div class="col-md-3 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-primary">
                                    <span class="iconmoon-fax"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Fax</h5>
                                    <p class="m-b0">FAX: (123) 123-4567</p>
                                    <p>FAX: (123) 123-4567</p>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-3 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-primary">
                                    <span class="iconmoon-email"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                                    <p class="m-b0">info@demo.com</p>
                                    <p>info@demo1234.com</p>
                                </div>
                            </div>
                        </div>

                  </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">© 2017 Your Company. All Rights Reserved. Designed By thewebmax.</span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right"> 
                                <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                                <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                <li><a href="contact-1.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
        
    </div>
    

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= --> 
<script type="text/javascript" src="./js/custom/newsletter.js" defer></script>

<script   src="js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script   src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script   src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script   src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script   src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   --> 

<script   src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->






<!-- STYLE SWITCHER  ======= --> 
<div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>
    
    <div class="styleswitcher-inner">
    
        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="gallery-grid-2a39b.html?theme=css/skin/skin-1" title="default Theme"></a></li>
            <li><a class="theme-skin skin-2" href="gallery-grid-261e7.html?theme=css/skin/skin-2" title="pink Theme"></a></li>
            <li><a class="theme-skin skin-3" href="gallery-grid-2cce5.html?theme=css/skin/skin-3" title="sky Theme"></a></li>
            <li><a class="theme-skin skin-4" href="gallery-grid-213f7.html?theme=css/skin/skin-4" title="green Theme"></a></li>
            <li><a class="theme-skin skin-5" href="gallery-grid-219a6.html?theme=css/skin/skin-5" title="red Theme"></a></li>
            <li><a class="theme-skin skin-6" href="gallery-grid-2fe5c.html?theme=css/skin/skin-6" title="orange Theme"></a></li>
            <li><a class="theme-skin skin-7" href="gallery-grid-2ab47.html?theme=css/skin/skin-7" title="purple Theme"></a></li>
            <li><a class="theme-skin skin-8" href="gallery-grid-25f8d.html?theme=css/skin/skin-8" title="blue Theme"></a></li>
            <li><a class="theme-skin skin-9" href="gallery-grid-25663.html?theme=css/skin/skin-9" title="gray Theme"></a></li>
            <li><a class="theme-skin skin-10" href="gallery-grid-228ac.html?theme=css/skin/skin-10" title="brown Theme"></a></li>
            <li><a class="theme-skin skin-11" href="gallery-grid-226b8.html?theme=css/skin/skin-11" title="gray Theme"></a></li>
            <li><a class="theme-skin skin-12" href="gallery-grid-27f4c.html?theme=css/skin/skin-12" title="golden Theme"></a></li>
        </ul>   
        
        <h6 class="switcher-title">Nav</h6>
        <ul class="nav-view">
            <li class="nav-light active">Light</li>
            <li class="nav-dark">Dark</li>
        </ul>
        
        <h6 class="switcher-title">Nav</h6>
        <ul class="nav-width">
            <li class="nav-boxed active">Boxed</li>
            <li class="nav-wide">Wide</li>
        </ul>   
        
        <h6 class="switcher-title">Header</h6>
        <ul class="header-view">
            <li class="header-fixed active">Fixed</li>
            <li class="header-static">Static</li>
        </ul> 
        
        <h6 class="switcher-title">Layout</h6>
        <ul class="layout-view">
            <li class="wide-layout active">Wide</li>
            <li class="boxed">Boxed</li>
        </ul>   
                    
        <h6 class="switcher-title">Background Image</h6>
        <ul class="background-switcher">
            <li><img src="images/switcher/switcher-bg/thum/bg1.jpg" rel="images/switcher/switcher-bg/large/bg1.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-bg/thum/bg2.jpg" rel="images/switcher/switcher-bg/large/bg2.jpg"  alt=""></li>
            <li><img src="images/switcher/switcher-bg/thum/bg3.jpg" rel="images/switcher/switcher-bg/large/bg3.jpg"  alt=""></li>
            <li><img src="images/switcher/switcher-bg/thum/bg4.jpg" rel="images/switcher/switcher-bg/large/bg4.jpg"  alt=""></li>
        </ul>
        
        <h6 class="switcher-title">Background Pattern</h6>
        <ul class="pattern-switcher">
            <li><img src="images/switcher/switcher-patterns/thum/bg1.jpg"  rel="images/switcher/switcher-patterns/large/pt1.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg2.jpg"  rel="images/switcher/switcher-patterns/large/pt2.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg3.jpg"  rel="images/switcher/switcher-patterns/large/pt3.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg4.jpg"  rel="images/switcher/switcher-patterns/large/pt4.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg5.jpg"  rel="images/switcher/switcher-patterns/large/pt5.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg6.jpg"  rel="images/switcher/switcher-patterns/large/pt6.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg7.jpg"  rel="images/switcher/switcher-patterns/large/pt7.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg8.jpg"  rel="images/switcher/switcher-patterns/large/pt8.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg9.jpg"  rel="images/switcher/switcher-patterns/large/pt9.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg10.jpg"  rel="images/switcher/switcher-patterns/large/pt10.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg11.jpg"  rel="images/switcher/switcher-patterns/large/pt11.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg12.jpg"  rel="images/switcher/switcher-patterns/large/pt12.jpg" alt=""></li>
        </ul>
        
        
    </div>    
</div>
<!-- STYLE SWITCHER END ==== -->


 
 
<!-- =========MODEL========== -->
<div class="m-b30">
                                <!-- <h4 class="text-uppercase m-b20 m-t50">Default Modal</h4>  -->
                                 
                                <!-- TRIGGER THE MODAL WITH A BUTTON -->
                                <button style="display:none" id="model_btn" type="button" class="site-button  m-r15" data-toggle="modal" data-target="#Default-Modal">Default Modal  <i class="fa fa-angle-double-right"></i></button>
                                <!-- MODAL -->
                                <div id="Default-Modal" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <!-- MODAL CONTENT-->
                                    <div class="modal-content">
                                      <div class="modal-header bg-primary">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title text-white">Success</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Your Feedback is Successfully Received. Thank You!</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="site-button " data-dismiss="modal">Close
                                         <i class="fa fa-angle-double-right"></i></button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                            </div>
<!-- =======MODEL END======== -->


 


</body>


<!-- Mirrored from thewebmax.com/spa/gallery-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 10:12:26 GMT -->
</html>
