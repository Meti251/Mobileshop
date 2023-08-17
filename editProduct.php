<?php
require_once 'functions.php';
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $productId = $_POST["id"];
//     $name = $_POST["name"];
//     $description = $_POST["description"];
//     $price = $_POST["price"];
   
//     updateProduct($productId, $name, $description, $price);
//     // header("Location: productManagement.php"); 
// }
if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $product = getProductById($productId); 

    if (!$product) {
        echo "Product not found.";
        exit;
    }
} else {
    echo "Product ID is missing.";
    exit;
}
?>

<form method="post" action="updateProduct.php">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
    <label>Name: <input type="text" name="name" value="<?php echo $product['name']; ?>"></label><br>
    <label>Description: <input type="text" name="description" value="<?php echo $product['description']; ?>"></label><br>
    <label>Price: <input type="text" name="price" value="<?php echo $product['price']; ?>"></label><br>
    
    <button type="submit">Update Product</button>
</form>

