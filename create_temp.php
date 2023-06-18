<?php
include 'connect.php';
// Create a customer
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    $sql = "INSERT INTO customers (name, email) VALUES ('$name', '$age', '$email')";

    if ($conn->query($sql) === TRUE)
    {
      echo "New customer created successfully<br/>";
    }
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<br/>

<!-- HTML form to create a customer -->
<form method="POST" action="">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="number" name="age" placeholder="Age" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="submit" value="Create Student">
</form>
