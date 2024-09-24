<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./index.css"  />
    <title>Document</title>
</head>
<body>
    <?php include 'header.php';   ?>

    <?php include 'page-hero.php'; 
     renderPageHero("./public/HeroSectionMed.png");
    ?>

    <?php include 'advert.php';  
     renderAdvert();
    ?>

    <?php  include 'timeline.php' ?>

    <?php include 'footer.php';   
      renderFooter();
    ?>


</body>
</html>


