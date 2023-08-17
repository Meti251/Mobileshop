<?php
require_once 'connection.php';
require_once 'functions.php';
$dbconnection = new DatabaseConnection();
$dbconnection->connect();
$conn = $dbconnection->getConnection();

function createProduct($name,$description,$price) {
    global $conn;

    $sql = "INSERT INTO product(name,description,price)
            VALUES ('$name', '$description', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price= $_POST['price'];

    createProduct($name, $description, $price);
    header("Location: productManagement.php");
}

$dbconnection->close();
?>

<html>
    <head>
        <link rel="stylesheet" href="CSS/useregistration.css">
    </head>
<form name="form1" action="addProduct.php" method="post">
    <div class="container">
      <h1>Product Registration</h1>
      <hr>
      <label for="name"><b>name</b></label>
      <input type="text" placeholder="Enter Product name" name="name" id="name"><br><br>
      <label for="description"><b>description</b></label>
      <input type="text" placeholder="Enter description" name="description" id="description"><br><br>
      <label for="price"><b>Price</b></label>
      <input type="text" name="price" id="price"><br>
      
      
      <select name="category" id="category" >
        <option value="">Select category</option>
        <option value="English">Samsung</option>
        <option value="Spanish">Iphone</option>
        
      </select>
      <hr>
     
      <button type="submit" class="registerbtn" onclick="validateForm() ">Register</button>
    </div>
  
  </form>
  <script>
    function validateForm() {
      const nameInput = document.getElementById('name');
      const descriptionInput = document.getElementById('description');
      const priceInput = document.getElementById('price');
      const categoryInput = document.getElementById('category');

     
      if (nameInput.value.trim() === '') {
        alert('Please enter a product name.');
        return false;
        
      }
      if (descriptionInput.value.trim() === '') {
        alert('Please enter a product description.');
        return false;
        
      }
      if (priceInput.value.trim() === '') {
        alert('Please enter a product name.');
        return false;
        
      }
      if (categoryInput.value === '') {
        alert('Please select a category.');
        return false;
      }
      alert('Product added successfully!');
      return true;
    }
  </script>
  </html>