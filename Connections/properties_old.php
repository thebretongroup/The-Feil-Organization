<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_properties = "72.167.245.16";
$database_properties = "wp_test";
$username_properties = "hwireadmin";
$password_properties = "highwire";
$properties = mysql_pconnect($hostname_properties, $username_properties, $password_properties) or trigger_error(mysql_error(),E_USER_ERROR); 
?>