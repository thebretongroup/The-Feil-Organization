<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>The Feil Organization | Property Locator</title>
<link rel="stylesheet" href="css/main_styles.css" type="text/css" media="screen"/><!-- MainCSS -->

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
                    <h3 class="h3Titles">Property Locator</h3>
                    <div id="propertyMap"><img src="images/properties_map.png"></div>    
                    <br/><br/>
                    <?php 
			print "<form action=$editFormAction method='get' name='search' id='search'>";
			print"<div id='propertylocator_search'>
						<div id='search_field'>
							<span id='copy_spacing' class='white'>Select State:</span><br />
							<select name='state' >";
							
							$state=array(0=>'All',1=>'New York',2=>'Illinois',3=>'New Jersey',4=>'Louisiana',5=>'Texas',6=>'Virginia',7=>'Indiana',8=>'Missouri',9=>'Florida');
							foreach ($state as $key => $value)
							{	
								if($key==$current_state)
								{
									print"<option selected value=$key>$value</option>";
								}
								else
								{
									print"<option value=$key>$value</option>";
								}
							}
						print "</select></div>
        
						<div id='search_field'>
							<span id='copy_spacing' class='white'>Select Property Type:</span><br />
							<select name='type'>";
							$type=array(0=>'All',1=>'Industrial',2=>'Office',3=>'Residential',4=>'Retail');
							foreach ($type as $key => $value)
							{	
								if($key==$current_type)
								{
									print"<option selected value=$key>$value</option>";
								}
								else
								{
									print"<option value=$key>$value</option>";
								}
							}
						print"</select></div>
			
					
					<div id='search_field_click'><p align ='left'>
						<INPUT TYPE='image' SRC='../images/search.jpg' HEIGHT='20' WIDTH='90' BORDER='0' ALT='Submit Form'>
					</div>
					
					<div id='clear' class='clear_600'></div>
					
					<span id='copy_12pt' class='white'>To View Our Net Leased Properties, <a href='net_leased'><u>Click Here</u></a></span></div>
				</form>";
		?>
                    
                    
                    
                    
                    
     


                    
                    </div> <!-- copyBox closes -->
</div><!-- mainContent closes -->
</section> <!-- pageCont closes -->   
<div class="clearFloats"></div>  
</div><!-- bodyCont -->
   
<?php include("footer.php"); ?>  


</body>
</html>



