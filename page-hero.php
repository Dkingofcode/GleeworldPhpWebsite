<style>

.page-hero-container {
    width: 100%;
    background-color: rgb(249, 249, 249);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 0;
}

.page-hero-container .hero img {
    width: 50%;
}

/* Mobile responsiveness */
@media (max-width: 968px) {
    .page-hero-container .hero img {
        width: 80%;
    }
}

</style>

<?php

function renderPageHero($sectionImage) {
?>
    <div class="page-hero-container">
        <div class="hero">
            <img src="<?php echo $sectionImage; ?>" alt="Hero Section Image" class="img-fluid">
        </div>
    </div>
<?php
}
?>
