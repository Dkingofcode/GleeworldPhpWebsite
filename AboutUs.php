<?php
function renderAboutPage() {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet"  href="./css/index.css"  />
    <!--link rel="stylesheet" href="./style.css"  /> -->
    <!-- <link rel="stylesheet" href="./about.css"  /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the timeline */
        .slider-container {
            position: relative;
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }
/* 
        .slider-container img {
            width: 100%;
            display: none; /* Hide all images initially */
            /* transition: opacity 0.5s ease;
        }  */

        .slider-container .inactive{
            border: 9px solid black;
            display: none;
            visibility: hidden;
        }

        .slider-container .active{
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            
        }

        .active-slide {
            display: block; /* Show only the active image */
        }

        .btnactive {
            padding: 5px 10px;
            color: white;
        }

        .btninactive {
            background-color: gray;
            padding: 5px 10px;
            color: white;
        }
    </style>

</head>
<body>
    
    
    
    
    <div class="about-page">
        
        <!-- Header -->
        <?php include 'header.php'; ?>
        
        <!-- Hero Section -->
        <div class="hero-section">
            <img src="./public/HeroSectionabout.png" alt="Hero Section" class="img-fluid w-100" />
        </div>
        
        <!-- Introduction Section -->
        <div class="intro text-center py-5">
            <h5>Gleeworld</h5>
            <h1>We are a New Kind of Pharmacy</h1>
            <img src="./public/FrameAbout.png" alt="Intro Image" class="img-fluid" style="width: 80%; margin: 0 auto;" />
            <p>
                <img src="./public/FrameTextAB.png" alt="Intro Text" class="img-fluid" style="width: 80%; height: 80%;" />
            </p>
        </div>
        
        <!-- Mission Section -->
        <div class="mission d-flex flex-wrap justify-content-center align-items-center py-5">
            <div class="mission-text text-center px-4" style="max-width: 700px;">
                <h1>Mission Statement</h1>
                <p>We are reinventing pharmacy from a <q>shop</q> to a <q>primary care center</q> by improving access to affordable medicines and primary care for all in Nigeria through Artificial Intelligence (AI) technology and a patient-centered care approach.</p>
            </div>
            <div class="mission-img">
                <img src="./public/aboutMissionPic.png" alt="Mission" class="img-fluid" style="width: 350px; height: 300px;" />
            </div>
        </div>
        
        <!-- Stakeholders Section -->
        <div class="stakeholders d-flex justify-content-center flex-wrap py-5">
            <div class="card text-center p-3" style="width: 383px; border-radius: 20px;">
                <img src="./public/FrameBidemi.png" class="img-fluid" alt="Bidemi Ojo" />
                <h3>BIDEMI OJO</h3>
                <p>CO-FOUNDER/CEO Software Engineer for 13 years, Winner 2022 Mandela Washington Fellowship - a US Government Program...</p>
                <a href="https://ng.linkedin.com/in/bidemiojo">
                    <img src="./public/FrameLinkedIn.png" alt="LinkedIn" />
                </a>
        </div>
        <div class="card text-center p-3" style="width: 383px; border-radius: 20px;">
            <img src="./public/FrameBimpe.png" class="img-fluid" alt="Bimpe Ojo" />
            <h3>BIMPE OJO</h3>
            <p>CO-FOUNDER/Chief Pharmacist, Pharmacist for 12 years, Former District Manager at HealthPlus, managed 20 pharmacies...</p>
            <a href="https://ng.linkedin.com/in/bimpe-ojo-95825596">
                <img src="./public/FrameLinkedIn.png" alt="LinkedIn" />
            </a>
        </div>
    </div>

    <!-- Timeline Section -->
    <div class="timeline py-5 text-center">
        <h1>The Journey So Far</h1>
        <div class="group d-flex flex-column align-items-center">
            <!-- Slider Container for Images -->
            <div class="slider-container" style="position: relative">
                <img src="./public/Frame2019.png"  id="2019" alt="History 2019" class="image-fluid active"  />
                <img src="./public/Frame2020.png" id="2020" alt="History 2020" class="image-fluid inactive" />
                <img src="./public/Frame2021.png" id="2021" alt="History 2021" class="image-fluid inactive" />
                <img src="./public/Frame2022.png" id="2022" alt="History 2022" class="image-fluid inactive" />
                <img src="./public/Frame2023.png" id="2023" alt="History 2023" class="image-fluid inactive" />
                <img src="./public/Frame2024.png" id="2024" alt="History 2024" class="image-fluid inactive" />
            </div>

            <!-- Time Links (Buttons) -->
            <div style="display: flex; justify-content: space-between;" class="time-links d-flex justify-content-center mt-4">
                <div  style="padding: 0px 10px; cursor: pointer;" class="time-year" onclick="changeYear(2019)"><p>2019</p><span id="btn2019" class=""></span></div>
                <div style="padding: 0px 10px; cursor: pointer;" class="time-year" onclick="changeYear(2020)"><p>2020</p><span id="btn2020" class=""></span></div>
                <div style="padding: 0px 10px; cursor: pointer;" class="time-year" onclick="changeYear(2021)"><p>2021</p><span id="btn2021" class=""></span></div>
                <div style="padding: 0px 10px; cursor: pointer;" class="time-year" onclick="changeYear(2022)"><p>2022</p><span id="btn2022" class=""></span></div>
                <div style="padding: 0px 10px; cursor: pointer;" class="time-year" onclick="changeYear(2023)"><p>2023</p><span id="btn2023" class=""></span></div>
                <div style="padding: 0px 10px; cursor: pointer;" class="time-year" onclick="changeYear(2024)"><p>2024</p><span id="btn2024" class=""></span></div>
            </div>
        </div>
    </div>




    <!-- Operation Section -->
    <div  class="operation py-5 text-center">
        <h1>How We Do Healthcare Differently</h1>
        <div style="display: flex;  justify-content: center; flex-wrap: wrap; gap: 50px;">
            <div style="border: 1px solid grey; border-radius: 20px;">
                <img src="./public/hugeiconsdeliverytruck.png" class="img-fluid" alt="Faster" />
                <h3>Faster</h3>
                <p>Skip the pharmacy lines! Order your meds with a tap and get them delivered to your door.</p>
            </div>
            <div style="border: 1px solid grey; border-radius: 20px;" class="block text-left">
                <img src="./public/fluentheartcircleregular.png" class="img-fluid" alt="Kinder" />
                <h3>Kinder</h3>
                <p>Talk to our friendly pharmacists via text, call, email, or chat. We use eco-friendly packaging.</p>
            </div>
            <div style="border: 1px solid grey; border-radius: 20px;" class="block text-left">
                <img src="./public/systemlightbulb.png" class="img-fluid" alt="Smarter" />
                <h3>Smarter</h3>
                <p>Never miss a refill again. Gleeworld keeps track so you don’t have to.</p>
            </div>
            <div style="border: 1px solid grey; border-radius: 20px;" class="block text-left">
                <img src="./public/phgearlight.png" class="img-fluid" alt="Efficient" />
                <h3>Efficient</h3>
                <p>We work seamlessly with insurance partners to ensure speedy medication orders.</p>
            </div>
        </div>
    </div>
    
    <!-- Advertisement Section -->
    <?php include 'advert.php'; 
      renderAdvert();
      ?>

<!-- Footer -->
<?php include 'footer.php'; 
      renderFooter();
      ?>
</div>



<script>
        function changeYear(year) {
            // Hide all images first
            const images = document.querySelectorAll('.slider-container .image-fluid');
            images.forEach(img => img.classList.remove('active'));
            images.forEach(img => img.classList.add('inactive'));


        //     const formerImage = document.querySelector('.slider-container .active');
        //    formerImage.classList.add("inactive");

           // Show the selected image
            document.getElementById(year).classList.remove('inactive');
            document.getElementById(year).classList.add('active');

         // button colo
            document.getElementById('btn' + year).classList.remove('inactive');
            document.getElementById('btn' + year).classList.add('active');

            
             


            // Update button active/inactive state
            const buttons = document.querySelectorAll('.time-links .time-year span');
            buttons.forEach(btn => btn.classList.remove('btnactive', 'btninactive'));
            document.getElementById(year).classList.add('btnactive');
            buttons.forEach(btn => {
                if (!btn.classList.contains('btnactive')) {
                    btn.classList.add('btninactive');
                }
            });
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
}
?>


</body>
</html>

<?php
//function renderAboutPage() {
    // The entire HTML content you've written inside this function.
    //} 

// Add this line to call the function.
renderAboutPage();
?>
