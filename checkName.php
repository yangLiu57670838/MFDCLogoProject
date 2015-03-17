<?php

require "defs.php";


$q=$_REQUEST["q"];

$userNames = getuserNames($q);





if ($userNames == 1) 
{
  
           $response = "this name has already been registered";
   
}
else {
  $response="this name is fine";
}


echo $response;
?> 
