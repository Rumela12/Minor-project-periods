<?php

$first_date= $_POST["first"];
$second_date= $_POST["second"];
$third_date= $_POST["third"];
$fourth_date= $_POST["fourth"];
$fifth_date= $_POST["fifth"];
$sixth_date= $_POST["sixth"];
$conn = mysqli_connect("localhost","root","","period_tracker") or die("connection failed");
$sql ="INSERT INTO database_table(First_date,Second_date,Third_date,Fourth_date,Fifth_date,Sixth_date)VALUES('{$first_date}','{$second_date}','{$third_date}','{$fourth_date}','{$fifth_date}','{$sixth_date}')";
$result = mysqli_query($conn, $sql) or die("query failed");
?>
