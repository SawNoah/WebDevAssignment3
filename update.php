<?php
//Update 
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["edit_id"])) {
    $id = $_POST["edit_id"];
    $name = $_POST["edit_name"];
    $age = $_POST["edit_age"];
    $email = $_POST["edit_email"];

     $sql = "UPDATE students SET name='$name', age=$age, email='$email' WHERE id=$id";

     if ($conn->query($sql) === TRUE) {
         echo "Student updated successfully";
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
    }
?>