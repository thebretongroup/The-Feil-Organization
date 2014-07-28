<?php require_once("Connections/properties.php"); ?>
<?php
		
	if($_POST['id']){
		$id=$_POST['id'];		
	
				
		 $states_abv = array('AL'=>"Alabama",  'AK'=>"Alaska",  'AZ'=>"Arizona",  'AR'=>"Arkansas",  'CA'=>"California",  'CO'=>"Colorado",  'CT'=>"Connecticut",  'DE'=>"Delaware",  'DC'=>"District Of Columbia",  'FL'=>"Florida",  'GA'=>"Georgia",  'HI'=>"Hawaii",  'ID'=>"Idaho",  'IL'=>"Illinois",  'IN'=>"Indiana",  'IA'=>"Iowa",  'KS'=>"Kansas",  'KY'=>"Kentucky",  'LA'=>"Louisiana",  'ME'=>"Maine",  'MD'=>"Maryland",  'MA'=>"Massachusetts",  'MI'=>"Michigan",  'MN'=>"Minnesota",  'MS'=>"Mississippi",  'MO'=>"Missouri",  'MT'=>"Montana",  'NE'=>"Nebraska",  'NV'=>"Nevada",  'NH'=>"New Hampshire",  'NJ'=>"New Jersey",  'NM'=>"New Mexico",  'NY'=>"New York",  'NC'=>"North Carolina",  'ND'=>"North Dakota",  'OH'=>"Ohio",  'OK'=>"Oklahoma",  'OR'=>"Oregon",  'PA'=>"Pennsylvania",  'RI'=>"Rhode Island",  'SC'=>"South Carolina",  'SD'=>"South Dakota",  'TN'=>"Tennessee",  'TX'=>"Texas",  'UT'=>"Utah",  'VT'=>"Vermont",  'VA'=>"Virginia",  'WA'=>"Washington",  'WV'=>"West Virginia",  'WI'=>"Wisconsin",  'WY'=>"Wyoming");
		
		//echo '<option value="'.$id.'">'. $id . '</option>';		
		if($id=='all' || $id ==''){
			$sql_query=("SELECT `state` FROM  `property` ORDER BY `state` ASC");
		}
		else{
			$sql_query=("SELECT `state` FROM  `property` WHERE  `type` =  '$id' ORDER BY `state` ASC");
		}

		$result = mysqli_query($con,$sql_query);
		
		if($id == 'all'){
			echo '<option value="">Select State</option>';
		}
		elseif($id == 'residential'){
			echo '<option value="">New York</option>';
		}
		

		while($row = mysqli_fetch_array($result)){
			echo $row;
			$state=$row['state'];
			if ($state != $state_prev){
				echo '<option value="' . $state . '">' . $states_abv[$state] . '</option>';
			}
				
			$state_prev = $state;
		}
		
		
	}
?>