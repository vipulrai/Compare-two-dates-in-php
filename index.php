<?php
$exp_date = "2013-5-6"; 
$todays_date = date("Y-m-d"); 
$today = strtotime($todays_date); 
$expiration_date = strtotime($exp_date); 
if ($expiration_date > $today) 
{ 
$valid = "yes"; 
} 
else 
{ 
$valid = "no"; 
}
echo"$valid";
?>