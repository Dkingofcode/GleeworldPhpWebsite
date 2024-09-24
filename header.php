<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/bootstrap.css">
    <link rel="stylesheet" href="header.css"> <!-- Add your custom CSS file -->
    <title>Header</title>
</head>
<body>
    <div class="header">
        <div class="navigation">
            <div class="Navlogo">
                <a href="index.php"><img src="./public/gleeworldlogo.png" alt="logo"></a>
            </div>

            <!-- Hamburger Button -->
            <button class="hamburger" onclick="toggleMenu()">&#9776;</button>

            <nav id="nav-links" class="nav-links">
                <ul>
                    <li><a style="text-decoration: none; color: black;" href="index.php" onclick="handleChange(0)">Home</a></li>
                    <li><a style="text-decoration: none; color: black;" href="Services.php" onclick="handleChange(1)" id="servicesLink">Services</a></li>
                    <li><a style="text-decoration: none; color: black;" href="medfinder-app.php" onclick="handleChange(2)" id="medfinderLink">Medfinder App</a></li>
                    <li><a style="text-decoration: none; color: black;" href="News.php" onclick="handleChange(3)" id="newsLink">News</a></li>
                    <li><a style="text-decoration: none; color: black;" href="AboutUs.php" onclick="handleChange(4)" id="aboutUsLink">About Us</a></li>
                </ul>
            </nav>

            <div class="chatBtn-mobile" onclick="copyPhoneNumber()" style="cursor: pointer;">
                <img src="assets/logowhatsappicon.png" alt="whatsapp icon"> Chat
            </div>
            <div class="chatBtn" onclick="copyPhoneNumber()">
                Chat with a pharmacist <img src="./public/logowhatsappicon.png" alt="whatsapp icon">
            </div>
        </div>
    </div>

    <script src="header.js"></script> <!-- Add your custom JS file -->
</body>
</html>
