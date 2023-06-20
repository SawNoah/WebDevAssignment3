<?php
// Read all customer
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " ." - Email: " . $row["email"] . " ";
        echo '<a href="edit.php?id=' . $row["id"] . '">Edit</a>';
        echo '<a href="?delete_id=' . $row["id"] . '">Delete</a><br>';
    }
} else {
    echo "No students found.";
}
