<?php
    include './includes/common.php';
?>
<html>
    <head>
        <!-- <meta name="viewport" content="width-device-width, initial-scale=1.0"> -->
        <title>Tracker</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="main_home.css">
    </head>
    <body >
    <?php
        include './includes/navbar.php';
    ?>
   
      <section class="section-hero section" style="padding-left: 20px;background-color: #F3CFC6;">
        <div class="container grid grid-two-column">
          <div class="section-hero-data">
            <p class="hero-top-data">Period Prediction</p>
            <h1 class="hero-heading">Red Blossom</h1>
            <p class="hero-para">
              This website fulfills all your menstrual needs 
              including prediction for next month, blogging, shopping and much more.
            </p>
            <div>
              <a href="signup.php" class="btn hireme-btn">Register!</a>
            </div>
          </div>
          <!-- hero section right side  -->
          <div class="section-hero-image">
            <picture>
              <!-- <source srcset="/images/1.png" type="image/webp" /> -->
              <!-- <source srcset="images/1.png" /> -->
              <img src="images/1.png" class="hero-img"              />
            </picture>
          </div>
        </div>
      </section>
      <h1 style="padding-left: 20px;">Our Team</h1>
    <div class="container1">
     

        <div class="row">
                
                <div class="col">
                    <div class="card card1">
                        <h5>Rumela Mukharjee</h5>
                    </div>
                    <div class="card card2">
                        <h5>Aishi Das</h5>
                    </div>
                    <div class="card card3">
                        <h5>Soumita Halder</h5>
                    </div>
                    <div class="card card4">
                        <h5>Susmita Mondal</h5>
                    </div>
                </div>
                <div class="col">
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <p>Have any suggestions or just wanna say hello? Drop a message!</p>
                        <div class="inputBox">
                            <input type="text" name="fname" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Type your Message...</span>
                        </div>
                        <!-- <div class="inputBox" style="position:relative; width: 100%;"> -->
                            <button class="button"type="submit" name="submit" value="Send">
                                <div class="svg-wrapper-1">
                                  <div class="svg-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                      <path fill="none" d="M0 0h24v24H0z"></path>
                                      <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                    </svg>
                                  </div>
                                </div>
                                <span>Submit</span>
                              </button>
                            <!-- <input type="submit" name="submit" value="Send"> -->
                        <!-- </div> -->
                    </form>
                </div>
                </div>
        </div>
    </div>
    <h1 style="padding-left: 20px;">Our Services</h1>
    <div class="container2" >
			<div class="card2">
				<div class="imgBx">
					<a href="track.php">
					<img src="./img/period-tracker-icon.png">
					</a>
					<h2>Period Track & Predict</h2>
					<p><br>Our algorithm helps you predict periods with just one simple question.
					</p>
					
				</div>
			</div>
		
			<div class="card2">
				<div class="imgBx">
					<a href="mood_based_playlist.php">
					<img src="./img/pamper-booth-icon.png">
					</a>
					<h2>Pamper Booth </h2>
					<p><br>Our pamper booth with various music recommendation helps lift your mood up when you most need it.
					</p>					

				</div>	
			</div>	
			
			<div class="card2">
				<div class="imgBx">
					<a href="blog_main.php">
					<img src="./img/notifications-icon.png">
					</a>
					<h2>Blog</h2>
					<p><br>Read up more information on our blog portion and if you feel like adding your knowledge then create your own if our admin apporves
            your blog will be published.
					</p>
				</div>	
			</div>	
			<div class="card2">
				<div class="imgBx">
					<a href="shop.php">
					<img src="./img/shop-icon.png">
					</a>
					<h2>Shop</h2>
					<p><br>For all your menstrual hygiene needs. 
            Sanitary napkins, tampons, sustainable hygiene products - we got them all. 
					</p>
				</div>	
			</div>	
			<div class="card2">
				<div class="imgBx">
					 <a href="faq.php">
					<img src="./img/spotify-integration-icon.png">
					</a>
					<h2>Frequently aksed questions</h2>
					<p><br>Have most-asked periods related question answered here. 
					</p>
				</div>	
			</div> 
			<!-- <div class="card2">
				<div class="imgBx">
					<a href="pamper_booth.php">
					<img src="./images/1.png">
					</a>
					<h1>Our Recommendation</h1>
					<p><br>
					</p>
				</div>	
			</div> -->
		</div>	
<!-- <div class="our-services-section">
    <div>
        <p class="our-services-heading">Our Services</p>
        
        <img src="./img/period-tracker-icon.png" class="period-tracker-icon">
        <img src="./img/pamper-booth-icon.png" class="pamper-booth-icon">
        <img src="./img/notifications-icon.png" class="notifications-icon">
        <img src="./img/shop-icon.png" class="shop-icon">
        <img src="./img/spotify-integration-icon.png" class="spotify-integration-icon">

        <p class="period-tracker-heading small-heading">
            Period Prediction
        </p>
        <p class="pamper-booth-heading small-heading">
            Pamper Booth
        </p>
        <p class="notifications-heading small-heading">
            Blog
        </p>
        <p class="shop-heading small-heading">
            Shop
        </p>
        <p class="spotify-integration-heading small-heading">
            FAQ
        </p>
        

        <p class="period-tracker-text small-text">
            Track and Predict your periods by answering 1 simple question and experience beautiful visualisations coupled with personalised period predictions.
        </p>
        <p class="pamper-booth-text small-text">Down with period cramps? Uplift your mood here. 
            Play music and enjoy.</p>
        <p class="notifications-text small-text">Read up more information on our blog portion and if you feel like adding your knowledge then create your own if our admin apporves
            your blog will be published.</p>
        <p class="shop-text small-text">For all your menstrual hygiene needs. 
            Sanitary napkins, tampons, sustainable hygiene products - we got them all. </p>
        <p class="spotify-integration-text small-text">Have most-asked periods related question answered here. </p>

    </div>
</div>  -->

    </body>
</html>