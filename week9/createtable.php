<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Commissions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE request (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
payment VARCHAR(50),
comment VARCHAR(50),
style VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table request created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>