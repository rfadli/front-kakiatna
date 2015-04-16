<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Kakiatnasugar</title>

    <!--Main Element CSS-->
	<link href="public/css/style.css" rel="stylesheet" type="text/css">
	<link href="public/css/hover.css" rel="stylesheet" type="text/css">
	<link href="public/css/button.css" rel="stylesheet" type="text/css">
	<link href="public/css/form.css" rel="stylesheet" type="text/css">
	
	<!--Responsive CSS-->
	<link href="public/css/responsive.css" rel="stylesheet" type="text/css">
	
	<!--LayerSlider CSS-->
	<link href="public/layerslider/css/layerslider.css" rel="stylesheet" type="text/css">
	
	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	
	<!--[if lte IE 8]>
	<meta HTTP-EQUIV="REFRESH" content="0; url=lte-ie8.html">
	<![endif]-->

</head>


    <title>sugar</title>
    
  </head>
    
  <body>
  	
  	<?php echo $content ?>;
  
	<script src="public/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" language="javascript" charset="utf-8" src="/public/js/menu.js"></script>
	
	<!--Placeholder Script-->
	<script src="public/js/placeholder.js" type="text/javascript"></script>
	<script type="text/javascript">
	$.fn.placeholder();
	</script>
	
	<!--Banner Slider Script-->
	<script src="public/layerslider/jQuery/greensock.js" type="text/javascript"></script>
	<script src="public/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="public/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			"use strict";
			$('#layerslider').layerSlider({
				skinsPath : 'public/layerslider/skins/',
				skin : 'borderlessdark3d',
				thumbnailNavigation : 'hover',
				showCircleTimer : true,
				showBarTimer : true,
	    		touchNav : true,
				navStartStop : true,
				animateFirstSlide : true,
				responsive : true,
			});
			
			// GO TO TOP SETTING
			var offset = 220;
			var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.back-to-top').fadeIn(duration);
				} else {
					jQuery('.back-to-top').fadeOut(duration);
				}
			});
			
			jQuery('.back-to-top').click(function(event) {
				event.preventDefault();
				jQuery('html, body').animate({scrollTop: 0}, duration);
				return false;
			})
		});		
</script>	
  </body>
</html>