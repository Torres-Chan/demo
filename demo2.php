<?php

$server = 'localhosct';
$username = 'jinchenc_db';
$password = 'Zh102657';
$database = 'jinchenc_db';


$connection = mysqli_connect($server, $username, $password, $database);

// Check for errors
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

// Connection successful
echo "Connected successfully";


// Execute a query to get sample data
$Employee = "SELECT * FROM employees";
$result = $connection->query($Employee); // Output the sample data

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["MCN"] . " - Name: " . $row["first_name"] . "<br>";
  }
} else {
  echo "0 results";
}

?>
