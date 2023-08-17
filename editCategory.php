<?php
require_once 'functions.php';
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];
    $category = getCategoryById($categoryId); 

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