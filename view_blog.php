<?php

include "./includes/common.php";
$sql = "SELECT * FROM data";
$query = mysqli_query($con, $sql)or die($mysqli_error($con));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .disabled-link {
        pointer-events: none;
        cursor: default;
        }
    </style>
    <title>Tracker</title>
</head>
<body>
<?php

        include './includes/navbar.php';
  // Get post data based on id

        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
            $sql = "SELECT * FROM data WHERE id = $id";
            $query = mysqli_query($con, $sql);
        }
            // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        mysqli_query($con, $sql);

        header("Location: blog_main.php");
        exit();
    }

    
    ?>

   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                <?php
    if(isset($_SESSION['email_id'])){
        $email_id= $_SESSION['email_id'];
        if ($email_id=='admin@gmail.com'){
        ?>
        <a href="edit_blog.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Edit</a>
        <form method="POST">
            <input type="text" hidden value='<?php echo $q['id']?>' name="id">
            <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
        </form>
   <?php } else { ?>
    <!-- <a href="edit_blog.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm disabled-link " name="edit">Edit</a>
        <form method="POST">
            <input type="text" class="disabled-link" hidden value='<?php echo $q['id']?>' name="id">
            <button class="btn btn-danger btn-sm ml-2" class="disabled-link"name="delete">Delete</button>
        </form> -->
    <p style="color:blue;">Only Admins have the right to edit and delete the post but do browse freely!</p>
  <?php }}
    ?>
                    
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
        <?php } ?>    

        <a href="blog_main.php" class="btn btn-outline-dark my-3">Go Home</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>