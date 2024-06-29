<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Business Site</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f8f8;
        }

        header {
            background-color: #006a4e;
            padding: 20px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        nav ul {
            display: flex;
            justify-content: space-around;
            list-style: none;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            padding: 8px 16px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #005638;
            color: #ffffff;
        }

        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
        }

        .hero .left {
            flex: 1;
        }

        .hero .left h1 {
            font-size: 36px;
            color: #006a4e;
            margin-bottom: 20px;
        }

        .hero .left p {
            font-size: 18px;
            color: #333333;
            margin-bottom: 40px;
        }

        .hero .right {
            flex: 1;
        }

        .hero .right img {
            width: 100%;
            max-width: 500px;
            height: auto;
        }

        .section {
            margin-top: 60px;
        }

        .section h2 {
            font-size: 28px;
            color: #006a4e;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 18px;
            color: #333333;
            margin-bottom: 40px;
        }

        footer {
            background-color: #006a4e;
            padding: 20px 0;
            text-align: center;
            color: #ffffff;
        }

        footer p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li a {
            color: #ffffff;
            text-decoration: none;
            padding: 8px 16px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        footer ul li a:hover {
            background-color: #005638;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><h3><a href="index.php">Home</a></h3></li>
                    <li><h3><a href="about.php">About</a></h3></li>
                    <li><h3><a href="services.php">Services</a></h3></li>
                    <li><h3><a href="contactus.php">Contact</a></h3></li>
                    <li><h3><a href="staff.php">Staff</a></h3></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="left">
                    <h1>Welcome to Our Professional Business Site</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus ligula quis lacus
                        scelerisque, vel volutpat libero consectetur.</p>
                </div>
                <div class="right">
               

<?php
$uploadDir = 'uploads/';

// Scan the uploads directory and list the image files
$files = scandir($uploadDir);

// Filter out . and .. directories
$filteredFiles = array_diff($files, array('.', '..'));

// Get a random image file from the directory
if (!empty($filteredFiles)) {
    $randomImage = $uploadDir . $filteredFiles[array_rand($filteredFiles)];
    
    // Display the random image
    echo '<img src="' . $randomImage . '" alt="Random Image" style="max-width: 500px; height: auto;">';
} else {
    echo 'No images found in the directory.';
}
?>



                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2>About Us</h2>
                <p>At Saadi Solar, we are driven by a profound commitment to revolutionize the energy paradigm.
                    Fueled by expertise, innovation, and sustainability,
                    Saadi Solar empowers individuals and businesses alike to adopt clean energy solutions,
                    minimizing environmental impact and paving the way for a brighter,
                    more sustainable future.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2>Our Services</h2>
                <p>

                    At Saadi Solar, we stand at the forefront of the solar revolution, dedicated to providing
                    transformative energy solutions. Our suite of services encompasses everything from crafting bespoke
                    solar systems from the ground up to enhancing existing setups with the latest technology and
                    offering a seamless trade-in and upgrade program. Saadi Solar is your gateway to a sustainable and
                    efficient energy future, where innovation meets environmental responsibility. Explore our services
                    and embark on a solar journey that not only powers your present but also shapes a greener, more
                    radiant tomorrow.</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; Saadi Solar. All rights reserved.</p>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contactus.php">Contact</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>