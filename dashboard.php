<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Centered Buttons</title>
    <style>
        /* Base styles for the body */
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f8f8;
            display: flex;
            flex-direction: column; /* Stack children vertically */
            align-items: center;     /* Center horizontally */
            height: 100vh;           /* Full height of the viewport */
            margin: 0;
        }

        /* Styles for the action buttons */
        .action-button {
            background-color: #006a4e;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            flex-direction: ;
        }

        .action-button:hover {
            background-color: #005638;
        }

        /* Container for the buttons and table */
        .container {
            display: flex;
            flex-direction: column; /* Stack children vertically */
            align-items: center;    /* Center horizontally */
            margin-top: 40px;       /* Added space between the header and the content */
        }

        table {
            margin-top: 20px;       /* Added space between the buttons and the table */
        }
    </style>
</head>
<body>

<!-- Centered Action Buttons -->
<div class="container">
    <h1 align="center">Staff Administration</h1><br><br>
    <!-- Add Image Button -->
    <a href="add.php" class="action-button">Add Image</a>
    <!-- Delete Image Button -->
    <a href="delete.php" class="action-button">Delete Image</a>
    <a href="index.php" class="action-button">Go to Main</a>

    <!-- Display the registered users -->
    <div>
        <h2>Registered Users</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $sql = "SELECT name, phone FROM register";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<section class="section">
    <div class="container">
        <h2>Add Product</h2>
        <form action="save_product.php" method="post">
            <div class="input-container">
                <input type="text" name="productName" placeholder="Product Name" required>
            </div>
            <div class="input-container">
                <input type="number" name="price" placeholder="Price" step="0.01" required>
            </div>
            <button type="submit">Add Product</button>
        </form>
    </div>
</section>


<?php
// Close the database connection
$con->close();
?>

</body>
</html>
