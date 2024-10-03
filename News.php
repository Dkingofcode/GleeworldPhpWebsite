


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    
    <link rel="stylesheet" href="./css/index.css"  />

</head>
<body>

    <!-- Header -->
    <?php include "header.php"; ?>

    <!-- Hero Section -->
    <div class="hero">
        <img src="./public/HeroSection.png" alt="Hero Image" style="width: 100%; height: 100%;" />
    </div>

    <!-- Trending Section -->
    <div class="trending container text-center py-5">
        <h4>Trending</h4>
        <h1>Top Stories</h1>

        <!-- News Cards -->
        <div class="news-cards">
            <?php include "newsCard.php"; 
               renderNewsCard();
            ?>
            
        </div>
    </div>

    <!-- Carousel -->
    <?php include "carousel.php"; ?>

    <!-- Advert -->
    <?php include "advert.php"; 
      renderAdvert();
    ?>

    <!-- Contact Form -->
    <div class="container">
        <?php
           include "contact.php";
           renderContact(
            "Do you have credible health news?", 
            "Share with us", 
            "Please provide as many details as possible to help us understand and verify the information. Our editorial team will review your submission and get back to you promptly.", 
            "12px", 
            "news", 
            "Send news now"
        );
        ?>
    </div>

    <!-- Footer -->
    <?php include "footer.php";
      renderFooter();
    ?>

</body>
</html>
<?php

?>
