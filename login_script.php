<?php
    require './includes/common.php';

    $email_id = $_POST['email_id'];
    $email_id = mysqli_real_escape_string($con , $email_id);

    $pwd = $_POST['pwd'];
    $pwd = mysqli_real_escape_string($con , $pwd);
    $pwd = md5($pwd);

    $login_select_query = "SELECT user_id , email_id FROM periods_users WHERE email_id = '$email_id' AND pwd = '$pwd'";
    // SELECT uid , email from users WHERE email = '$email' AND password = '$password';
    $login_select_query_result = mysqli_query($con , $login_select_query) or die(mysqli_error($con));

    $total_rows_fetched = mysqli_num_rows($login_select_query_result);
    if($total_rows_fetched==0){
        $error = "<span style='color:red;'>Invalid Credentials</span>";
        header("location:login.php?m1=".$error);
    }
    else{
        $row = mysqli_fetch_array($login_select_query_result);
        $_SESSION['email_id'] = $email_id;
        $_SESSION['user_id']=$row['user_id'];
        header("location:home.php");
    }
?>
