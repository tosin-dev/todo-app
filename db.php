<?php
$servername = "localhost";
$username = "root";
$password = "";
$tasks=[];
try {
    $conn = new PDO("mysql:host=$servername; dbname=mytodo", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT name, status, created_at, updated_at, completed_at from todos";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>