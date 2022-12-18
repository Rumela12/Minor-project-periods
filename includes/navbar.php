    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} 
nav{
  display: flex;
  height: 80px;
  margin-top: 0px !important;
  width: 100% !important;
  background: #fff8f9;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
}
nav .logo{
  color: #1b1b1b;
  font-size: 35px;
  font-weight: 600;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color:  #1b1b1b;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color:  #fff;
  background: #111;
}
nav .menu-btn i{
  color: #111;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 920px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #f2f2f2;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: cyan;
  }
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
  width: 100%;
  padding: 0 30px;
  color: #fff;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}
    </style>
      <nav>
         <div class="logo">
            <a href="home.php">Red Blossom</a>
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
         <?php
							// $email_id = $_SESSION['email_id'];
                if (isset($_SESSION['email_id'])) {
                  $email_id = $_SESSION['email_id'];
                  if ($email_id=='admin@gmail.com'){
                    ?>
                    <li><a href="track.php">Period Tracker</a></li>
                    <li><a href="blog_main.php">Blog</a></li>
                    <li><a href="mood_based_playlist.php">Pamper Booth</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <!-- <li><a href="faq.php">FAQ</a></li> -->
                    <li><a href="blog_notification.php">Notifications</a></li>
                    <li><a href="logout.php">Logout</a></li>
                 <?php } else {
                  ?>
                    <li><a href="track.php">Period Tracker</a></li>
                    <li><a href="blog_main.php">Blog</a></li>
                    <li><a href="mood_based_playlist.php">Pamper Booth</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php }
                    ?>
            
            <?php
                } else {
                    ?>
            <li><a href="track.php">Period Tracker</a></li>
            <li><a href="blog_main.php">Blog</a></li>
            <li><a href="mood_based_playlist.php">Pamper Booth</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="Login.php">Login</a></li>
            <?php
                    }
                    ?>   
         </ul>
      </nav>
