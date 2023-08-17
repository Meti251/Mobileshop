<?php
session_start(); // Start the session


    require_once 'connection.php';
    $dbconnection = new DatabaseConnection();
    $dbconnection->connect();
    $conn = $dbconnection->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phoneNo = $_POST["phoneNumber"];
    $password = password_hash($_POST["psw"], PASSWORD_DEFAULT); // Hash the password for security
    $gender = $_POST["Gender"];
    $language = $_POST["language"];
    $policy = $_POST["policy"];

    $sql ="SELECT * FROM user_registration WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows !== 0) {
        die("User already exists.");
    }

    // Prepare and execute an SQL query to insert data into the database
    $sql = "INSERT INTO user_registration(username, email, phonenumber, password, gender, language, policy)
            VALUES ('$username', '$email', '$phoneNo', '$password', '$gender', '$language', '$policy')";
    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";

        // Store user data in the session
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        

        // Redirect to another page after successful registration
        header("Location: home1.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
