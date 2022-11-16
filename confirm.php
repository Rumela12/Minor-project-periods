<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirm</title>
</head>
<body>
<?php
        $user_id = $_SESSION["user_id"];
        $query = "SELECT p_id FROM user_product WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $p_id = $row["p_id"];
            $query_update = "UPDATE user_product SET status = 'Confirmed' WHERE p_id = '$p_id'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
    ?>
</body>
</html>
