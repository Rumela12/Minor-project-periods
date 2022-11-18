<?php
    include './includes/common.php';
    if(!isset($_SESSION['email_id'])){
        header('location:Login.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Product Category</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/31cf3ebea4.js" crossorigin="anonymous"></script>
<!-- For more items JS -->


  </head>
  <body>
        <!--header-->
        <?php
        include './includes/navbar.php';
        // include './includes/check-if-added.php';
            $user_id = $_SESSION['user_id'];
            $email_id = $_SESSION['email_id'];
        ?>
    <!--header end-->
      <!--Breadcrumbs-->
      <section class="breadcrumb breadcrumb-bg">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-12">
                      <div class="crumb-inner">
                          <div class="crumb-text">
                              <p style="margin: 3px!important; font-size: 16px; letter-spacing: 2px; font-weight:300">Home /  Category</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
        <h2 class="my-5 mx-2" style="padding-left: 100px;">Categories
            <div class="dropdown" style="float:right;padding-right: 50px;">
                <button class="btn btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Find Items
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#pad" >Pads</a>
                    <a class="dropdown-item" href="#tampon">Tampons</a>
                    <a class="dropdown-item" href="#panty_liner">Panty Liners</a>
                    <a class="dropdown-item" href="#period_cup">Period Cups</a>
                    <a class="dropdown-item" href="#other">Others</a>
                    <a class="dropdown-item" href="#nav">Cart</a>
                </div>
            </div>
        </h2>
            <section class="product"> 
              <h2 class="product-category" id="pad">Pads</h2>
              <button class="pre-btn" type="button" title="scroll  left"><img src="img/arrow.png" alt=""></button>
              <button class="nxt-btn" type="button" title="scroll  right"><img src="img/arrow.png" alt=""></button>
              <div class="product-container">
                  <div class="product-card">
                      <div class="product-image">
                          <img src="img/p1.jpg" class="product-thumb" alt="">
                    
                          <a href="cart-add.php?id=1" name="add" class="card-btn">add to cart</a>
                      </div>
                      <div class="product-info">
                          <h2 class="product-brand">Whisper Bindazzz Nights Pads</h2>
                          <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                          <span class="price">Rs. 319</span><span class="actual-price">Rs. 400</span>
                      </div>
                  </div>
                  <div class="product-card">
                      <div class="product-image">
                          <img src="img/p2.jpg" class="product-thumb" alt="">
                          <a href="cart-add.php?id=2" name="add" class="card-btn">add to cart</a>
                      </div>
                      <div class="product-info">
                          <h2 class="product-brand">Sofy Anti Bacteria Sanitary Pads</h2>
                          <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                          <span class="price">Rs. 327</span><span class="actual-price">Rs.350</span>
                      </div>
                  </div>
                  <div class="product-card">
                      <div class="product-image">
                          <img src="img/p3.jpg" class="product-thumb" alt="">
                          <a href="cart-add.php?id=3" name="add" class="card-btn">add to cart</a>
                      </div>
                      <div class="product-info">
                          <h2 class="product-brand">Nua Sanitary Pads for Women</h2>
                          <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                          <span class="price">Rs. 619</span><span class="actual-price">Rs. 799</span>
                      </div>
                  </div>
                  <div class="product-card">
                      <div class="product-image">
                          <img src="img/p4.jpg" class="product-thumb" alt="">
                          <a href="cart-add.php?id=4" name="add" class="card-btn">add to cart</a>
                      </div>
                      <div class="product-info">
                          <h2 class="product-brand">Solimo Sanitary Pads</h2>
                          <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                          <span class="price">Rs. 119</span><span class="actual-price">Rs. 245</span>
                      </div>
                  </div>
                  <div class="product-card">
                      <div class="product-image">
                          <img src="img/p5.jpg" class="product-thumb" alt="">
                          <a href="cart-add.php?id=5" name="add" class="card-btn">add to cart</a>
                      </div>
                      <div class="product-info">
                          <h2 class="product-brand">Everteen XXL Sanitary Napkin Pads</h2>
                          <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                          <span class="price">Rs. 188</span><span class="actual-price">Rs. 399</span>
                      </div>
                  </div>
              </div>
          </section>
          <section class="product"> 
            <h2 class="product-category" id="tampon">Tampons</h2>
            <button class="pre-btn" type="button" title="scroll  left"><img src="img/arrow.png" alt=""></button>
            <button class="nxt-btn" type="button" title="scroll  right"><img src="img/arrow.png" alt=""></button>
            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/t1.jpg" class="product-thumb" alt="">
                        <a href="cart-add.php?id=6" name="add" class="card-btn">add to cart</a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Pee Safe Cotton Tampons</h2>
                        <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                        <span class="price">Rs.219</span><span class="actual-price">Rs.279</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/t2.jpg" class="product-thumb" alt="">
                        <a href="cart-add.php?id=7" name="add" class="card-btn">add to cart</a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Bella Tampons</h2>
                        <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                        <span class="price">Rs.155</span><span class="actual-price">Rs.170</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/t3.jpg" class="product-thumb" alt="">
                        <a href="cart-add.php?id=8" name="add" class="card-btn">add to cart</a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Sirona Period Made Easy Tampons</h2>
                        <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                        <span class="price">Rs.209</span><span class="actual-price">Rs.315</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/t4.jpg" class="product-thumb" alt="">
                        <a href="cart-add.php?id=9" name="add" class="card-btn">add to cart</a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Sirona Period Tampons</h2>
                        <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                        <span class="price">Rs.199</span><span class="actual-price">Rs.295</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/t5.jpg" class="product-thumb" alt="">
                        <a href="cart-add.php?id=10" name="add" class="card-btn">add to cart</a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Lemme Be Light Flow Tampons</h2>
                        <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                        <span class="price">Rs.149</span><span class="actual-price">Rs.160</span>
                    </div>
                </div>
            </div>
        <section class="product"> 
          <h2 class="product-category" id="panty_liner">Panty Liner</h2>
          <button class="pre-btn" type="button" title="scroll  left"><img src="img/arrow.png" alt=""></button>
          <button class="nxt-btn" type="button" title="scroll  right"><img src="img/arrow.png" alt=""></button>
          <div class="product-container">
              <div class="product-card">
                  <div class="product-image">
                      <img src="img/pl1.jpg" class="product-thumb" alt="">
                      <a href="cart-add.php?id=11" name="add" class="card-btn">add to cart</a>
                  </div>
                  <div class="product-info">
                      <h2 class="product-brand">PEESAFE Aloe Vera Panty Liners</h2>
                      <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                      <span class="price">Rs.179</span><span class="actual-price">Rs.240</span>
                  </div>
              </div>
              <div class="product-card">
                  <div class="product-image">
                      <img src="img/pl2.jpg" class="product-thumb" alt="">
                      <a href="cart-add.php?id=12" name="add" class="card-btn">add to cart</a>
                  </div>
                  <div class="product-info">
                      <h2 class="product-brand">Plush Panty Liners</h2>
                      <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                      <span class="price">Rs.199</span><span class="actual-price">Rs.240</span>
                  </div>
              </div>
              <div class="product-card">
                  <div class="product-image">
                      <img src="img/pl3.jpg" class="product-thumb" alt="">
                      <a href="cart-add.php?id=13" name="add" class="card-btn">add to cart</a>
                  </div>
                  <div class="product-info">
                      <h2 class="product-brand">Evereve Anti Bacterial Panty Liners</h2>
                      <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                      <span class="price">Rs.132</span><span class="actual-price">Rs.252</span>
                  </div>
              </div>
              <div class="product-card">
                <div class="product-image">
                    <img src="img/pl4.jpg" class="product-thumb" alt="">
                    <a href="cart-add.php?id=14" name="add" class="card-btn">add to cart</a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bella Herbs Panty Liners</h2>
                    <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                    <span class="price">Rs. 170</span><span class="actual-price">Rs.180</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="img/pl5.jpg" class="product-thumb" alt="">
                    <a href="cart-add.php?id=15" name="add" class="card-btn">add to cart</a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Cambio 100% Organic Panty Liners</h2>
                    <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                    <span class="price">Rs.237</span><span class="actual-price">Rs.299</span>
                </div>
            </div>
          </div>
      </section>
      <section class="product"> 
        <h2 class="product-category" id="period_cup">Menstrual Cup</h2>
        <button class="pre-btn" type="button" title="scroll  left"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn" type="button" title="scroll  right"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="img/m1.jpg" class="product-thumb" alt="">
                    <a href="cart-add.php?id=16" name="add" class="card-btn">add to cart</a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Sirona Menstrual Cup</h2>
                    <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /></p> -->
                    <span class="price">Rs.225</span><span class="actual-price">Rs.399</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="img/m2.jpg" class="product-thumb" alt="">
                    <a href="cart-add.php?id=17" name="add" class="card-btn">add to cart</a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Pee Safe Menstrual Cups</h2>
                    <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->
                    <span class="price">Rs.450</span><span class="actual-price">Rs.490</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="img/m3.jpg" class="product-thumb" alt="">
                    <a href="cart-add.php?id=18" name="add" class="card-btn">add to cart</a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Lemme Be Z Menstrual Cup</h2>
                    <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->
                    <span class="price">Rs.599</span><span class="actual-price">Rs.1110</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="img/m4.jpg" class="product-thumb" alt="">
                    <a href="cart-add.php?id=19" name="add" class="card-btn">add to cart</a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">i-activ Menstrual Cup</h2>
                    <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->
                    <span class="price">Rs.246</span><span class="actual-price">Rs.399</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="img/m5.jpg" class="product-thumb" alt="">
                    <a href="cart-add.php?id=20" name="add" class="card-btn">add to cart</a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Sanfe Silicone Menstrual Cup</h2>
                    <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->
                    <span class="price">Rs.299</span><span class="actual-price">Rs.499</span>
                </div>
            </div>
        </div>
    </section>
    <section class="product"> 
      <h2 class="product-category" id="other">Other Menstrual Products</h2>
      <button class="pre-btn" type="button" title="scroll  left"><img src="img/arrow.png" alt=""></button>
      <button class="nxt-btn" type="button" title="scroll  right"><img src="img/arrow.png" alt=""></button>
      <div class="product-container">
          <div class="product-card">
              <div class="product-image">
                  <img src="img/o1.jpg" class="product-thumb" alt="">
                  <a href="cart-add.php?id=21" name="add" class="card-btn">add to cart</a>
              </div>
              <div class="product-info">
                  <h2 class="product-brand">Lemme Be Pro Period Kit</h2>
                  <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->

                  <span class="price">Rs.699</span><span class="actual-price">Rs.746</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <img src="img/o4.jpg" class="product-thumb" alt="">
                  <a href="cart-add.php?id=22" name="add" class="card-btn">add to cart</a>
              </div>
              <div class="product-info">
                  <h2 class="product-brand">Nua- Period Saviour Kit</h2>
                  <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->

                  <span class="price">Rs.699</span><span class="actual-price">Rs.999</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <img src="img/o2.jpg" class="product-thumb" alt="">
                  <a href="cart-add.php?id=23" name="add" class="card-btn">add to cart</a>
              </div>
              <div class="product-info">
                  <h2 class="product-brand">Sirona Natural Intimate Wash</h2>
                  <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->

                  <span class="price">Rs.199</span><span class="actual-price">Rs.349</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <img src="img/o3.jpg" class="product-thumb" alt="">
                  <a href="cart-add.php?id=24" name="add" class="card-btn">add to cart</a>
              </div>
              <div class="product-info">
                  <h2 class="product-brand">Nua- Pamper Me Value Kit</h2>
                  <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->

                  <span class="price">Rs.1299</span><span class="actual-price">Rs.2000</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <img src="img/o5.jpg" class="product-thumb" alt="">
                  <a href="cart-add.php?id=25" name="add" class="card-btn">add to cart</a>
              </div>
              <div class="product-info">
                  <h2 class="product-brand">Plush Period Sassy Kit for Women</h2>
                  <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->

                  <span class="price">Rs.764</span><span class="actual-price">Rs.899</span>
              </div>
          </div>
          <div class="product-card">
              <div class="product-image">
                  <img src="img/o6.jpg" class="product-thumb" alt="">
                  <a href="cart-add.php?id=26" name="add" class="card-btn">add to cart</a>
              </div>
              <div class="product-info">
                  <h2 class="product-brand">PEE BUDDY Travel Hygiene Kit</h2>
                  <!-- <p class="product-short-description"><label>Quantity: </label><input type="text" name="count" value="1" size="2" /> </p> -->

                  <span class="price">Rs.199</span><span class="actual-price">Rs.299</span>
              </div>
          </div>
      </div>
  </section>
  <script src="ps.js"></script>
  

                      
      <div class="navbar" id="nav">
        <a href="shop.php">Shop</a>
        <a href="product.php"  class="active">Products</a>
        <a href="cart.php">Cart</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>