<link href="jquery/css/content_slider_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.css" type="text/css" media="screen" rel="stylesheet">

<script src="jquery/js/jquery.content_slider.js"type="text/javascript"></script>
<script src="jquery/js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="jquery/js/additional_content.js" type="text/javascript"></script>


<script type="text/javascript">
	(function($){
		$(document).ready(function() {
			var image_array = new Array();
			image_array = [
				{image: 'images/current_projects_pic1.png',  link_rel: 'prettyPhoto'},
					// image for the first layer, goes with the text from id="sw0"
				{image: 'images/current_projects_pic2.png',  link_rel: 'prettyPhoto'},
					// image for the second layer, goes with the text from id="sw1"
				{image: 'images/current_projects_pic3.png',  link_rel: 'prettyPhoto'},
					// image for the third layer, goes with the text from id="sw2"
				{image: 'images/current_projects_pic4.png',  link_rel: 'prettyPhoto'},
				
				{image: 'images/current_projects_pic5.png',  link_rel: 'prettyPhoto'}
					// ...
				
			];
			$('#slider1').content_slider({		// bind plugin to div id="slider1"
				map : image_array,				// pointer to the image map
				max_shown_items: 3,				// number of visible circles
				hv_switch: 0,					// 0 = horizontal slider, 1 = vertical
				active_item: 0,					// layer that will be shown at start, 0=first, 1=second...
				wrapper_text_max_height: 200,	// height of widget, displayed in pixels
				middle_click: 0,				// when main circle is clicked: 1 = slider will go to the previous layer/circle, 2 = to the next
				under_600_max_height: 1200,		// if resolution is below 600 px, set max height of content
				border_radius:	0,				// -1 = circle, 0 and other = radius
				border_on_off: 0,
				allow_shadow: 0,
				main_circle_position: 1,
				mode: 1,
				circle_left_offset: 0
			});
		});
	})(jQuery);
</script>


<div id="CarouselContainer">

<div id="current_arrows">
	<a href="#next" id="go_left"><img src="jquery/images/right2.png" /></a>
	<a href="#prev" id="go_right"><img src="jquery/images/left2.png" /></a>
</div>

<h3 class="CarouselH3">Current Projects</h3>
<div class="content_slider_wrapper" id="slider1">
<!-- <h3 class="CarouselH3">Curent Projects</h3> -->

	    <div class="circle_slider_text_wrapper" id="sw0" style="display: none;">
	<!-- content for the first layer, id="sw0" -->
		<div class="content_slider_text_block_wrap">
			<h3>Major Bronx Redevelopment</h3>
			
           
			<span>Concourse Plaza Shopping Center<br />
			15,200 &#150; 42,700 SF Junior Anchors Available. </span>
				<!-- button_regular -->
			<br />
			<a href="current_projects-concourse" class="large_link">Read More</a><!-- large_link -->
			
		</div>
		<div class="clear"></div>	
	</div>

	<div class="circle_slider_text_wrapper" id="sw1" style="display: none;">
	<!-- content for the first layer, id="sw0" -->
		<div class="content_slider_text_block_wrap">
			<h3>New Facade and Expansion</h3>
			
           
			<span>Ermenegildo Zegna Flagship Store<br/>
			645 N. Michigan Avenue, Chicago, IL</span>
				<!-- button_regular -->
			
			<br />
            <a href="current_projects-zegna" class="large_link">Read More</a><!-- large_link -->
			
		</div>
		<div class="clear"></div>	
	</div>

	<div class="circle_slider_text_wrapper" id="sw2" style="display: none;">
	<!-- content for the first layer, id="sw0" -->
		<div class="content_slider_text_block_wrap">
			<h3>New Flagship Retail Corner</h3>
			
           
			<span>New Ground and Mezzanine Storefronts<br />
			488 Madison Avenue, New York, NY</span>
				<!-- button_regular -->
			<br />
			<a href="current_projects-488" class="large_link">Read More</a><!-- large_link -->
			
		</div>
		<div class="clear"></div>	
	</div>    
    
    <div class="circle_slider_text_wrapper" id="sw3" style="display: none;">
	<!-- content for the first layer, id="sw0" -->
		<div class="content_slider_text_block_wrap">
			<h3>New Multi-Level Flagship Corner Retail</h3>
			
           
			<span>New Ground and Mezzanine Floor Storefronts<br /> 
			853 Broadway, New York, NY</span>
				<!-- button_regular -->
			<br />
			<a href="current_projects-853" class="large_link">Read More</a><!-- large_link -->
			
		</div>
		<div class="clear"></div>	
	</div>
    
    
      <div class="circle_slider_text_wrapper" id="sw4" style="display: none;">
	<!-- content for the first layer, id="sw0" -->
		<div class="content_slider_text_block_wrap">
			<h3>New Flagship Corner Retail in Midtown</h3>
			
           
			<span>New Retail Facade<br /> 
			4 Park Avenue, New York, NY</span>
				<!-- button_regular -->
			<br />
			<a href="current_projects-4park" class="large_link">Read More</a><!-- large_link -->
			
		</div>
		<div class="clear"></div>	
	</div>

<script>
	(function($){
		$(document).ready(function(){
			$('#go_left').click(function() {
				$('#slider1').content_slider('public_go_one_slide_left');
			});
			$('#go_right').click(function() {
				$('#slider1').content_slider('public_go_one_slide_right');
			});
		});
	})(jQuery);
</script>
	




	
	
	

	

</div> <!-- closes the .content_slider_wrapper #slider1 -->

</div> <!-- Closes the carousel container -->