<?php
    require './includes/common.php';

    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con , $name);

    $email_id = $_POST['email_id'];
    $email_id = mysqli_real_escape_string($con , $email_id);
    // $email_id = filter_var($email_id, FILTER_SANITIZE_EMAIL);
    // $email = "rumelamukherjee02@gmail.com";

    $pwd = $_POST['pwd'];
    $pwd = mysqli_real_escape_string($con , $pwd);
    $pwd = md5($pwd);


    // $email_regex = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";

    //check whether email already exists
    $select_query = "SELECT * from periods_users WHERE email_id = '$email_id'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows!=0){
        $error = "<span style='color:red;'>Email Already Exists</span>";
        header('location:signup.php?m1='.$error);
    }
    // if(!filter_var($email_id, FILTER_VALIDATE_EMAIL)){
    
    //     $error = "<span style='color:red;'>Invalid Email format</span>";
    //     header('location:signup.php?m1='.$error);
    // }
    // else if(!preg_match($contact_regex , $contact )){
    //     $error = "<span class='red'>Incorrect Contact Number</span>";
    //     header('location:signup.php?m2='.$error);
    // }
    //if not then add to DB
    else{
        $insert_query = "INSERT INTO periods_users (name, email_id, pwd) VALUES ('$name','$email_id','$pwd')";
        $insert_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email_id'] = $email_id;
        header('location:home.php');
    }



?>