<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['productName'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (productName, price) VALUES ('$productName', '$price')";

    if ($con->query($sql) === TRUE) {
        echo "Product added successfully!";
        
        // Redirect to dashboard.php after successful product addition
        header('Location: dashboard.php');
        exit; // Ensure no further code is executed after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
