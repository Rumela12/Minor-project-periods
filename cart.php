<?php
    include './includes/common.php';
    if(!isset($_SESSION['email_id'])){
        header('location:Login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css" type="text/css">
</head>
<body>
    <!-- Header -->
    <?php
        require './includes/navbar.php';
    ?>
    <!-- !Header -->

    <!-- Main -->
        <div class="content">
        <div class="container">        
        
        <!-- <form action="discount.php" class="form-inline" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="Enter Discount Code Here">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form> -->
        <table class="table table-striped table-dark table-responsive">
        <?php
        // if(isset($_GET['m1'])){
        //     $disc=$_GET['m1'];
        // }
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        // $count = $_SESSION['count'];
        $query = "SELECT products.price AS price, products.id, products.name AS name FROM user_product JOIN products ON user_product.p_id = products.id WHERE user_product.user_id='$user_id' and status='Added to Cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
            ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] .  "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                // if(isset($disc)){
                //     $sum = $sum - $sum * (0.2);
                // }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
    </div>
    </div>
    <!-- !Main -->
</body>
</html>