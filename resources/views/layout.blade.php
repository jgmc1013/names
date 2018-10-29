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
<title>@yield('title')</title>
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
                            <li class="current_page_item menu-item-simple-parent menu-item-depth-0 red"> <a href="{{ route('home') }}"> Home </a></li>
                            <li class="yellow"> <a href="{{ route('name') }}"> Names </a> </li>
                            <li class="mustard"> <a href="{{ route('blog') }}"> Blog </a> </li>
                            <li class="pink"><a href="{{ route('contact') }}" title="">Contact us</a></li>
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
			@yield("content")
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