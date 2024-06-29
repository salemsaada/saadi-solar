<?php
// Include the database connection file
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO register (name, phone) VALUES (?, ?)");
    
    // Bind parameters
    $stmt->bind_param("ss", $name, $phone);  // "ss" indicates two strings
    
    // Execute the prepared statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>
