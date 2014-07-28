<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>The Feil Organization | Industrial | Over 3 Million square feet of industrial property</title>


<link rel="stylesheet" href="css/nav.css" type="text/css" media="screen" /><!-- Menu -->
<link rel="stylesheet" href="css/main_styles.css" type="text/css" media="screen"/><!-- MainCSS -->
<link rel="stylesheet" href="mixitUp/reset.css">
<link rel="stylesheet" href="mixitUp/style.css" media="screen" type="text/css" />


<link rel="stylesheet" href="hover/sinister.css">
<script src="hover/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="hover/fancyBox/jquery.fancybox.pack.js"></script>

</head>
<body>
<?php include("header.php"); ?>

<div class="pagecontentclear"></div>
<div id="headerCont">
	<div class="headerIMG"> 
    	<img src="images/header_pics/header_banner1.jpg">
	</div> <!-- headerIMG closes -->
</div> <!-- headerCont closes -->

<div id="bodyCont">
	<section class="pagecontent">
		<?php include("propertiesSidebar.php");?>
<div id="main_content">
<img src="images/properties_map.png" class="NetLeasedMap">

   
        
    <div class="copyBox">
      <p class="overallP">With hundreds of net leased properties from coast to coast, The Feil Organization devotes a substantial portion of its investment portfolio to net leased properties. Net leases offer maximum property control with minimum capital outlay.</p>
      <p class="overallP overallP_secondP">To view our net leased property listing, <a href="pdfs/Net_Leased_Flyer.pdf" target="_blank">click here.</a></p>

      <p class="overallP">To search more <a href="http://www.costar.com/costarconnect/MasterPage/Main.aspx?SiteId=22305&CheckSum=1968#Listings" target="_blank">click here.</a></p>
    </div> <!-- copyBox closes -->
  </div><!-- mainContent closes -->
</section> <!-- pageCont closes -->

<div class="clearFloats"></div>  

</div><!-- bodyCont -->
   
<?php include("footer.php"); ?>  

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src='http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js'></script>

  <script src="mixitUp/index.js"></script>	
  
  <script src="hover/custom.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        $(".fancybox").on("click", function(){
            $.fancybox({
                helpers: {
                    overlay: {
                    locked: false
                    }
                },
              href: this.href,
              type: $(this).data("type")
            }); // fancybox
            return false   
        }); // on
    }); // ready
    </script>

</body>
</html>
