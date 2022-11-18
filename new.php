<?php
// PHP program to illustrate 
// date_diff() function
  
// creates DateTime objects
$datetime1 = date_create('2017-06-28');
$datetime2 = date_create('0000-00-00');
  
// calculates the difference between DateTime objects
$interval = date_diff($datetime1, $datetime2);
  
// printing result in days format
echo $interval->format('%R%a days');
?>