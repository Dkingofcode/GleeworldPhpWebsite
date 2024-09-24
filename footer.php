<?php


function renderFooter() {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="./index.css"  />
            <link rel="stylesheet" href="./style.css"  />
            <style>
footer {
    background-color: #f8f9fa;
    padding: 40px 0;
    color: #000;
}

footer .input-group {
    width: 100%;
}

footer .right-footer img {
    transition: transform 0.3s ease;
}

footer .right-footer img:hover {
    transform: scale(1.1);
}

footer p {
    font-size: 14px;
    color: #333;
}

footer a {
    text-decoration: none;
    color: #007bff;
}

footer a:hover {
    text-decoration: underline;
}

footer .text-warning {
    color: #ff9933 !important;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    footer .container {
        flex-direction: column;
        text-align: center;
    }
}


</style>

        
        </head>
        <body>
            
            
        <footer >
          
          <div class='NewsLetter'>
              <h1>Subscribe to our newsletter</h1>

              <p>Subscribe to our newsletter and join a community of health-concious individuals on a journey towards better well-being.</p>

               <div class='subscribe'>
              <input type='text' name='email' placeholder='Email'  />
              <button>Submit</button>
               </div>
          </div>
            
           


           
            <div class='FooterSection'>

            <div class='left-footer'>
             <h4>Need help?</h4>
             <p>Call or send a message on Whatsapp: <span>+2348187456856</span></p>
             <p>Send a mail: <span>hello@gleeworld.com.ng</span></p>
             <p>Address: <span>Centigrade Mall, 7, Fola Osibo, Lekki Phase 1, Lagos Nigeria.</span></p>
             </div> 
          

            <div style="display: flex; flex-direction: column;" class='right-footer'>
              <h4>Social Media</h4>
              <div class='images'>
                <a><img src="./public/Linkedin.png" width="" /></a> 
                <a><img src="./public/Twitter.png" width="" /></a> 
                <a><img src="./public/Instagram.png" width="" /></a> 
                <a><img src="./public/facebook.png" width="" /></a> 
              </div>
              <p>Download the Medfinder App</p>
              <div class='googleplaybtn'>
                 <img src="./public/Googleplay.png"  /> 
              </div>
              <p>2024 Gleeworld Pharmacy</p>
              <p class='footer-links'><a>Terms of Service</a> | <a>Privacy Policy</a></p>
            </div>

            </div>
          
           </footer>
<script>
function notifyComingSoon() {
    alert('Coming soon!');
}
</script>

</body>
</html>

<?php
}
?>


