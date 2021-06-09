<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>L.V.N Store</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.php"><img src="images/32.png" width="125px" /></a>
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="https://shopee.vn/product/202048150/9728004451/">About</a></li>
            <li>
              <a href="https://www.facebook.com/lvn.info" target="blank">Contact</a>
            </li>
            <li><a href="account.php">Account</a></li>
          </ul>
        </nav>
        <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
      </div>
      <div class="row">
        <div class="col-2">
          <h1>
            Give Your Workout<br />
            A New Style!
          </h1>
          <p>
            Success ins't always about greatness. It's about consistency.
            Consistent <br />hard work gains success. Greatness will come.
          </p>
          <a href="" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="images/image1.png" />
        </div>
      </div>
    </div>
  </div>

  <!-- ------------- featured categorries ---------------- -->
  <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="images/category-1.jpg" />
        </div>
        <div class="col-3">
          <img src="images/category-2.jpg" />
        </div>
        <div class="col-3">
          <img src="images/category-3.jpg" />
        </div>
      </div>
    </div>
  </div>
  <!-- ------------- featured products ---------------- -->
  <div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
      <?php
      include 'connect.php';
      $sql = "select*from product_index";
      $kq = $connect->query($sql);
      foreach ($kq as $key => $values) {
      ?>
        <div class="col-4">
          <a href="products_detal.php?masp=<?php echo $values['product_id'] ?>"><img src="images/<?php echo $values['product_image'] ?>" /></a>
          <a href="products_detal.php?masp=<?php echo $values['product_id'] ?>">
            <h4><?php echo $values['product_name'] ?></h4>
          </a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p><?php echo $values['product_price'] ?></p>
        </div>

      <?php
      }
      ?>

    </div>
  </div>
  <!-- ------------ offer -------------- -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="images/exclusive.png" class="offer-img" />
        </div>
        <div class="col-2">
          <p>Exclusive Availabble on RedStore</p>
          <h1>Smart Band 4</h1>
          <small>
            The Mi Smart Band 4 features a 39.9% larger (than Mi Band 4)
            AMOLED color full-touch display with adjustable brightness, so
            everything is clear as can be</small>
          <a href="" class="btn">Buy Now &#8594;</a>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------ testimonial -------------- -->
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-qoute-lef"></i>
          <p>
            Abilities or he perfectly pretended so strangers be exquisite. Oh
            to another chamber pleased imagine do in. Went me rank at last
            loud shot an draw. Excellent so to no sincerity smallness. Removal
            request delight if on he we
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user-1.png" />
          <h3>Quỳnh Trang</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-qoute-lef"></i>
          <p>
            Abilities or he perfectly pretended so strangers be exquisite. Oh
            to another chamber pleased imagine do in. Went me rank at last
            loud shot an draw. Excellent so to no sincerity smallness. Removal
            request delight if on he we
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="images/user-2.png" />
          <h3>Lê Nhất</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-qoute-lef"></i>
          <p>
            Abilities or he perfectly pretended so strangers be exquisite. Oh
            to another chamber pleased imagine do in. Went me rank at last
            loud shot an draw. Excellent so to no sincerity smallness. Removal
            request delight if on he we
          </p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <img src="images/user-3.png" />
          <h3>Thu Hằng</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------- brands --------------------- -->
  <div class="brands">
    <div class="small-container">
      <div class="row">
        <div class="col-5">
          <img src="images/logo-godrej.png" />
        </div>
        <div class="col-5">
          <img src="images/logo-oppo.png" />
        </div>
        <div class="col-5">
          <img src="images/logo-coca-cola.png" />
        </div>
        <div class="col-5">
          <img src="images/logo-paypal.png" />
        </div>
        <div class="col-5">
          <img src="images/logo-philips.png" />
        </div>
      </div>
    </div>
  </div>
  <!-- ------------footer----------- -->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Download App for Android and ios mobile phone</p>
          <div class="app-logo">
            <img src="images/play-store.png" />
            <img src="images/app-store.png" />
          </div>
        </div>
        <div class="footer-col-2">
          <img src="images/logo-white.png" />
          <p>
            Our Purpose Is To Sustainably Make the Pleasure and Benefits of
            Sports Accessible to the Many
          </p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>
              <a href="#" style="text-decoration: none" target="blank">Facebook</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none" target="blank">Twitter</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none" target="blank">Instagram</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none" target="blank">Youtube</a>
            </li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="Copyright">Copyright 2020 - By L.V.N Shop</p>
    </div>
  </div>
  <!-- ------------------- js for toggle menu-------------- -->
  <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
      if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
      } else {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>
</body>

</html>