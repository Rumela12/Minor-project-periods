<?php

    include "common.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM notifications where id='$id';";
    $query = mysqli_query($con, $sql)or die($mysqli_error($con));
    
    if(mysqli_num_rows($query) >= 1){
        foreach($query as $q){
            $email_id = $q['email_id'];
            $title = $q['title'];
            $content = $q['content'];
            $sql = "INSERT INTO `data` (`id`, `email_id`, `title`, `content`) VALUES (NULL, '$email_id', '$title', '$content')";
            mysqli_query($con,$sql);
        } 
        $sql = "DELETE FROM `notifications` WHERE `notifications`.`id` = $id;";
        if(mysqli_query($con,$sql)){
            echo $sql;
            header("Location: ../blog_notification.php?info=success");

        }else {
            header("Location: ../blog_notification.php?info=failure");
        }
    
    }else{
        echo "ERROR occurred";
    }
    
?>
</br></br>
<a href="../blog_main.php">Back</a>
