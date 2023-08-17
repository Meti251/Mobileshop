<?php
require_once 'functions.php'; 
require_once 'connection.php'; // Include your database functions

$dbconnection = new DatabaseConnection();
$dbconnection->connect();
$conn = $dbconnection->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["id"];
    $newName = $_POST["name"];
    $newDescription = $_POST["description"];
    $newPrice = $_POST["price"];

    // Close the connection
    updateProduct($productId, $newName, $newDescription, $newPrice);
    
    // Call a function to update the product details in the database
    
    // Redirect back to the product listing page
    exit();
    // header("Location: productManagement.php");
    // $conn->close();
}

?>
