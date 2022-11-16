<?php
    require("./includes/common.php");
    if(!isset($_SESSION['email_id'])){
        header('location:Login.php');
    }
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $product_id = $_GET['id'];
        $user_id = $_SESSION['user_id'];
        // $count = $_SESSION['count'];

        $query = "INSERT INTO user_product (user_id,p_id,status) VALUES ('$user_id','$product_id','Added To Cart')";

        $result = mysqli_query($con,$query) or die(mysqli_error($con));

        header("location:product.php");
        
    }
?>   