<?php
$current_type=$_GET['bld_type'];
$current_state=$_GET['states']; 
?>
<div class="propertySearch">
<h4 class="searchH4"> Availability Search</h4>
              
<?php                
                print"
				<div id='form_height'>
				<form id='form1' action='property_search.php? method='GET'>
				
				<div id='search_step1'>
				<div id='search_step1_copy'>
				<select name='bld_type' size='1' onchange='this.form.submit()'>";
				$bld_type=array('' => 'Select Property Type', 'all' => 'All', Office => 'Office', Industrial =>'Industrial', Retail => 'Retail', Residential => 'Residential', Net_Leased => 'Net Leased');
				foreach ($bld_type as $key => $value) 
				{
					if ($key==$current_type)
					{
						print"<option selected value=$key>$value</option>";
					} else 
					{
						print"<option value=$key>$value</option>";
					}
				}
				print"</select>
				</div>
				</div>
				</form>";
				 if ($current_type=='Residential')
				 {
					 print"<div id='search_step2b'>
					 <div id='search_step2b_copy'>
					 <input type='button' value='Manhattan' onClick='javascript: broadwall_nyc()'>
					 <input type='button' value='Queens and Long Island' onClick='javascript: broadwall_li()'>
					 </div>
					 </div>";
				 }
				
				else if ($current_type=='Net_Leased')
				{
					print"<div id='search_step2b'>
					
					<div id='search_step2b_copy'>
					<input type='button' value='Net Leased Properties' onClick=window.location=net_leased.php#available'>
					
					</div>
					</div>";
				}
				
				else if($current_type!='')
				{
					print"
					<div id='search_step2'>
					<div id='search_step2_copy_col1'>
					<form id='form2' action='property_search.php' method='GET'>
					<select name='states' size='1' onchange='this.form.submit()'>";
					$states=array('' => 'Select State', 'all' => 'All', 'NY' => 'New York', 'IL' => 'Illinois', 'NJ' => 'New Jersey', 'LA' => 'Louisiana', 'PA' => 'Pennsylvania', 'TX' => 'Texas', 'VA' => 'Virginia', 'OH' => 'Ohio', 'IN' => 'Indiana', 'MO' => 'Missouri');
					foreach ($states as $key => $value)
					{
						if($key==$current_state)
						{
							print"<option selected value=$key>$value</option>";
						} 
						else 
						{
							print "<option value=$key>$value</option>";
						}
					}
					print "</select>
					<input type='hidden' name='bld_type' value=$current_type>
					</form>
					</div>";
					
					//Availabilities Results Form 
					
					print"<form id='form3' action='availabilities.php' method='GET'>";
					if($current_state=='NY' && $current_type=='Office')
					{
						print "<div id='search_step2_copy_col2'>
						<select name='submarket' size='1'>";
						$submarket=array('' => 'Select Submarket', 'all' => 'All', Midtown => 'Midtown', Midtown_South => 'Midtown South', Metro_Area => 'Metro Area');
						foreach ($submarket as $key => $value)
						{
							if ($key==$current_submarket)
							{
								print "<option selected value=$key>$value</option>";
							}
							else 
							{
								print "<option value=$key>$value</option>";
								
							}
						}
						print"</select>
						</div>";
					}
					
					if($current_state=='NY' && $current_type=='Retail')
					{
						print"
						<div id='search_step2_copy_col2'>
						<select name='submarket' size='1'>";
						$submarket=array('' =>'Select Submarket', 'all' => 'All', NYC => 'New York city', QLI => 'Queens/ Long Island'); 
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
							print "</select>
							</div>";
						}
						
							
							print "<div id='search_step2_copy_col3'>
							<select name='square_ft' size='1'>";
							$square_ft=array(''=> 'Select Square Feet', 'all' => 'All' , under_5 =>'Under 5,000', five_to_ten =>'5,000 - 10,000', ten_to_thirty => '10,000 - 30,000', over_30 => 'Over 30,000');
							
							foreach ($square_ft as $key => $value)
							{
								if ($key==$current_square_ft)
								{
									print"<option selected value=$key>$value</option>";
								}
								else 
								{
									print"<option value=$key>$value</option>";
								}
							}
							
							print "</select></div>
							<input type='hidden' name='bld_type' value=$current_type>
							<input type='hidden' name='states' value=$current_state>
							<input type='button' alt='Submit Form' class='submitFormButton'>
							
							</form>";
						}
						print"</div>";
	
?>               
</div><!-- PropertySearch Closes -->