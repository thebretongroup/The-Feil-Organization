  <link rel="stylesheet" href="css/responsiveslides.css">

   <script src="scripts/jquery-2.1.0.min.js"></script>
  <script src="scripts/responsiveslides.min.js"></script>
  <script>
$(function () {
  $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });
	  

    });
</script>
<style type="text/css">



</style>
<div id="slider_container">


 <div class="callbacks_container">
 <ul class="rslides" id="slider4">
        <li>
          <img src="images/pic1.jpg" alt="">
          <p class="caption">26 Million Square Feet | <span class="captionSlider">Nationwide Portfolio of Premier Properties</span></p>
        </li>
        <li>
          <img src="images/pic2.jpg" alt="">
          <p class="caption">Five Decades of Stability | <span class="captionSlider">Long-Term Performance and Profitability</span></p>
        </li>
        <li>
          <img src="images/pic3.jpg" alt="">
          <p class="caption">Diversity of Holdings | <span class="captionSlider">Retail. Office. Residential. Industrial. Land. Net Leased.</span></p>
        </li>
           <li>
          <img src="images/pic5.jpg" alt="">
          <p class="caption">Strategic Leadership | <span class="captionSlider">Proven Management Philosophies</span></p>
        </li>
        
           <li>
          <img src="images/pic4.jpg" alt="">
          <p class="caption">Rock-Solid Core Principles | <span class="captionSlider">Full-Service Operations</span></p>
        </li>
        
           <li>
          <img src="images/pic6.jpg" alt="">
          <p class="caption">Experienced Ownership | <span class="captionSlider">Investment. Management. Development.</span></p>
        </li>
        
      </ul>
</div>
</div>
