<?php

define("HOST", "differentgifts2.db.10140891.hostedresource.com");
define("USER", "differentgifts2");
define("PASSWORD", "a1B2c3d4@");
define("DATABASE", "differentgifts2");
define("USER", "differentgifts2");
define("PASSWORD", "a1B2c3d4@");
define("DATABASE", "differentgifts2");



// Show MySQL error
function show_error() {
  die("Error ". mysql_errno() . " : " . mysql_error());
}

// Open MySQL connection and select database
function mysql_open() {
  $connection = @ mysql_connect(HOST, USER, PASSWORD)
      or die("Could not connect");
  mysql_select_db(DATABASE, $connection)
      or show_error();
  return $connection;
}


function createAccount($username, $email, $password, $payment, $fname, $lname, $company, $phone, $country, $city, $code, $address, $RequireInfo)
{
$connection = mysql_open();

   	  
 $userName = mysql_escape_string(trim(strtolower($username)));
 $email = mysql_escape_string($email);
 $password = mysql_escape_string($password);
 $payment = mysql_escape_string($payment);
$fname = mysql_escape_string($fname);
 $lname = mysql_escape_string($lname);
 $company = mysql_escape_string($company);
 $phone = mysql_escape_string($phone);
 $country = mysql_escape_string($country);
  $city = mysql_escape_string($city);
	 $code = mysql_escape_string($code);
	 $address = mysql_escape_string($address);
	  $RequireInfo = mysql_escape_string($RequireInfo);
	  

	  

		  $password = crypt($password, substr($userName, 0, 2));
		  $insert = "insert into customers($userName, $email, $password, $payment, $fname, $lname, $company, $phone, $country, $city, $code, $address, $RequireInfo) " .
		  "values ('$userName', '$email', '$password', '$payment', '$fname', '$lname', '$company', '$phone', '$country', '$city', '$code', '$address', '$RequireInfo')";
	$result = mysql_query($insert, $connection);
	mysql_close($connection) or show_error();
	return $result;
	




}



?>
