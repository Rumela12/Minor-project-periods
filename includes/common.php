<?php
    $con = mysqli_connect("localhost:3306","root","","period_tracker") or die(mysqli_error($con));
    // echo $con ? 'connected' : 'not connected';
    if(!isset($_SESSION['email'])){
        session_start();
    }
?>