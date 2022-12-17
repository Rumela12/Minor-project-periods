<?php
    include "common.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM `notifications` WHERE `notifications`.`id` = $id;";
    if(mysqli_query($con,$sql)){
        echo $sql;
        header("Location: ../blog_notification.php?info=success2");

    }else {
        header("Location: ../blog_notification.php?info=failure");
    }

?>
</br></br>

<a href="../blog_main.php">Back</a>