<?php
$conn = include_once __DIR__ ."/db.php";

$sql = "UPDATE todos SET status = 'Completed', completed_at = NOW() WHERE id={$_GET['id']}";
$stmt = $conn->prepare($sql);

$stmt->execute();
header("location: index.php");
exit();
