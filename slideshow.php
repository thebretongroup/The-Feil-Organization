<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="homeslide/js/imagesloaded.js"></script>
<script src="homeslide/js/jquery.easing.js"></script>
<script src="homeslide/js/fws2.js"></script>
<link rel="stylesheet" href="homeslide/css/fws2.css" media="all">
<script type="text/javascript">
        jQuery(document).ready(function(){
            new fws2().init({
                unique     : "fws2-instance1", // ID of the slider instance 
                
                duration   : "1000",  /* Slides Fade Speed (miliseconds) */
                hoverpause : "1",     /* Pause autoslide on mousehover, 0 - OFF, 1 - ON */
                pause      : "6000",  /* Autoslide pause between slides (miliseconds), 0 - OFF */
                arrows     : "1",     /* Show navigation Arrows, 0 - OFF, 1 - ON */
                bullets    : "1"      /* Show navigation Bullets, 0 - OFF, 1 - ON */
            });
        });
</script>
<div id="slider_container">
 <div class="fws2" id="fws2-instance1">
        <div class="slider_container">
        
        <div class="slide"> 
                <img src="images/pic1.jpg" alt="commercial real estate"> <!-- Slide image -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                                     <!-- Text title -->
                        <p class="description">26 Million Square Feet | <span class="captionSlider">Nationwide Portfolio of Premier Properties</span></p>  <!-- Text description -->
                       
                    </div>
                </div>
            </div>
            
            
            <div class="slide"> 
                <img src="images/pic2.jpg" alt="commercial real estate"> <!-- Slide image -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                                   <!-- Text title -->
                        <p class="description">Five Decades of Stability | <span class="captionSlider">Long-Term Performance and Profitability</span></p>  <!-- Text description -->
                        
                    </div>
                </div>
            </div>
            
            
            
            <div class="slide"> 
                <img src="images/pic3.jpg" alt="commercial real estate"> <!-- Slide image -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                                    <!-- Text title -->
                        <p class="description">Diversity of Holdings | <span class="captionSlider">Retail. Office. Residential. Industrial. Land. Net Leased.</span></p>  <!-- Text description -->
                        
                    </div>
                </div>
            </div>
            
            
            <div class="slide"> 
                <img src="images/pic5.jpg" alt="commercial real estate"> <!-- Slide image -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                                       <!-- Text title -->
                        <p class="description">Strategic Leadership | <span class="captionSlider">Proven Management Philosophies</span></p>  <!-- Text description -->
                        
                    </div>
                </div>
            </div>
            
            
            <div class="slide"> 
                <img src="images/pic4.jpg" alt="commercial real estate"> <!-- Slide image -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                                      <!-- Text title -->
                        <p class="description">Rock-Solid Core Principles | <span class="captionSlider">Full-Service Operations</span></p>  <!-- Text description -->
                        
                    </div>
                </div>
            </div>
            
            
            <div class="slide"> 
                <img src="images/pic6.jpg" alt="commercial real estate"> <!-- Slide image -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                                      <!-- Text title -->
                        <p class="description">Experienced Ownership | <span class="captionSlider">Investment. Management. Development.</span></p>  <!-- Text description -->
                        
                    </div>
                </div>
            </div>
</div>

<div class="slidePrev"><i class="fa fa-chevron-left"></i></div>
        <div class="slideNext"><i class="fa fa-chevron-right"></i></div>
        <div class="timers"></div>
        <div class="bullets"></div>
</div>
</div>