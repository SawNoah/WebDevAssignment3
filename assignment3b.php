<?php
include 'assignment3a.php';

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

// Delete a student
if (isset($_GET["delete_id"])) {
    $id = $_GET["delete_id"];

    $sql = "DELETE FROM students WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Perform a query
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Process the result
if ($result->num_rows > 0) {
    echo "<h3>Student Lists</h3>
    <table border = 1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Functions</th>
            <th>Functions</th>   
        </tr>";
    while ($row = $result->fetch_assoc())
    {echo "<tr>
        <td>{$row['id']} </td>
        <td>{$row['name']} </td>
        <td>{$row['age']} </td>
        <td>{$row['email']} </td>";
        echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>";
        echo "<td><a href='?delete_id=" . $row["id"] . "'>Delete</a></td>";
        
    echo "</tr>";
}   
echo"</table><br>";
}else {
 echo "No results found.";
}


    //echo "<table border = 1>";
    //echo "<tr>";
    //echo "<th>ID</th>";
    //echo "<th>Name</th>";
    //echo "<th>Age</th>";
    //echo "<th>Email</th>";
    //echo "<th>Function</th>";
    //echo "<th>Function</th>";
    //echo "</tr>";
    
    //{
    //    echo "<tr>";
    //    echo "<td> {$row['id']} </td>";
    //    echo "<td> {$row['name']} </td>";
    //    echo "<td> {$row['age']} </td>";
    //    echo "<td> {$row['email']} </td>";
    //    echo "<td><a href = 'edit.php? id= '{$row["id"]}''>Edit</a></td>";
    //    echo "<td><a href = '?delete_id = '{$row["id"]}''>Delete</a></td>";
    //    echo "</tr>";
    //    echo "</table>";
    //    echo "";
    //    echo "";
    //}
//Close the connection
//$conn->close();
?>
<h3>Create new students</h3>
<form method="Post" action="">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="number" name="age" placeholder="Age" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="submit" value="Create">
</form>

<!--<html>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Function</th>
            <th>Function</th>
        </tr>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo '<a href="edit.php?id=' . $row["id"] . '">Edit</a>'; ?></td>
            <td><?php echo '<a href="?delete_id=' . $row["id"] . '">Delete</a>'; ?></td>
        </tr>
    </table>
</html>