<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .testimonial {
            text-align: center;
            padding: 20px;
        }
        .testimonial q {
            font-size: 1.2rem;
            font-style: italic;
        }
        .testimonial p {
            margin-top: 10px;
            font-weight: bold;
        }
        .slider-container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="container my-5">


    <div class="slider-container">
        <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active testimonial">
                    <img src="./public/review2.png" alt="Customer 1" class="d-block mx-auto mb-3 rounded-circle">
                    <q>Gleeworld Pharmacy has transformed our operations. Their technology tools are a game-changer for small pharmacies like ours.</q>
                    <p>Kevin</p>
                </div>
                <div class="carousel-item testimonial">
                    <img src="./public/review3.png" alt="Customer 2" class="d-block mx-auto mb-3 rounded-circle">
                    <q>Great Service! Gleeworld ensures that we never run out of stock, and their team is always helpful.</q>
                    <p>Fred</p>
                </div>
                <div class="carousel-item testimonial">
                    <img src="./public/review4.png" alt="Customer 3" class="d-block mx-auto mb-3 rounded-circle">
                    <q>The delivery is fast, and the customer service is outstanding. Our pharmacy has never been more efficient.</q>
                    <p>Sam</p>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
