<style> 
.contact-section {
    padding: 60px 0;
    text-align: center;
}

.contact-section h5 {
    font-size: 20px;
    color: #555;
}

.contact-section h1 {
    font-size: 36px;
    color: #000;
    margin-top: 10px;
}

.contact-section h3 {
    color: #777;
    margin-top: 20px;
}

/* Button styling */
.contact-section .btn {
    padding: 10px 20px;
    border-radius: 30px;
    margin-top: 30px;
    border: 1px solid #FF9933;
    color: #FF9933;
    transition: background-color 0.3s ease;
}

.contact-section .btn:hover {
    background-color: #FF9933;
    color: white;
}

/* Input and Textarea styles */
.contact-section .form-control {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 10px;
}

.contact-section .form-label {
    font-size: 16px;
    font-weight: 500;
    color: #333;
}


</style>

<?php
// Contact section variables
$question = "Have any questions?";
$message = "We would love to hear from you!";
$text = "Send us a message and we’ll get back to you shortly.";
$formtext = "message";
$btntext = "Send Message";
$font = "18px";

function renderContact($question, $message, $text, $formtext, $btntext, $font) {
?>
<div class="contact-section container py-5">
    <!-- Contact Header -->
    <div class="text-center">
        <h5><?php echo $question; ?></h5>
        <h1><?php echo $message; ?></h1>
        <h3 style="font-size: <?php echo $font; ?>;"><?php echo $text; ?></h3>
    </div>

    <!-- Contact Form -->
    <form class="mt-4" action="./send-email.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Enter your name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Type your first name here">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Enter your email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Type your email address here">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Drop a message</label>
            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Write your <?php echo $formtext; ?> here"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-warning"> Send News</button>
    </form>
</div>


<!-- <script> 
       function sendEmail() {
          const name = document.getElementById('name').value;
          const email = document.getElementById('email').value;
          const message =document.getElementById('message').value;

          // Create the mailto link
          const subject = `Message from ${name}`;
          const body = `Name: \nMessage:\n${message}`;

          const mailtoLink = `mailto:hello@gleeworld.com.ng?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

          // Redirect to the mailto link
          window.location.href = mailtoLink;
           
          // Update the DOM to show the thank you message
          document.getElementById('contactForm').style.display = 'none'; // Hide the form
          document.getElementById('thankyouMessage').innerHTML = `
        <div class="container">
          <h1>Thank you for contacting Us. We will get back to you as soon as possible</h1>
          <p>Go back to the <a href="index.php">homepage</a> </p>
           </div>
          )`;

          return false; // Prevent form submission behaviour
       };

    </script> -->


<!-- 
<script>
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission for now
    alert('Form submitted successfully!');
});
</script> -->


<?php
}
?>
