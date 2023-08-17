<?php

class Authentication {
    private $conn;

    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }

    public function authenticateUser($email, $password) {
        $sql = "SELECT password FROM admin WHERE email = ?";
        $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($hashedPassword);
       

        if ( $stmt->fetch()&& password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION["email"] = $email;
            $currentpath = $_SERVER['REQUEST_URI'];
            setcookie("password", $password);
            setcookie("time_of_login", time());
            setcookie("url", $currentpath);
            header("Location: home1.php"); 
            exit();
        } else {
            // Authentication failed
            $error_message = "Invalid credentials";
        }
    }
}

// Create an instance of the DatabaseConnection class
$dbConnection = new DatabaseConnection();
$conn = $dbConnection->getConnection();

// Create an instance of the Authentication class
$auth = new Authentication($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $auth->authenticateUser($email, $password);
}
?>
