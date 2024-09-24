<style>   

    /* Advert Section */
.advert {
    background-color: orange;
    border: 3px solid black;
    border-radius: 20px;
    padding: 70px 20px 0px 20px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-wrap: wrap;
    position: relative;
    gap: 30px;
}

.advert .line {
    position: absolute;
    left: 0;
    width: 100px; /* adjust size as needed */
}

.advert .phone {
    width: 260px;
}

.advert .ellipse {
    position: absolute;
    right: 0;
}

.advert article {
    color: white;
    text-align: left;
}

.advert article h1 {
    font-size: 40px;
    font-weight: 500;
}

.advert article p {
    font-size: 16px;
}

.advert article button {
    border: 3px solid black;
    border-radius: 50px;
    padding: 10px 5px;
    width: 270px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background-color: transparent;
    color: black;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.advert article button:hover {
    background-color: black;
    color: white;
}

/* Responsive Styles */
@media (max-width: 1200px) {
    .advert {
        padding: 30px 60px;
        width: 500px;
    }
}

@media (max-width: 768px) {
    .advert {
        padding: 20px;
        width: 100%;
        flex-direction: column;
        text-align: center;
    }
}

</style>


<?php
// Advert component PHP version

function renderAdvert() {
?>
<div class="advert container-fluid my-5 py-5">
    <!-- Line Image -->
    <img class="line" src="./public/line.png" alt="crossimg" />

    <!-- Text Section -->
    <article>
        <h1>Enjoy 5% off your first<br /> monthly orders</h1>
        <p>
            Take advantage of a 15% discount on your initial monthly orders and discover unparalleled value in our premium products and services.<br />
            This exclusive offer is designed to provide you with a seamless introduction to our commitment to quality, affordability, and exceptional customer care.
        </p>
        <button onclick="notifySuccess()">
            Download Medfinder
            <img src="./public/blackVector.png" alt="Arrow" />
        </button>
    </article>

    <!-- Phone and Ellipse Images -->
    <img class="phone" src="./public/Phonepic.png" alt="Phone image" />
    <img class="ellipse" src="./public/Elipse.png" alt="Three bullet points" />
</div>

<script>
function notifySuccess() {
    alert('Coming soon!');
}
</script>



<?php
}
?>
