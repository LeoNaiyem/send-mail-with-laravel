<?php
// test-db.php
$conn = new mysqli('localhost', 'root', '', 'send_mail_with_laravel');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>