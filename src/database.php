<?php 

$host = 'localhost';
$dbname = 'todolist';
$username = 'testus';
$password = '12345';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected!";
} catch (PDOException $e) {
    echo "connection failed: " .$e->getMessage();
} 


?>