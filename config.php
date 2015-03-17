<?php
 
// Configuration settings for My Site
 //require_once "includes/defs.php";
 
 //$sender = getEmailSender();
 
 
// Email Settings
//$site['from_name'] = $sender['name']; // from email name
//$site['from_email'] = $sender['email']; // from email address

$site['from_name'] = "Yang";
$site['from_email'] = "yang.liu9@griffithuni.edu.au";  //will send php email from this address
 
// Just in case we need to relay to a different server,
// provide an option to use external mail server.
$site['smtp_mode'] = 'disabled'; // enabled or disabled
$site['smtp_host'] = null;
$site['smtp_port'] = null;
$site['smtp_username'] = null;
?>