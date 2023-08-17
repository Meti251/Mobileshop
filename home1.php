<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['email'])) {
    header("Location: userlogin.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/homestyle.css" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
      integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>MobileShop</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo"><h1 style="color: orange;">MobShoP</h1></div>
      <ul class="menu">
        <li><a href="index.html" style="color: orange;">Home </a></li>
        <li><a href="ProductCategories.html" style="color: orange;">Category </a></li>
        <li><a href="detailedproduct.html"style="color: orange;">About Us </a></li>
        <li><a href="registration.html"style="color: orange;">Registration</a></li>
        <li>
          <a href=""> <i class="fas fa-shopping-cart"></i> </a>
        </li>
        <li>
          <form class="" action="logout.php" method="post">
            <input type="submit" value="Log out" style="background-color:orange;" fa-b>
          </form></li>
      </ul>
      <!-- for small devices -->
      <div class="menu-btn">
        <i class="fa fa-bars"> </i>
      </div>
    </nav>
    
    <section class="content">
      <h1 style="color: orange;">Smart phones at your fingertips</h1>
      <button >Shop Now</button>
    </section>
    <h1 class="pheading">Hot Deal</h1>
    <section class="sec">
      <div class="products">
        <!-- card starts here  -->
        <div class="card">
          <div class="img"><img src="Images/phone7.jpg" alt="" /></div>
          <div class="desc">iphone</div>
          <div class="title">iphone 14</div>
          <div class="box">
            <div class="price"style="color: orange;">Rs.65,570</div>
            <button class="btn">Buy Now</button>
          </div>
        </div>
        <!-- card ends here  -->

        <!-- card starts here  -->
        <div class="card">
          <div class="img"><img src="Images/phone8.jpg" alt="" /></div>
          <div class="desc">iphone</div>
          <div class="title">iphone 13 Pro</div>
          <div class="box">
            <div class="price"style="color: orange;">Rs.65,570</div>
            <button class="btn">Buy Now</button>
          </div>
        </div>
        <!-- card ends here  -->

        <!-- card starts here  -->
        <div class="card">
          <div class="img"><img src="images/phone9.jpg" alt="" /></div>
          <div class="desc">iphone</div>
          <div class="title">iphone 13 Pro</div>
          <div class="box">
            <div class="price"style="color: orange;">Rs.65,570</div>
            <button class="btn">Buy Now</button>
          </div>
        </div>
        <!-- card ends here  -->
        <!-- card starts here  -->
        <div class="card">
          <div class="img"><img src="images/phone7.jpg" alt="" /></div>
          <div class="desc">iphone</div>
          <div class="title">iphone 13 Pro</div>
          <div class="box">
            <div class="price" style="color: orange;">Rs.78,570</div>
            <button class="btn">Buy Now</button>
          </div>
        </div>
        <!-- card ends here  -->
      </div>
    </section>
    <footer>
      <p>Copyrights@ <a href=""></a></p>
    </footer>
    <!-- jquery -->
    <script>
      $(".menu-btn").click(function () {
        $(".navbar .menu ").toggleClass("active");
        $(".menu-btn i").toggleClass("active");
      });
    </script>
  </body>
</html>
