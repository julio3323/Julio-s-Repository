<?php
$host = "your_railway_host"; // e.g., containers-us-west.railway.app
$port = "your_railway_port"; 
$db   = "railway";
$user = "root";
$pass = "your_password";

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>

