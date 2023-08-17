<?php
require_once 'connection.php';
require_once 'functions.php';
$dbconnection = new DatabaseConnection();
$dbconnection->connect();
$conn = $dbconnection->getConnection();
function createCategory($name) {
    global $conn;

    $sql = "INSERT INTO categories(name)
            VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "New Category added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
   

    createCategory($name);
    header("Location: categoryManagement.php");
}
$dbconnection->close();
?>
<html>
    <head>
        <link rel="stylesheet" href="CSS/useregistration.css">
    </head>
<form name="form1" action="addCategory.php" method="post">
    <div class="container">
      <h1>category Registration</h1>
      <hr>
      <label for="name"><b>name</b></label>
      <input type="text" placeholder="Enter Product name" name="name" id="name"><br><br>
    
      
      
      <!-- <select name="category" id="category" >
        <option value="">Select category</option>
        <option value="English">Samsung</option>
        <option value="Spanish">Iphone</option>
        
      </select> -->
      <hr>
     
      <button type="submit" class="registerbtn" onclick="validateForm() ">Register</button>
    </div>
  
  </form>
  <script>
    function validateForm() {
      const nameInput = document.getElementById('name');
      
      if (nameInput.value.trim() === '') {
        alert('Please enter a product name.');
        return false;
        
      }
      
      alert('Category added successfully!');
      return true;
    }
  </script>
  </html>