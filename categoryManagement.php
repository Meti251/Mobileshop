<?php
require_once 'connection.php';
require_once 'functions.php';
require_once 'updateCategory.php';
$dbconnection = new DatabaseConnection();
$dbconnection->connect();
$conn = $dbconnection->getConnection();
$categories = getAllCategories();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/style.css" />
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="CSS/homestyle.css" />
    <title>Admin Dashboard</title>
    <script>
    //  function redirectToAddProduct() {
    //     console.log('Button clicked!');
    // window.location.href = 'addProduct.php';
    //    }
       function confirmDelete(productId) {
        if (confirm('Are you sure you want to delete this product?')) {
            window.location.href = 'deleteProduct.php?id=' + categoryId;
        }
    }
    </script>
  </head>
  <body>
    <header class="header-section">
    

      <nav class="navbar">
      <div class="logo"><h1 style="color: orange;">MobShoP</h1></div>
      <ul class="menu">
        
        <li><a href="ProductCategories.html" style="color: orange;"> Manage Products</a></li>
        <li><a href="detailedproduct.html"style="color: orange;">Manage Products </a></li>
        <li><a href="detailedproduct.html"style="color: orange;">Manage Products </a></li>
        
        
          
          <div class="profile-pic">
          <div class="circle-profile">
          <img
            src="/Images/profile.jpg"
            width="64"
            height="64"
            alt="Profile photo for an admin user"
          />
          </div>
          <ul class="dropdown-menu">
    <li><a href="#">Edit Profile</a></li>
    <li><a href="#">Change Password</a></li>
    <li><a href="#">Logout</a></li>
  </ul>
        </div>
     
      </ul>
      <!-- for small devices -->
      <div class="menu-btn">
        <i class="fa fa-bars"> </i>
      </div>
    </nav>
    <section class="content2">

    <h1 style="color:orange">Welcome to the Admin Dashboard</h1>
    </section>
      
      <div class="right-side-admin">
        <div class="col-12">
          <div id="categories">
            <h2>Manage Categories</h2>
          </div>
          <form action="editCategory.php" method="GET">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php
    $categories = getAllCategories();
    foreach ($categories as $category) {
        echo "<tr>";
        echo "<td>" . $category['id'] . "</td>";
        echo "<td>" . $category['name'] . "</td>";
        echo "<td>";
        echo "<form action='editCategory.php' method='GET'>";
        echo "<input type='hidden' name='id' value='" . $category['id'] . "'>";
        echo "<button type='submit' class='btn btn-primary'>Edit</button>";
        echo "</form>";
        echo " | ";
        echo "<a href='javascript:void(0)' onclick='confirmDelete(" . $category['id'] . ")'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
            </tbody>
          </table>
          </form>
          <a href="addCategory.php" class="btn btn-success">Add Product</a>
          <br />
        </div>
        </div>
      </div>
    </div>
    <footer>
      <p>Copyrights@ <a href=""></a></p>
    </footer>
    <script src="path/to/bootstrap.bundle.min.js"></script>
  </body>
</html>
