<!DOCTYPE html>

<html lang="en">
<?php 
    include_once("./admin/database/connect.php");
    include_once("./admin/database/endpoint.php");

    $object = new query();

    $slider = $object->RetrieveDataWithLimit("slider",3);
    $counter = $object->RetriveData("clients");
    $gallery = $object->RetrieveDataWithLimit("gallery_image",8);
    $testimonial = $object->RetrieveDataWithLimit("testimonials",4);
?>

<!-- Mirrored from thewebmax.com/spa/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 10:10:09 GMT -->
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
    <title>Spa | Home Page </title>
    
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

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>
                            
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                
                                <li>
                                    <a href="services.php">Services</a>
                                </li>
                            
                                <li>
                                    <a href="clients.php">Clients</a>
                                </li>
                                
                                <li >
                                    <a href="gallery.php">Galary</a>
                                </li>

                                <li class="submenu-direction">
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
        
            <!-- SLIDER START -->
            <div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="webproduct-light" data-source="gallery" style="background-color:transparent;padding:0px;">
            	<!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_1050_1" class="slider-dots rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>	

                    <?php
                    $slide_counter =2938;
                    foreach($slider as $item)
                    {  ?>
                             
                        <!-- SLIDE  -->
                        <li data-index="rs-<?php echo $slide_counter;   ?>" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"   data-thumb="images/main-slider/slider2/slide1.jpg"  data-rotate="0"  data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="./admin/content/assets/img/slider/<?php echo $item['image']?>" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                           
                    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme" 
                                id="slide-2938-layer-01" 
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']" 
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']" 
                                data-fontsize="['57','55','55','45']"
                                data-lineheight="['65','65','65','65']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
                    
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;">
                                <div class="text-secondry"> <?php echo $item['slider_text_1']?>  <span class="text-primary">  <?php echo $item['slider_text_2']?></span></div>
                                </div>
                    
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle   tp-resizeme" 
                                id="slide-2938-layer-02" 
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']" 
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']" 
                                data-fontsize="['55','55','55','45']"
                                data-lineheight="['75','75','75','75']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
                    
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 12; 
                                white-space: nowrap;
                                text-transform:uppercase;
                               	font-weight: 700;
                                ">
                                <div class="text-secondry">
                                	<span class="text-primary"><?php  echo $item['slider_text_3'];  ?></span> <?php  echo $item['slider_text_4'];  ?>
                                </div>
                                </div>
                    
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme" 
                                 id="slide-2938-layer-03" 
                                 data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']" 
                                 data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']" 
                                data-fontsize="['21','21','24','18']"
                                data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']"
                                data-height="['none','none','76','68']"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
                    
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index: 13; white-space: normal;">
                                <div class="text-secondry"> <?php  echo $item['slider_text_line'];  ?> ></div>
                                </div>
                    
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" 
                                id="slide-2938-layer-04" 
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']" 
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="button" 
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" 
                                data-responsive="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                    
                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                               <a href="services.php" class="site-button radius-sm button-lg">See all Services</a>
                               </div>
                            <!-- LAYER NR. 5 -->
                            
                            <div class="tp-caption tp-resizeme" 
                                id="slide-2938-layer-05" 
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']" 
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                     
                                data-type="button" 
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" 
                                data-responsive="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"
                    
                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                               <!-- <a href="javascript:;" class="site-button-secondry radius-sm button-lg">More detail</a> -->
                               </div>
                                                           
                        </li>
                    <?php $slide_counter++; }?>


                        <!-- SLIDE  -->
                        
                        <!-- SLIDE  -->
                                                                        
                    </ul>
                    	
                </div>
            </div>
            <!-- SLIDER END -->
            
            <!-- WELCOME SECTION START -->
            <div class="section-full p-tb100 bg-bottom-center bg-full-width bg-no-repeat" style="background-image:url(images/background/bg-1.png);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h1><span class="text-primary"> Welcome to </span> Spa center</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        
                        <p class="font-16"><strong>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                          </strong>
                        </p>
                        
                    </div>
                    <div class="section-content text-center about-spa">
                    	<p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining unchanged. It was popularised in the 1960s with the release Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.
                        </p>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-female-hairs"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Massage Therapy</h4>
                                        <p class="text-secondry">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-scissors"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Natural Spa</h4>
                                        <p class="text-secondry">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 m-b30">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-shaving"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Skin & Beauty Care</h4>
                                        <p class="text-secondry">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a class="m-b15 site-button text-uppercase radius-sm m-lr15 font-weight-700 button-lg" >See our Plans</a>
                            <!-- <a class="m-b15 site-button-secondry text-uppercase radius-sm m-lr15 font-weight-700 button-lg">More Detail</a> -->
                        </div>
                    </div>
                </div>
            </div>   
            <!-- WELCOME COMPANY SECTION END -->
                       
            <!-- OUR SERVICES SECTION START  -->

            <!-- OUR SERVICES SECTION END  -->  
            
             <!-- PRICING SECTION START  -->
            <div class="section-full bg-white p-t80 p-b120">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1><span class="text-primary">Our</span> Services</h1>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="owl-carousel our-pricing-carousel owl-btn-vertical-center owl-btn-hover nav nav-tabs">
                        	
                            <!-- Block 1 -->
                            <div class="item active-arrow active">
                                <div data-toggle="tab" data-target="#pricing-item1" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                        	<div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-people"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Spa</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 2 -->
                            <div class="item">
                                <div data-toggle="tab" data-target="#pricing-item2" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                            <div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-eye"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Hair Makeup</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 3 -->
                            <div class="item">
                                <div data-toggle="tab" data-target="#pricing-item3" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                        	<div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-female-hairs"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Waxing</span>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 4 -->
                            <div class="item">
                                <div data-toggle="tab" data-target="#pricing-item4" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                            <div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-mirror"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Facial</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 5 -->
                            <div class="item">
                                <div data-toggle="tab" data-target="#pricing-item5" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                            <div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-spray-bottle"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Massage</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 6 -->
                            <div class="item">
                                <div data-toggle="tab" data-target="#pricing-item6" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                        	<div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-people"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Spa</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 7 -->
                            <div class="item">
                                <div data-toggle="tab" data-target="#pricing-item7" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                            <div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-eye"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Hair Makeup</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                        
                    <div class="tab-content">
                        <!-- Block 1 -->
                        <div id="pricing-item1" class="pricing-tab-content-block tab-pane active active-arrow">
                            <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#pricing-tab1-1">Massage Therapy</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab1-2">Facials </a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab1-3">Pedicures</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab1-4">Manicures</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab1-5">Body Wraps</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab1-6">Waxing & Cosmetics</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">
                                        
                                            <div id="pricing-tab1-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Massage Therapy </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab1-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Facials </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab1-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Pedicures </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab1-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Manicures</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab1-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s5.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Body Wraps</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab1-6" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s6.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Waxing & Cosmetics</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Block 2 -->
                        <div id="pricing-item2" class="pricing-tab-content-block tab-pane">
                            <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#pricing-tab2-1">Hair Color</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab2-2">Braids & Twist</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab2-3">Corrective Color</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab2-4">Hair Extension</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab2-5">Hair Cut</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab2-6">Partial Foil</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">
                                        
                                            <div id="pricing-tab2-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Hair Color </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab2-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Braids & Twist </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab2-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Corrective Color</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab2-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s5.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Hair Extension</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab2-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s6.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Hair Cut</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab2-6" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s1.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Partial Foil</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Block 3 -->
                        <div id="pricing-item3" class="pricing-tab-content-block tab-pane">
                            <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#pricing-tab3-1">Eye Brows </a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab3-2">Lips </a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab3-3">Eye Brow & Lips</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab3-4">Chin & Lips </a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab3-5">Side of Face</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab3-6">Lower Leg</a></li>    
                                        </ul>
                                        <div class="tab-content p-l50">
                                        
                                            <div id="pricing-tab3-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s3.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Eye Brows </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab3-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s4.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Lips </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab3-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s5.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Eye Brow & Lips </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab3-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s6.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Chin & Lips </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab3-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s1.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Side of Face</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab3-6" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s2.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Lower Leg</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Block 4 -->
                        <div id="pricing-item4" class="pricing-tab-content-block tab-pane">
                            <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#pricing-tab4-1">Hand-On Facial </a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab4-2">Electrotherapy </a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab4-3">Clean up</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab4-4">Anti Ageing </a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab4-5">Glow & Radiance</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab4-6">Normal Wash</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">
                                        
                                            <div id="pricing-tab4-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s4.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Hand-On Facial</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab4-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s5.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Electrotherapy </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab4-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s6.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Clean up</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab4-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s1.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Anti Ageing </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab4-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s2.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Glow & Radiance</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab4-6" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s3.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Normal Wash</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Block 5 -->
                        <div id="pricing-item5" class="pricing-tab-content-block tab-pane">
                            <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#pricing-tab5-1">Head</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab5-2">Back</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab5-3">Foot</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab5-4">Aromatherapy</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab5-5">Scrub</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab5-6">Tissue</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">
                                        
                                            <div id="pricing-tab5-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s5.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Head</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab5-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s6.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Back </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab5-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s1.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Foot</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab5-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s2.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Aromatherapy</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab5-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s3.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Scrub</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab5-6" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s4.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Tissue</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Block 6 -->
                        <div id="pricing-item6" class="pricing-tab-content-block tab-pane ">
                            <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#pricing-tab6-1">Massage Therapy</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab6-2">Facials </a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab6-3">Pedicures</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab6-4">Manicures</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab6-5">Body Wraps</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab6-6">Waxing & Cosmetics</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">
                                        
                                            <div id="pricing-tab6-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s6.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Massage Therapy </h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab6-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Facials</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab6-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Pedicures</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab6-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Manicures</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab6-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Body Wraps</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab6-6" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s5.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Waxing & Cosmetics</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Block 7 -->
                        <div id="pricing-item7" class="pricing-tab-content-block tab-pane">
                            <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#pricing-tab7-1">Hair Color</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab7-2">Braids & Twist</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab7-3">Corrective Color</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab7-4">Hair Extension</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab7-5">Hair Cut</a></li>
                                            <li><a data-toggle="tab" href="#pricing-tab7-6">Partial Foil</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">
                                        
                                            <div id="pricing-tab7-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Hair Color</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab7-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Braids & Twist</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab7-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s3.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Corrective Color</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab7-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Hair Extension</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab7-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s5.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Hair Cut</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="pricing-tab7-6" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s6.jpg"  alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 p-b20 font-weight-400">Partial Foil</h3>
                                                                <!-- <h4 class="text-primary">$40 - $80</h4> -->
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                                text of the printing and eentially unchanged.
                                                                </p>
                                                                <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                  <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- PRICING SECTION END  -->   
                                
            <!-- COMPANY STATUS SECTION START -->
            <div class="section-full overlay-wraper bg-center bg-cover p-tb80 bg-primary"  style="background-image:url(images/background/bg-9.jpg);">
            	<div class="overlay-main bg-primary opacity-09"></div>
            	<div class="container summary-counter">
                    <div class="row">
                    	<!-- COLUMNS 1 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-happy"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter" id="clients_counter"><?php  echo $counter[0]['happy_clients'] ?> </span><b>+</b></div>
                                    <span class="text-uppercase" >Happy Clients</span>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-trophy"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter" ><?php  echo $counter[0]['award'] ?> </span><b>+</b></div>
                                    <span class="text-uppercase">Win Awards</span>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-female-hairs"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter" ><?php  echo $counter[0]['trainer'] ?></span><b>+</b></div>
                                    <span class="text-uppercase">Our Trainer</span>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-spray-bottle"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"><?php  echo $counter[0]['treatment'] ?> </span><b>+</b></div>
                                    <span class="text-uppercase">Treatments</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- COMPANY STATUS SECTION END --> 
                        
            <!-- OUR EXPERTS SECTION START  -->
           
            <!-- OUR EXPERTS SECTION END  -->    
            
            <!-- OUR SPECIAL OFFER SECTION END  -->         
			<!-- <div class="section-full bg-primary">
                <div class="container-fluid bg-top-right bg-no-repeat bg-full-height special-offer-block no-col-gap" style="background-image:url(images/special-offer.jpg);">
                        <div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-12">
                            	<div class="section-content special-offer-outer bg-primary radius  p-tb60">
                                	<div class="special-offer radius p-tb60">
                                        <div class="wt-left-part special-offer-in">
                                            <div class="wt-box p-r100 text-white">
                                                <h1>Our Special Offer</h1>
                                                <h2 class="text-uppercase">You Owe Yourself This Moment</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin squ ad litora torquent per conubia.</p>
                                                <a class="site-button text-uppercase radius-sm font-weight-700 button-lg" >view packages</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>                               
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-0">
                            	<div class="section-content">
                                </div>
                            </div>
                        </div>
                </div>
                
            </div>  -->
            <!-- OUR SPECIAL OFFER SECTION END  -->
            
            <!-- OUR GALLERY SECTION END  --> 
            <div class="section-full p-t80">
            	 <div class="container">
                
                    <!-- TITLE START-->
                     <div class="section-head text-center">
                        <h1><span class="text-primary">Our</span> Gallery</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                     <!-- TITLE END-->
                                              
                     <!-- PAGINATION START -->
                    <!-- <div class="filter-wrap p-a15 our-gallery  m-tb30">
                        <ul class="masonry-filter link-style  text-uppercase center-block m-t0">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".cat-filter-1" href="#">Hair cut</a></li>
                            <li><a data-filter=".cat-filter-2" href="#">Foot</a></li>
                            <li><a data-filter=".cat-filter-3" href="#">Body</a></li>
                            <li><a data-filter=".cat-filter-4" href="#">Massage</a></li>
                            <li><a data-filter=".cat-filter-5" href="#">Face massage</a></li>
                        </ul>
                    </div> -->
                    <!-- PAGINATION END -->
                    
                 </div>
                <!-- GALLERY CONTENT START -->
                 <div class="portfolio-wrap mfp-gallery no-col-gap clearfix">
                     <div class="container-fluid">
                 	      <div class="row">
                            
                          <?php foreach($gallery  as $item) { ?>
                                <!-- COLUMNS 1 -->
                                <div class="masonry-item cat-filter-1 col-lg-3 col-md-4 col-sm-6">
                                    <div class="flip-container">
                                        <div class="wt-box">
                                            <div class="wt-thum-bx">
                                                <img src="./admin/content/assets/img/gallery/<?php echo $item['image']; ?>" alt="">	
                                            </div>
                                            <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                                <div class="wt-info-media-zoom">
                                                    <a href="images/latest-projects/large/pic1.jpg"  class="mfp-link">
                                                        <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                                    </a>
                                                </div>
                                                <div class="wt-info-text p-a30">
                                                    <h3><?php  echo $item['title'] ?></h3>
                                                    <p><?php  echo $item['remark'] ?></p>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                               <?php } ?>
   
                            </div>
            			</div>
                 </div>
                <!-- GALLERY CONTENT END -->
            
            </div>
            <!-- OUR GALLERY CONTENT END  -->
            
            <!-- OUR PRICING TABLE SECTION START  -->
            <!-- <div class="section-full bg-gray bg-repeat p-tb80" style="background-image:url(images/background/bg-6.jpg);">
            		<div class="container">
                    
                        <div class="section-head text-center">
                            <h1><span class="text-primary">Our</span> Pricing</h1>
                            <div class="wt-separator-outer ">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left bg-primary"></span>
                                    <span class="separator-right bg-primary"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                     
                        <div class="section-content">
                            <div class="pricingtable-row">
                                <div class="row">
                                
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 m-b40">
                                        <div class="pricingtable-wrapper pricing-table-style-4">
                                            <div class="pricingtable-inner bg-white radius">
                                            	
                                                <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url(images/our-work/pic1.jpg);"> 
                                                    <div class="pricingtable-title">
                                                        <h3>Basic Plan</h3>
                                                    </div>
                                                    <div class="pricingtable-price">
                                                        <span class="pricingtable-bx">$29</span>
                                                        <span class="pricingtable-type">M</span>
                                                    </div>
                                                    <div class="overlay-main bg-black opacity-07"></div>
                                                </div>
                                                
                                                
                                                <ul class="pricingtable-features">
                                                    <li><i class="fa fa-check"></i>  Phone & Email Support  </li>
                                                    <li><i class="fa fa-times"></i> 3 Social Account </li>
                                                    <li><i class="fa fa-check"></i> Branded Reports  </li>
                                                    <li><i class="fa fa-check"></i> Unlock rewards</li>
                                                    <li><i class="fa fa-times"></i> Support Forum</li>
                                                </ul>
                                                
                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 m-b40">
                                        <div class="pricingtable-wrapper pricing-table-style-4">
                                            <div class="pricingtable-inner bg-white radius">
                                            	
                                                <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url(images/our-work/pic2.jpg);"> 
                                                    <div class="pricingtable-title">
                                                        <h3>Pro Plan</h3>
                                                    </div>
                                                    <div class="pricingtable-price">
                                                        <span class="pricingtable-bx">$49</span>
                                                        <span class="pricingtable-type">M</span>
                                                    </div>
                                                    <div class="overlay-main bg-black opacity-07"></div>
                                                </div>
                                                
                                                
                                                <ul class="pricingtable-features">
                                                    <li><i class="fa fa-check"></i>  Phone & Email Support  </li>
                                                    <li><i class="fa fa-check"></i> 3 Social Account </li>
                                                    <li><i class="fa fa-check"></i> Branded Reports  </li>
                                                    <li><i class="fa fa-check"></i> Unlock rewards</li>
                                                    <li><i class="fa fa-check"></i> Support Forum</li>
                                                </ul>
                                                
                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 m-b40">
                                        <div class="pricingtable-wrapper pricing-table-style-4">
                                            <div class="pricingtable-inner bg-white radius">
                                            	
                                                <div class="overlay-wraper pricingtable-inner-overlay bg-no-repeat bg-cover" style="background-image:url(images/our-work/pic3.jpg);"> 
                                                    <div class="pricingtable-title">
                                                        <h3>Premium Plan</h3>
                                                    </div>
                                                    <div class="pricingtable-price">
                                                        <span class="pricingtable-bx">$99</span>
                                                        <span class="pricingtable-type">M</span>
                                                    </div>
                                                    <div class="overlay-main bg-black opacity-07"></div>
                                                </div>
                                                
                                                
                                                <ul class="pricingtable-features">
                                                    <li><i class="fa fa-check"></i>  Phone & Email Support  </li>
                                                    <li><i class="fa fa-check"></i> 3 Social Account </li>
                                                    <li><i class="fa fa-check"></i> Branded Reports  </li>
                                                    <li><i class="fa fa-check"></i> Unlock rewards</li>
                                                    <li><i class="fa fa-check"></i> Support Forum</li>
                                                </ul>
                                                
                                                <div class="pricingtable-footer">
                                                    <a href="javascript:void(0);" class="site-button text-uppercase radius-sm">Purchase</a>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                    </div>
            </div> -->
            <!-- OUR PRICING TABLEL SECTION END  -->  
                       
            <!-- OUR PROJECTS SECTION START  -->
            <!-- <div class="section-full bg-white p-tb80">
            	<div class="container">
                    <div class="section-head text-center">
                        <h1><span class="text-primary">Our</span> Products</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                    <div class="section-content">
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/products/pic-8.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Massage Soap</h2>
                                        <p class="text-primary">$199.99</p>
                                        <a class="site-button text-uppercase radius-sm font-weight-700 button-lg">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/products/pic-2.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Flower</h2>
                                        <p class="text-primary">$159.99</p>
                                        <a class="site-button text-uppercase radius-sm font-weight-700 button-lg">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="images/products/pic-9.jpg" class="radius-bx"  alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                    	<h2>Massage Oil.</h2>
                                        <p class="text-primary">$109.99</p>
                                        <a class="site-button text-uppercase radius-sm font-weight-700 button-lg">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- OUR PROJECTS SECTION END  -->    
                    
            <!-- OUR TESTIMONIAL SECTION START  -->
            <div class="section-full bg-gray bg-repeat p-t80 p-b120" style="background-image:url(images/background/bg-6.jpg);">
            	<div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1><span class="text-primary">What</span> People Say</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="owl-carousel home-carousel-1">

                        <?php
                        foreach($testimonial as $single_testimonial){?>
                            <div class="item">
                                <div class="testimonial-5 bg-white radius-sm">
                                	<div class="testimonial-pic-block radius-bx"> 
                                    	<div class="testimonial-pic radius">
                                        	<img src="./admin/content/assets/img/testimonials/<?php echo $single_testimonial['icon'] ?>" width="132" height="132" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p><?php   echo $single_testimonial['testimonial'] ?>
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name"><?php echo $single_testimonial['author']; ?>.</strong>
                                            <span class="testimonial-position text-primary p-t10"> <?php echo $single_testimonial['designation']; ?> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                        
                        
                            <!-- <div class="item">
                                <div class=" testimonial-5 bg-white radius-sm">
                                	<div class="testimonial-pic-block radius-bx"> 
                                    	<div class="testimonial-pic radius">
                                        	<img src="images/testimonials/pic2.jpg" width="132" height="132" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                  when an unknown printer took a galley of type and specimen book.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name">Agustina</strong>
                                            <span class="testimonial-position text-primary p-t10">Spa Experts</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-5 bg-white radius-sm">
                                	<div class="testimonial-pic-block radius-bx"> 
                                    	<div class="testimonial-pic radius">
                                        	<img src="images/testimonials/pic1.jpg" width="132" height="132" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-text clearfix">
                                    <div class="testimonial-paragraph">
                                        <span class="fa fa-quote-left text-primary"></span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                              when an unknown printer took a galley of type and specimen book.
                                        </p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">RINDA SMITH</strong>
                                        <span class="testimonial-position text-primary p-t10">Founder</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-5 bg-white radius-sm">
                                	<div class="testimonial-pic-block radius-bx"> 
                                    	<div class="testimonial-pic radius">
                                        	<img src="images/testimonials/pic2.jpg" width="132" height="132" alt="">
                                        </div>
                                    </div>
                                    <div class="testimonial-text clearfix">
                                        <div class="testimonial-paragraph">
                                            <span class="fa fa-quote-left text-primary"></span>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                  when an unknown printer took a galley of type and specimen book.
                                            </p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <strong class="testimonial-name">RINDA SMITH</strong>
                                            <span class="testimonial-position text-primary p-t10">Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR TESTIMONIAL SECTION END  --> 
            
            <!-- CONTACT US SECTION END  -->         
			<div class="section-full p-tb80">
                <div class="container equal-wraper no-col-gap">
                  	
                        <!-- TITLE START -->
                        <div class="section-head text-center">
                            <h1><span class="text-primary"> Contact</span> Us</h1>
                            <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        <!-- TITLE END -->   
                                     	      
                        <div class="row conntact-home bg-gray">
                        	<div class="col-md-4 col-sm-6 contact-home-left bg-no-repeat bg-primary bg-left-center"  style="background-image:url(images/background/contact-map.png);">
                            	<div class="section-content">
                                	<div class="p-a50">
                                    	
                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-placeholder"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h4 class="m-b5">Address</h4>
                                                <span class="font-12">295 Madison Ave, 12th Floor New York, NY 10017</span>
                                            </div>
                                        </div>
                                        
                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-envelope"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h4 class="m-b5">Email</h4>
                                                <span class="font-12">info @example.com </span><br>
                                                <span class="font-12">info2 @example.com </span>
                                            </div>
                                        </div>
                                        
                                        <div class="wt-icon-box-wraper left p-b20 text-white">
                                            <span class="icon-lg">
                                                <span class="flaticon-smartphone"></span>
                                            </span>
                                            <div class="icon-content">
                                                <h4 class="m-b5">Phone</h4>
                                                <span class="font-12">+77 634 545 144 </span><br>
                                                <span class="font-12">+77 634 255 147 </span>
                                            </div>
                                        </div>

                                        <div class="Opening-hours text-white">
                                            <h3 class="wt-title text-uppercase m-t0">Opening Hours</h3>
                                            <ul class="list-unstyled">
                                                <li>Monday - Friday <span class="pull-right">9.00 - 5.00 Pm</span></li>
                                                <li>Saturday <span class="pull-right">9.00 - 2.00 Pm</span></li>
                                                <li>Sunday <span class="pull-right">Closed</span></li>
                                            </ul>
                                        </div>
                                            
                                    </div>
                                </div>                               
                            </div>
                            <div class="col-md-8 col-sm-6">
                            	<div class="section-content bg-gray">
                                      <div class="contact-home-right p-a30">
                                      	<h5 class="text-uppercase font-26 p-b20 font-weight-400">GET IN TOUCH</h5>
                                      	<form  class="cons-contact-form2" method="get" action="#" id="contact_form">
                                        	<div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input name="username" type="text" required class="form-control" placeholder="Neme" id="name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="email" class="form-control" required placeholder="Email" id="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone" id="phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="message" class="form-control" rows="4" placeholder="Message" id="message"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="site-button skew-icon-btn radius-sm">
                                              <span class="font-weight-700 inline-block text-uppercase p-lr15">Submit</span> 
                                            </button>
                                        </form>
                                      </div>                             
                                </div>
                            </div>
                        </div>
                    
                </div>
                
            </div> 
            <!-- CONTACT US OFFER SECTION END  --> 
                       
            <!-- OUR CLIENT SLIDER START -->
            
            <!-- OUR CLIENT SLIDER END -->                         
             
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <footer class="site-footer footer-light">
            <!-- COLL-TO ACTION START -->
            <div class="section-full overlay-wraper bg-primary" style="background-image:url(images/background/bg-7.png);">
            	
                <div class="section-content ">
                <!-- COLL-TO ACTION START -->
                	<div class="wt-subscribe-box">
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
                                        <a href="contact.php" class="site-button-secondry text-uppercase radius-sm font-weight-600">
                                            Contact us 
                                        </a>
                                    </div>
                                </div>
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
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="clients.php">Our Clients</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
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
                            <span class="copyrights-text">© 2017 Your Company. All Rights Reserved. Designed By Thewebmax.</span>
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
<!-- <div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div> -->
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= -->
<!-- //CUSTOM JS  -->
<script type="text/javascript" src="./js/custom/index.js" defer></script>
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

<!-- REVOLUTION JS FILES -->

<script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script   src="js/rev-script-1.js"></script>



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
            <li><a class="theme-skin skin-1" href="indexa39b.html?theme=css/skin/skin-1" title="default Theme"></a></li>
            <li><a class="theme-skin skin-2" href="index61e7.html?theme=css/skin/skin-2" title="pink Theme"></a></li>
            <li><a class="theme-skin skin-3" href="indexcce5.html?theme=css/skin/skin-3" title="sky Theme"></a></li>
            <li><a class="theme-skin skin-4" href="index13f7.html?theme=css/skin/skin-4" title="green Theme"></a></li>
            <li><a class="theme-skin skin-5" href="index19a6.html?theme=css/skin/skin-5" title="red Theme"></a></li>
            <li><a class="theme-skin skin-6" href="indexfe5c.html?theme=css/skin/skin-6" title="orange Theme"></a></li>
            <li><a class="theme-skin skin-7" href="indexab47.html?theme=css/skin/skin-7" title="purple Theme"></a></li>
            <li><a class="theme-skin skin-8" href="index5f8d.html?theme=css/skin/skin-8" title="blue Theme"></a></li>
            <li><a class="theme-skin skin-9" href="index5663.html?theme=css/skin/skin-9" title="gray Theme"></a></li>
            <li><a class="theme-skin skin-10" href="index28ac.html?theme=css/skin/skin-10" title="brown Theme"></a></li>
            <li><a class="theme-skin skin-11" href="index26b8.html?theme=css/skin/skin-11" title="gray Theme"></a></li>
            <li><a class="theme-skin skin-12" href="index7f4c.html?theme=css/skin/skin-12" title="golden Theme"></a></li>
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


<!-- Mirrored from thewebmax.com/spa/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 10:10:57 GMT -->
</html>
