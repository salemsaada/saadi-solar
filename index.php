<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saadi Solar</title>

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

        .strong footer ul li a:hover {
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
                    <h1>Welcome to Saadi Solar - Illuminating Tomorrow, Today! </h1>
                    <p>At Saadi Solar, we're dedicated to transforming the way you harness and consume energy.
                        Whether you're a first-time explorer of solar power or a seasoned enthusiast,
                        you've landed at the hub of innovative and sustainable energy solutions.</p>
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
        <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required><br><br>
            
            <input type="submit" value="Register">
        </form>
    </div>
</section>

        <section class="section">
            <div class="container">
                <h2>Why Choose Saadi Solar?</h2>
                <ul>
                    <p><b class="strong">Expertise:</b> Our team comprises seasoned professionals dedicated to
                        delivering
                        top-notch solar solutions tailored to your needs.</p>
                    <p><b class="strong">Innovation:</b> Stay ahead with the latest advancements in solar technology,
                        ensuring your system is always at the cutting edge.</p>
                    <p>
                        <b class="strong">Sustainability:</b>We're committed to not only providing clean energy
                        solutions but also
                        contributing
                        to the circular economy through responsible disposal and repurposing of outdated equipment.
                    </p>
                </ul>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2>Our Services</h2>
                <p>The customer is very important, the customer will be followed by the owner or supervisor of the
                    project. Even a small course can be followed by a chocolate bar or a free weekend.</p>
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