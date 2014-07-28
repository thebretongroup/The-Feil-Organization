<?php require_once("Connections/properties.php"); ?>
<?php
$sql_query = 	"SELECT name
				FROM property
				WHERE type = 'Retail' 
				ORDER BY  name ASC ";
				
$result = mysqli_query($con,$sql_query);



 
 

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>The Feil Organization | About</title>
<link rel="stylesheet" href="css/main_styles.css" type="text/css" media="screen"/><!-- MainCSS -->
<script type="text/javascript">
function validateMyForm () {
	var isValid = true;
	if (document.TenantSvcRequestForm.name.value =="") {
		alert ("Please Type Your Name!");
		isValid = false;
	} else if (document.TenantSvcRequestForm.email.value =="") {
		alert ("Please Type Your Email Address!");
		isValid = false;
	}
	return isValid;
}
</script>

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
		<?php include("tenantsvcSidebar.php");?>
<div id="main_content">
                    <div class="copyBox">
                    <p class="overallP">Please complete all fields. All maintenance and repairs shall be completed in accordance with the tenant's lease.</p>
      
      <form name="TenantSvcRequestForm" method="POST" action="emailform.php" class="tntSvcForm">
      
      <fieldset>
      <label>Store Name: </label> <input type="text" name="store_name" size="" id="store_name" autofocus required /> <br/><br/>
      
      <label class="rp_label">Retail Property: </label>
      <select name="Please Select Property" class="PropertySelector">
	 	 <?php while($row = mysqli_fetch_array($result)): ?>
	 		 <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
		 <?php endwhile; ?>
	  </select>
      
	  
      <br/><br/>
      
      
      <label>Your Name: </label> <input type="text" name="your_name" size="" id="your_name" required /><br/><br/>
      
      <label>Email Address: </label> <input type="email" name="your_email" size="" id="your_email" required /><br/><br/>
      
      <label>Phone Number: </label> <input type="tel" name="your_phone" size="" id="your_phone" required /><br/><br/>
      
      <label>Type of Service Requested: </label> <input type="text" name="svc_requested" size="" id="svc_requested" required /><br/><br/>
      
      
      
      <textarea name="comments" id="text" cols="18" rows="8"  onfocus="if
(this.value==this.defaultValue) this.value='';" class="tntSvcTxtArea">Please describe the Issue you may have </textarea><br/><br/>
<input type="submit" value="Submit" onclick="javascript:return validateMyForm();" class="tntSvcSubmit" />
      
      </fieldset>
      </form> 
        
        

                    </div> <!-- copyBox closes -->
</div><!-- mainContent closes -->
</section> <!-- pageCont closes -->   
<div class="clearFloats"></div>  
</div><!-- bodyCont -->
   
<?php include("footer.php"); ?>  
 
 

</body>
</html>



