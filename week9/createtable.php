<?php
$servername = "localhost";
$username = "rterania";
$password = "rterania";
$dbname = "Commissions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE request (
firstname VARCHAR(30) PRIMARY KEY,
email VARCHAR(30) NOT NULL,
payment VARCHAR(50) NOT NULL,
comment VARCHAR(50) NOT NULL,
style VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table request created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>