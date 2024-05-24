<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: index.html"); // Redirect to login page if not logged in
    exit();
}

// Database connection
require 'config.php';

// Get user details
$email = $_SESSION['email'];
$sql = "SELECT * FROM korisnici WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
} else {
    $first_name = "Unknown";
    $last_name = "Unknown";
}
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizator - Dobrodošli</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <h1>Dobrodošli, <?php echo $first_name . " " . $last_name; ?>!</h1>
        <p>Hvala što ste se prijavili.</p>
        <p>Želimo vam ugodno korišćenje našeg sajta.</p>
        <a href="logout.php">Odjava</a>
    </header>
</body>
</html>
