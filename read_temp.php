// Read all customer
$sql = "SELECT * FROM table_name";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  while ($row = $result->fetch_assoc())
  {
      echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["email"] . " - Email: " . $row["email"] . " ";
      echo '<a href="edit.php?id=' . $row["id"] . '">Edit</a> | ';
      echo '<a href="?delete_id=' . $row["id"] . '">Delete</a><br>';
   }
}
else
{
  echo "Not found.";
}
