<?php
    require("./includes/common.php");
    // if (isset($_GET['id'])) {
        // $id = $_GET["id"]; 
        // $user_id = $_SESSION[`u_id`];
        $email_id = $_SESSION['email_id'];
        
        $query = "DELETE FROM `dates` WHERE `dates`.`email`='$email_id' ";
        $result = mysqli_query($con , $query) or die(mysqli_error($con));
        
        header("location:track.php");
    // }

?>
<!-- </br></br>

<a href="../blog_main.php">Back</a> -->