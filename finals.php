<?php
// Database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$matric_no = $_POST['matric_no'];
$name = $_POST['name'];
$english = $_POST['english'];
$physics = $_POST['physics'];
$chemistry = $_POST['chemistry'];
$math = $_POST['math'];

// SQL query to insert data into the table
$sql = "INSERT INTO student_scores (matric_no, name, english, physics, chemistry, math)
        VALUES ('$matric_no', '$name', '$english', '$physics', '$chemistry', '$math')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
