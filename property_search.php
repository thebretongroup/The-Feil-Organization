<?php 
	$bld_type		= $_GET['bld_type'];
	$state			= $_GET['state'];
	$square_ft		= $_GET['square_ft'];
	
	$bld_arr	 	= array(''=>'Select Property Type', 'all'=>'All', 'office'=>'Office', 'industrial'=>'Industrial', 'retail'=>'Retail', 'residential'=>'Residential');
	$state_arr 		= array(''=>'Select State', 'all'=>'All', 'NY'=>'New York', 'NJ'=>'New Jersey', 'IL'=>'Illinois','LA'=>'Louisiana', 'PN'=>'Pennsylvania', 'TX'=>'Texas', 'VA'=>'Virginia','OH'=>'Ohio', 'IN'=>'Indiana', 'MO'=>'Missouri');
	$sqft_arr		= array(''=>'Select Square Feet', 'all'=>'All', 'under_5'=>'Under 5,000', 'five_to_ten'=>'5,000 to 10,000', 'ten_to_thirty'=>'10,000 to 30,000', 'over_30'=>'Over 30,000');

?>
<script type="text/javascript">
	$(document).ready(function(){
		
		//onchange of select
		$("#building").change(function(){
			var id=$(this).val();
			var dataString = 'id='+ id;
					
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data: dataString,
				cache: false,
				success: function(html){
					$(".state").html(html);
				} 
			});
			
			//change submit for residential
			if(id == 'residential'){
				$(".available_form").attr("action", "http://broadwallmgmt.com");
				$(".available_form").attr("target", "_blank");
			}
			else{
				$(".available_form").attr("action", "availabilities.php");
				$(".available_form").attr("target", "_self");
			}
			
		});
		
		var e = document.getElementById("building");
		var building = e.options[e.selectedIndex].value;
	
		//if form has been submitted
		if (building){
			$("#building").ready(function(){
				var id=building;
				var dataString = 'id='+ id;
			
				$.ajax({
					type: "POST",
					url: "ajax.php",
					data: dataString,
					cache: false,
					success: function(html){
						$(".state").html(html);
					} 
				});
		
			});
		}
	
	});
</script>


<div class="propertySearch">
	<h4 class="searchH4"> Availability Search</h4>
            
    <form action="availabilities.php" method="get" class="available_form" target="_self">    
        
      <label class="propertyLabel">
        <select name="bld_type" class="searchOptions" id="building">
        <?php foreach($bld_arr as $bld_key => $bld_value): ?>
            <?php if($bld_type == $bld_key){ ?>
                <option value="<?php echo $bld_key; ?>" selected><?php echo $bld_value; ?></option>
             <?php } else { ?>
                <option value="<?php echo $bld_key; ?>"><?php echo $bld_value; ?></option>	
             <?php } ?>
        <?php endforeach; ?>
        </select>
        </label>
        
        <br/>


		<label class="propertyLabel">
        <select name="state" class="searchOptions state">
       		<option selected="selected"> Select State</option>
        </select>
        </label>
		
        
        <br/>
        
        <label class="propertyLabel">
    
        <select name="square_ft" class="searchOptions">
        <?php foreach($sqft_arr as $sqft_key => $sqft_value): ?>
            <?php if($square_ft == $sqft_key){ ?>
                <option value="<?php echo $sqft_key; ?>" selected><?php echo $sqft_value; ?></option>
             <?php } else { ?>
                <option value="<?php echo $sqft_key; ?>"><?php echo $sqft_value; ?></option>	
             <?php } ?>
        <?php endforeach; ?>
        
        </select>
        </label>
        
        <br/>
        
        <input type="submit" value="Search" class="SearchButton"/>
	</form>
</div>
