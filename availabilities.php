<?php require_once("Connections/properties.php"); ?>
<?php 
	
	$base_url 	= '/test_area';
	//$base_url = '';
	
	$debug		= 0;
	$count 		= 0;
	$bld_type	= $_GET['bld_type'];
	$state		= $_GET['state'];
	$square_ft	= $_GET['square_ft'];
	$sort_by 	= $_GET['sort_by'];
	$query_post ='bld_type=' . $bld_type . '&state=' . $state . '&square_ft=' . $square_ft;
	
	if(isset($_GET['sort'])){
		$sort=$_GET['sort'];
		if($sort=='DESC'){ $sort ='ASC'; }
		else{ $sort='DESC'; }
	}
	else{
		$sort = 'DESC';
	}
	
	$sql_query = 	"SELECT *
					FROM availabilities
					LEFT JOIN property
					ON availabilities.property_num = property.id ";

	//Building type
	if(isset($bld_type) && $bld_type != '' && $bld_type != 'all'){
		$sql_query .=	"WHERE type = '$bld_type'";
	}
	else{
		$sql_query .=	"WHERE property.id > 1";
	}
	//State
	if(isset($state) && $state != '' && $state != 'all'){
		$sql_query .=	" AND state = '$state'";
	}	
	
	//Square feet
	if($square_ft=='' && $square_ft == 'all'){
		$print_squareft='All';
		$sql_query .= ' ';
	}
	else if($square_ft=='under_5'){
		$print_squareft='Under 5,000';
		$sql_query .= ' AND rsf < 4999';
	}
	else if ($square_ft == 'five_to_ten'){
		$print_squareft='5,000 - 10,000';
		$sql_query .= ' AND rsf BETWEEN 5000 AND 10000';
	}
	else if ($square_ft == 'ten_to_thirty'){
		$print_squareft='10,000 - 30,000';
		$sql_query .= ' AND rsf BETWEEN 10000 AND 30000';
	}
	else if ($square_ft == 'over_30'){
		$print_squareft='Over 30,000';
		$sql_query .= ' AND rsf > 30000';
	}
	
	//Sort Query
	if($sort_by){
		$sql_query .=  " ORDER BY $sort_by";
		$sql_query .=  " $sort";
	}
	else {
		$sql_query .=  " ORDER BY name ASC";
	}
	
						
	//SQL QUERY
	$result = mysqli_query($con,$sql_query);
	
	$num_rows = mysqli_num_rows($result);
	
	if($debug==1){
		print "BUILDING TYPE = $bld_type<br />
		STATES = $states<br />
		SQUARE FEET = $square_ft<br />
		SORT = $sort<br />
		SORT BY = $sort_by<br />";
		echo $sql_query . '<br>';
		echo $query_post . '<br>';
	}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>The Feil Organization | Availabilites | 50-Year track record of growth and profitability</title>
<link rel="stylesheet" href="css/main_styles.css" type="text/css" media="screen"/><!-- MainCSS -->
<script>
function print_page() {
    window.print();
}
</script>
</head>
<body>

<?php include("header.php"); ?>

    <div class="pagecontentclear"></div>
    
    <div id="headerCont">
        <div class="headerIMG"> 
            <img src="images/header_pics/header_banner6.jpg">
        </div> <!-- headerIMG closes -->
    </div> <!-- headerCont closes -->


    <div id="bodyCont">			
        <section class="pagecontent">
            
            <?php include("aboutSidebar.php");?>
            
            <div id="main_content">
                <div id="search" class="copyBox">
                    <h3 class="h3Titles">Availabilities</h3>                   
						
						<div class="controls">
							<span class="search-results">
								<strong>Results:</strong> <?php echo $num_rows . ' '; ?>
								
								<?php if($bld_type){ ?>
									<strong>Type:</strong> <?php echo $bld_type; ?>
								<?php } if($state){ ?>
									<strong>State:</strong> <?php echo $state; ?>
								<?php } if($square_ft){ ?>
									 <strong>Square Feet:</strong> <?php echo $print_squareft; } ?>
							</span>
					
							<button class="new-search" onclick="window.location='<?php echo $base_url; ?>/availabilities';">New Search</button>
							<button class="new-search" onclick="print_page()">Print</button>
							
							
						</div>
						
						
						<table id="numbers" class="" cellpadding="0" cellspacing="0" style="list-style:none; border-collapse: collapse;">
                        <thead> 
                            <tr>
                                <th class="sorting"><a href="<?php echo $base_url; ?>/availabilities?<?php echo $query_post ?>&sort_by=name&sort=<?php echo $sort; ?>#search">Property</a></th>
                                <th class="sorting"><a href="<?php echo $base_url; ?>/availabilities?<?php echo $query_post ?>&sort_by=city&sort=<?php echo $sort; ?>#search">Location</a></th>
                                <th class="sorting"><a href="<?php echo $base_url; ?>/availabilities?<?php echo $query_post ?>&sort_by=type&sort=<?php echo $sort; ?>#search">Type</a></th>
                                <th class="sorting"><a href="<?php echo $base_url; ?>/availabilities?<?php echo $query_post ?>&sort_by=rsf&sort=<?php echo $sort; ?>#search">Sq. Ft.</a></th>
                                <th>Plan</th>
                            </tr>
                        </thead>
					
                    	<tbody>
                        	
                            <?php while($row = mysqli_fetch_array($result)): ?>
                          
						    <tr>
								<?php if($row['costar']){ ?>
	                                <td><a href="<?php echo $row['costar'] ?>" target="_blank"><?php echo $row['name'] ?></a></td>
								<?php } else { ?>
									<td><?php echo $row['name'] ?></td>
								<?php } ?>
								
                                <td><?php echo $row['city'] . ', ' . $row['state'] ?></td>
                                <td><?php echo $row['type'] ?></td>
                                <td><?php echo number_format($row['rsf']) ?></td>
                                <td>
									<?php if($row['floor_plan']){ ?>
                                		<a href="/images/floorplans/<?php echo  $row['floor_plan'] ?>" target="_blank"><img src="/images/pdf-icon.png" height="25" width="25"></a>
									<?php } ?>
                                </td>
                            </tr>
							
							<?php $count++; ?>
                            <?php endwhile; ?>
							<?php mysqli_close($con); ?>
						</tbody>	
						
						</table>
						
						<?php if($count==0){ ?>
							<div class="no-results">Sorry, no results found</div>
						<?php } ?>
								


                </div> <!-- copyBox closes -->   
            </div><!-- mainContent closes -->

        </section> <!-- pageCont closes -->   
        
        <div class="clearFloats"></div>  

    </div>
	
   
<?php include("footer.php"); ?>  


</body>
</html>




