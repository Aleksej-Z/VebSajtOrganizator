<?php
// login.php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists
        echo "Login successful!";
        // Redirect or handle login success
    } else {
        // User does not exist
        echo "Invalid email or password.";
    }
}

$conn->close();
?>

