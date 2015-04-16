/*
  Theme Name: We Can Fly
  Theme URL: http://www.themewar.com/
  Author: ThemeWar
  Author URI: http://www.themewar.com/
  Description: WeCanFly - Multipurpose Respnsive HTML5 Business Template
  Version: 1.0.0
*/

/*=======================================================================
[Table of contents]
=========================================================================

1. Header (Menu)
2. Slider
3. Features
4. Our Blog
5. Services
6. Projects
7. Testimonial
8. Twitter Feed
9. Partners
10. Subscribe
11. Footer

12. Portfolio 1
13. portfolio 2
14. portfolio 3
15. PortolioItem
16. Blog Grid
17. Blog Right Sidebar
18. Single Post

19. 404
20. Coming Soon
21. About Us
22. Members
24. Events
25. Single Events



==========================================================================*/

/*=======================================================================
[Preset Settings in preset.css]
=========================================================================

1. Fonts (Lato Light, Lato Normal, Lato Bold)
2. Link Css
3. Typography
4. Section Setup
5. Margin and padding and Border Setup
6. Breadcrumb
7. Page Setup
8. UI/UX

==========================================================================*/
(function($){
    'use strict';
    //========================
    // Loader 
    //========================
    if($(".loader").length > 0)
    {
        $(window).load(function() {
            $(".loader").delay(500).fadeOut("slow");
        });
    }
    
    //========================
    // Smoth Scroll 
    //========================
    smoothScroll.init();
    
    //========================
    // WOW INIT
    //========================
    if($(window).width() > 490)
    {
         var wow = new WOW({
             mobile: false 
         });
         wow.init();
    }
    
    //========================
    // Pretty Photo
    //========================
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
       social_tools: false
    });
    
    //========================
    // NAV Menu Controller
    //========================
    var menutoggle = true;
    var slheight = $("#slider").height();
    $(window).on('scroll', function(){
        if($(window).width() > 480)
        {
            if($(window).scrollTop() > 200)
            {
                if($("#header").hasClass('opened'))
                {
                    $("#header").removeClass('opened');
                }
                $(".mainMenu").fadeOut('slow');
                $(".searchForm").fadeOut('slow');
                $(".headerSocial").fadeOut('slow');
                $(".menuToggle").removeClass('active');

                $("#header").addClass('scrollFix animated fadeInUp');
                $(".headerSocial").fadeOut('slow');
                $("#header").css({'height': '80px', 'width': '80px'});
            }
            else
            {
                $(".mainMenu").fadeOut('fast');
                $(".searchForm").fadeOut('fast');
                $("#header").removeClass('scrollFix animated fadeInUp');
                $(".headerSocial").fadeIn('slow');
                $("#header").css('height', '100%');
                $("#header").removeClass('opened');
            }
        }
        menutoggle = true;
    });
    
    
    $(".menuToggle").click(function(e){
        e.preventDefault();
        if($(window).width() > 480)
        {
            if($("#header").hasClass('scrollFix'))
            {
                if(menutoggle)
                {
                    $(this).addClass('active');
                    $("#header").addClass('opened');
                    $("#header").animate({'width': '240px'}, 500, function(){
                        $(this).animate({'height': '100%'}, 500, function(){
                            $(".mainMenu").fadeIn('slow');
                            $(".searchForm").fadeIn('slow');
                            $(".headerSocial").fadeIn('slow');
                        });
                    });
                    menutoggle = false;
                }
                else
                {
                    $(".headerSocial").fadeOut('slow');
                    $(this).removeClass('active');
                    $("#header").removeClass('opened');
                    $("#header").animate({'height': '80px'}, 500, function(){
                        $(this).animate({'width': '80px'}, 500, function(){
                            $(this).removeClass('opened');
                            $(".mainMenu").fadeOut('slow');
                            $(".searchForm").fadeOut('slow');
                        });
                    });
                    menutoggle = true;
                }
            }
            else
            {
                if(menutoggle)
                {
                    $(this).addClass('active');
                    $("#header").addClass('opened');
                    $("#header").animate({'width': '240px'}, 500, function(){
                        $(".mainMenu").fadeIn('slow');
                        $(".searchForm").fadeIn('slow');
                    });

                    menutoggle = false;
                }
                else
                {
                    $(this).removeClass('active');
                    $(".mainMenu").fadeOut('fast');
                    $(".searchForm").fadeOut('fast');
                    $("#header").removeClass('opened');
                    $("#header").animate({'width': '80px'}, 500);
                    menutoggle = true;
                }
            }
        }
        else
        {
            if(menutoggle)
            {
                $(this).addClass('active');
                $(".mainMenu").slideDown('slow');
                menutoggle = false;
            }
            else
            {
                $(this).removeClass('active');
                $(".mainMenu").slideUp('slow');
                menutoggle = true;
            }
        }
    });
    
    
    //========================
    // OWL Carousel One
    //========================
    
    if($("#project_carousel").length > 0)
    {
        var owl = $("#project_carousel");
        owl.owlCarousel({
            items : 5,
            itemsCustom : false,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [980,3],
            itemsTablet: [768,2],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            singleItem : false,
            itemsScaleUp : false,
            slideSpeed : 200,
            paginationSpeed : 800,
            rewindSpeed : 1000,
            navigation : false
        });
        $(".next").click(function(e){
            e.preventDefault();
            owl.trigger('owl.next');
        });
        $(".prev").click(function(e){
            e.preventDefault();
            owl.trigger('owl.prev');
        });
    }
    
    //========================
    // OWL Carousel Two
    //========================
    if($("#testimonial_carousel").length > 0)
    {
        var owl2 = $("#testimonial_carousel");
        owl2.owlCarousel({
            navigation : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true
        });

        $(".tnext").click(function(e){
            e.preventDefault();
            owl2.trigger('owl.next');
        });
        $(".tprev").click(function(e){
            e.preventDefault();
            owl2.trigger('owl.prev');
        });
    }
    
    
    //========================
    // Parther Logo Hover
    //========================
    if($(".singlePartner").length > 0)
    {
        $(".singlePartner").hover(function(){
            var isrc = $(this).attr('data-hsrc');
            $('img', this).attr('src', isrc);
         }, function(){
             var psrc = $(this).attr('data-psrc');
             $('img', this).attr('src', psrc);
         });
    }
    
    
    //========================
    // Portfolio Grid
    //========================
    if($('#Grid').length > 0)
    {
        $('#Grid').rmsIt();
    }
    
    
    //========================
    // Event Map
    //========================
    if($("#eventMap").length > 0)
    {
        var map;

		map = new GMaps({
			el: '#eventMap',
			lat: 45.494447,
			lng: -73.5697587,
			scrollwheel:false,
			zoom: 16,
			zoomControl : true,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		});

		var image = '';
		map.addMarker({
			lat: 45.494447,
			lng: -73.5697587,
			icon: 'images/marker.png',
			animation: google.maps.Animation.DROP,
			verticalAlign: 'bottom',
			horizontalAlign: 'center',
			backgroundColor: '#d3cfcf'
		});

                
                
		var styles = [ 

		{
			"featureType": "road",
			"stylers": [
			{ "color": "#ffffff" }
			]
		},{
			"featureType": "water",
			"stylers": [
			{ "color": "#FFFFFF" }
			]
		},{
			"featureType": "landscape",
			"stylers": [
			{ "color": "#f5f5f5" }
			]
		},{
			"elementType": "labels.text.fill",
			"stylers": [
			{ "color": "#2d2d2d" }
			]
		},{
			"featureType": "poi",
			"stylers": [
			{ "color": "#a3a3a3" }
			]
		},{
			"elementType": "labels.text",
			"stylers": [
			{ "saturation": 1 },
			{ "weight": 0.1 },
			{ "color": "#2d2d2d" }
			]
		}

		];
                
                
                
		map.addStyle({
			styledMapName:"Styled Map",
			styles: styles,
			mapTypeId: "map_style"  
		});

		map.setStyle("map_style");
    }
    
    //========================
    // Contact Map
    //========================
    if($("#map").length > 0)
    {
        var map;

		map = new GMaps({
			el: '#map',
			lat: 45.494447,
			lng: -73.5697587,
			scrollwheel:false,
			zoom: 16,
			zoomControl : true,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		});

		var image = '';
		map.addMarker({
			lat: 45.494447,
			lng: -73.5697587,
			icon: 'images/marker.png',
			animation: google.maps.Animation.DROP,
			verticalAlign: 'bottom',
			horizontalAlign: 'center',
			backgroundColor: '#d3cfcf'
		});
    }
    
    //========================
    // Coming Soon Countdown
    //========================
    if($(".countdownarea").length > 0)
    {
        $('.countdownarea').countdown({ until: $.countdown.UTCDate(+6, 2015, 10 - 1, 9), format: 'ODHMS'});
    }
    
    
    //========================
    // Fun Facts
    //========================
    if($(".funfacts").length > 0)
    {    
        $('.funfacts').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                    $(this).find('.timer').each(function () {
                            var $this = $(this);
                            $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                                    duration: 2000,
                                    easing: 'swing',
                                    step: function () {
                                            $this.text(Math.ceil(this.Counter));
                                    }
                            });
                    });
                $(this).unbind('inview');
            }
        });
    }
    
    //========================
    // UI Activation
    //========================
    if($("#accordion").length > 0)
    {
        $( "#accordion" ).accordion({ collapsible: true });
    }
    if($("#accordion2").length > 0)
    {
        $( "#accordion2" ).accordion({ collapsible: true });
    }
    if($("#tabs").length > 0)
    {
        $( "#tabs, #tabs2" ).tabs();
    }
    if($("#tabs2").length > 0)
    {
        $( "#tabs2" ).tabs();
    }
    
    //========================
    // Chart 
    //========================
    if($(".chart").length > 0)
    {
        $('.chart').appear();
        $('.chart').on('appear', loadCharts);
    }
    function loadCharts()
    {
        jQuery('.chart').easyPieChart({
            barColor: '#f78775',
            trackColor: '#e5e5e5',
            scaleColor: false,
            scaleLength: 5,
            lineCap: 'round',
            lineWidth: 10,
            size: 180,
            rotate: 0,
            onStep: function(from, to, percent) 
            {
                $(this.el).find('.percent').text(Math.round(percent)+'%');
            }
        });
    }
    
    //========================
    // Progressbar
    //========================
    if($(".singleskill").length > 0)
    {
        $('.singleskill').appear();
        $('.singleskill').on('appear', loadSkills);
    }
    var coun = true;
    function loadSkills()
    {
        $(".singleskill").each(function(){
           var datacount = $(this).attr("data-limit");
           $(".skillarea", this).animate({'width': datacount+'%'}, 2000);
           if(coun)
           {
                $(this).find('.dataparcentange').each(function () {
                         var $this = $(this);
                         $({ Counter: 0 }).animate({ Counter: datacount }, {
                                 duration: 2000,
                                 easing: 'swing',
                                 step: function () {
                                         $this.text(Math.ceil(this.Counter)+'%');
                                 }
                         });
                 });
                 
            }
        });
        coun = false;
    }
    
    //========================
    // Scroll Down
    //========================
    if($(".scrollDown").length > 0)
    {
        $(".scrollDown").click(function(e){
            e.preventDefault();
            $('html, body').animate({scrollTop: $("#project").offset().top}, 1000);
        });
    }
    
    
    //========================
    // Back To Top
    //========================
    if($("#backToTop").length > 0)
    {
        var sliheight = $("#slider").height()+ 200;
        $(window).on('scroll', function(){
            if($(window).scrollTop() > 400)
            {
                $("#backToTop").show('slow');
            }
            else
            {
                $("#backToTop").hide('slow');
            }
        });

        $("body, html").on("click", "#backToTop", function(e){
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 800);
        });
    }
    
    //========================
    // Color Palate
    //========================
    if($(".paletSwitch").length > 0)
    {
        var switchToggle = true;
        $(".paletSwitch").click(function(e){
            e.preventDefault();
            if(switchToggle)
            {
                $(".pickerDiv").animate({'right': '0px'}, 800);
                switchToggle = false;
            }
            else
            {
                $(".pickerDiv").animate({'right': '-150px'}, 800);
                switchToggle = true;
            }
        });
    }
    
    
    //========================
    // Colors Change
    //========================
    if($(".colors").length > 0)
    {
        $(".colors a").click(function(e){
            e.preventDefault();
            $(".colors a").removeClass('active');
            var cName = $(this).attr('href');
            $("#presetrel").attr('href', 'css/colorpreset/'+cName+'.css');
            $(this).addClass('active');
        });
    }
    
    //========================
    // Mobile Menu
    //========================
    if($(window).width() < 481)
    {
        $(".mainMenu ul li.parent_menu").click(function(e){
            e.preventDefault();
            $('.submenu', this).toggle('slow');
        });
    }
    
    
    //========================
    // Contact Form
    //========================
    if($("#contactForm").length > 0)
    {
        $("#contactForm").submit(function(e){
            e.preventDefault();
            var name = $("#f_name").val();
            var email = $("#email").val();
            var message = $("#message").val();
            $(".contact_loader").fadeIn('slow');
            if(email !== '')
            {
                $("#email").removeClass('conError');
                if(message == '')
                {
                    $(".contact_loader").fadeOut('slow');
                    $("#message").addClass('conError');
                }
                else
                {
                    $("#message").removeClass('conError');
                    $.ajax({
                        type: "POST",
                        url: 'mail.php',
                        data: {name: name, email: email, message: message},
                        success:function(data)
                        {
                            $(".contact_loader").html('<p>Message Successfully Send!!</p>');
                            $(".contact_loader").delay(2000).fadeOut("slow");
                            $("#f_name").val('');
                            $("#email").val('');
                            $("#message").val('');
                        }
                    });
                }
            }
            else
            {
                $(".contact_loader").fadeOut('slow');
                $("#email").addClass('conError');
            }
        });
    }
    
    if($(".subscriveForm").length > 0)
    {
        $(".subscriveForm form").submit(function(e){
           e.preventDefault();
           $("button i", this).removeClass('icon-pencil').addClass('icon-spin5 animate-spin');
           var email = $("input[type=email]", this).val();
           if(email === '')
           {
               $("button i", this).removeClass('icon-spin5 animate-spin').addClass('icon-pencil');
               $("input[type=email]", this).addClass('errorSubscribe').attr('placeholder', 'Enter Your Email');
           }
           else
           {
               $("input[type=email]", this).removeClass('errorSubscribe')
               $.ajax({
                   type: "POST",
                   url: "subscribe.php",
                   data: {email: email},
                   success:function(data)
                   {
                       $(".subscriveForm form button i").removeClass('icon-spin5 animate-spin').addClass('icon-pencil');
                       $(".subscriveForm form input[type=email]").val('');
                       $(".subscriveForm form input[type=email]").addClass('successSubscribe').attr('placeholder', 'Subscription Successfull!!');
                   }
               })
           }
        });
    }
    
    
})(jQuery);
