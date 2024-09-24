<style>   
    /* News Section */
.news-section {
    margin: 50px 0;
}

.news-card {
    transition: transform 0.2s ease-in-out;
}

.news-card:hover {
    transform: scale(1.05);
}

.news-card .card-title {
    font-size: 20px;
    font-weight: bold;
}

.news-card .card-text {
    font-size: 16px;
}

.news-card .card-link {
    font-weight: bold;
    color: #ff9933;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.news-card .card-link img {
    width: 10px;
    height: 10px;
}


</style>


<?php
function renderNewsCard() {
?>
<div class="news-section container py-5">
    <div class="row">
        
        <!-- First News Card -->
        <div class="col-md-4">
            <div class="news-card card h-100">
                <img src="./public/Mobile.png" class="card-img-top" alt="Medfinder app launch" />
                <div class="card-body">
                    <h3 class="card-title">Gleeworld Pharmacy launches Medfinder app to connect users with local pharmacies.</h3>
                    <p class="card-text">We provide remote pharmaceutical care and consultations, ensuring access to expert advice and medication management from the comfort of your home.</p>
                    <a href="#" class="card-link">Learn more <img src="./public/Vector.png" alt="arrow icon"></a>
                </div>
            </div>
        </div>

        <!-- Second News Card -->
        <div class="col-md-4">
            <div class="news-card card h-100">
                <img src="./public/cooperate.png" class="card-img-top" alt="Innovative technology tools" />
                <div class="card-body">
                    <h3 class="card-title">Innovative technology tools by Gleeworld are transforming small independent pharmacies.</h3>
                    <p class="card-text">We provide remote pharmaceutical care and consultations, ensuring access to expert advice and medication management from the comfort of your home.</p>
                    <a href="#" class="card-link">Learn more <img src="./public/Vector.png" alt="arrow icon"></a>
                </div>
            </div>
        </div>

        <!-- Third News Card -->
        <div class="col-md-4">
            <div class="news-card card h-100">
                <img src="./public/Serverpic.png" class="card-img-top" alt="Open Patient" />
                <div class="card-body">
                    <h3 class="card-title">Introducing Open Patient: Medfinder App Revolutionizes Patient Access to care</h3>
                    <p class="card-text">We provide remote pharmaceutical care and consultations, ensuring access to expert advice and medication management from the comfort of your home.</p>
                    <a href="#" class="card-link">Learn more <img src="./public/Vector.png" alt="arrow icon"></a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
}
?>
