<?php

$uploadDir = 'uploads/';

// Check if the delete form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteFile'])) {
    $filePathToDelete = $uploadDir . $_POST['deleteFile'];
    
    // Check if the file exists before attempting to delete
    if (file_exists($filePathToDelete)) {
        unlink($filePathToDelete); // Delete the file
        echo "<br><br>  deleted successfully.";
    } else {
        echo "File $filePathToDelete does not exist.";
    }
}

// Scan the uploads directory and list the image files
$files = scandir($uploadDir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Delete Image</title>
<style>
    /* Styles to center the content */
    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f8f8f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .image-container {
        display: inline-block;
        margin: 10px;
    }

    /* Additional styles for the delete button */
    input[type="submit"] {
        background-color: #006a4e;
        color: #ffffff;
        padding: 5px 10px;
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

<h2>Delete Image</h2>

<!-- Display list of image files for deletion -->
<div>
    <?php foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && !is_dir($uploadDir . $file)) {
            echo '<div class="image-container">';
            echo '<img src="' . $uploadDir . $file . '" alt="' . $file . '" width="150">';
            echo '<form method="post" action=""><input type="hidden" name="deleteFile" value="' . $file . '"><input type="submit" value="Delete"></form>';
            echo '</div>';
        }
    } ?>
</div>
<div style="text-align: center; margin-top: 200px;">
    <a href="dashboard.php" style="background-color: #006a4e; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none; transition: background-color 0.3s ease;">
        Go to Dashboard
    </a>
</div>
</body>
</html>
