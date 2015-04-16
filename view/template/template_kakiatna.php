<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WeCanFly - Multipurpose Respnsive HTML5 Business Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        
        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="/public/css/kaki/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/kaki/animate.css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/kaki/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/kaki/fontello.css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/kaki/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/kaki/prettyPhoto.css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/kaki/preset.css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/style-kaki.css"/>
        <link rel="stylesheet" type="text/css" href="/public/css/kaki/responsive.css"/>
        <link id="presetrel" rel="stylesheet" type="text/css" href="/public/css/red.css"/>
        <link id="presetrel" rel="stylesheet" type="text/css" href="/public/css/kaki/colorpreset/red.css"/>
        <!-- End Include All CSS -->
        
        <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
        <![endif]--> 
        
        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="/public/img/icon/favicon.png">
        <!-- Favicon Icon -->
        
    </head>
    <body>
        <!-- Loader -->
        <section class="loader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
                <div class="rect6"></div>
                <div class="rect7"></div>
                <div class="rect8"></div>
            </div>
        </section>
        <!-- End Loader -->
        <!-- Section Header -->
        <div class="header" id="header">
            <div class="menuButtonArea">
                <a href="#" class="menuToggle"></a>
            </div>
            <div class="logo">
                <a href="#"><span>kakiatna</span><br />indonesia</a>
            </div>
            <nav class="mainMenu animated fadeInUp">
                <ul>
                	<li class="parent_menu">
                        <a href="/">Home</a>
                    </li>
                        <?php
                    	$db = Db::init();
						$stg = $db->category;
						$q = array(
							'menu' => 'enable',
						);
						$data = $stg->find($q)->sort(array('no_urut' => 1));
						//aboutus
						foreach ($data as $dat) 
						{
							echo '<li>';
							echo '<a href="'.$dat['url_menu'].'">'.$dat['title_menu'].'</a>';
							echo '</li>';
						}
                    	?>
                    <li class="parent_menu">
                        <a href="#">Business</a>
                    </li>
                    <li>
                	<!--a href="/contact/index/">Contact</a-->
                    </li>
                </ul>
            </nav>
            <div class="searchForm  animated fadeInUp">
                <form method="post" action="#">
                    <input type="text" name="s" placeholder="Search">
                    <button type="submit"><i class="icon-search-outline"></i></button>
                </form>
            </div>
            <div class="headerSocial">
                <a class="fac" href="#"><i class="fa fa-facebook"></i></a>
                <a class="twi" href="#"><i class="fa fa-twitter"></i></a>
                <a class="goo" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="lin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="dri" href="#"><i class="fa fa-dribbble"></i></a>
            </div>
        </div>
        <!-- End Header -->
        
        <?php echo $content; ?>
        <!-- End Footer Section -->
        
        <section class="copyRight">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="titleHR"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="copyRightText wow fadeIn"  data-wow-duration="700ms" data-wow-delay="300ms">copy right 2014 by <a href="http://themewar.com">themewar</a></p>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" id="backToTop"><i class="icon-angle-double-up"></i></a>
        <!-- Include All JS -->
        <script type="text/javascript" src="/public/js/kaki/jquery.js"></script>
        <script type="text/javascript" src="/public/js/kaki/jquery.js"></script>
        <script type="text/javascript" src="/public/js/kaki/jquery-ui-1.10.3.custom.min.js"></script>
        <script type="text/javascript" src="/public/js/kaki/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="/public/js/kaki/gmaps.js"></script>
        <script type="text/javascript" src="/public/js/kaki/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="/public/js/kaki/jquery.easypiechart.js"></script>
        <script type="text/javascript" src="/public/js/kaki/owl.carousel.js"></script>
        <script type="text/javascript" src="/public/js/kaki/mixer.js"></script>
        <script type="text/javascript" src="/public/js/kaki/jquery.appear.js"></script>
		<script type="text/javascript" src="/public/js/kaki/jquery.inview.min.js"></script>
		<script type="text/javascript" src="/public/js/kaki/wow.min.js"></script>
		<script type="text/javascript" src="/public/js/kaki/jquery.countTo.js"></script>
		<script type="text/javascript" src="/public/js/kaki/bind-polyfill.js"></script>
		<script type="text/javascript" src="/public/js/kaki/smooth-scroll.js"></script>
        <script type="text/javascript" src="/public/js/kaki/jquery.plugin.min.js"></script>
		<script type="text/javascript" src="/public/js/kaki/jquery.countdown.js"></script>
        <script type="text/javascript" src="/public/js/kaki/theme.js"></script>
        <!-- End Include All JS -->
    </body>
</html>