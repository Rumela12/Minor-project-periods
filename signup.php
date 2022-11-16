<?php
    require './includes/common.php';
    // if(isset($_SESSION['email_id'])){
    //     header('location:home.php');
    // }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up!</title>
        <link rel="stylesheet" href="signup.css">
  <script src="https://kit.fontawesome.com/31cf3ebea4.js" crossorigin="anonymous"></script>

        <!-- <script defer src="signup.js"> </script> -->
    </head>
    <body>
            <!-- Header -->
    <?php
            include './includes/navbar.php';
        ?>
    <!-- Header End -->
        <div class="split-screen">
            <div class="left">
                <section class="copy">
                    <h1>Explore everything there is to Menstruation</h1>
                    <p>We'll fulfill all of your Menstruation needs.</p>
                </section>
            </div>
            <div class="right">
                <form id="form1=" method = "POST" action="signup_script.php">
                    <section class="copy">
                        <h2>Sign up</h2>
                        <div class="login-container">
                            <p>Already have an account? <a href ="Login.php"><strong>Log In</strong></a></p>
                        </div>
                    </section>
                    <div class="input-container name">
                        <label for="name">Full Name</label>
                        <input id="name" name="name" placeholder="Full Name"  type="text" required>
                        <!-- <div class="error" ></div> -->
                    </div>
                    <div class="input-container email">
                        <label for="email_id">Email</label>
                        <input id="email_id" name="email_id"  placeholder="Email"  type="email" required>
                        <?php
                            if(isset($_GET['m1'])){
                             echo $_GET['m1'];
                            }
                        ?>
                        <!-- <div class="error"  ></div> -->
                    </div>
                    <div class="input-container password">
                        <label for="pwd">Password</label>
                        <input id="pwd" name="pwd" pattern=".{6,}"  placeholder="Must be atleast 6 characters" type="password" required>
                        <!-- <i class="fas fa-eye-slash"></i> -->
                        <!-- <div class="error"  ></div> -->
                    </div>
                    <!-- <div class="input-container password1">
                        <label for="password1">Password</label>
                        <input id="password1" name="password1" pattern=".{6,}"  placeholder="Must match" type="password" required>
                        <i class="fas fa-eye-slash"></i>
                        <div class="error"  ></div>
                    </div> -->
                    <div class="input-container cta">
                        <label class="checkbox-container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Sign up for email updates.
                        </label>
                    </div>
                    <button class="signup-btn" type="submit">Sign Up</button>
                    <section class="copy legal">
                        <p><span class="small">By continuing, you agree to accept our <br> <a href="#">Privacy Policy</a> &amp; <a href="#">Terms of Service</a>.</span></p>
                    </section>
                </form>
            </div>
        </div>
    </body>
</html>