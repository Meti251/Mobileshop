// Include your DatabaseConnection class and establish database connection
<?php
require_once 'connection.php';
$dbconnection = new DatabaseConnection();
$dbconnection->connect();
$conn = $dbconnection->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $productId = $_GET['id'];
    
    // Perform a SQL DELETE query to delete the product by its ID
    $sql = "DELETE FROM product WHERE id = $productId";
    if ($conn->query($sql) === TRUE) {
        echo "Product deleted successfully";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
    
    // Redirect back to the product listing page after deletion
    header("Location: productManagement.php");
    exit;
}
?>