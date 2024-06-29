<html>
    <link rel="stylesheet" href="styles.css"><main>
        <link rel="stylesheet" href="serveciesForm.css">
        <script src="sendToDiscord.js"></script>
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
    <section class="hero">
        <div class="container">
            <div class="left">
                <h1>Our Professional Services</h1>
                <p>The customer is very important, the customer will be followed by the owner or supervisor of the project. Even a small course can be followed by a chocolate bar or a free weekend.</p>
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
            <h2>1. Solar System Installation (From Scratch):</h2>
            <p>Are you ready to harness the power of the sun and make a lasting impact on your energy consumption?
                 Our first service offers a complete solar solution tailored to your needs, starting from the ground up.
                  We specialize in designing and installing solar systems from scratch, ensuring a seamless transition to 
                  clean and sustainable energy. Our team of experts will guide you through every step of the process, from
                   the initial consultation to the final connection. Experience the freedom of generating your own power
                    with a custom-designed 
                solar system that meets your energy goals and environmental aspirations.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2>2. Solar System Upgrades with Cutting-edge Technology:</h2>
            <p>Stay ahead in the renewable energy game with our second service,
                 focused on enhancing the efficiency of your existing solar system.
                  Our experts analyze your current setup and recommend the latest and most efficient 
                  supplies and technologies to optimize your energy production. From advanced solar panels
                   to state-of-the-art inverters, we'll ensure your system is equipped with the latest innovations,
                    maximizing energy output while minimizing your environmental footprint. Upgrade your solar investmen
                    with our expertise, and let your system evolve with the ever-changing landscape of solar technology.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2>3. Trade-in and Upgrade Program:</h2>
            <p>Ready for a new solar chapter? Our third service takes care of the entire process,
                 starting by taking your old solar system off your hands.
                  We handle the sale of your outdated equipment and use the proceeds to offset the cost of your new system.
                   Our team ensures a smooth transition, from the removal of your old system to the installation of a brand-new,
                    state-of-the-art solar solution. Not only does this service provide you with the latest in solar technology,
                     but it also contributes to the circular economy by giving your retired equipment a second life.
                      Experience the convenience of a hassle-free upgrade with our trade-in and upgrade program.

                Choose Saadi Solar for comprehensive solar solutions that cater to your unique needs,
                 whether you're starting from scratch, looking to optimize your current system, or ready to embark on a sustainable upgrade journey. Your energy future begins with us!</p>
        </div>

    </section>
    <section class="section">
    <div class="container">
        <h2>Products List</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $sql = "SELECT productName, price FROM products";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["productName"] . "</td>";
                        echo "<td>" . $row["price"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No products found</td></tr>";
                }
                $con->close();
                ?>
            </tbody>
        </table>
    </div>
</section>


    <section class="section">
        <div class="container">
            <h2>Order Your Service</h2>
            
    <form class="form">
        <h4 class="form-title">Fill Your Service Form</h4>
         <div class="input-container">
           <input type="text" placeholder="Place Name" class ="clientName">
           <span>
           </span>
       </div>
       <div class="input-container">
           <input type="text" placeholder="Describe the Requested service" class="serviceDescription">
         </div>
         <button type="button" class="submit" onclick="sendService()">
    Send Service Request
</button>
 
       
    </form>

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

</html> 