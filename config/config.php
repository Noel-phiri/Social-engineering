<?php

define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'user_login');
define('DB_SERVER', '127.0.0.1');


// Create connection
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>