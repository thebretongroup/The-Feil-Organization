<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>The Feil Organization | About</title>
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
<?php include("tenantsvcSidebar.php");?>
<div id="main_content">
<div class="copyBox">
   
        
<p class="emailPs1">Thanks <strong><?php echo strtoupper($_POST["your_name"]) ?></strong> for submitting your request. We will get back to you shortly.</p>

<?php
//This is a very simple PHP script that outputs the name of each bit of information (that corresponds to the <code>name</code> attribute for that field) along with the value that was sent with it right in the browser window, and then sends it all to an email address (once you've added it to the script).

if (empty($_POST)) {
	print "<p>No data was submitted.</p>";
	print "</body></html>";
	exit();
}

//Creates function that removes magic escaping, if it's been applied, from values and then removes extra newlines and returns to foil spammers. Thanks Larry Ullman!
function clear_user_input($value) {
	if (get_magic_quotes_gpc()) $value=stripslashes($value);
	$value= str_replace( "\n", '', trim($value));
	$value= str_replace( "\r", '', $value);
	return $value;
	}


if ($_POST['comments'] == '') $_POST['comments'] = '';	

//Create body of message by cleaning each field and then appending each name and value to it

$body ="Here is the data that was submitted:\n";

foreach ($_POST as $key => $value) {
	$key = clear_user_input($key);
	$value = clear_user_input($value);
	if ($key=='extras') {
		
	if (is_array($_POST['extras']) ){
		$body .= "$key: ";
		$counter =1;
		foreach ($_POST['extras'] as $value) {
				//Add comma and space until last element
				if (sizeof($_POST['extras']) == $counter) {
					$body .= "$value\n";
					break;}
				else {
					$body .= "$value, ";
					$counter += 1;
					}
				}
		} else {
		$body .= "$key: $value\n";
		}
	} else {

	$body .= "$key: $value\n";
	}
}

extract($_POST);
//removes newlines and returns from $email and $name so they can't smuggle extra email addresses for spammers
$your_email = clear_user_input($your_email);
$your_name = clear_user_input($your_name);

//Create header that puts email in From box along with name in parentheses and sends bcc to alternate address
$from='From: '. $your_email . "(" . $your_name . ")" . "\r\n" . 'Bcc: jfcr77@yahoo.com' . "\r\n";


//Creates intelligible subject line that also shows me where it came from
$subject = 'Feedback From Feilorg.com - Tenant Services Requests.';

//Sends mail to me, with elements created above
mail ('jfcr77@yahoo.com', $subject, $body, $from);


?>

</div><!-- copyBox closes -->
    </div><!-- mainContent closes -->

    
</section> <!-- pageCont closes -->   
<div class="clearFloats"></div>  

</div>
   
<?php include("footer.php"); ?>  


</body>
</html>