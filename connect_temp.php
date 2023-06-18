<?php
//Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

//Create a connection
#conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
else
{
  echo 'Connected';
}
echo "<br/>";

// Perform a query
$sql = "SELECT * FROM your_table_name";
$result = $conn->query($sql);

// Process the result
if ($result->num_rows > 0) 
{
  while ($row = $result->fetch_assoc()) 
  {
    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . ' , Email - '.$row['email']. "<br>";
  }
}
else
{
 	echo "No results found.";
}

//Close the connection
//$conn->close();
?>
