<?php
$host = 'localhost';
$dbname = 'student_portal';
$username = 'Samuel200595786';
$password = 'vb9dRKhq-o';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
