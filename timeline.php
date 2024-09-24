<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline Slider</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
</body>
</html>
