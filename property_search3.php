<?php
$current_type=$_GET['bld_type'];
$current_state=$_GET['states']; 
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>The Feil Organization | Executive Team</title>
<link rel="stylesheet" href="css/nav.css" type="text/css" media="screen" /><!-- Menu -->
<link rel="stylesheet" href="css/main_styles.css" type="text/css" media="screen"/><!-- MainCSS -->
<script type="text/javascript">
function broadwall_nyc()
		{
			window.open("http://www.broadwallmgmt.com/map.html","_blank");
		}
		function broadwall_li()
		{
			window.open("http://www.broadwallmgmt.com/mapli.html","_blank");
		}

</script>
</head>

<body>

<?php include("header.php"); ?>

<div class="pagecontentclear"></div>
<div id="headerCont">
	<div class="headerIMG"> 
    	<img src="images/header_pics/header_banner5.jpg">
	</div> <!-- headerIMG closes -->
</div> <!-- headerCont closes -->

<div id="bodyCont">
	<section class="pagecontent">
     <?php include ("newsSidebar.php");?>
    
		
<div id="main_content">
<div class="copyBox">
<?php

print "<div id='form_height'>
		<form id='form1' action='property_search3.php? method='GET'>
			<div id='search_step1'>
				<div id='search_step1_pic'></div>
				<div id='search_step1_copy'>
					<span id='copy_spacing' class='white'>Select Property Type:</span><br />
				
					<select name='bld_type' size='1' onchange='this.form.submit()'>";
					$bld_type=array(''=>'Select Property Type','all'=>'All',Office=>'Office',Industrial=>'Industrial',Retail=>'Retail',Residential=>'Residential',Net_Leased=>'Net Leased');
					foreach ($bld_type as $key => $value)
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
					print"</select>
				</div>
	       	</div>
		</form>";
		
		if($current_type=='Residential')
		{
			print"<div id='search_step2b'>
				<div id='search_step2b_pic'></div>
				<div id='search_step2b_copy'>                
					<span id='copy_spacing' class='white'>Select Location in NY:</span><br />                
					<input type ='button' value = 'Manhattan' onClick='javascript: broadwall_nyc()'>
					<input type ='button' value = 'Queens and Long Island' onClick='javascript: broadwall_li()'>
				</div>
			</div>";
		}
		else if ($current_type=='Net_Leased')
		{
			print"<div id='search_step2b'>
				<div id='search_step2b_pic'></div>
				<div id='search_step2b_copy'>
					<span id='copy_spacing' class='white'>Click Here for Available Net Leased Properties:</span><br />                
                    <input type ='button' value = 'Net Leased Properties' onClick=window.location='net_leased.php#available'>
            	</div>
            </div>";
		}
		else if($current_type!='')
		{
			
			print"
			<div id='search_step2'>
				<div id='search_step2_pic'></div>
				<div id='search_step2_copy_col1'>
					<form id='form2' action='property_search3.php' method='GET'>
						<span id='copy_spacing' class='white'>Select State:</span><br />
						<select name='states' size='1' onchange='this.form.submit()'>";
						$states=array(''=>'All','NY'=>'New York','IL'=>'Illinois','NJ'=>'New Jersey','LA'=>'Louisiana', 'PA'=>'Pennsylvania', 'TX'=>'Texas','VA'=>'Virginia','OH'=>'Ohio','IN'=>'Indiana','MO'=>'Missouri');
						foreach ($states as $key => $value)
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
						print"</select>
					<input type='hidden' name='bld_type' value=$current_type>
					</form>
				</div>"; 
				
				//AVAILABILITIES RESULTS FORM			
				print"<form id='form3' action='availabilities.php' method='GET'>";
				if($current_state=='NY' && $current_type=='Office')
				{					
					print"<div id='search_step2_copy_col2'>
						<span id='copy_spacing' class='white'>Select Submarket:</span><br />
						<select name='submarket' size='1'>";
						$submarket=array(''=>'All',Midtown=>'Midtown',Midtown_South=>'Midtown South', Metro_Area=>'Metro Area');
						foreach ($submarket as $key => $value)
						{	
							if($key==$current_submarket)
							{
								print"<option selected value=$key>$value</option>";
							}
							else
							{
								print"<option value=$key>$value</option>";
							}
						}
						print"</select>
					</div>";
				}
				
				if($current_state=='NY' && $current_type=='Retail')
				{					
					print"<div id='search_step2_copy_col2'>
						<span id='copy_spacing' class='white'>Select Submarket:</span><br />
						<select name='submarket' size='1'>";
						$submarket=array(''=>'All',NYC=>'New York City', QLI=>'Queens/Long Island');
						foreach ($submarket as $key => $value)
						{	
							if($key==$current_submarket)
							{
								print"<option selected value=$key>$value</option>";
							}
							else
							{
								print"<option value=$key>$value</option>";
							}
						}
						print"</select>
					</div>";
				}
				
				print"<div id='search_step2_copy_col3'>
					<span id='copy_spacing' class='white'>Square Feet:</span><br />
					<select name='square_ft' size='1'>";
					$square_ft=array(''=>'All',under_5=>'Under 5,000', five_to_ten=>'5,000 - 10,000', ten_to_thirty=>'10,000 - 30,000',over_30=>'Over 30,000');
					foreach ($square_ft as $key => $value)
					{	
						if($key==$current_square_ft)
						{
							print"<option selected value=$key>$value</option>";
						}
						else
						{
							print"<option value=$key>$value</option>";
						}
					}
						
					print"</select></div>
					<input type='hidden' name='bld_type' value=$current_type>
					<input type='hidden' name='states' value=$current_state>
					<div id='search_step2_submit'>
						<INPUT TYPE='image' SRC='images/search.jpg' HEIGHT='20' WIDTH='90' BORDER='0' ALT='Submit Form'>
					</div>
				</div>
			</form>";
		}
		
		print"</div>";
                
?> 



</div> <!-- copyBox closes -->
</div><!-- main_content closes -->

    
</section> <!-- pageCont closes -->   
<div class="clearFloats"></div>  

</div> <!--bodyCont  closes -->
   
<?php include("footer.php"); ?>  


</body>
</html>

