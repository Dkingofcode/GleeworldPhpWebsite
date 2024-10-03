<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/services.css" >
    <link rel="stylesheet" href="./css/index.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    
    <?php include 'header.php'; ?>
    
    <!-- Hero Section -->
    <section class="hero">
        <img src="./public/HeroSectionservices.png" alt="Hero Section" class="img-fluid">
    </section>
    
    <!-- Services Section -->
    <div class="container services py-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./public/Nurse.png" class="card-img-top" alt="Telepharmacy Services">
                    <div class="card-body">
                        <h5 class="card-title">01. Telepharmacy Services</h5>
                        <p class="card-text">Receive expert healthcare advice from the comfort of your home. Consult remotely with our licensed pharmacists to get the medications and guidance you need, skipping the wait times at traditional pharmacies.</p>
                        <button class="btn btn-primary" onclick="showToast('Chat Now')">Chat Now</button>
                    </div>
                </div>
            </div>
            
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="./public/Prescriptions.png" class="card-img-top" alt="Order Medications">
                <div class="card-body">
                    <h5 class="card-title">02. Prescription Services</h5>
                    <p class="card-text">Order medications for yourself, your family, or your employees with ease. Our reliable delivery service ensures your medications arrive safely and promptly.</p>
                    <button class="btn btn-primary" onclick="showToast('Submit Order')">Submit Order</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="./public/DrugStore.png" class="card-img-top" alt="Pharmaceutical Distribution">
                <div class="card-body">
                    <h5 class="card-title">03. Pharmaceutical Distribution</h5>
                    <p class="card-text">We are a trusted partner for independent pharmacies across Nigeria. Learn how Gleeworld can improve your business.</p>
                    <button class="btn btn-primary" onclick="showToast('Submit Order')">Submit Order</button>
                </div>
            </div>
        </div>
        
        <!-- Add more services as needed... -->
    </div>
</div>

<!-- FAQ Section -->
<div class="container faq-section py-5">
    <h2 class="text-center">Frequently Asked Questions</h2>
    <div id="faq" class="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    What are Telepharmacy Services?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Telepharmacy services allow remote consultation and prescription dispensing.
                </div>
            </div>
        </div>
        
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    What do Delivery Services Cover?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Delivery services cover the transport of medications and healthcare products.
                </div>
            </div>
        </div>
        
        <!-- Add more FAQ items as needed -->
    </div>
</div>

<script>
    function showToast(message) {
        alert(message + ' - Coming Soon!');
    }
    
</script>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php';
renderFooter();
?>
</body>
</html>