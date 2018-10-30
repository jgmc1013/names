<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="{{ app()->getLocale() }}" class="no-js" >
<!--<![endif]-->
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>Global Names- Home</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="../theme/style.css" rel="stylesheet" type="text/css">
<link href="../theme/css/shortcodes.css" rel="stylesheet" type="text/css">
<link href="../theme/css/responsive.css" rel="stylesheet" type="text/css">
<link href="../theme/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../theme/css/shortcodes.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../theme/css/layerslider.css" type="text/css">
<!--prettyPhoto-->
<link href="../theme/css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />   
<!--[if IE 7]>
<link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
<!--jquery-->
<script src="../theme/js/modernizr-2.6.2.min.js"></script>
</head>
<body class="main">
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.html" title="Kids Life"><img src="../theme/images/logo.png" alt="Kids Life" title="Kids Life"></a>
                </div>
				<div class="contact-details">
					<div class="row">
					<div class="col-md-6">
					@if (Auth::guest())
						<p class="phone-no">
							<a href="{{ route('login') }}">Login</a> |
							<a href="{{ route('register') }}">Register</a>
						</p> 
                    @endif
					</div>
					<div class="col-md-6">
					
						<p class="mail">
							<a href="#">contact@globalnames.com</a>
							<span class="fa fa-envelope"></span>
						</p>
						<p class="phone-no">
							<i>+1 959 552 XXXX</i>
							<span class="fa fa-phone"></span>
						</p>
					
					</div>
				</div>
                <!--<div class="contact-details">
                     
					@if (Auth::guest())
						<p class="phone-no">
							<a href="{{ route('login') }}">Login</a>
							<a href="{{ route('register') }}">Register</a>
						</p> 
                    @endif
                </div>-->
            </div>
            <!--menu-container starts-->
            <div id="menu-container">
                <div class="container">
                    <!--nav starts-->
                    <nav id="main-menu">
                    	<div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                        <ul id="menu-main-menu" class="menu">
                            <li class="current_page_item menu-item-simple-parent menu-item-depth-0 red"> <a href="index.html"> Home </a></li>
                            <li class="yellow"> <a href="names.html"> Names </a> </li>
                            <li class="mustard"> <a href="about.html"> Blog </a> </li>
                            <li class="pink"><a href="contact.html" title="">Contact us</a></li>
                        </ul>
                    </nav>
                    <!--nav ends-->

                    <ul class="dt-sc-social-icons">
                        <li><a href="#" title="Facebook" class="dt-sc-tooltip-top facebook"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" title="Youtube" class="dt-sc-tooltip-top youtube"><span class="fa fa-youtube"></span></a></li>
                        <li><a href="#" title="Twitter" class="dt-sc-tooltip-top twitter"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" title="Google Plus" class="dt-sc-tooltip-top gplus"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <!--menu-container ends-->
        </header>
        <!--header ends-->
        <!--main starts-->
        <div id="main">
        
            <!--slider starts-->
            <div id="slider"> 
                <div id="layerslider_4" class="ls-wp-container" style="width:100%;height:610px;max-width:1920px;margin:0 auto;margin-bottom: 0px;">
                    <div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
                        <img src="http://placehold.it/1920x610/000000" class="ls-bg" alt="Slide background" />
                        <img class="ls-l" style="top:120px;left:530px;white-space: nowrap;" data-ls="offsetxin:0;delayin:800;easingin:easeOutElastic;skewxin:30;skewyin:30;transformoriginin:50% 0% 50%;offsetxout:0;parallaxlevel:1;" src="images/layerslider-gallery/bring.png" alt="">
                        <img class="ls-l" style="top:420px;left:-430px;z-index:100;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:80;delayin:500;offsetxout:0;offsetyout:-80;" src="images/layerslider-gallery/grass.png" alt="">
                        <img class="ls-l" style="top:185px;left:530px;white-space: nowrap;" data-ls="offsetxin:2;delayin:1000;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:-1;" src="images/layerslider-gallery/fun.png" alt="">
                        <img class="ls-l" style="top:252px;left:507px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1800;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-2;" src="images/layerslider-gallery/two.png" alt="">
                        <img class="ls-l" style="top:250px;left:571px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2200;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:3;" src="images/layerslider-gallery/life.png" alt="">
                        <img class="ls-l" style="top:355px;left:518px;white-space: nowrap;" data-ls="delayin:2500;parallaxlevel:-2;" src="images/layerslider-gallery/cup-divider.png" alt="">
                        <img class="ls-l" style="top:405px;left:509px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:-100;delayin:3000;offsetxout:0;offsetyout:100;parallaxlevel:3;" src="images/layerslider-gallery/a-trendy-kids.png" alt="">
                        <img class="ls-l" style="top:220px;left:370px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2000;easingin:swing;offsetxout:0;offsetyout:-150;parallaxlevel:3;" src="http://placehold.it/140x369/4cbcd4" alt="">
                        <img class="ls-l" style="top:42px;left:173px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2200;easingin:easeInOutBack;offsetxout:0;offsetyout:-150;parallaxlevel:-4;" src="http://placehold.it/259x525/dd72b3" alt="">
                        <img class="ls-l" style="top:70px;left:-59px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2700;easingin:easeInBack;offsetxout:0;offsetyout:-150;parallaxlevel:5;" src="http://placehold.it/259x445/f7c44e" alt="">
                        <img class="ls-l" style="top:55px;left:740px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2300;easingin:easeOutQuart;offsetxout:0;offsetyout:-150;parallaxlevel:3;" src="http://placehold.it/262x488/aec158" alt="">
                        <img class="ls-l" style="top:85px;left:955px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2500;offsetxout:0;offsetyout:-150;parallaxlevel:4;" src="http://placehold.it/273x474/4c7297" alt="">
                    </div>
                    <div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
                        <img src="http://placehold.it/1920x610/000000" class="ls-bg" alt="Slide background" />
                        <img class="ls-l" style="top:35px;left:678px;white-space: nowrap;" data-ls="offsetxout:180;" src="http://placehold.it/451x576/4cbcd4" alt="">
                        <img class="ls-l" style="top:23px;left:998px;white-space: nowrap;" data-ls="delayin:1500;scaleyin:3;transformoriginin:0% 50% 0;parallaxlevel:2;" src="images/layerslider-gallery/b-cloud.png" alt="">
                        <img class="ls-l" style="top:67px;left:679px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:-100;delayin:2000;rotateyin:30;parallaxlevel:5;" src="images/layerslider-gallery/b-swirl.png" alt="">
                        <img class="ls-l" style="top:78px;left:50px;white-space: nowrap;" data-ls="offsetxin:-200;delayin:2000;" src="images/layerslider-gallery/b-comment.png" alt="">
                        <img class="ls-l" style="top:137px;left:98px;white-space: nowrap;" data-ls="delayin:2500;rotateyin:30;" src="images/layerslider-gallery/welcome-text.png" alt="">
                        <img class="ls-l" style="top:222px;left:96px;white-space: nowrap;" data-ls="delayin:3000;rotateyin:30;" src="images/layerslider-gallery/text-desc.png" alt="">
                        <img class="ls-l" style="top:397px;left:105px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:200;delayin:3500;offsetxout:0;offsetyout:150;" src="images/layerslider-gallery/purchase-theme.png" alt="">
                        <img class="ls-l" style="top:395px;left:297px;white-space: nowrap;" data-ls="delayin:3700;" src="images/layerslider-gallery/b-tick.png" alt="">
                        <img class="ls-l" style="top:421px;left:100px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:200;delayin:4000;offsetxout:0;offsetyout:150;" src="images/layerslider-gallery/chalk-effect.png" alt="">
                        <img class="ls-l" style="top:30px;left:2px;white-space: nowrap;" data-ls="delayin:3100;rotateyin:90;parallaxlevel:3;" src="images/layerslider-gallery/b-game.png" alt="">
                        <img class="ls-l" style="top:498px;left:13px;white-space: nowrap;" data-ls="offsetxin:-100;delayin:3500;parallaxlevel:4;" src="images/layerslider-gallery/b-bulb.png" alt="">
                        <img class="ls-l" style="top:524px;left:507px;white-space: nowrap;" data-ls="delayin:2300;rotateyin:180;parallaxlevel:-3;" src="images/layerslider-gallery/b-glass.png" alt="">
                    </div>
                    <div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
                        <img src="http://placehold.it/1920x610/000000" class="ls-bg" alt="Slide background" />
                        <img class="ls-l" style="top:25px;left:763px;white-space: nowrap;" data-ls="offsetxin:0;delayin:500;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:1;" src="images/layerslider-gallery/boom.png" alt="">
                        <img class="ls-l" style="top:247px;left:731px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;rotateyin:180;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-2;" src="images/layerslider-gallery/awesome-gallery.png" alt="">
                        <img class="ls-l" style="top:259px;left:888px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1500;rotateyin:90;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:4;" src="images/layerslider-gallery/parallax-bg.png" alt="">
                        <img class="ls-l" style="top:402px;left:758px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2000;rotateyin:100;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:3;" src="images/layerslider-gallery/creative-design.png" alt="">
                        <img class="ls-l" style="top:411px;left:935px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1700;rotateyin:120;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:2;" src="images/layerslider-gallery/mega-menu.png" alt="">
                        <img class="ls-l" style="top:15px;left:1095px;transform:rotate(100deg); -ms-transform:rotate(100deg); /* IE 9 */ -webkit-transform:rotate(100deg); /* Opera, Chrome, and Safari */ ;white-space: nowrap;" data-ls="offsetxin:0;delayin:700;parallaxlevel:4;" src="images/layerslider-gallery/common-swirl.png" alt="">
                        <img class="ls-l" style="top:133px;left:686px;transform:rotate(50deg); -ms-transform:rotate(50deg); /* IE 9 */ -webkit-transform:rotate(50deg); /* Opera, Chrome, and Safari */ ;white-space: nowrap;" data-ls="offsetxin:0;delayin:1800;rotatexin:30;rotateyin:30;parallaxlevel:3;" src="images/layerslider-gallery/common-swirl.png" alt="">
                        <img class="ls-l" style="top:516px;left:705px;transform:rotate(-50deg); -ms-transform:rotate(-50deg); /* IE 9 */ -webkit-transform:rotate(-50deg); /* Opera, Chrome, and Safari */ ;white-space: nowrap;" data-ls="offsetxin:0;delayin:1800;rotatexin:30;rotateyin:30;parallaxlevel:2;" src="images/layerslider-gallery/common-swirl.png" alt="">
                        <img class="ls-l" style="top:229px;left:1069px;transform:rotate(-90deg); -ms-transform:rotate(-90deg); /* IE 9 */ -webkit-transform:rotate(-90deg); /* Opera, Chrome, and Safari */ ;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatexin:30;rotateyin:30;parallaxlevel:3;" src="images/layerslider-gallery/common-swirl.png" alt="">
                        <img class="ls-l" style="top:123px;left:1123px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:3000;rotateyin:100;offsetxout:0;offsetyout:-100;parallaxlevel:-4;" src="images/layerslider-gallery/star-2.png" alt="">
                        <img class="ls-l" style="top:0px;left:0px;white-space: nowrap;" data-ls="delayin:1200;rotatexin:200;rotateyin:200;parallaxlevel:5;" src="images/layerslider-gallery/aplus.png" alt="">
                        <img class="ls-l" style="top:92px;left:-52px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:90;delayin:2000;rotatexin:100;rotateyin:100;offsetyout:-90;parallaxlevel:1;" src="images/layerslider-gallery/swirl-3.png" alt="">
                        <img class="ls-l" style="top:197px;left:-9px;white-space: nowrap;" data-ls="delayin:800;rotatexin:200;rotateyin:200;parallaxlevel:3;" src="images/layerslider-gallery/swirl-2.png" alt="">
                        <img class="ls-l" style="top:275px;left:-122px;white-space: nowrap;" data-ls="offsetxin:0;delayin:3000;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:-2;" src="images/layerslider-gallery/cap.png" alt="">
                        <img class="ls-l" style="top:394px;left:-30px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2700;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:1;" src="images/layerslider-gallery/apple.png" alt="">
                        <img class="ls-l" style="top:35px;left:555px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2200;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:2;" src="images/layerslider-gallery/swirl-4.png" alt="">
                        <img class="ls-l" style="top:395px;left:758px;white-space: nowrap;" data-ls="offsetxin:0;delayin:3200;scalexin:4;scaleyin:4;offsetxout:0;parallaxlevel:-2;" src="images/layerslider-gallery/common-star.png" alt="">
                        <img class="ls-l" style="top:366px;left:1067px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2100;scalexin:2;scaleyin:2;offsetxout:0;parallaxlevel:1;" src="images/layerslider-gallery/common-star.png" alt="">
                        <img class="ls-l" style="top:444px;left:1100px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2400;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-1;" src="images/layerslider-gallery/common-star.png" alt="">
                        <img class="ls-l" style="top:561px;left:955px;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:3600;scalexin:6;scaleyin:6;offsetxout:0;parallaxlevel:-2;" src="images/layerslider-gallery/common-star.png" alt="">
                    </div>
                </div>
            </div>
            <!--slider ends-->
            <!--primary starts-->
            <section id="primary" class="content-full-width">
                <!--container starts-->
                <div class="container">
                    
                    <div class="dt-sc-one-fourth column first">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <img src="http://placehold.it/128x128" alt="" title="">
                                    <span class="infolayer">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                            <h4><a href="">Active Learning</a></h4>
                            <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
                        </div>
                    </div>
                    
                    <div class="dt-sc-one-fourth column">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <img src="http://placehold.it/128x128" alt="" title="">
                                    <span class="infolayer">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                            <h4><a href="">Music Class</a></h4>
                            <p>Decor ostdcaer urabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
                        </div>
                    </div>
                    
                    <div class="dt-sc-one-fourth column">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <img src="http://placehold.it/128x128" alt="" title="">
                                    <span class="infolayer">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                            <h4><a href="">Yoga Class</a></h4>
                            <p>Rabitur ultrices posuere mattis. Nam ullamcorper, diam sit  euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl gedretu osterftra ligula</p>
                        </div>
                    </div>
                    
                    <div class="dt-sc-one-fourth column">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <img src="http://placehold.it/128x128" alt="" title="">
                                    <span class="infolayer">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                            <h4><a href="">Kung fu Class</a></h4>
                            <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
                        </div>
                    </div>
                    
                </div>
                <!--container ends-->
                <div class="dt-sc-hr"></div>
                <!--fullwidth-background starts-->
                <section class="fullwidth-background dt-sc-parallax-section turquoise-bg">
                    <!--container starts-->
                    <div class="container">
                        <!--dt-sc-one-half starts-->
                        <div class="dt-sc-one-half column first">
                            <h2>Play As You Learn</h2>
                            <!--dt-sc-one-half starts-->
                            <div class="dt-sc-one-half column first">
                                
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-glass"> </span> 
                                    </div>
                                    <h4><a href="#" target="_blank"> English Summer Camp </a></h4>
                                    <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-pencil"> </span> 
                                    </div>
                                    <h4><a href="#" target="_blank"> Drawing & Painting </a></h4>
                                    <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-bullseye"> </span> 
                                    </div>
                                    <h4><a href="#" target="_blank"> Swimming Camp </a></h4>
                                    <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                                </div>
                            
                            </div>
                            <!--dt-sc-one-half ends-->
                            
                            <!--dt-sc-one-half starts-->
                            <div class="dt-sc-one-half column">
                                
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-tachometer"> </span> 
                                    </div>
                                    <h4><a href="#" target="_blank"> Sports Camp </a></h4>
                                    <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-magic"> </span> 
                                    </div>
                                    <h4><a href="#" target="_blank"> Personalizing </a></h4>
                                    <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-music"> </span> 
                                    </div>
                                    <h4><a href="#" target="_blank"> Sing & Dance </a></h4>
                                    <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                                </div>
                            
                            </div>
                            <!--dt-sc-one-half ends-->
                        </div>
                        <!--dt-sc-one-half ends-->
                        
                        <!--dt-sc-one-half starts-->
                        <div class="dt-sc-one-half column">
                            <h2>With Music4Kids, music is child's play!</h2>
                            <div class="add-slider-wrapper">
                                <ul class="add-slider">
                                    <li> <img src="http://placehold.it/464x345" alt="" title=""> </li>
                                    <li> <img src="http://placehold.it/464x345" alt="" title=""> </li>
                                    <li> <img src="http://placehold.it/464x345" alt="" title=""> </li>
                                </ul>
                            </div>
                        </div>
                        <!--dt-sc-one-half ends-->
                    </div>
                    <!--container ends-->
                </section>
                <!--fullwidth-background ends-->
                <div class="dt-sc-hr"></div>
                <!--container starts-->
                <div class="container">
                    <h2 class="dt-sc-hr-green-title">Our Portfolio</h2>
                    
                    <!--portfolio-content starts-->
                    <div class="front-portfolio-container">
                       <div class="portfolio-content portfolio-content1">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                  	  <img src="http://placehold.it/1170x1016" alt="" title="">
                                      <div class="image-overlay">
                                        <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                        <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                       <div class="portfolio-content portfolio-content2">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                  	  <img src="http://placehold.it/1170x1016" alt="" title="">	
                                      <div class="image-overlay">
                                        <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                        <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                      
                       <div class="portfolio-content portfolio-content3">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="http://placehold.it/1170x1016" alt="" title="">
                                      <div class="image-overlay">
                                        <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                        <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                       
                       <div class="portfolio-content portfolio-content4">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="http://placehold.it/1170x1016" alt="" title="">
                                      <div class="image-overlay">
                                        <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                        <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                      
                       <div class="portfolio-content portfolio-content5">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="http://placehold.it/1170x1016" alt="" title="">
                                      <div class="image-overlay">
                                        <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                        <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                      
                       <div class="portfolio-content portfolio-content6">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="http://placehold.it/1170x1016" alt="" title="">
                                      <div class="image-overlay">
                                        <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                        <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                              
                       <div class="portfolio-content portfolio-content7">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="http://placehold.it/1170x1016" alt="" title=""> 		
                                      <div class="image-overlay">
                                        <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                        <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                        <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                       <div class="dt-sc-hr-small"></div>
                       <div class="aligncenter">
                           <a href="#" class="dt-sc-button medium mustard"> Hit here to view all <span class="fa fa-chevron-circle-right"> </span></a>        
                       </div>
                    </div>
                       
                    <!--front-portfolio-container ends-->
                    
                </div>
                <!--container ends-->
                
                <div class="dt-sc-hr"></div>
                <!--fullwidth-background starts-->
                <section class="fullwidth-background dt-sc-parallax-section orange-bg">
                    <!--container starts-->
                    <div class="container">
                        <h2 class="dt-sc-hr-white-title">Recent Blog</h2>
                        <div class="column dt-sc-one-half first">
                            <article class="blog-entry">
                                <div class="blog-entry-inner">
                                    <div class="entry-meta">
                                        <a href="blog-detail.html" class="blog-author"><img src="http://placehold.it/90x90" alt="" title=""></a>
                                        <div class="date">
                                            <span> 27 </span> 
                                            <p> Aug <br> 2014 </p> 
                                        </div>
                                        <a href="#" class="comments">
                                            12 <span class="fa fa-comment"> </span>
                                        </a>
                                        <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>	
                                    </div>		
                                    <div class="entry-thumb">
                                        <a href="blog-detail.html"><img src="http://placehold.it/1170x711" alt="" title=""></a>
                                    </div>		
                                    <div class="entry-details">	
                                        <div class="entry-title">
                                            <h3><a href="blog-detail.html"> Activities Improves Mind </a></h3>
                                        </div>			
                                        <!--entry-metadata ends-->	
                                        <div class="entry-body">
                                            <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accums.</p>
                                        </div>	 		
                                        <a href="blog-detail.html" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>		
                                    </div>	
                                </div>
                            </article>
                        </div>
                        <!--dt-sc-one-half ends-->
                        <div class="column dt-sc-one-half">
                            <article class="blog-entry">
                                <div class="blog-entry-inner">
                                    <div class="entry-meta">
                                        <a href="blog-detail.html" class="blog-author"><img src="http://placehold.it/90x90" alt="" title=""></a>
                                        <div class="date">
                                            <span> 27 </span> 
                                            <p> Aug <br> 2014 </p> 
                                        </div>
                                        <a href="#" class="comments">
                                            12 <span class="fa fa-comment"> </span>
                                        </a>
                                        <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>	
                                    </div>		
                                    <div class="entry-thumb">
                                        <a href="blog-detail.html"><img src="http://placehold.it/1170x711" alt="" title=""></a>
                                    </div>		
                                    <div class="entry-details">	
                                        <div class="entry-title">
                                            <h3><a href="blog-detail.html"> Weekly Reader Zone </a></h3>
                                        </div>			
                                        <!--entry-metadata ends-->	
                                        <div class="entry-body">
                                            <p>Iid venenatis nibh accums. Doinbibe ndum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit amet dui lobortis, id venenatis nibh accumsan...</p>
                                        </div>	 		
                                        <a href="blog-detail.html" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>		
                                    </div>	
                                </div>
                            </article>
                        </div>
                        <!--dt-sc-one-half ends-->
                    </div>
                    <!--container ends-->    
                </section>
                <!--fullwidth-background ends-->
                <div class="dt-sc-hr"></div>
                <!--container starts-->
                <div class="container">
                    <h2 class="dt-sc-hr-green-title">Our Staffs</h2>
                    
                    <div class="column dt-sc-one-fourth first">
                        <div class="dt-sc-team">	
                            <div class="image">
                                <img class="item-mask" src="images/mask.png" alt="" title="">
                                <img src="http://placehold.it/381x331" alt="" title="">
                                <div class="dt-sc-image-overlay">
                                	<a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="#" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="team-details">
                                <h4> Jack Daniels </h4>
                                <h6> Senior Supervisor </h6>
                                <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>
                            </div>
                        </div>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <div class="dt-sc-team">	
                            <div class="image">
                                <img class="item-mask" src="images/mask.png" alt="" title="">
                                <img src="http://placehold.it/381x331" alt="" title="">
                                <div class="dt-sc-image-overlay">
                                	<a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="#" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="team-details">
                                <h4> Linda Glendell </h4>
                                <h6> Teaching Professor </h6>
                                <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>
                            </div>
                        </div>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <div class="dt-sc-team">	
                            <div class="image">
                                <img class="item-mask" src="images/mask.png" alt="" title="">
                                <img src="http://placehold.it/381x331" alt="" title="">
                                <div class="dt-sc-image-overlay">
                                	<a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="#" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="team-details">
                                <h4> Kate Dennings </h4>
                                <h6> Children Diet </h6>
                                <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>
                            </div>
                        </div>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <div class="dt-sc-team">	
                            <div class="image">
                                <img class="item-mask" src="images/mask.png" alt="" title="">
                                <img src="http://placehold.it/381x331" alt="" title="">
                                <div class="dt-sc-image-overlay">
                                	<a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="#" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="team-details">
                                <h4> Kristof Slinghot </h4>
                                <h6> Management </h6>
                                <p> Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. </p>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!--container ends-->
                
                <div class="dt-sc-hr"></div>
                <!--fullwidth-background starts-->
                <section class="fullwidth-background dt-sc-parallax-section product_bg">
                    <!--container starts-->
                    <div class="container">
                        <h2 class="dt-sc-hr-white-title">Recent Products</h2>
                        <ul class="products">
                            <li class="dt-sc-one-fourth column first">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img src="http://placehold.it/510x716" alt="" title="">
                                    </a>  
                                    <span class="sale"> Sale! </span>
                                    <div class="image-overlay">  
                                        <div class="product-button">
                                            <a href="#" class="add-cart-btn"> Add to cart </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5><a href="#"> Ellents Style Grade </a></h5>
                                    <span class="price"> $20.00 </span>
                                </div>
                            </li>
                            <li class="dt-sc-one-fourth column">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img src="http://placehold.it/510x716" alt="" title="">
                                    </a>  
                                    <div class="image-overlay">  
                                        <div class="product-button">
                                            <a href="#" class="add-cart-btn"> Add to cart </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5><a href="#"> Ellents Style Grade </a></h5>
                                    <span class="price"> $20.00 </span>
                                </div>
                            </li>
                            <li class="dt-sc-one-fourth column">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img src="http://placehold.it/510x716" alt="" title="">
                                    </a>  
                                    <span class="sale"> Sale! </span>
                                    <div class="image-overlay">  
                                        <div class="product-button">
                                            <a href="#" class="add-cart-btn"> Add to cart </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5><a href="#"> Ellents Style Grade </a></h5>
                                    <span class="price"> $20.00 </span>
                                </div>
                            </li>
                            <li class="dt-sc-one-fourth column">
                                <div class="product-thumb">
                                    <a href="#">
                                        <img src="http://placehold.it/510x716" alt="" title="">
                                    </a>  
                                    <div class="image-overlay">  
                                        <div class="product-button">
                                            <a href="#" class="add-cart-btn"> Add to cart </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <h5><a href="#"> Ellents Style Grade </a></h5>
                                    <span class="price"> $20.00 </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--container ends-->
                </section>
                <!--fullwidth-background ends-->
            </section>
            <!--primary ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
        <footer>
            <!--footer-widgets-wrapper starts-->
            <div class="footer-widgets-wrapper">
                <!--container starts-->
                <div class="container">
                    
                    <div class="column dt-sc-one-fourth first">
                        <aside class="widget widget_text">
                            <h3 class="widgettitle red_sketch"> About Kids Life </h3>
                            <p>Happy <a href=""><strong>Kids Life</strong></a> comes with powerful theme options, which empowers you to quickly and easily build incredible store.</p>
                            <ul>
                                <li> <a href=""> English Grammar Class </a> </li>
                                <li> <a href=""> Music class </a> </li>
                                <li> <a href=""> Swimming & Karate </a> </li>
                                <li> <a href=""> Lot of HTML Styles </a> </li>
                                <li> <a href=""> Unique News Page Design </a> </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_recent_entries">
                            <h3 class="widgettitle green_sketch"> Latest Post </h3>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="http://placehold.it/60x60" alt="" title="">
                                    </a>    
                                    <h6><a href=""> Amazing post with all  goodies </a></h6>
                                    <span> March 23, 2014 </span>       
                                </li>
                                <li>
                                    <a href="">
                                        <img src="http://placehold.it/60x60" alt="" title="">
                                    </a>
                                    <h6><a href=""> Amazing post with all  goodies </a></h6>
                                    <span> March 23, 2014 </span> 
                                </li>
                                <li>
                                    <a href="">
                                        <img src="http://placehold.it/60x60" alt="" title="">
                                    </a>
                                    <h6><a href=""> Amazing post with all  goodies </a></h6>
                                    <span> March 23, 2014 </span> 
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <aside class="widget tweetbox">
                            <h3 class="widgettitle yellow_sketch"><a href="#"> Twitter Feeds </a></h3>
                            <div id="tweets_container"></div>
                        </aside>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_text">
                        <h3 class="widgettitle steelblue_sketch">Contact</h3>
                            <div class="textwidget">
                                <p class="dt-sc-contact-info"><span class="fa fa-map-marker"></span> 4318 Mansion House, Greenland <br> United States </p>
                                <p class="dt-sc-contact-info"><span class="fa fa-phone"></span> (000) 233 - 3236 </p>
                                <p class="dt-sc-contact-info"><span class="fa fa-envelope"></span><a href="mailto:yourname@somemail.com"> Kidslife@somemail.com </a></p>
                            </div>
                        </aside>
                        <aside class="widget mailchimp">
                            <p> We're social </p>
                            <form name="frmnewsletter" class="mailchimp-form" action="php/subscribe.php" method="post">
                                <p>
                                    <span class="fa fa-envelope-o"> </span>
                                    <input type="email" placeholder="Email Address" name="mc_email" required />	
                                </p>	
                                <input type="submit" value="Subscribe" class="button" name="btnsubscribe">
                            </form>
                            <div id="ajax_subscribe_msg"></div>
                        </aside>
                    </div>
                    
                </div>    
                <!--container ends-->
            </div>
            <!--footer-widgets-wrapper ends-->  
            <div class="copyright">
        		<div class="container">
                	<p class="copyright-info">© 2014 Kids Life. All rights reserved. Design by <a href="http://themeforest.net/user/designthemes" title=""> Buddhathemes </a></p>
        			<div class="footer-links">
                        <p>Follow us</p>
                        <ul class="dt-sc-social-icons">
                        	<li class="facebook"><a href="#"><img src="images/facebook.png" alt="" title=""></a></li>
                            <li class="twitter"><a href="#"><img src="images/twitter.png" alt="" title=""></a></li>
                            <li class="gplus"><a href="#"><img src="images/gplus.png" alt="" title=""></a></li>
                            <li class="pinterest"><a href="#"><img src="images/pinterest.png" alt="" title=""></a></li>
                        </ul>
                    </div>
        		</div>
        	</div>  
        </footer>
        <!--footer ends-->
        
    </div>
    <!--wrapper ends-->
    <a href="" title="Go to Top" class="back-to-top">To Top ↑</a>
    <!--Java Scripts-->
    <script type="text/javascript" src="../theme/js/jquery.js"></script>
	<script type="text/javascript" src="../theme/js/jquery-migrate.min.js"></script>

    
	<script type="text/javascript" src="../theme/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../theme/js/jquery-easing-1.3.js"></script>
    <script type="text/javascript" src="../theme/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="../theme/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../theme/js/jquery.inview.js"></script>
    <script type="text/javascript" src="../theme/js/validation.js"></script>
    <script type="text/javascript" src="../theme/js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="../theme/js/jquery.bxslider.min.js"></script>       
    <script type="text/javascript" src="../theme/js/jquery.prettyPhoto.js"></script>  
    <script type="text/javascript" src="../theme/js/twitter/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="../theme/js/jquery.parallax-1.1.3.js"></script>   
    <script type="text/javascript" src="../theme/js/shortcodes.js"></script>   
    <script type="text/javascript" src="../theme/js/custom.js"></script>
    
    <!-- Layer Slider --> 
    <script type="text/javascript" src="../theme/js/jquery-transit-modified.js"></script> 
    <script type="text/javascript" src="../theme/js/layerslider.kreaturamedia.jquery.js"></script> 
    <script type='text/javascript' src="../theme/js/greensock.js"></script> 
    <script type='text/javascript' src="../theme/js/layerslider.transitions.js"></script> 
    <!--<script type="text/javascript">var lsjQuery = jQuery;</script>--> 
    <script type="text/javascript">var lsjQuery = jQuery;</script><script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1240, layersContainer: 1060, skinsPath: 'js/layerslider/skins/'}) } }); </script>
    
</body>

</html>