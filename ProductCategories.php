<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile Shop</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="CSS/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="logo"><h1 style="color: orange;">MobShoP</h1></div>
      <ul class="menu">
        <li><a href="index.html" style="color: orange;">Home </a></li>
        <li><a href="ProductCategories.html" style="color: orange;">Category </a></li>
        <li><a href="detailedproduct.html"style="color: orange;">About Us </a></li>
        <li><a href="registration.html"style="color: orange;">Registration</a></li>
        <li><a href="userlogin.html"style="color: orange;">Sign in</a></li>
        <li>
          <a href=""> <i class="fas fa-shopping-cart"></i> </a>
        </li>
      </ul>
      <!-- for small devices -->
      <div class="menu-btn">
        <i class="fa fa-bars"> </i>
      </div>
    </nav>

    <main class="category-content">
      <section class="left-category-section">
        <div class="heading-of-categories">
          <p>Smart Phones</p>
        </div>
        <div class="filter-card">
          <div class="filter-heading">FILTER</div>
          <h5>Brands</h5>
          <div class="checkbox-container">
            <input type="checkbox" id="huawei" name="huawei" />
            <label for="huawei">HUAWEI (5)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="infinix" name="infinix" />
            <label for="infinix">Infinix (8)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="apple" name="apple" />
            <label for="apple">Apple (30)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="google" name="google" />
            <label for="google">Google Pixel (6)</label>
          </div>
          
          <div class="checkbox-container">
            <input type="checkbox" id="oneplus" name="oneplus" />
            <label for="oneplus">OnePlus (6)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="oppo" name="oppo" />
            <label for="oppo">Oppo (6)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="realme" name="realme" />
            <label for="realme">Realme (3)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="samsung" name="samsung" />
            <label for="samsung">Samsung (46)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="tecno" name="tecno" />
            <label for="tecno">Tecno (3)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="xiaomi" name="xiaomi" />
            <label for="xiaomi">Xiaomi (14)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="oneplus" name="oneplus" />
            <label for="oneplus">OnePlus (6)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="oppo" name="oppo" />
            <label for="oppo">Oppo (6)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="oneplus" name="oneplus" />
            <label for="oneplus">OnePlus (6)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="oppo" name="oppo" />
            <label for="oppo">Oppo (6)</label>
          </div>
          <div class="checkbox-container">
            <input type="checkbox" id="oneplus" name="oneplus" />
            <label for="oneplus">OnePlus (6)</label>
          </div>
          
        </div>
        
      </section>

      <section class="right-category-section">
        <div class="right-heading">
          <div>Categories</div>
          
        </div>

        <div class="container mt-4">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img
                  src="Images/vecteezy_samsung-galaxy-s23-ultra-transparent-image_22722945_43.png"
                  class="card-img-top"
                  alt="Product 1"
                />
                <div class="card-body">
                  <h5 class="card-title">Samsung Galaxy s23</h5>
                  <p class="card-text">Description of Product 1.</p>
                  <div class="price">Rs.95,000</div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100">
                <img
                  src="Images/phone3.jpg"
                  class="card-img-top"
                  alt="Product 2"
                />
                <div class="card-body">
                  <h5 class="card-title">iphone14</h5>
                  <p class="card-text">Description of Product 1.</p>
                  <div class="price">Rs.105,000</div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img
                  src="Images/Realme.jpg"
                  class="card-img-top"
                  alt="Product 3"
                />
                <div class="card-body">
                  <h5 class="card-title">realme</h5>
                  <p class="card-text">Description of Product 1.</p>
                  <div class="price">Rs.64,000</div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img
                  src="Images/vecteezy_samsung-galaxy-s23-ultra-transparent-image_22722945_43.png"
                  class="card-img-top"
                  alt="Product 1"
                />
                <div class="card-body">
                  <h5 class="card-title">Product 1</h5>
                  <p class="card-text">Description of Product 1.</p>
                  <div class="price">Rs.95,000</div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100">
                <img
                  src="Images/phone3.jpg"
                  class="card-img-top"
                  alt="Product 2"
                />
                <div class="card-body">
                  <h5 class="card-title">Product 1</h5>
                  <p class="card-text">Description of Product 1.</p>
                  <div class="price">Rs.105,000</div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img
                  src="Images/Realme.jpg"
                  class="card-img-top"
                  alt="Product 3"
                />
                <div class="card-body">
                  <h5 class="card-title">Product 1</h5>
                  <p class="card-text">Description of Product 1.</p>
                  <div class="price">Rs.64,000</div>
                </div>
              </div>
            </div>
            </div>
           
           
          </div>
        </div>

        <div class="text-center mt-4">
         <button class="btn" style="background-color: orange;">Show More</button>
        </div>
      </section>
    </main>

    <footer>
      <p><center>Copyrights@</center></p>
    </footer>
    <!-- jquery -->
    <script>
      $(".menu-btn").click(function () {
        $(".navbar .menu ").toggleClass("active");
        $(".menu-btn i").toggleClass("active");
      });
    </script>

    <!-- Bootstrap and JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
