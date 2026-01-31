<?php
/**
 * Database Connection Template
 * 
 * INSTRUCTIONS:
 * 1. Copy this file to db_connect.php
 * 2. Update database credentials below
 * 3. NEVER commit db_connect.php to Git!
 */

// ===== Database Configuration =====
$host = 'localhost';        // Database host (usually 'localhost')
$dbname = 'portfolio_db';   // Your database name
$username = 'root';         // Your MySQL username
$password = '';             // Your MySQL password (CHANGE THIS!)

// ===== PDO Connection =====
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Set error mode to exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // Disable emulated prepared statements
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
} catch(PDOException $e) {
    // In production, log error instead of displaying
    die("Connection failed: " . $e->getMessage());
    
    // For production, use:
    // error_log("Database connection failed: " . $e->getMessage());
    // die("Unable to connect to database. Please try again later.");
}
?>
