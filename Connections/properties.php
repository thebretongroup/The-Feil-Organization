<?php
// Create connection
$con=mysqli_connect("localhost","feilorg_DB_user","3aswutuX","admin_feil");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>