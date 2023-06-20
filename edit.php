<?php
include 'assignment3a.php';
$id = '';
$name = '';
$email = '';
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . " - Email: " . $row["email"] . " ";
            $id = $row["id"];
            $name = $row["name"];
            $age = $row["age"];
            $email = $row["email"];
        }
    } else {
        echo "No Student found!";
    }
}

//Update 
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["edit_id"])) {
    $edit_id = $_POST["edit_id"];
    $edit_name = $_POST["edit_name"];
    $edit_age = $_POST["edit_age"];
    $edit_email = $_POST["edit_email"];
    print($_POST["edit_email"]);

    $sql = "UPDATE students SET name='$edit_name', age= '$edit_age', email='$edit_email' WHERE id=$edit_id";

    if ($conn->query($sql) === TRUE) {
        echo "Student updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h3>Edit Page</h3>
<a href="assignment3b.php">Back</a>
<!-- HTML form to create a student -->
<form method="POST" action="">
    <input type="number" name="edit_id" value="<?php echo$id; ?>"  required><br>
    <input type="text" name="edit_name" value="<?php echo$name; ?>" placeholder="Name" required><br>
    <input type="number" name="edit_age" value="<?php echo$age; ?>" placeholder="Age" required><br>
    <input type="email" name="edit_email" value="<?php echo$email; ?>" placeholder="Email" required><br>
    <input type="submit" value="Update">
</form>