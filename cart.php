<?php
    include './includes/common.php';
    if(!isset($_SESSION['email_id'])){
        header('location:Login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <!-- Header -->
    <?php
        require './includes/navbar.php';
    ?>
    <!-- !Header -->
    <table class="invoice-table">
        <?php
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        $query = "SELECT products.price AS price, products.id, products.name AS name FROM user_product JOIN products ON user_product.p_id = products.id WHERE user_product.user_id='$user_id' and status='Added to Cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
            ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Confirm Your Order</th>
                </tr>
            </thead>
            <tbody style="width: 100%;">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["price"];                                    
                    $id = $row["id"];
                    echo "<tbody><tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs. " . $row["price"] .  "</td><td><a href='cart-remove.php?id={$row['id']}' class='button'> Remove</a></td></tr></tbody>";
                }
                // if(isset($disc)){
                //     $sum = $sum - $sum * (0.2);
                // }
                echo "<tfoot><tr><td colspan='2' align='right'>Total:</td><td>Rs. " . $sum . "</td><td><a href='success.php' class='button'>Confirm Order</a></td></tr></tfoot>";
                ?>
            
            <?php
        } else {
            echo "<tr><td colspan='2' class='add_items'><b>Add items to the cart first!</b></td><td></td></tr>";
        }
        ?>
        </tbody>
        <?php
        ?>
    </table>
    <!-- !Main -->
    <div class="navbar">
        <a href="shop.php">Shop</a>
        <a href="product.php">Products</a>
        <a href="cart.php" class="active">Cart</a>
        <a href="home.php">Return to home page</a>
    </div>
</body>
</html>