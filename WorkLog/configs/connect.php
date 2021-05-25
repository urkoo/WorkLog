<?php
$dbhost = 'fdb20.awardspace.net';
$dbuser = '3819499_osredkar';
$dbpass = 'Bazaosredkar1!';
$dbname = '3819499_osredkar';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($mysqli→connect_errno ) {
  printf("Connect failed: %s<br />", $mysqli→connect_error);
  exit();
}
?>
