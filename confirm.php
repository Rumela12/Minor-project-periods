<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->
    <title>Confirm</title>
    <!-- <link rel="stylesheet" href="index.css" type="text/css"> -->
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
