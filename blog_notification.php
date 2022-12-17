<?php 
    include "./includes/common.php";
    $sql = "SELECT * FROM notifications";
    $query = mysqli_query($con, $sql)or die($mysqli_error($con));

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tracker</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/album/">

    

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

 
  </head>
  <body style="background-image: url(img/login.jpg);">
  <?php
        include './includes/navbar.php';
    ?>
<?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "success"){?>
                <div class="alert alert-success" role="alert">
                    Successfully accepted the blog
                </div>
            <?php } else if($_REQUEST['info'] == "failure"){ ?>
                <div class="alert alert-success" role="alert">
                    Facing Unknown error. Try again.
                </div>
                <?php } else if($_REQUEST['info'] == "success2"){ ?>
                <div class="alert alert-success" role="alert">
                    Rejected the blog.
                </div>
                <?php } ?>
                <?php } ?>
                
        

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Blog Requests</h1>
      <div class="container mt-5">

        <?php 
        if (mysqli_num_rows($query) >= 1){
        foreach($query as $q){?>
            <p class="lead text-muted" style=""><?php echo $q['message']; ?></p>
                <div class="bg-dark p-5 rounded-lg text-white text-center">
                
                <h4><?php echo $q['title'];?></h4>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
            <a href="./includes/accept.php?id=<?php echo $q['id'];?>" class="btn btn-primary my-2">Accept</a>
        <a href="./includes/reject.php?id=<?php echo $q['id'];?>" class="btn btn-secondary my-2">Reject</a>
      </p>
      <small><i><?php echo $q['date']; ?></i></small>
      <hr>
        <?php }}else{ 
            echo "No pending requests";
        }?>
      
       
    </div>
  </section>

  

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      
  </body>
</html>
