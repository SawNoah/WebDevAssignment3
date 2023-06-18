// Delete a student
if (isset($_GET["delete_id"]))
{
  $id = $_GET["delete_id"];

  $sql = "DELETE FROM table_name WHERE id=$id";

   if ($conn->query($sql) === TRUE)
   {
     echo "Data deleted successfully";
   }
   else
   {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
