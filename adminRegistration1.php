<?php
require_once 'connection.php';
$dbconnection = new DatabaseConnection();
$dbconnection->connect();
$conn = $dbconnection->getConnection();

function createAdmin($username, $email, $phonenumber,$password) {
    global $conn;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin(username, email, phonenumber,password)
            VALUES ('$username', '$email', '$phonenumber','$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber= $_POST['phoneNumber'];
    $password = $_POST["password"];

    createAdmin($username, $email, $phonenumber,$password);
}
$dbconnection->close();
?>

<html>
    <head>
        <link rel="stylesheet" href="CSS/useregistration.css">
    </head>
<form name="form1" action="adminRegistration1.php" method="post">
    <div class="container">
      <h1>Admin Registration</h1>
      <hr>
      <label for="name"><b>name</b></label>
      <input type="text" placeholder="Enter Username" name="name" id="name"><br><br>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email"><br><br>
      <label for="phoneNumber"><b>Phone Number</b></label>
      <input type="tel" name="phoneNumber" id="phoneNo"><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="psw" ><br><br>
     
      <hr>
     
      <button type="submit" class="registerbtn" onclick="validateForm() ">Register</button>
    </div>
  
  </form>
  <script>
    function validateForm() {
      const nameInput = document.getElementById('name');
      const emailInput = document.getElementById('email');
      const phoneInput = document.getElementById('phoneNo');
      const passwordInput = document.getElementById('psw');

     
      if (nameInput.value.trim() === '') {
        alert('Please enter a username.');
        return false;
        
      }
  
      const email = emailInput.value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return false;
      }
  
      const phoneNo = phoneInput.value.trim();
      const phoneRegex = /^\d{10}$/;
      if (!phoneRegex.test(phoneNo)) {
        alert('Please enter a valid 10-digit phone number.');
        return false;
      }
  
      if (passwordInput.value.length < 6) {
        alert('Password should be at least 6 characters long.');
        return false;
      }
  
      alert('Form submitted successfully!');
      return true;
    }
  </script>
  </html>