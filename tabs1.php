<link rel="stylesheet" href="carousel/files/css/horizontal.css" type="text/css" media="screen" />
<script type="text/javascript" src="carousel/files/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="carousel/files/js/jquery.easing.1.3.js"></script>    
<script type="text/javascript" src="carousel/files/js/jquery.elegantcarousel.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function() {
			
			jQuery('.carousel').elegantcarousel({
					delay:200,
					fade:300,
					slide:800,
					effect:'slide',		  			//  fade, slide			  
					orientation:'horizontal',		//	horizontal, vertical
					captionFade: 150,
					loop: false,					//	false, true
					autoplay: true,					// 	false, true
					time: 4000,
					stopAutoplay: false
			});
			
			
			// horizontal center of the main  
			function center_main() {
				var window_height = jQuery(window).height();
				var main_height = parseInt(jQuery('#main').css('height'));
				var main_height_margin = (window_height - main_height) / 2;
				jQuery('#main').css('top',Math.floor(main_height_margin));
			}
			center_main();
	
		});
		
		
	</script>
    

<div id="tabCont">
    	
        	<div class="horizontal">
            	<div id="carousel-1" class="carousel">
                	<a class="carousel_prev carousel_left" href="" rel="carousel-1">prev</a>
                	<div class="carousel_container">
                        <ul class="portfolio_items">
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic1.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic2.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic3.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>       
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic4.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>   
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic1.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li> 
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic2.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic3.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic4.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>
                            <li><div class="inner"><a href=""><img src="images/current_projects_pic1.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>                       		<li><div class="inner"><a href=""><img src="images/current_projects_pic2.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>
                           <li><div class="inner"><a href=""><img src="images/current_projects_pic3.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>
                           <li><div class="inner"><a href=""><img src="images/current_projects_pic4.jpg"/></a>
                            		<div class="caption"><a href="">488 Madison Ave</a></div></div></li>
                        </ul>
                	</div>
                    <a class="carousel_next carousel_right" href="" rel="carousel-1">next</a>
                </div>
            </div>
     
</div>
    
