<?php
require_once 'connection.php'; 
require_once 'functions.php';

$dbconnection = new DatabaseConnection();
$dbconnection->connect();
$conn = $dbconnection->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryId = $_POST["id"];
    $newName = $_POST["name"];

    updateCategory($categoryId, $newName);
    header("Location: categoryManagement.php"); // Redirect to the category listing page
}

if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];
    $category = getCategoryById($categoryId); // Retrieve category details

    if (!$category) {
        echo "Category not found.";
        exit;
    }
} else {
    echo "Category ID is missing.";
    exit;
}
?>

<form method="post" action="updateCategory.php">
    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
    <label>Name: <input type="text" name="name" value="<?php echo $category['name']; ?>"></label><br>
    
    <button type="submit">Update Category</button>
</form>
