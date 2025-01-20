<?php
// Database configuration
$dsn = "mysql:host=localhost;dbname=shovan;charset=utf8mb4";
$username = "root";
$password = "";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close connection (optional, as it closes automatically when script ends)
$pdo = null;
?>
