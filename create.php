<?php
// Create a table
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    $sql = "INSERT INTO students (name, age, email) VALUES ('$name','$age', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New student created successfully<br/>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>
<h3>Create new students</h3>
<form method="Post" action="">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="number" name="age" placeholder="Age" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="submit" value="Create">
</form>