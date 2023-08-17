<?php
// Include your DatabaseConnection class and establish database connection
require_once 'connection.php';
$dbconnection = new DatabaseConnection();
$dbconnection->connect();
$conn = $dbconnection->getConnection();
function getProductById($productId) {
    global $conn;
    
    // Retrieve product data from the database using the provided product ID
    // Perform a SQL query and fetch the result
    //SELECT * FROM product WHERE id = $productId
    // Return an associative array of product data
    $sql = "SELECT * FROM product WHERE id = $productId";
    $result = $conn->query($sql);
    
    // Check if the query was successful and fetch the data
    if ($result && $result->num_rows > 0) {
        $productData = $result->fetch_assoc(); // Fetch product data as an associative array
        return $productData;
    } else {
        return null; // Return null if product with the given ID was not found
    }
}

// function updateProduct($productId, $name, $description, $price, $category) {
//     global $conn;
    
//     // Update the product data in the database using the provided data and product ID
//     // Perform a SQL update query
//     // Example query: UPDATE product SET name = '$name', description = '$description', price = '$price', category = '$category' WHERE id = $productId
    
//     // Handle success or failure accordingly
//     $name = mysqli_real_escape_string($conn, $name);
//     $description = mysqli_real_escape_string($conn, $description);
//     $price = mysqli_real_escape_string($conn, $price);
    

//     // Perform the SQL update query
//     $sql = "UPDATE product SET name = '$name', description = '$description', price = '$price' WHERE id = $productId";
    
//     if ($conn->query($sql)) {
//         // Update successful
//         echo('product is updated successfully');
//     } else {
//         // Update failed
//         echo('failed update');
//     }
// }
// functions.php

function getAllProducts() {
    global $conn;
    
    // Retrieve all products from the database
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    
    // Check if the query was successful and fetch the data
    if ($result && $result->num_rows > 0) {
      $products = array();
      while ($row = $result->fetch_assoc()) {
        $products[] = $row; // Fetch each product and add it to the products array
      }
      return $products;
    } else {
      return array(); // Return an empty array if no products were found
    }
  }
  
  function updateProduct($productId, $newName, $newDescription, $newPrice) {
    global $conn;

    $sql = "UPDATE product SET name='$newName', description='$newDescription', price='$newPrice' WHERE id='$productId'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
function getCategoryById($categoryId) {
  global $conn;

  $sql = "SELECT * FROM categories WHERE id = ?";
  try {
      $stmt = $conn->prepare($sql);
      if (!$stmt) {
          throw new Exception("Statement preparation failed: " . $conn->error);
      }

      $stmt->bind_param("i", $categoryId);
      if (!$stmt->execute()) {
          throw new Exception("Execution of statement failed: " . $stmt->error);
      }

      $result = $stmt->get_result();
      $category = $result->fetch_assoc();
      $stmt->close();

      return $category;
  } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
      return null;
  }
}
function updateCategory($categoryId, $newName) {
  global $conn;

  $sql = "UPDATE categories SET name = ? WHERE id = ?";
  try {
      $stmt = $conn->prepare($sql);
      if (!$stmt) {
          throw new Exception("Statement preparation failed: " . $conn->error);
      }

      $stmt->bind_param("si", $newName, $categoryId);
      if (!$stmt->execute()) {
          throw new Exception("Execution of statement failed: " . $stmt->error);
      }

      $stmt->close();
  } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
  }
}
function getAllCategories() {
  global $conn;

  $sql = "SELECT * FROM categories";
  $result = $conn->query($sql);

  $categories = array();
  if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $categories[] = $row;
      }
  }

  return $categories;
}



?>
