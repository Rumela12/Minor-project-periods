<?php
    require './includes/common.php';
    // if(isset($_SESSION['email_id'])){
    //     header('location:home.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Login</title>
    <link rel="stylesheet" href="Login.css">
    <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <!-- Header -->
    <?php
            include './includes/navbar.php';
        ?>
    <!-- Header End -->
    <div class="box" style="margin-top: 20px;">
      <h1>Login</h1>
      <form method="POST" action="login_script.php">
        <div class="txt_field">
          <!-- <label for="email_id">Email</label> -->
          <input type="email" name="email_id" placeholder="Email" required>
          
        </div>
        <div class="txt_field">
          <!-- <label for="pwd">Password</label> -->
          <input type="password" name="pwd" pattern=".{6,}" placeholder="Password" required>
        </div>
        <?php
            if(isset($_GET['m1'])){
             echo $_GET['m1'];
             }
            ?>
        <div class="pass" style="padding-top: 20px;">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>
  </body>
</html>
