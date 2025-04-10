<?php
$host = '127.0.0.1';
$dbname = 'figma2'; 
$username = 'root';
$password = ''; 
$port = '3307'; 

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    // echo "✅ Connected to MySQL successfully!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
