<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>The Feil Organization | About</title>
<link rel="stylesheet" href="css/nav.css" type="text/css" media="screen" /><!-- Menu -->
<link rel="stylesheet" href="css/main_styles.css" type="text/css" media="screen"/><!-- MainCSS -->
<style type="text/css">
.officeCities {
	margin-left:-30px;
	float:none;
	height: 36px;
    position:relative;/*! for IE htc*/
    z-index:4;/*H2*/
    font-family: Arial, Helvetica, sans-serif;
    list-style: none;
    padding: 0;
}


.officeCities li
{
    padding: 0;
    /*margin: 0;
    display: block; TODO: I am testing them if they can be removed. If can, remove them.*/
    float: left;
    height: 36px;
    position: relative;/*move it into .officeCities if you want submenu to be positioned relative to the whole menu instead of this li element*/
}

.officeCities li:hover, .officeCities li.onhover
{
    background: white url(bg.gif) repeat-x 0 -48px;
}
ul.officeCities a
{
    
    line-height: 36px; /*Note: keep this value the same as the height of .officeCities and .officeCities li */
    font-size: 15px;
    color: black;
    display: block;
    outline: 0;
    text-decoration: none;
}


ul.officeCities ul
{
    width:200px;
    position: absolute;
    left: -9999px;
    color:#888888;
    border-top: 0; 
    background: #FFF;    
    text-align: left;
    list-style: none; margin: 0;  
    /*Following 1px(padding-right) will determine how much it is overlapped by the sub-sub-menu */
    padding: 0 1px 10px 0;   
}

.officeCities li li
{
    float: none;
    white-space:nowrap;
    height: 36px;
}

.officeCities li li:hover, .officeCities li li.onhover
{
    background:#f7f7f7;
}


.officeCities ul a
{
    
    line-height: 26px;
    font-size: 15px;
    font-weight: normal;
    color: #d1b77c;
    text-align: left;
}

.officeCities ul a:hover
{
    color:#000000;
}

.officeCities li:hover ul, .officeCities li.onhover ul
{
    left: -1px;/*Use this property to change offset of the dropdown*/
    top: auto;
}

.officeCities li:hover .dropToLeft, .officeCities li.onhover .dropToLeft
{
    left: auto;
    right: -1px;
    top: auto;
}
.officeCities ul ul
{
    border-top: 1px solid #DDD;
}

.officeCities li:hover ul ul, .officeCities li:hover ul ul ul, .officeCities li:hover ul ul ul ul,
.officeCities li.onhover ul ul, .officeCities li.onhover ul ul ul, .officeCities li.onhover ul ul ul ul
{
    left: -9999px;
    top:0;
}

.officeCities li li:hover ul, .officeCities li li li:hover ul, .officeCities li li li li:hover ul,
.officeCities li li.onhover ul, .officeCities li li li.onhover ul, .officeCities li li li li.onhover ul
{
    left: 200px;
}

.officeCitiesLI ul li {
	margin-bottom:5px;
}

.firstLI {
	margin-top:10px !important;
}
       

</style>

</head>

<body>

<?php include("header.php"); ?>

<div class="pagecontentclear"></div>
<div id="headerCont">
	<div class="headerIMG"> 
    	<img src="images/expertise_header_pic.jpg">
	</div> <!-- headerIMG closes -->
</div> <!-- headerCont closes -->

<div id="bodyCont">
	<section class="pagecontent">
		<?php include("propertiesSidebar.php");?>
<div id="main_content">
   
        
        

    <div class="copyBox">
    <h3 class="h3Titles">Properties - Retail</h3>
    	<ul class="officeCities">
                    <li class="officeCitiesLI"><a href="">New York</a>
                    	<ul>
                        	<li><a href="">Midtown</a></li>
                            <li><a href="">Midtown South</a></li>
                            <li><a href="">Metro Area</a></li>
                        </ul>
                    </li> 
                    <li class="officeCitiesLI"><a href="">Illinois</a></li>
                    <li class="officeCitiesLI"><a href="">Florida</a></li>
                    <li class="officeCitiesLI"><a href="">Louisiana</a></li>
                    
         </ul>
 <div class="clearFloats"></div>
                    
                    <h4 id="midtownsouthNYC" class="h4Titles">MIDTOWN SOUTH NYC</h4>
                    
                    <div class="buildingCont">
                    <img src="images/images_office/200west57.jpg"/>
                    <p class="addressClass">
                    
                    <br />
                    <span class="OfficeSpan"> </span></p>
                    <ul class="officeCities">
                          <li class="officeCitiesLI"><a href="">Property Links</a>
                          	<ul>
                          
                                <li class="firstLI"><a href="http://feilorg.com" target="_blank" class="officePropertyLinks">
                                Description
                                </a></li> 
                                <li><a href="http://feilorg.com" target="_blank" class="officePropertyLinks">
                                Facts
                                </a></li> 
                                <li><a href="http://feilorg.com" target="_blank" class="officePropertyLinks">
                                Availabilities
                                </a></li>
                             </ul>
                            
                          </li>  
                    
                    </ul>
                    </div><!--buildingCont  closes -->
                    
    </div> <!-- copyBox closes -->

   
    
    
    </div><!-- mainContent closes -->

    
</section> <!-- pageCont closes -->   
<div class="clearFloats"></div>  

</div>
   
<?php include("footer.php"); ?>  


</body>
</html>



