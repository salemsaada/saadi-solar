<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $result = mysqli_query($con, "SELECT * FROM login");
    

    $isValid = false;

    while ($col = mysqli_fetch_array($result)) {
        if ($username === $col["username"] && $password == $col["password"]) {
            $isValid = true;
            break; 
        }
    }


    if ($isValid) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password');</script>";
        
        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
}
?>
