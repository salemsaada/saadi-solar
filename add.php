<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Upload Image</title>
<style>
    /* Centering the content horizontally and vertically */
    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f8f8f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* Form styles */
    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    /* File input and submit button styles */
    input[type="file"] {
        margin-bottom: 20px;
    }

    input[type="submit"]{
        background-color: #006a4e;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #005638;
    }
</style>
</head>
<body>

<h2>Upload Image</h2>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload: <br><br>
    <input type="file" name="imageFile" id="imageFile"><br><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["imageFile"]) && $_FILES["imageFile"]["error"] == 0) {
        $fileName = basename($_FILES["imageFile"]["name"]);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Check file type (you can expand this based on your requirements)
        if ($fileType == "jpg" || $fileType == "png" || $fileType == "jpeg" || $fileType == "gif") {
            $uploadDir = "uploads/"; // Directory where the image will be stored
            $filePath = $uploadDir . $fileName;

            // Move the uploaded file to the desired directory
            if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $filePath)) {
                echo "<br><br> uploaded successfully.";

                // Optionally, you can store the file path in a database
                // For example, using PDO or mysqli to insert the file path into a database table
                // $pdo = new PDO("mysql:host=localhost;dbname=your_database_name", "username", "password");
                // $stmt = $pdo->prepare("INSERT INTO images (image_path) VALUES (:imagePath)");
                // $stmt->bindParam(':imagePath', $filePath);
                // $stmt->execute();
            } else {
                echo "Error uploading the file.";
            }
        } else {
            echo "Invalid file type. Please upload a JPG, JPEG, PNG, or GIF file.";
        }
    } else {
        echo "Error uploading the file.";
    }
}

?>
<div style="text-align: center; margin-top: 200px;">
    <a href="dashboard.php" style="background-color: #006a4e; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none; transition: background-color 0.3s ease;">
        Go to Dashboard
    </a>
</div>
</body>
</html>
